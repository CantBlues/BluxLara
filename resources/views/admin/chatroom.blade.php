
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
      <form action="#" method="post">
        <div class="input-group">
          <input type="text" id="message" name="message" placeholder="Type Message ..." class="form-control">
          <span class="input-group-append">
            <button type="button" id="send" class="btn btn-primary">Send</button>
          </span>
        </div>
      </form>
    </div>
    <!-- /.card-footer-->
  </div>
<style>
  .direct-chat-messages{overflow-x: hidden;}
  .direct-chat-text {margin-left: 0}
  .right .direct-chat-text {margin-right:0}
  .direct-chat-msg {clear:both;}
  .right .direct-chat-text {
    background-color: #007bff;
    border-color: #007bff;
    color: #fff;
}
</style>

<script>
var uid = "laravel"+Math.random()
  function write(local,msg,time){
    var _html = `<div class="direct-chat-msg ${local ? 'right' :""}" ${local ? 'style="float:right"' : 'style="float:left" ' } >
        <div class="direct-chat-infos clearfix">
          <span class="direct-chat-timestamp float-left">${time}</span>
        </div>
        <div class="direct-chat-text" ${local ? 'style="text-align: right"' :''}>
          ${msg}
        </div>
      </div>`
    $(".direct-chat-messages").append(_html)
  }

        
  $("#send").click(function(){
    
    var timestamp = "04:05:22"
    var _input = $("#message").val()
    write(true,_input,Date().toString())
    ws.send(`{"type":"msg","msg":"${_input}","uid":"${uid}"}`)
    $("#message").val("")
  })

  var ws = new WebSocket("ws://192.168.0.174:9999/ws")
  
  ws.onclose = function(){write(false,"Connection Closed.",Date().toString())}
  ws.onopen = function(){
    write(false,"Connection Open.",Date().toString());
    ws.send(`{"type":"login","msg":"laravel login","uid":"${uid}"}`)
  }
  ws.onmessage = function(event){write(false,event.data,Date().toString());console.log(event)}

  

</script>