<?php
/*!
* HybridAuth
* http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
* (c) 2009-2012, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
*/

// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------
$config =array(
		"base_url" => "http://45.55.135.209/hybridauth/hybridauth/index.php", //REVISAR ESTO DESPUES DE CADA CAMBIO.
		"providers" => array("Google" => array("enabled" => true,
												 "keys" => array ("id" => "66666666666",
																  "secret" => "66666666666" ),
												),
							  "Facebook" => array("enabled" => true,
												   "keys" => array ("id" => "1391964151122625",
																	"secret" => "7384b48bc5416a4ab1297574fb400a42" ),
													//"scope" => "email, user_about_me, user_birthday, user_hometown"  //optional.
												),
							  "Twitter" => array("enabled" => true,
												  "keys" => array ("key" => "TOL4TBf6BwkSV1tNfAVkhDUMv",
																   "secret" => "ha8oa2L3E3BI3TGh0QwV01Lm0qvQx5RtGQiVJz7bLsTZcIpCwA")
												),
							),
		// if you want to enable logging, set 'debug_mode' to true  then provide a writable file by the web server on "debug_file"
		"debug_mode" => false,
		"debug_file" => "",
			);
