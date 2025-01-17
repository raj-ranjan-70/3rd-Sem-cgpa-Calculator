<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <style>
        body {
            text-align = center
            color = indianred
        }
    </style>
</head>
<body bgcolor = "Indianred" text-align = center>
    <?php

    function grade($marks)
    {
        if($marks >= 90)
        {
            return 10;
        }
        else if($marks >=80 && $marks < 90)
        {
            return 9;
        }
        else if($marks >= 70 && $marks < 80)
        {
            return 8;
        }
        else if($marks >=60 && $marks < 70)
        {
            return 7;
        }
        else if($marks >= 50 && $marks < 60)
        {
            return 6;
        }
        else if($marks >=40 && $marks < 50)
        {
            return 5;
        }
        else if($marks >= 30 && $marks < 40)
        {
            return 4;
        }
        else if($marks >= 20 && $marks < 30)
        {
            return 3;
        }
        else if($marks >= 10 && $marks < 20)
        {
            return 2;
        }
        else if($marks > 0 && $marks < 10)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }

    $sub1 = $_POST['CSE211'];
    $sub2 = $_POST['CSE202'];
    $sub3 = $_POST['CSE205'];
    $sub4 = $_POST['CSE316'];
    $sub5 = $_POST['CSE306'];
    $sub6 = $_POST['PEL132'];
    $sub7 = $_POST['CSE307'];
    $sub8 = $_POST['CSE325'];

    $grade1 = grade($sub1);
    $grade2 = grade($sub2);
    $grade3 = grade($sub3);
    $grade4 = grade($sub4);
    $grade5 = grade($sub5);
    $grade6 = grade($sub6);
    $grade7 = grade($sub7);
    $grade8 = grade($sub8);
    
    if($grade1 < 5)
    {
        echo "You have failed in CSE211:Computer Organisation and Design!!!" . "<br>";
    }
    if($grade2 < 5)
    {
        echo "You have failed in CSE202:Object oriented Programming!!!" . "<br>";
    }
    if($grade3 < 5)
    {
        echo "You have failed in CSE205:Data Structures and Algorithms!!!" . "<br>";
    }
    if($grade4 < 5)
    {
        echo "You have failed in CSE316:Operating Systems!!!" . "<br>";
    }
    if($grade5 < 5)
    {
        echo "You have failed in CSE306:Computer Networks!!!" . "<br>";
    }
    if($grade6 < 5)
    {
        echo "You have failed in PEL132:Communication Skills II!!!" . "<br>";
    }
    if($grade7 < 5)
    {
        echo "You have failed in CSE307:Internetworking Essentials!!!" . "<br>";
    }
    if($grade8 < 5)
    {
        echo "You have failed in CSE325:Operating Systems Laboratory!!!" . "<br>";
    }

    if($grade1 > 5 && $grade2 > 5 && $grade3 > 5 && $grade4 > 5 && $grade5 > 5 && $grade6 > 5 && $grade7 > 5 && $grade8 > 5)
    {
        echo "Congratulations! You have passed all the subjects... ";
    }

    $result = (($grade1 * 4) + ($grade2 * 4) + ($grade3 * 4) + ($grade4 * 3) + ($grade5 * 3) + ($grade6 * 3) + ($grade7 * 1) + ($grade8 * 1)) / 23;
    echo "Your TGPA would be " . number_format($result, 2) . " (Approx.)" . "<br>";

    ?>
</body>
</html>