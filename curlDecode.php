<?php

sendCurlRequest();

function sendCurlRequest() {

		$curl = curl_init();	// Initialize curl

		curl_setopt_array( $curl, array(
			CURLOPT_RETURNTRANSFER => true,					              // Return transfer as a string rather than outputting out directly
			CURLOPT_HTTPGET        => true,										    // Use HTTP GET method
			CURLOPT_URL            => 'https://api.coursera.org/api/courses.v1',	// Set Url

		));

		// Send curl request and populate the response into a variable
		$jsonResponseString = curl_exec( $curl );
		$httpResponseCode = curl_getinfo( $curl, CURLINFO_HTTP_CODE );		

		
		
		// Get response status
		curl_close( $curl );													// Close curl session

		
		
		// Parse JSON response
		$alertServiceResponseArray = json_decode($jsonResponseString, true );

		// Exceptions String could not be parsed( Not a JSON format )/recursion limit reached/empty JSON response
		echo print_r($alertServiceResponseArray,true);
}

?>
