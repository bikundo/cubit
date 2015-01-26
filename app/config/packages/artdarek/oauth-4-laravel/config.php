<?php 

return array( 
	
	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => 'Session', 

	/**
	 * Consumers
	 */
	'consumers' => array(

		/**
		 * Facebook
		 */
        'Facebook' => array(
            'client_id'     => '',
            'client_secret' => '',
            'scope'         => array(),
        ),	

        /**
		 * twitter
		 */
        'Twitter' => array(
            'client_id'     => 'BaqFJZn69JcwTwHIrS4eVA',
            'client_secret' => 'knUyVtiRCDTN57r4ywcHxF3zwBDR85DpxRqBVpHkk',
        ),		

	)

);