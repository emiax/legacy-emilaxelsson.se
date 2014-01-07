<?php

include_once('utils.php');
$articles = sortedArticles();

$perPage = 4;
$start = isset($_GET['start']) ? $_GET['start'] : 0;
$i = 0;
foreach($articles as $id => $article) {
  if ($i < $start) {
    $i++;
    continue;
  }
  if ($i >= $start + $perPage) {
    echo '<section id="more"><p><a href="index.php?start=' . $i .'">Fetch more...</a></p></section>';
    break;
  }
  $d = niceDate($article['date']);
  echo '<article><h3 class="blogpost-date">' . $d . '</h3><h2><a href="' . permalink($id) . '">' . $article['title'] . '</a></h2>' . articleContents($id) . '</article>';
  $i++;
}
?>