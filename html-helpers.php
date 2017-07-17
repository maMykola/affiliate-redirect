<?php

/**
 * Return html for not found page
 *
 * @param  string  $url
 * @return string
 * @author Mykola Martynov
 **/
function renderHtmlNotFound($url = '')
{
    return <<< HTML_TEXT
<!doctype html>
<html lang="en">
<head><title>404 Not Found</title></head>
<body>
    <h1>Not Found</h1>
    <p>The requested URL $url was not found on this server.</p>
</body>
</html>
HTML_TEXT;
}
