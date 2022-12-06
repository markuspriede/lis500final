<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hegemony and Meritocracy Survey</title>
	<meta name="description" content="Hegemony and Meritocracy Survey">
	<link rel="icon" href="survey.jpeg">
	<meta name="author" content="Markus Priede">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="indexstyle.css">
	<link rel="stylesheet" type="text/css" href="begin.css">
</head>

<body>
	<header>
			<div class="navlinks">
				<ul>
					<li ><a href="index.php">About</a></li>
					<li><a href="surveyhome.php">Take The Survey</a></li>
					<li><a href="results.php">Results</a></li>
					<li><a href="analysis.php">Analysis</a></li>
				</ul>
			</div>
	</header>

<div class="home-content">
    <section class="home-content-blurb">
      <h2 class="home-content-blurb-title">Take the Survey</h2>
      <article>
        <p>The purpose of this survey is to measure bias regarding hegemony, meritocracy, and gender roles in the technology sector. This test consists of 15 questions, which should take around 10 minutes to complete, however please go at your own pace. All responses are anonymous.</p>
        <button id="begin"><a target="_blank"
                        href="q1.php">Begin</a></button>
      </article>
    </section>
  </div>

		<footer>
			<div id = "foot">
				<?php
        		//https://www.php.net/manual/en/function.date.php
        		//Edited for specific timezone of Madison and reformated date
        		date_default_timezone_set('America/Chicago');
        		echo date('l\, F jS\, Y h:i:s A');
        		?>

        		<br>Survey created by Akarsh, Anwita, Irasema, and Markus
        		<br>LIS 500
        		<br>University of Wisconsin-Madison

			</div>
		</footer>


</body>
</html>