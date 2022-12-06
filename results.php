<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Perceptions of the Harvard Implicit Bias test | LIS 500 Assignment 4</title>
    <link rel="stylesheet" type="text/css" href="q-akarsh.css">
    
    <!-- Import the Google Fonts: -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@500&family=IBM+Plex+Serif&display=swap" rel="stylesheet">
	
</head>

<body class ="post">
    <h1> Results for our Shared Survey</h1>
    
    <p>Below you will the results for all questions displayed in their Likert numerals and an average of all current test takers. 
    <br>Since no personal IP address data is taken in this form, if you take again the average will shift. <br>This is nothing like a statistically accurate survey, but it is a good model for your final projects.</p>
    <hr>
  <?php
  $solution = $_POST["answer"];
  echo "Choosen Answer Was = ". $solution;
  ?>
    <hr>
    <h2> As a reminder, here's your Likert scale:</h2>
    <ul>
        <li> 5 - I Strongly Agree </li>
        <li> 4 - I Agree </li>
        <li> 3 - Neutral </li>
        <li> 2 - I Disagree </li>
        <li> 1 - I Strongly Disagree </li>        
</ul>
</body>
<hr>
<body>
    <p><h2>1.A short statement of how you decided upon the question you added to the survey. </h2>
        <h3>After Taking the Harvard implicit bias test, I felt the results were inaccurate. The results were I was not biased about the food, but I was generally a little concerned about what I eat, so I had this question in my mind as it provides a more accurate answer on my food choices. The question I came up with provides a generally accurate overview of this topic.</h3>
    </p>
    <p><h2>2.Explain how both "I agree" and "I disagree" could be plausible, meaningful answers.</h2>
        <h3>I agree it means the person is a little concerned about his food habits, but now and then, he doesn't mind having food that he feels is unsuitable for his routine, for example, food with high fats or high calories. I disagree it means the person is really conscious about his food choices.</h3>
    </p>
    <p><h2>3.How does this question reflect the notion of intersectionality in this course? </h2>
        <h3>My question clearly has a connection to intersectionality. Food, in general, is very different from person to person, region to region, and many other factors. In the country I am from, the food people consume changes from area to area and is even based on social stratification.</h3>
    </p>
    <p><h2>4.How does it challenge the IAT Harvard test? </h2>
        <h3>The problem with the IAT Harvard test was there was no uniqueness in the questions. In the test I took, there were four categories: high calorie, low calorie, shameful, and accepted. These non-unique questions overestimate a person's food habits; a simple question like mine can give a simple and more accurate solution to these tests.</h3>
    </p>


</body>
<!-- <body>
<h2>This results page shows averages. Here are some important questions to ask now: </h2>

<ul>
    <li>What does this data mean? </li> 
    <li>What does that tell you? </li> 
    <li>Is this the best way to display results? </li> 
    <li>How can we display this information more usefully? </li>
</ul>
</body>
 -->
<?php 
$user_id = $_POST["user_id"];

// Store the answer to the previous question, if applicable
include "store-answer.php";

// Time to retreive from the database all data we've collected for this visitor throughout the survey

// Database settings
// (copy these as necessary for your own projects)
$mysql_server="localhost";
$mysql_db="raroyst1_raroystonorgmain";
$mysql_port="3306";
$mysql_user="raroyst1_cfbd_cg";  
$mysql_password="W!SCsin2018";

// Connect to the database
$conn = new mysqli($mysql_server, $mysql_user, $mysql_password, $mysql_db);

// Whoops. This shouldn't happen, but if we can't connect to the database "blow up" and stop here
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare our first query: get all the results for this particular user
$query = $conn->prepare("SELECT question, answer FROM sharedsurvey WHERE user_id = ? ORDER BY question");
$query->bind_param("i", $user_id);

// Run our query to get the results from the database
$query->execute();
$results = $query->get_result();

// Loop through and display the results
echo '<p><i><u>Your results:</u> </i></p>';
while ($result = $results->fetch_assoc()){
  echo '<p><b>'.$result["question"].':</b> '.$result["answer"].'</p>';
}

// Close the query
$query->close();

// Prepare our second query: get all the average results for all questions
$query = $conn->prepare("SELECT question, avg(answer) as answer FROM sharedsurvey GROUP BY question ORDER BY question");

// Run our query to get the results from the database
$query->execute();
$results = $query->get_result();

// Loop through and display the results
echo '<p><i><u>Average results:</u></i></p>';
while ($result = $results->fetch_assoc()){
  echo '<p><b>'.$result["question"].':</b> '.$result["answer"].'</p>';
}

// Close the query
$query->close();

// Close the connection
$conn->close();

?>
<!-- Referenced from results.php -->