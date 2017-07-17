<?php

session_start();

require_once __DIR__ . '/core.php';

$link_id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$campaign = empty($_SESSION['campaign']) ? '' : $_SESSION['campaign'];

$link = getAffiliateLink($link_id);
if (empty($link)) {
    header('HTTP:/1.0 404 Not Found');
    $requested_url = filter_input(INPUT_SERVER, 'REQUEST_URI');
    echo renderHtmlNotFound($requested_url);
    exit;
}

# redirect to target page if referer is bad
$referer = filter_input(INPUT_SERVER, 'HTTP_REFERER');
if (!isRefererAllowed($campaign, $referer)) {
    header("Location: {$link['target']}");
    exit;
}

session_destroy();

echo renderHtmlRedirect($link['url']);
