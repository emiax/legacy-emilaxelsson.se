<?php

include_once('utils.php');
$articles = sortedArticles();

$id = isset($_GET['post']) ? $_GET['post'] : 0;

if (isset($articles[$id])) {
  $article = $articles[$id];
  $d = niceDate($article['date']);
  echo '<article><h3 class="blogpost-date">' . $d . '</h3><h2><a href="http://emilaxelsson.se/' . permalink($id) . '">' . $article['title'] . '</a></h2>' . articleContents($id) . '</article>';
}
?>



<div id="disqus_thread"></div>
  <script type="text/javascript">
  var disqus_identifier = '<?php echo $id; ?>';
  var disqus_title = '<?php echo $article['title']; ?>';
  var disqus_url = '<?php echo "http://emilaxelsson.se/posts/$id"; ?>';
  /* * * DON'T EDIT BELOW THIS LINE * * */
  (function() {
  var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
  dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
  })();
</script>
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>  