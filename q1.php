<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Perceptions of the Harvard Implicit Bias test | LIS 500 Assignment 4</title>
    <link rel="stylesheet" type="text/css" href="q1.css">
    
    <!-- Import the Google Fonts: -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans" rel="stylesheet">
	
</head>
<body>
    <main>
<?php
$user_id = $_POST["user_id"];
include "store-answer.php";
$question_text = "Everyone should be concerned regarding food habits but should not be obsessed.";
?>

<form method="post" action="results.php">
    <?php echo '<h1>'.$question_text.'</h1>'; ?>
    <?php echo '<p><input type="hidden" name="user_id" value="'.$user_id.'" /></p>'; ?>
    <?php echo '<p><input type="hidden" name="question" value="'.$question_text.'" /></p>'; ?>
    <p><input type="radio" name="answer" value="5" /> I Strongly Agree</p>
    <p><input type="radio" name="answer" value="4" /> I Agree</p>
    <p><input type="radio" name="answer" value="3" /> Neutral</p>
    <p><input type="radio" name="answer" value="2" /> I Disagree</p>
    <p><input type="radio" name="answer" value="1" /> I Strongly Disagree</p>
    <p><input type="submit" value="Continue" /></p>
</form>

	</main>

<footer>
    
<!-- Text and design from Ben Pettis Spring 2021 -->     
	<p>
	When you participate in this survey, information about your answers is submitted to the website and stored in a database. Your responses to individual questions are associated with one another via a random id that was generated when you visited the first survey page. This id is not generated based on any of your personal information and to our knowledge there is no way to associate this random id with you or any other of your personal information.
	</p>
	<p>
	Once you leave the survey, no further information is collected by this website. While we appreciate everyone completing all of the survey questions, you are welcome to leave at any time. Because your user id is randomly generated every time that you visit the survey starting page, there is no way to return to your in-progress responses at a later time.
	</p>
	<br />
	&copy; <?php echo date('Y');?> <br />
	All Rights Reserved
</footer>
</body>
</html>
<!-- Referenced from q-schoolderman.php -->