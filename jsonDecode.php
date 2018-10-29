<?php

// jSON URL which should be requested
$json_url = 'https://api.coursera.org/api/courses.v1';

// jSON String for request
//$json_string = ‘[your json string here]’;

// Initializing curl
$ch = curl_init( $json_url );

// Configuring curl options
$options = array(
CURLOPT_RETURNTRANSFER => true,
CURLOPT_HTTPHEADER => array('Content-type: application/json'),
CURLOPT_POSTFIELDS => $json_string
);

// Setting curl options
curl_setopt_array( $ch, $options );

// Getting results
$result = curl_exec($ch); // Getting jSON result string

?>