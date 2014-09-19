<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Daniel Lamb</title>

  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js" type="text/javascript"></script> <!-- Used to reduce loading times for scrolling menus-->
  <script type="text/javascript" src="example.js"></script>

  <link rel="icon" href="icon.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />

</head>
<body>

<div class="container">


<!-- ========== HEADER ========== -->
<?php 
  include=("header.php");
?>

<!-- ========== CONTENT ========== -->

  <h2 style="margin-bottom: 40px;">About Me</h2>
  <div class="row">
    <div class="col-xs-7 col-md-6">
      <p>Hello! I am Dan, a University of Bristol graduate. I received a MEng in Computer Science with First Class Honours.</p>
      <p>I am also CEO of <a href="https://twitter.com/PandAppsUK">PandApps UK</a>, one of the least profitable companies in the world.</p>
      <p>Take a look at my wonderful website. You can find info on some of my favourite University projects and other personal work in my <a href="portfolio">portfolio</a>, or feel free to get in touch using the provided contact details.</p>
    </div>

    <div class="col-xs-5 col-md-6">
      <img src="images/me.jpg" alt="My Face" class="img-circle" style="width: 100%; max-width: 200px; display: block; margin-left: auto; margin-right: auto;"/>
    </div>
  </div>


<!-- ========== FOOTER ========== -->
<?php
  include("footer.php");
?>



</div>

</body>

</html>
