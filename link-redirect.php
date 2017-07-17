<?php

require_once __DIR__ . '/core.php';

$link_id = filter_input(INPUT_GET, 'pid', FILTER_VALIDATE_INT);
$link = getAffiliateLink($link_id);

if (empty($link)) {
    header('HTTP:/1.0 404 Not Found');
    $requested_url = filter_input(INPUT_SERVER, 'REQUEST_URI');
    echo renderHtmlNotFound($requested_url);
    exit;
}

header("Location: {$link['url']}");
