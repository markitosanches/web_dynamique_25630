<?php
$name = "Peter";
$age = 24;
$age2= 32;
$vrai = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Intro</title>
    <style>
        body{
            background-color: lightblue;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <header>
        <h1>Intro PHP</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="intro.php">Intro</a></li>
            <li><a href="form.php">Formulaire</a></li>
        </ul>
    </nav>
    <main>
        
        <?php
           
            // echo $name;
            // $name = 'lisa';
            // echo $age + $age2;
            echo "Salut ".$name."!";
            echo "<br>";
            echo "Mon age est <strong>".$age."</strong>";
        ?>
        <h2>Condition et fonction</h2>
        <?php
            $vA = 30;
            $vB = 40;

            function sumVar($a, $b){
             return $a + $b;
            }

            function maxVar($a, $b){
                if($a > $b){
                    $r = "A (".$a.") est supérieur B (".$b.")";
                }elseif($b > $a){
                    $r = "B(".$b.") est supérieur A (".$a.")";
                }else{
                    $r = "B(".$b.") et A (".$a.") sont egaux";
                }
                return $r;
            }
        ?>
        <h3>Utiliser les functions</h3>
        <h4>sumVar</h4>
        <?php
            echo sumVar(1, 5);
        ?>
        <h4>maxVar</h4>
        <?php
            echo maxVar($vA, $vB);
        ?>
        <h2>Array</h2>
        <h3>Key Value</h3>
        <?php
           // $colors = array('red', 'blue', 'pink');
            $colors = ['red', 'blue', 'pink'];
            print_r($colors);
            $name;
            echo "<br>";
            echo $colors[2];
            echo "<br>";
            
            foreach($colors as $v){
                echo $v."<br>";
            }
        ?>  

        <h3>Associative</h3>
        <?php
            $client = ['name'=>'Peter', 'age' => 24, 'ville' => 'Montreal'];
             print_r($client);
             echo "<br>";
            echo $client['name'];

        ?>

    </main>
</body>
</html>