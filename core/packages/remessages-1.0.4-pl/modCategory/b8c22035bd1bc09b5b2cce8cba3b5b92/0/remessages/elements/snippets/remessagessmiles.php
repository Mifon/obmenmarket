<?php
$parts = explode('$#', $input);
foreach ($parts as $k => $part) {
    $text = explode('#$', $part);
    if (count($text) == 2) {
        $smile = $text[0];
        $words = $text[1];
        $image = '<img src="/assets/components/remessages/js/web/vendor/kemoji/img/opacity.png" class="ke ke-' . $smile . '" emoji="' . $smile . '">';
        $parts[$k] = $image . $words;
    }
}

return implode('', $parts);