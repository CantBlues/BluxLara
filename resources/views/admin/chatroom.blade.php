<div class="card card-danger direct-chat direct-chat-danger">
	<div class="card-header">
		<h3 class="card-title">Direct Chat</h3>

	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="direct-chat-messages" style="height:700px">
		</div>
	</div>
	<!-- /.card-body -->
	<div class="card-footer">
		<div class="input-group">
			<div id="upload" style="margin-right:20px;background-color:#586cb1;">upload file</div>
			<input type="text" id="message" name="message" placeholder="Type Message ..." class="form-control">
			<span class="input-group-append">
				<button type="button" id="send" class="btn btn-primary">Send</button>
			</span>
		</div>
	</div>
	<!-- /.card-footer-->
</div>
<style>
	.direct-chat-messages {
		overflow-x: hidden;
	}

	.direct-chat-text {
		margin-left: 0
	}

	.right .direct-chat-text {
		margin-right: 0
	}

	.direct-chat-msg {
		clear: both;
	}

	.right .direct-chat-text {
		background-color: #007bff;
		border-color: #007bff;
		color: #fff;
	}

	.direct-chat-text a {
		color: black
	}

	.right a {
		color: white
	}
</style>

<script>
	var uid = "laravel" + Math.random()
	var message = {type:'',msg:'',uid:uid}
	function pickType(msg,local){
		var content
		switch(msg['type']){
			case "msg" :
				content = msg["msg"]
				break
			case "file":
				content = `<a href="" >${msg['msg']}</a>`
				break
			case "image":
				content = `<a href="//${msg['msg']}" target="_blank" >${msg['msg']}</a>`
				break
			case "login":
				content = `${msg['uid']} ${msg['msg']}`
				break
			default: 
				content = msg
		}
		return content
	}
    function write(local,msg,time){
		time = Date().toString()

		var content = pickType(msg,local)
		
    	var _html = `<div class="direct-chat-msg ${local ? 'right' :""}" ${local ? 'style="float:right"' : 'style="float:left" ' } >
			<div class="direct-chat-infos clearfix">
			<span class="direct-chat-timestamp float-left">${time}</span>
			</div>
			<div class="direct-chat-text" ${local ? 'style="text-align: right"' :''}>
			${content}
			</div>
		</div>`
    	$(".direct-chat-messages").append(_html)
  	}
	var uploader = WebUploader.create({
		auto: true,
		server: `{{url("/admin/uploadfile")}}`,
		pick: '#upload',
		formData: {
            _token:'{{csrf_token()}}'
        },
	});

	uploader.on("uploadSuccess",function(file,response){
		if(file["type"].includes("image")){
			message.type = "image"
		}else{
			message.type = "file"
		}
		message.msg = response['_raw']
		write(true,message)
		ws.send(JSON.stringify(message))
	})

  
        
	$("#send").click(function(){
		var _input = $("#message").val()
		message.type = "msg"
		message.msg = _input 
		write(true,message)
		ws.send(JSON.stringify(message))
		$("#message").val("")
	})

	var ws = new WebSocket("ws://192.168.0.174:9999/ws")

	ws.onclose = function(){
		message.msg = "Connection Closed."
		message.type = "msg"
		write(false,message)
	}
	ws.onopen = function(){
		message.type = 'login'
		message.msg = "laravel login"
		ws.send(JSON.stringify(message))
	}
	ws.onmessage = function(event){
		var data = JSON.parse(event.data)
		write(false,data);
	}



</script>