<?php
# Use IF/Else
# 1. 
$month = date("M");
if($month =="Aug"){
    echo "Its $month, so it's still holiday.<br>";
}
else{
    echo"Not August, This is $month so i don't have any holidays.<br>";
}

# 2.
$color = "Red";
if($color == "Red"){
    echo "The color is red.<br>";
}
else{
    echo " The color is not red.<br>";
}

# 3. 
$score = 50;
if ($score >= 80 && $score<=100){
    echo"$score, Excellent <br>";
}
elseif($score >=70 && $score <80){
    echo"$score, Great <br>";
}
elseif($score >=60 && $score <70){
    echo"$score, Good <br>";
}
elseif($score >=50 && $score <60){
    echo"$score, Pass <br>";
}
elseif($score <50 && $score>0){
    echo"$score, Fail <br>";
}

# 4.

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3 - Control Flow</title>
</head>
<body>
    <form method='POST'>
    <h1>Input your age:</h1>
            <input type="text" name="name">
            <input type="int" name="age">
            <input type="submit" value="Submit">
    </form>
<?
$name = $_POST['name'];
$age = $_POST['age'];
if($age >= 18){
    echo"<h2>Hello $name, you are eligible for voting.</h2>";
}
else{
    echo"<h2>Hello $name, you aren't eligible for voting.</h2>";
}
# 5.
for($i=8; $i>=1; $i--)
{
    for($j=1; $j<=$i; $j++)
    {
        echo $j;
    }
    echo"<br>";
}
# 6.
$i = 1;
while($i<=8){
    $j=1;
    while($j<=$i){
        $j++;
        echo"*";
    }
    $i++;
    echo"<br>";
}
?>
<a href="https://github.com/mefisso4/project-web">Github repo</a><br>
<a href="https://mefisso4.github.io/project-web/">Project website</a>
</body>
</html>
