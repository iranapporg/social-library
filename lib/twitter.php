<?php if (! defined('BASEPATH') ) exit("Not Allow to access this Page");

 class Twitter
  {
	
	var $ck,$cs,$at,$ats;
	
	function __construct($Consumerkey,$Consumersecret,$Accesstoken,$Accesstokensecret) {
		
		$this->ck	= $Consumerkey;
		$this->cs	= $Consumersecret;
		$this->at	= $Accesstoken;
		$this->ats	= $Accesstokensecret;
		
		require_once 'codebird.php';
	}
		
	function SendMessage($message) {
			
		\Codebird\Codebird::setConsumerKey($this->ck,$this->cs);
		$cb = \Codebird\Codebird::getInstance();
		$cb->setToken($this->at,$this->ats);
			
 		$params = array(
			'status' => $message
		);
	 
		$reply = $cb->statuses_updateWithMedia($params);
			
	}
	
	function SendTweetPhoto($message,$picture) {
			
		\Codebird\Codebird::setConsumerKey($this->ck,$this->cs);
		$cb = \Codebird\Codebird::getInstance();
		$cb->setToken($this->at,$this->ats);
			
		$params = array(
			'status' => $message,
			'media[]' => $picture
		);
			
		$reply = $cb->statuses_updateWithMedia($params);
			
	}
	
}
