<?php
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];

echo "<p><b>Question 1: </b>What is 13*12?</p> <p>Your answer was: $q1</p><p>The correct answer was: 156</p>";
echo "<p><b>Question 2: </b>What is the square root of 169?</p> <p>Your answer was: $q2</p><p>The correct answer was: 13/p>";
echo "<p><b>Question 3: </b>What is 3 to the 4th power?</p> <p>Your answer was: $q3</p><p>The correct answer was: 81</p>";
echo "<p><b>Question 4: </b>What is infinity - 5?</p> <p>Your answer was: $q4</p><p>The correct answer was: infinity</p>";
echo "<p><b>Question 5: </b>Solve for x in the equation 5x + 3 = 18 </p> <p>Your answer was: $q5</p><p>The correct answer was: 3</p>";

$counter = 0;
if($q1=="156")
{
  $counter++;
}
if($q2=="13")
{
  $counter++;
}
if($q3=="81")
{
  $counter++;
}
if($q4=="infinity")
{
  $counter++;
}
if($q5=="3")
{
  $counter++;
}
echo "<p><b>Your number of correct answers: </b>$counter</p>";
$percent = ($counter/5)*100;
echo "<p><b>Your Score: </b>$percent%</p>";
?>
