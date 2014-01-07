<?php
date_default_timezone_set("Europe/Stockholm");

function sortedArticles() {
  $json = file_get_contents('articles.json');
  $articles = json_decode($json, true);
  uasort($articles, "cmpArticles");
  return $articles;
}

function cmpArticles($a, $b) {
  return strtotime($b['date']) - strtotime($a['date']);
}

function articleContents($id) {
  return file_get_contents("articles/$id.html");
}


function permalink($id) {
  return 'posts/' . $id;
}

function niceDate($date) {
  return date("F d Y", strtotime($date));
}