<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700|Raleway:300,400,700|Inconsolata:400,700' rel='stylesheet' type='text/css'>
    <title>Emil Axelsson</title>
    <link rel="stylesheet" type="text/css" href="style/reset.css"/>
    <link rel="stylesheet" type="text/css" href="style/style.css"/>
<link href="http://alexgorbatchev.com/pub/sh/current/styles/shThemeRDark.css" rel="stylesheet" type="text/css" />

  </head>
  <body>
    <?php include("templates/about.html"); ?>
   <?php include("archive.php"); ?>
    <section id="page">
      <h1><a href="">emil axelsson</a></h1>
   
   <?php if (isset($_GET['post'])) include("one.php"); else include("more.php"); ?>
    </section>
    <footer>
      Find me on <a href="http://facebook.se/nils.emil.axelsson">Facebook</a>, <a href="http://linkedin.com/in/emiax">LinkedIn</a>, <a href="http://twitter.com/emilaxelsson">Twitter</a> and <a href="http://github.com/emiax">GitHub</a>.
    </footer>

  </body>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="http://alexgorbatchev.com/pub/sh/current/scripts/shCore.js" type="text/javascript"></script>
  <script src="http://alexgorbatchev.com/pub/sh/current/scripts/shAutoloader.js" type="text/javascript"></script>
  <script src="http://alexgorbatchev.com/pub/sh/current/scripts/shBrushJScript.js" type="text/javascript"></script>

  <script src="script/shConfig.js"></script>
  <script>window.disqus_shortname = 'emilaxelsson';</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42497976-1', 'emilaxelsson.se');
  ga('send', 'pageview');



</script>
  <script src="script/blog.js" type="text/javascript"></script>
</html>

