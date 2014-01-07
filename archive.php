<div id="archive">
   <p>
   This blog contains random thoughs and some notes from the development of <a href="http://continuous.se/en/">Continuous</a> — a modern WebGL based math visualization tool to help students learn algebra and calculus. <a id="archiveListShow" href="#">Show archive</a>

</p>
   <div class="togglable hidden" id="archiveList">
      <h2>Archive</h2>
      <table>
      <?php
   include_once('utils.php');
   $articles = sortedArticles();

foreach($articles as $id => $article) {
  $permalink = permalink($id);
  $title = $article['title'];
  $d = niceDate($article["date"]);
   echo '<tr>';
   echo '<td><a href="' . $permalink .'">' . $title . '</a></td><td>' . $d. '</td>';
   echo '</tr>';
}
   ?>
     </table>
     <p class="hideButton" id="archiveListHide">
        <a href="#">Hide archive</a>
     </p>
   </div>

  
</div>


