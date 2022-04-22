<?php
  //Get quiz answers and score
  $score = 0;
  ($_POST["question_1"]=="blue") ? $score+=20 : null;
  ($_POST["question_2"]=="english") ? $score+=20 : null;
  ($_POST["question_3"]=="optional") ? $score+=20 : null;
  ($_POST["question_4"]=="infinite") ? $score+=20 : null;
  ($_POST["question_5"]=="none of the above") ? $score+=20 : null;

  include "./lab_09.html";
  echo "<br><br><div id=\"quiz_results\">";
  //Echo quiz answers
  echo "<h1>Quiz Results</h1>";
  echo "<p><strong>Question 1:</strong> What is my favorite color of the alphabet?<br>";
  echo "You answered: ".$_POST["question_1"]."<br>";
  echo "Correct Answer: blue</p>";

  echo "<p><strong>Question 2:</strong> Which language did I learn first?<br>";
  echo "You answered: ".$_POST["question_2"]."<br>";
  echo "Correct Answer: english</p>";

  echo "<p><strong>Question 3:</strong> What is the Endianness of the IA-64 Processor<br>";
  echo "You answered: ".$_POST["question_3"]."<br>";
  echo "Correct Answer: optional</p>";

  echo "<p><strong>Question 4:</strong> How many numbers are in the alphabet?<br>";
  echo "You answered: ".$_POST["question_4"]."<br>";
  echo "Correct Answer: infinite</p>";

  echo "<p><strong>Question 5:</strong> Choose the corrent answer<br>";
  echo "You answered: ".$_POST["question_5"]."<br>";
  echo "Correct Answer: none of the above (first one)</p>";

  //Display score
  $correct_answers = $score/20;
  echo "<strong><p>Correct Answers:</strong> $correct_answers<br>";
  echo "<strong><p>Score:</strong> $score</p><div>";
?>
