<?php

function _custom_friendly_url($str = '') {

    $friendly_url = htmlentities($str, ENT_COMPAT, "UTF-8", false); 
    $friendly_url = preg_replace('/&([a-z]{1,2})(?:acute|lig|grave|ring|tilde|uml|cedil|caron|circ);/i','\1', $friendly_url);
    $friendly_url = html_entity_decode($friendly_url,ENT_COMPAT, "UTF-8"); 
    $friendly_url = preg_replace('/[^a-z0-9-]+/i', '-', $friendly_url);
    $friendly_url = preg_replace('/-+/', '-', $friendly_url);
    $friendly_url = trim($friendly_url, '-');
    $friendly_url = strtolower($friendly_url);
    
    return $friendly_url;

}
