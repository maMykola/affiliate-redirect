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

/**
 * Return html for redirect page
 *
 * @param  string  $url
 * @return string
 * @author Mykola Martynov
 **/
function renderHtmlRedirect($url)
{
    return <<< HTML_TEXT
<!doctype html>
<html lang="en">
<head>
    <title></title>
    <meta http-equiv="refresh" content="0;url=$url" />
    <script>document.location = "$url";</script>
</head>
<body>
    <p>Please follow this <a href="$url">link</a>!</p>
</body>
</html>
HTML_TEXT;
}
