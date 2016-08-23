<?php
	
	include 'lib/facebook.php';
	include 'lib/twitter.php';
	include 'lib/telegram.php';
	
	//send post to telegram channel
	$telegram = new Telegram('@channel_id','token');
	$telegram->SendMessage('Hello iranapp.org');
	$telegram->SendPhoto('caption picture','files/iranapp.org');
	$telegram->SendVideo('files/iranapp.mp4');
	$telegram->SendAudio('files/iranapp.mp3');
	$telegram->SendSticker('files/iranapp.org');
	$telegram->SendLocation('32.23123123.','40.23123123');
	
	
	//send post to twitter
	$twitter = new Twitter('Consumer Key','Consumer Secret','Access Token','Access Token Secret');
	$twitter->SendMessage('hello iranapp.org');
	$twitter->SendPhoto('caption picture','files/iranapp.org');
	
	
	//send post to facebook
	$facebook = new Facebook('access token','pageid');
	$facebook->SendMessage('link','message : hello iranapp.org','description about post','caption post');
	$facebook->SendPhoto('files/iranapp.org','link','message : hello iranapp.org','description about post','caption post');
	
?>