<?php
$html = file_get_contents("https://la12hd.com/vivo/canal.php?stream=dsports");

preg_match_all(
    '/(https.*m3u8)/',

    $html,
    $posts, // will contain the article data
    PREG_SET_ORDER // formats data into an array of posts
);

foreach ($posts as $post) {
    $link = $post[0];

header("Location: $link");
}
?>