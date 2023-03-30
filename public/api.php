<?php

$content = file_get_contents('http://universities.hipolabs.com/search?name=latvia');

$result = json_decode($content);

usort($result, fn ($a, $b) => strcmp($a->name, $b->name));

foreach ($result as $re) {
    echo $re->name . '<br/>';
}

