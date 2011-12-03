<?php

function js_files($baseurl, $file_list) {
    $js_string = '';
    foreach ($file_list as $jsfile) {
        $js_string .= '<script src="' . $baseurl . 'assets/js/' . $jsfile . '" type="text/javascript"></script>';
    }
    
    return $js_string;
}