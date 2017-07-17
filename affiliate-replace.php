<?php

require_once __DIR__ . '/core.php';

$campaign = filter_input(INPUT_GET, 'cmp');
$link_id = filter_input(INPUT_GET, 'pid', FILTER_VALIDATE_INT);

$server = filter_input(INPUT_SERVER, 'HTTP_HOST');

if (!isCampaignAllowed($campaign)) {
    header("HTTP/1.0 404 Not Found");
    echo renderHtmlNotFound();
    exit;
}

$url = "http://{$domain}{$replace_url}?id=$link_id";
echo $url;exit;
header("Location: $url");
