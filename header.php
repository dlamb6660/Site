<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="http://twitter.github.com/bootstrap/assets/js/bootstrap-dropdown.js"></script>

<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/header.css" rel="stylesheet" type="text/css" />

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" 
      		data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index">Menu</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <li><a href="index">About Me</a></li>

        <li class="dropdown">
          <a href="portfolio" class="dropdown-toggle">Portfolio <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="portfolio#compvis">Computer Vision</a></li>
            <li class="divider"></li>
            <li><a href="portfolio#android">Android App Development</a></li>
            <li><a href="portfolio#game">Game Development</a></li>
            <li class="divider"></li>
            <li><a href="portfolio#modelling">3D Modelling</a></li>
            <li><a href="portfolio#animation">3D Animation</a></li>
            <li class="divider"></li>
            <li><a href="portfolio#ray">Ray Tracer</a></li>
            <li class="divider"></li>
            <li><a href="portfolio#cloud">Cloud Services</a></li>
            <li class="divider"></li>
            <li><a href="portfolio#trading">Automated Trading Agent</a></li>
          </ul>
        </li>

        <li><a href="resume">Resum&eacute;</a></li>

      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a class="no-link">Get in Contact:</a></li>
    		<li class="icon-link"><a href="http://uk.linkedin.com/pub/daniel-lamb/47/a37/b5a" style="text-decoration:none;"><span><img src="images/linkedin.png" onmouseover="this.src='images/linkedin2.png'" onmouseout="this.src='images/linkedin.png'" width="30" height="30" alt="View Daniel Lamb's LinkedIn profile" style="vertical-align:middle" border="0"></span></a></li>
    		<li class="icon-link"><a target="_blank" href="mailto:dlamb6660@gmail.com"><span><img src="images/gmail.png" onmouseover="this.src='images/gmail2.png'" onmouseout="this.src='images/gmail.png'" width="30" height="30" alt="Email Daniel Lamb" style="vertical-align:middle" border="0"></span></a></li>
    		<li class="gap"></li>
      </ul>

    </div><!-- /.navbar -->
  </div><!-- /.container -->
</nav>