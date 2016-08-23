<?php if (! defined('BASEPATH') ) exit("Not Allow to access this Page");

 class Facebook {
	
	var $page_access_token = '';
	var $post_url = '';
	
	function __construct($token,$pageid) {
		
		$this->page_access_token	=	$token;
		$this->post_url				=	"https://graph.facebook.com/$pageid/feed";
	}
	
	function SendMessage($link,$message,$description,$caption) {
		
		$data['picture']		= '';
		$data['link']			= $link;
		$data['message']		= $message;
		$data['caption']		= $caption;
		$data['description']	= $description;
		$data['access_token']	= $this->page_access_token;
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $this->post_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$return = curl_exec($ch);
		curl_close($ch);
		return $return;
		
	}
	
	function SendPhoto($picture_path,$link,$message,$description,$caption) {
		
		$data['picture']		= $picture_path;
		$data['link']			= $link;
		$data['message']		= $message;
		$data['caption']		= $caption;
		$data['description']	= $description;
		$data['access_token']	= $this->page_access_token;
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $this->post_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$return = curl_exec($ch);
		curl_close($ch);
		return $return;
		
	}
		
}