<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Node extends Model {
	use HasDateTimeFormatter;

	public function saveNodes($nodes) {
		foreach ($nodes as $node) {
			$name = $node["ps"];
			$addr = $node["add"];
			$port = $node["port"];
			$uid = $node["id"];
			$net = $node["net"];
			$type = $node["type"];
			$host = $node["host"];
			$tls = $node["tls"];
			$protocol = $node["protocol"];
			$aid = $node["aid"];
			$path = $node["path"];
			$ping = $node["ping"];
			$delay = $node["delay"];
			$speed = $node["speed"];
			if ($addr == "127.0.0.1" or $port <= 0 or $ping < 10 or $ping > 1000) continue;
			$this->updateOrInsert(["addr" => $addr, "port" => $port], [
				"name" => $name, "uid" => $uid, "net" => $net,
				"type" => $type, "host" => $host, "tls" => $tls, "protocol" => $protocol,
				"aid" => $aid, "path" => $path, "delay" => $delay, "speed" => $speed, "ping" => $ping
			]);
		}
	}
}
