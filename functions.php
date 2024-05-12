<?php

function allowOnlyPOST()
{

    if ($_SERVER['REQUEST_METHOD'] != "POST") {
        header('Location: page2.php?method=getnotallowed');
        die();
    }
}


function postfieldExists($field)
{
    if (isset($_POST[$field]) && !empty($_POST[$field])) {
        return true;
    }
    return false;
}


function validateUrl($key, $url)
{
    if (str_contains($key, "url")) {
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            return true;
        }
    } else {
        return "Not an Url";
    }
}
