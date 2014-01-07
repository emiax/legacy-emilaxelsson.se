<?php

include_once('utils.php');
$articles = sortedArticles();

$id = isset($_GET['post']) ? $_GET['post'] : 0;

if (isset($articles[$id])) {
  $article = $articles[$id];
  echo '<article><h3 class="blogpost-date">' . $d . '</h3><h2><a href="' . permalink($id) . '">' . $article['title'] . '</a></h2>' . articleContents($id) . '</article>';
}

?>