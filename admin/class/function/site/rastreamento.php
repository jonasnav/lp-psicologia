<?php

function setCookiePixel()
{
    try {

        setcookie('express_pixel', true, strtotime('+3 month'), '/');

    } catch (Exception $e) {

    }
}