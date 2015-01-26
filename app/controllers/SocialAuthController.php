<?php

class SocialAuthController extends \BaseController {

	/**
	 * Facebook
	 */
	public function facebook()
	{
			// get data from input
	$code = Input::get( 'code' );
	
	// get fb service
	$fb = OAuth::consumer( 'Facebook' );
	
	// check if code is valid
	
	// if code is provided get user data and sign in
	if ( !empty( $code ) ) {
		
		// This was a callback request from facebook, get the token
		$token = $fb->requestAccessToken( $code );
		
		// Send a request with it
		$result = json_decode( $fb->request( '/me' ), true );
		
		$message = 'Your unique facebook user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
		echo $message. "<br/>";
		
		//Var_dump
		//display whole array().
		dd($result);
	
	}
	// if not ask for permission first
	else {
		// get fb authorization
		$url = $fb->getAuthorizationUri();
		
		// return to facebook login url
		 return Redirect::to( (string)$url );
	}
	}

	/**
	 * Titter
	 */
	public function twitter()
	{
		 // get data from input
    $token = Input::get( 'oauth_token' );
    $verify = Input::get( 'oauth_verifier' );

    // get google service
    $tw = OAuth::consumer( 'Twitter' );

    // check if code is valid

    // if code is provided get user data and sign in
    if ( !empty( $token ) && !empty( $verify ) ) {

        // This was a callback request from google, get the token
        $token = $tw->requestAccessToken( $token, $verify );

        // Send a request with it
        $result = json_decode( $tw->request( 'account/verify_credentials.json' ), true );

        $message = 'Your unique Twitter user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
        echo $message. "<br/>";

        //Var_dump
        //display whole array().
        dd($result);

    }
    // if not ask for permission first
    else {
        // get request token
        $reqToken = $tw->requestRequestToken();

        // get Authorization Uri sending the request token
        $url = $tw->getAuthorizationUri(array('oauth_token' => $reqToken->getRequestToken()));

        // return to twitter login url
        return Redirect::to( (string)$url );
    }
	}

	/**
	 * Google
	 *  
	 */
	public function google()
	{
		// get data from input
	$code = Input::get( 'code' );
	
	// get google service
	$googleService = OAuth::consumer( 'Google' );
	
	// check if code is valid
	
	// if code is provided get user data and sign in
	if ( !empty( $code ) ) {
	
		// This was a callback request from google, get the token
		$token = $googleService->requestAccessToken( $code );
		
		// Send a request with it
		$result = json_decode( $googleService->request( 'https://www.googleapis.com/oauth2/v1/userinfo' ), true );
		
		$message = 'Your unique Google user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
		echo $message. "<br/>";
		
		//Var_dump
		//display whole array().
		dd($result);
	        
	}
	// if not ask for permission first
	else {
		// get googleService authorization
		$url = $googleService->getAuthorizationUri();
		
		return Redirect::to( (string)$url );
	}
	}
}
