<?php if (! defined('BASEPATH') ) exit("Not Allow to access this Page");

 class Telegram
  {
	
		var $channel_id = '@';
		var $token		= '';
		var $bot		= null;
		
		function __construct($id,$token) {
			require_once "telegram-bot-api.php";
			$this->token		=	$token;
			$this->channel_id	=	$id;
			$this->bot			=	new telegram_bot($token);
		}
		
		function SendMessage($message) {
			
			$rs = $this->bot->send_message($this->channel_id , $message , null, null);
			
			return $rs;
		}
		
		function SendPhoto($caption,$filepath) {
			
			$rs = $this->bot->send_photo($this->channel_id,new CURLFile(realpath($filepath)),$caption);
			return $rs;
			
		}
		
		function SendVideo($filepath) {
			
			$rs = $this->bot->send_video($this->channel_id,new CURLFile(realpath($filepath)));
			return $rs;
			
		}
		
		function SendAudio($filepath) {
			
			$rs = $this->bot->send_audio($this->channel_id,new CURLFile(realpath($filepath)));
			return $rs;
			
		}
		
		function SendSticker($filepath) {
			
			$rs = $this->bot->send_sticker($this->channel_id,new CURLFile(realpath($filepath)));
			return $rs;
			
		}
		
		function SendLocation($lat,$lon) {
			
			$rs = $this->bot->send_location($this->channel_id,$lat,$lon);
			return $rs;
			
		}
	
}
