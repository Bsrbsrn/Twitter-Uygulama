<?php
	header('Content-type: application/json; charset=utf8');
    header(&quot;access-control-allow-origin: *&quot;);

	require 'twitterOauth/TwitterOAuth.php';
	
	//consumer ve access degerleri
	//bunlar oluşturulan projeden
	$consumer_key = 'ius2WpOM8ldqt8lOWxGvBFtM9';
	$consumer_secret = '8Qt0ewpmUTKd45QVBTJvQ7Ims1OF1rOCfhmcaYRLSbzVUc9NgB';
	$access_token = '616976490-FDcSFACitj66VV2Ex89Qtp2tDsJtC4ROQOyewbub';
	$access_token_secret = 't1XdEGTIjNPyjQzgS06htir9B0Bgs0ODWUIRJqtPiDAe4';
	
	//sinifi baslat
	$twitter = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);
	
	//tw - kullanici adi
	//username i değiştirmelisin
	//$username='bsrbaasrn';
	$username = isset($_GET['username']) ? htmlspecialchars($_GET['username']) : NULL;
	
	//tw sayisi
	//$count = 10;
	$count = isset($_GET['count']) ? (int) $_GET['count'] : 5;
	
	$tweets = $twitter-&gt;get('https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name='.$username.'&amp;count='.$count);
 
    print json_encode($tweets);
	
	//$tweets = $twitter->get('https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name='.$username.'&count='.$count.'');
	//print_r($tweets);
?>