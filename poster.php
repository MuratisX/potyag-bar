<?php
$url = 'https://kaznikolas.joinposter.com/api/v2/auth/access_token';
$reservation = [
	'spot_id'           => '1',
	'phone'             => '+380684112224',
	'table_id'          => '7',
	'guests_count'      => '1',
	'duration'          => '2000',
	'date_reservation'  => '2019-01-14 21:30:00'
];

$data = sendRequest($url, 'post');
var_dump($data);

?>

code = 3e8462c489f1589f7f6a2d1550257850
