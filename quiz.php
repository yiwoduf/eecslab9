<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESULT</title>
</head>
<body>
<div id="page-wrap">
 
 <h1>Result : KU Baksetball Quiz</h1>
 
        <?php
            
            $answer1 = $_POST['1-answer'];
            $answer2 = $_POST['2-answer'];
            $answer3 = $_POST['3-answer'];
            $answer4 = $_POST['4-answer'];
            $answer5 = $_POST['5-answer'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "C) Ochai Agbaji") { $totalCorrect++; }
            if ($answer2 == "B) 28 points") { $totalCorrect++; }
            if ($answer3 == "A) Allen Fieldhouse") { $totalCorrect++; }
            if ($answer4 == "D) 2008") { $totalCorrect++; }
            if ($answer5 == "C) 1891") { $totalCorrect++; }

            $factor = 20;

            $percent = ($totalCorrect * $factor);
            
            echo "<div id='results'>$totalCorrect / 5 correct</div>";
            echo "<h4>$percent %</h4>";

            echo "<h3>Number 30 of KU men's basketball season of 2021-2022 is</h3>";
            echo "<h5>Correct Answer: C) Ochai Agbaji</h5>";
            echo "<h5>Your Answer: $answer1</h5>";

            echo "<h3>Joel Embiid's Career High scored point is</h3>";
            echo "<h5>Correct Answer: B) 28 points</h5>";
            echo "<h5>Your Answer: $answer2</h5>";

            echo "<h3>Name of the KU basketball court is</h3>";
            echo "<h5>Correct Answer: A) Allen Fieldhouse</h5>";
            echo "<h5>Your Answer: $answer3</h5>";

            echo "<h3>When did Bill Self win a National championship before 2022?</h3>";
            echo "<h5>Correct Answer: D) 2008</h5>";
            echo "<h5>Your Answer: $answer4</h5>";

            echo "<h3>When was basketball invented?</h3>";
            echo "<h5>Correct Answer: C) 1891</h5>";
            echo "<h5>Your Answer: $answer5</h5>";


        ?>

 </div>
</body>
</html>