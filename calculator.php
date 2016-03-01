<?php
/*
 * Created by: Viktoriya Nikolova
 * Date: 01/03/2016
 * Time: 13:06
 */

    $userInput = $_POST['userInput'];

/*
   $nums = explode('+', $exp);
    $result = 0;
    for($i=0;$i< count($nums);$i++)
    {
        $result += $nums[$i];
    }
*/
    function calculate($theString)
    {
        //remove white spaces
        $theString = trim($theString);
        // remove any non-numbers except for math operators
        $theString = preg_replace('[^0-9\+-\*\/\(\) ]', '', $theString);
        //calculate
        $compute = create_function("", "return (" . $theString . ");");
        return $compute();
    }

?>
<html>
<head>
    <title>A simple calculator</title>
    <style>
        input {
            width:60%;
            height:40px;
            border: 1px solid darkcyan;
            }
        button {
            width:10%;
            text-transform: uppercase;
            background-color: transparent;
            cursor: pointer;
            border: 1px solid darkcyan;
            height:40px;
        }
        button:hover {
            background-color: cadetblue;

        }
        .result {
            width:70%;
            text-transform: uppercase;
            font-family: Helvetica;
            text-align: center;
        }
    </style>
</head>
    <form method="post">
        <input type="text" name="userInput" placeholder="e.g.(2+2-6)*8-(6/3)">
        <button>Calculate</button>
    </form>

    <h1 class="result"><i>The result is:</i> <?php echo $userInput; ?> = <?php echo calculate($userInput); ?></h1>
</html>