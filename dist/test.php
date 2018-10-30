<?php
/*
Template Name: Test
*/
?>
<?php
//username=sergey&password=JJxeDS0j&api_key=978156623dc3f74b716b76e28dae097e

//{"session_id":"1539147971.598198","start_time":"2018-10-10 08:06:11","direction":"2","first_call":"0","num_a":"80044000924","num_b":"380487091885","num_c":"0445851555","transfers":"","customer":"3148171","manager":"1922","answer_seconds":"45","total_seconds":"47","external_number":"372","widget":null,"amount":"0","call_record_exists":"1","audio_record_link":"https:\/\/audio.streamtele.com\/20181010\/1539147971.598198_467939f60f836e9407c033c2d97f56c3.mp3"},{"session_id":"1539148299.599121","start_time":"2018-10-10
$post = [
    'username' => 'sergey',
    'password' => 'JJxeDS0j',
    'api_key'   => '978156623dc3f74b716b76e28dae097e',
    'action'   => 'cdrlist',
    'filter[nullcall]' => 1,
    'filter[number]' => '0443002111'
//    'number' => '80044000924'
];

$ch = curl_init('https://crm.streamtele.com/api/cdr/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

// execute!
$response = curl_exec($ch);

// close the connection, release resources used
curl_close($ch);

// do anything you want with your response
//var_dump($response);
print_r($response);
//print_r(json_decode($response));

?>
