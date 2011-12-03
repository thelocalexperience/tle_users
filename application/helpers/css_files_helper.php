<?php

function css_files($baseurl, $file_list) {
    $css_string = '';
    foreach ($file_list as $cssfile) {
        $css_string .= '<link href="' . $baseurl . 'assets/css/' . $cssfile . '" rel="stylesheet" media="screen" />';
    }
    
    return $css_string;
}