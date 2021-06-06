<?php

/**
 * Вывод в преформарированном виде
 * @param array $arr
 */
function debug($arr) {
    echo '<pre>'.print_r($arr, true).'</pre>';
}
