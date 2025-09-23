<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $x=$_GET['x'];
    $y=$_GET['y'];
    $z= $x + $y;
    //http://localhost:8080/ex2.php?x=5&y=7
    // Operators Application
    echo 'Arithmetic Operators: + - * / %'. '<br>';

    echo 'x + y = ' .$x+$y.'<br>';
    echo 'x - y = ' .$x-$y.'<br>';
    echo 'x * y = ' .$x*$y.'<br>';
    echo 'x / y = ' .$x/$y.'<br>';
    echo 'x % y = ' .$x%$y.'<br>';

    echo 'Comparison Operators: == != < > <= >=' . '<br>';

    // utility func for checking true, false
    function check($x)
    {
        if ($x==true) {
            return 'true';
        }
        else {
            return 'false';
        }
    }

    echo 'x == y ? ' . check($x==$y) .'<br>';
    echo 'x != y ? ' . check($x!=$y).'<br>';
    echo 'x < y ? ' . check($x<$y).'<br>';
    echo 'x > y ? ' . check($x>$y).'<br>';
    echo 'x <= y ? ' . check($x<=$y).'<br>';
    echo 'x >= y ? ' . check($x>=$y).'<br>';
    ?>
</body>
</html>