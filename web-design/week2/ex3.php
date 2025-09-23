<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ex 3</h1>
    <table border=1>
        <?php
        //http://localhost:8080/ex3.php
        // for loop application
        for ($i = 0; $i < 5; $i++) {
            echo"
            <tr> 
              <td>Row: $i</td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>