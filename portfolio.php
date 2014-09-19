<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Portfolio</title>

	<link href="css/portfolio.css" rel="stylesheet" type="text/css" />

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


	<h1>Portfolio</h1>
	<div class="row">
		<div class="col-sm-9 col-md-4">
			<p>This section contains a selection of notable projects from both my University work and personal work.</p>
		</div>
		<div class="row">
			<div class="col-sm-9 col-md-9">
				<h4 style="margin-left: 15px;">Portfolio Index:</h4>
				<div class="col-sm-12 col-md-4">
					<ul>
						<li><a href="#compvis">Computer Vision</a></li>
						<li><a href="#android">Android App Development</a></li>
						<li><a href="#game">Game Development</a></li>
					</ul>
				</div>
				<div class="col-sm-12 col-md-4">
					<ul>
						<li><a href="#modelling">3D Modelling</a></li>
						<li><a href="#animation">3D Animation</a></li>
						<li><a href="#ray">Ray Tracer</a></li>
					</ul>
				</div>
				<div class="col-sm-12 col-md-4">
					<ul>
						<li><a href="#cloud">Cloud Services</a></li>
						<li><a href="#trading">Automated Trading Agent</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<a name="compvis"></a>
	<div class="portfolio-item">
		<div class="clear"></div>
		<h1>Computer Vision</h1>

		<div class="row">
			<div class="col-sm-12 col-md-6">
				<p>My University dissertation was in the field of 
					<a href="http://en.wikipedia.org/wiki/Computer_vision">Computer Vision</a>. My work was a continuation of my project mentor Dima Damen's work on <a href="http://ieeexplore.ieee.org/xpl/login.jsp?tp=&amp;arnumber=6042880&amp;url=http%3A%2F%2Fieeexplore.ieee.org%2Fxpls%2Fabs_all.jsp%3Farnumber%3D6042880">Automatic Carried Object Detection</a>. The purpose of such a system is for high-profile security environments, where there is a chance of weapons being concealed in carried objects (such as the <a href="http://en.wikipedia.org/wiki/Boston_Marathon_bombings">2013 Boston Marathon Bombings</a>.</p>
					<p>My work focussed on improving the runtime of the system (ideally to real-time) and improving the accuracy of detection by using an <a href="http://www.asus.com/Multimedia/Xtion_PRO_LIVE/">RGB-D camera</a> to provide depth information rather than colour. The reasoning behind this is that it will provide the means to provide more accurate <a href="http://en.wikipedia.org/wiki/Background_subtraction">background subtraction</a> as well as giving a way of separating the silhouettes of multiple people walking in groups.</p>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="row" style="margin-bottom: 40px;">
					<div class="col-sm-12 col-md-12">
						<img style="margin: 5px; width: 100%; max-width: 600px;" src="images/vision1.jpg" alt="Project Pipeline"/>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<img style="margin: 5px; width: 100%; max-width: 600px;" src="images/vision2.jpg" alt="Project Pipeline"/>
					</div>
				</div>
			</div>
		</div>
	</div>

	<a name="android"></a>
	<div class="portfolio-item">
		<div class="clear"></div>
		<h1>Android App Development</h1>
		<div class="row">
			<div class="col-sm-12 col-md-5">
				<p>Over the summer of 2011 I developed a simple Android game <a href="https://play.google.com/store/apps/details?id=com.MyGamePackage&amp;hl=en_GB">Paulo The Performance Enhanced Panda</a> using <strong>Java</strong> and the <a href="http://developer.android.com/sdk/index.html">Android Developer Tools</a> (<strong>ADT</strong>) plugin for <strong>Eclipse</strong>. </p>

				<p>The app is the first (and so far only) release from my company <a href="https://twitter.com/PandAppsUK">PandApps UK</a>. This project was a personal exploration into mobile development - an area I am very interested in.</p>
				
				<p>The game is a tongue-in-cheek evolution on the traditional mobile game <strong>Snake</strong>; rather than eating insects to grow in length, you play as Paulo trying to fulfil his dream of performing at the Olympic games. To do this, he must collect as many performance enhancing drugs as possible to increase his speed. Download it <a href="https://play.google.com/store/apps/details?id=com.MyGamePackage&amp;hl=en_GB">here</a>.</p>	
			</div>
			<div class="col-xs-12 col-md-7">

				<div class="row">

					<div class="col-xs-5 col-md-4">
						<img style="margin: 5px; width: 100%; max-width: 200px;" src="images/paulo1.jpg" alt="Paulo The Performance Enhanced Panda"/>
					</div>
					<div class="col-xs-5 col-md-4">
						<img style="margin: 5px; width: 100%; max-width: 200px;" src="images/paulo2.jpg" alt="Paulo The Performance Enhanced Panda"/>
					</div>
					<div class="col-xs-5 col-md-4">
						<img style="margin: 5px; width: 100%; max-width: 200px;" src="images/paulo3.jpg" alt="Paulo The Performance Enhanced Panda"/>
					</div>

				</div>

			</div>
		</div>
	</div>

	<a name="game"></a>
	<div class="portfolio-item">
		<div class="clear"></div>
		<h1>Game Development</h1>

		<div class="row">
			<div class="col-sm-12 col-md-6">
				<p class="abstract"><em>Set in a grungy, post-apocalyptic world, <strong>Duality</strong> is a first-person multiplayer shooter played in many teams of two, or 'pairs'. The game is focussed around pair cooperation, with the objective being to siphon points from a <strong>node</strong> for as long as possible using the <strong>beam-link</strong> - a feat that is made impossible without constantly cooperating with your partner. Partners must work together by using the beam-link to open doors, operate lifts, siphon node points and kill enemy players.</em></p>

				<p>Duality was written as a University project by a team of 6 Computer Scientists, with the help of 2 music composers. The code for the game was written in <strong>C#</strong> using Visual Studios and a <a href="https://ankhsvn.open.collab.net/">subversion plugin</a> to help maintain the collaborated code. We utilised the <strong>Microsoft XNA Framework</strong> and <strong>Sunburn</strong> as a foundation for the game. This allowed us to learn more about how all aspects of the game work, rather than using something like Unity or Unreal which gives you a lot of work for free. An example of this is the networking aspect of the game, which we wrote from scratch including features such as client-side prediction and lag interpolation.</p>

				<p>The adjacent pictures show some screenshots of the game late on in the development phase.</p>
			</div>

			<div class="col-sm-12 col-md-6">
				<div class="row">
					<div class="col-sm-6 col-md-6">
						<img style="margin: 5px; width: 100%; max-width: 280px;" src="images/duality720.jpg" alt="Duality"/>
					</div>
					<div class="col-sm-6 col-md-6">
						<img style="margin: 5px; width: 100%; max-width: 280px;" src="images/duality1.jpg" alt="Duality"/>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-6">
						<img style="margin: 5px; width: 100%; max-width: 280px;" src="images/duality2.jpg" alt="Duality"/>
					</div>
					<div class="col-sm-6 col-md-6">
						<img style="margin: 5px; width: 100%; max-width: 280px;" src="images/duality4.jpg" alt="Duality"/>
					</div>
				</div>
			</div>
		</div>
	</div>

	<a name="modelling"></a>
	<div class="portfolio-item">
		<div class="clear"></div>
		<h1>3D Modelling</h1>
		
		<div class="row">
			<div class="col-sm-9 col-md-6">
				<p>At University I studied a module on 3D modelling using <strong>Autodesk Maya</strong>. The results of the two assignments are shown below.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-5">
				<h3>Building</h3>
				<p>The first assignment was to create an accurate model of a real building from around Bristol. I modelled the SACO Serviced Apartments on Bristol harbourside.</p>
				<p>The majority of my work was done using <a href="http://en.wikipedia.org/wiki/Non-uniform_rational_B-spline">NURBS</a> surfaces, as they provide great precision and accuracy for modelling a mathematical shape like a building.</p>
				
				<div class="row">
					<div class="col-sm-5 col-md-5">
						<img style="margin: 2px; width: 100%; max-width: 408px;" src="images/building1.jpg" alt="Building"/>
					</div>
					<div class="col-sm-1 col-md-1"></div>
					<div class="col-sm-6 col-md-6">
						<img style="margin: 2px; width: 100%; max-width: 529px;" src="images/building2.jpg" alt="Building"/>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<img style="margin: 5px; width: 100%; max-width: 500px;" src="images/building3.jpg" alt="Building"/>
					</div>
				</div>
			</div>

			<div class="col-sm-0 col-md-2"></div>

			<div class="col-sm-12 col-md-5">
				<h3>Wacky Races Car</h3>
				<p>The second assignment was to create a car to feature in a (hypothetical) <a href="https://www.youtube.com/watch?v=wVsbMP5bDCA">Wacky Races</a> film. My car is designed for a tech whizz-kid character, Tek.</p>

				<p>The car was modelled using <a href="http://en.wikipedia.org/wiki/Polygonal_modeling">polygons</a>, as they provide more creative freedom and smoother finishes than other options.</p>

				<div class="row">
					<div class="col-sm-7 col-md-7">
						<img style="margin: 2px; width: 100%; max-width: 253px;" src="images/car1.jpg" alt="Car"/>
					</div>
					<div class="col-sm-5 col-md-5">
						<img style="margin: 2px; width: 100%; max-width: 196px;" src="images/car2.jpg" alt="Car"/>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<img style="margin: 5px; width: 100%;" src="images/car4.jpg" alt="Car"/>
					</div>
				</div>
			</div>
		</div>
	</div>

	<a name="animation"></a>
	<div class="portfolio-item">
		<div class="clear"></div>
		<h1>3D Animation</h1>

		<div class="row">
			<div class="col-sm-9 col-md-6">
				<p>I also studied an animation module, again using Autodesk Maya. The results of the two assignments for this module are shown below.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-5">
				<h3>Humanoid</h3>
				<p>Our first assignment was to create a 30 second sequence of a robot forming itself, akin to Iron Man's suit. I went for a scrapheap theme to try and add some realism to the scene. Overly-epic music was clearly needed.</p>
				
				<div class="video-center">
					<iframe src="//player.vimeo.com/video/102183712" width="320" height="240" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
			</div>

			<div class="col-sm-0 col-md-2"></div>

			<div class="col-sm-12 col-md-5">
				<h3>Dance</h3>
				<p>The second assignment was to create a dance routine using normally inanimate objects. I decided to use chess pieces, since a chessboard looks like a disco dancefloor. Hence, there was only one soundtrack possible...</p>

				<div class="video-center">
					<iframe src="//player.vimeo.com/video/102783785" width="320" height="240" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>

	<a name="ray"></a>
	<div class="portfolio-item">
		<div class="clear"></div>
		<h1>Ray Tracer</h1>

		<div class="row">
			<div class="col-sm-6 col-md-3">
				<p>During a Computer Graphics module at University I was tasked with writing my own ray tracer, based on the algorithms presented in <a href="http://www.raytracegroundup.com/">Ray Tracing from the Ground Up</a>.</p>
				<p>The code was written using VisualC++ and here are several example images of what my ray tracer was capable of rendering.</p>	
			</div>
			<div class="col-sm-12 col-md-9">

				<div class="row">

					<div class="col-sm-6 col-md-6">
						<img class="center-block" style="margin: 5px; width: 100%; max-width: 250px;" src="images/ray1.jpg" alt="Rendered Scene"/>
					</div>
					<div class="col-sm-6 col-md-6">
						<img class="center-block" style="margin: 5px; width: 100%; max-width: 250px;" src="images/ray2.jpg" alt="Rendered Scene"/>
					</div>

				</div>
				<div class="row">
					<div class="col-sm-6 col-md-6">
						<img class="center-block" style="margin: 5px; width: 100%; max-width: 250px;" src="images/ray3.jpg" alt="Rendered Scene"/>
					</div>
					<div class="col-sm-6 col-md-6">
						<img class="center-block" style="margin: 5px; width: 100%; max-width: 250px;" src="images/ray4.jpg" alt="Rendered Scene"/>
					</div>
				</div>

			</div>
		</div>
	</div>	

	<a name="cloud"></a>
	<div class="portfolio-item">
		<div class="clear"></div>
		<h1>Cloud Services</h1>

		<div class="row">
			<div class="col-sm-12 col-md-6">
				<p>Another University project I undertook was to create a web service using cloud computing. This project was done in a group of 3 with Gianluca Di Maggio and Francis Hart and is called <em>Latexify</em>. It is a plaintext to <a href="http://www.latex-project.org/">LaTeX</a> converter, aimed at people who want to produce aesthetically pleasing documents without having to write code or install and setup a complex coding environment. Since it is an application on the cloud, there is no need to install anything.</p>
				<p>The system was written in <strong>Java</strong> and the website is served in <strong>JSP</strong> pages hosted on an <a href="http://aws.amazon.com/">Amazon Web Services</a> (AWS) server. The site is not currently online, so the following video (courtesy of <a href="http://vimeo.com/83872949">Gianluca</a>) shows the site and the app in action.</p>
			</div>

			<div class="col-sm-12 col-md-6">
				<div class="video-center">
					<iframe src="//player.vimeo.com/video/83872949" width="320" height="240" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="http://vimeo.com/83872949">Latexify</a> from <a href="http://vimeo.com/user23834650">Gianluca Di Maggio</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
				</div>
			</div>
		</div>
	</div>

	<a name="trading"></a>
	<div class="portfolio-item">
		<div class="clear"></div>
		<h1>Automated Trading Agents</h1>

		<div class="row">
			<div class="col-sm-12 col-md-4">
				<p>While studying the Algorithmic and Economic Aspects of the Internet (AEAI) I was tasked with developing a new <a href="http://en.wikipedia.org/wiki/Algorithmic_trading">Automated Trading Agent</a> for trading on a mini stock exchange.</p>
				<p>My algorithm was inspired by a combination of <em>Dave Cliff</em>'s <a href="http://www.agent.ai/doc/upload/200406/clif97_3.pdf">ZIP</a> algorithm and <em>Gjerstad and Dickhaut</em>'s <a href="http://www2.econ.iastate.edu/tesfatsi/PriceFormationDA.Gjerstad.pdf">GD</a> algorithm. It capitalises on <em>belief functions</em> developed in GD to help analyse the current state of the market, as well as using <em>learning methods</em> similar to ZIP to decide how much the agent's bid/ask prices should change on each iteration. My research paper is presented <a href="pdfs/trading.pdf">here</a>.</p>
			</div>
			<div class="col-sm-6 col-md-4">
				<img style="margin: 5px; width: 100%; max-width: 300px;" src="images/trading2.jpg" alt="Trading Graph"/>
			</div>
			<div class="col-sm-6 col-md-4">
				<img style="margin: 5px; width: 100%; max-width: 300px;" src="images/trading1.jpg" alt="Trading Graph"/>
			</div>
		</div>

	</div>


<!-- ========== FOOTER ========== -->
<?php
  include("footer.php");
?>


</div>

</body>
</html>