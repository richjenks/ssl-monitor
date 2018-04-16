<?php

error_reporting(0);

function respond($code = 200, $message = '') {
	http_response_code($code);
	die($message);
}

$domain = $_SERVER['QUERY_STRING'] ?? false;
if (!$domain) respond(400, 'Provide domain as querystring, e.g. "?example.com"');

require 'vendor/autoload.php';
use Spatie\SslCertificate\SslCertificate;

try {
	$certificate = SslCertificate::createForHostName($domain);
} catch(Exception $e) {
	respond(500, 'SSL certificate invalid');
}

if (!$certificate->isValid()) {
	respond(500, 'SSL certificate invalid');
}

respond(200, 'All is well');