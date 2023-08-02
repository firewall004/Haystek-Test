<?php

$index = $_GET['index'] ?? 0;
$content = file_get_contents('./assets/data.json');

if ($content === false) {
	http_response_code(404);
	echo json_encode(['status' => 500, 'msg' => 'Failed to read data file']);
	exit;
}

$json = json_decode($content, true);

if (array_key_exists($index, $json)) {
	$responseData = $json[$index];
	$responseData = array_merge($responseData, ['status' => 200]);
	header('Content-Type: application/json');
	echo json_encode($responseData);
} else {
	http_response_code(204);
	echo json_encode(['status' => 204, 'msg' => 'Invalid index']);
}
