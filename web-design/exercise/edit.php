<?php
global $link;
include "connection.php";
$id=$_GET["id"];
$model="";
$cpu="";
$ram="";
$ssd="";

$res=mysqli_query($link,"select * from table2 where id=$id");
while ($row=mysqli_fetch_array($res))
{
    $model=$row["model"];
    $cpu=$row["cpu"];
    $ram=$row["ram"];
    $ssd=$row["ssd"];

}
header("location.index.php");
?>

<html lang="en" xmlns="">
<head>
    <title>User Account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <!-- short column display for forms rows -->
    <!--visit https://www.w3schools.com/bootstrap/bootstrap_forms.asp search for forms template and use it.-->
    <div class="col-lg-4">
        <h2>Laptop data form</h2>
        <form action="" name="form1" method="post">
            <div class="form-group">
                <label for="firstname">Model:</label>
                <input type="text" class="form-control" id="model" placeholder="Enter model" name="model" value="<?php echo $model; ?>">
            </div>
            <div class="form-group">
                <label for="lastname">CPU:</label>
                <input type="text" class="form-control" id="cpu" placeholder="Enter CPU" name="cpu" value="<?php echo $cpu; ?>">
            </div>
            <div class="form-group">
                <label for="email">RAM:</label>
                <input type="text" class="form-control" id="ram" placeholder="Enter RAM" name="ram" value="<?php echo $ram; ?>">
            </div>
            <div class="form-group">
                <label for="contact">SSD:</label>
                <input type="text" class="form-control" id="ssd" placeholder="Enter SSD" name="ssd" value="<?php echo $ssd; ?>">
            </div>
            <button type="submit" name="update" class="btn btn-default">Update</button>

        </form>
    </div>
</div>

</body>

<?php
if(isset($_POST["update"]))
    {
        mysqli_query($link,"update table2 set model='$_POST[model]',cpu='$_POST[cpu]',ram='$_POST[ram]',ssd='$_POST[ssd]' where id=$id");

        ?>
        <script type="text/javascript">
            window.location="index.php";
        </script>
        <?php
    }
?>

</html>