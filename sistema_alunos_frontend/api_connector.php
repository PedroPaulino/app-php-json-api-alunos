<?php

$url = "http://localhost:8080/";

$opts = array('http' =>
    array(
        'method' => 'GET',
        'max_redirects' => '0',
        'ignore_errors' => '1'
)

);

$context = stream_context_create($opts);
$stream = fopen($url, 'r', false, $context);


$result = (array) json_decode(file_get_contents('http://localhost:8080/',false,$context), true);

//Header information as well as metadata about the stream
//var_dump((stream_get_meta_data($stream)));

// actual data at $url
//var_dump(stream_get_contents($stream));


fclose($stream);

?>
