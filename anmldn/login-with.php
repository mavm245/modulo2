<?php
        session_start();
        include('config.php');
        include('hybridauth/Hybrid/Auth.php');
        
		if(isset($_GET['provider'])){		//If provider exists.
			$provider = $_GET['provider'];
			try{
				$hybridauth = new Hybrid_Auth( $config );		//Object $hybridauth will provide OAuth Authentication.
				
				$authProvider = $hybridauth->authenticate($provider);
				$user_profile = $authProvider->getUserProfile();
				
				if($user_profile){
					header("Location: http://45.55.135.209/");
				}
			}
			catch( Exception $e ) { 
				 switch( $e->getCode() ) {
                        case 0 : echo "Unspecified error."; break;
                        case 1 : echo "Hybridauth configuration error."; break;
                        case 2 : echo "Provider not properly configured."; break;
                        case 3 : echo "Unknown or disabled provider."; break;
                        case 4 : echo "Missing provider application credentials."; break;
                        case 5 : echo "Authentication failed. The user has canceled the authentication or the provider refused the connection."; break;
                        case 6 : echo "User profile request failed. Most likely the user is not connected to the provider and he should to authenticate again.";
                                 $twitter->logout();
                                 break;
                        case 7 : echo "User not connected to the provider.";
                                 $twitter->logout();
                                 break;
                        case 8 : echo "Provider does not support this feature."; break;
                }
				echo "<br> <a href='login.html'>Regresar</a>";
			}
        }
?>