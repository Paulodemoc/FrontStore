<?php
defined('BASEPATH') OR exit('No direct script access allowed');

define("app_id", "1795623014075486");
define("app_secret", "a96ced6d1db82bf2add3eb2b36db996d");

class Home extends CI_Controller {
	public function index()
	{
		$data = array();
		$this->layout->set('title', 'Home');

		//todo: get products
		$products = array();
		$data['products'] = $products;

		$this->layout->load('default', 'contents' , 'home', $data);
	}

	public function login()
	{
		$fb = new Facebook\Facebook([
			'app_id' => app_id,
			'app_secret' => app_secret,
			'default_graph_version' => 'v2.2',
			]);
		  
		  $helper = $fb->getRedirectLoginHelper();
		  
		  $permissions = ['email']; // Optional permissions
		  $loginUrl = $helper->getLoginUrl(site_url('home/loginCallback'), $permissions);
		  redirect($loginUrl, 'refresh');
	}

	public function logout(){
		$this->session->unset_userdata('fb_access_token');
		$this->session->unset_userdata('loggedUser');
		redirect('home/index','refresh');
	}

	public function loginCallback(){
		$fb = new Facebook\Facebook([
			'app_id' => app_id,
			'app_secret' => app_secret,
			'default_graph_version' => 'v2.2',
			]);
		  
		  $helper = $fb->getRedirectLoginHelper();
		  
		  try {
				$accessToken = $helper->getAccessToken();
		  } catch(Facebook\Exceptions\FacebookResponseException $e) {
				// When Graph returns an error
			} catch(Facebook\Exceptions\FacebookSDKException $e) {
				// When validation fails or other local issues
		  }
		  
		  if (! isset($accessToken)) {
				if ($helper->getError()) {
					header('HTTP/1.0 401 Unauthorized');
					echo "Error: " . $helper->getError() . "\n";
					echo "Error Code: " . $helper->getErrorCode() . "\n";
					echo "Error Reason: " . $helper->getErrorReason() . "\n";
					echo "Error Description: " . $helper->getErrorDescription() . "\n";
				} else {
					header('HTTP/1.0 400 Bad Request');
					echo 'Bad request';
				}
				exit;
		  }

		  // The OAuth 2.0 client handler helps us manage access tokens
		  $oAuth2Client = $fb->getOAuth2Client();
		  
		  // Get the access token metadata from /debug_token
		  $tokenMetadata = $oAuth2Client->debugToken($accessToken);
		  
		  // Validation (these will throw FacebookSDKException's when they fail)
		  $tokenMetadata->validateAppId(app_id);
		  // If you know the user ID this access token belongs to, you can validate it here
		  //$tokenMetadata->validateUserId('123');
		  $tokenMetadata->validateExpiration();
		  
		  if (! $accessToken->isLongLived()) {
				// Exchanges a short-lived access token for a long-lived one
				try {
					$accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
				} catch (Facebook\Exceptions\FacebookSDKException $e) {
					exit;
				}
		  }
			
			$this->session->set_userdata('fb_access_token',(string) $accessToken);

			try {
				$response = $fb->get('/me?fields=id,name', $accessToken);
			} catch(Facebook\Exceptions\FacebookResponseException $e) {
				
			} catch(Facebook\Exceptions\FacebookSDKException $e) {
				
			}
			
			$user = $response->getGraphUser();

			$this->session->set_userdata('loggedUser', $user->getName());
	  
		  redirect('home/index','refresh');
	}
}
