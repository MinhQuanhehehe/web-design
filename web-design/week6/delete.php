<?php
global $link;
include "connection.php";

$id=$_GET["id"];
$result = mysqli_query($link, "SELECT * FROM table1 WHERE id = $id");
if (!$result || mysqli_num_rows($result) == 0) {
    die("no record = $id");
}

$item = mysqli_fetch_array($result);
mysqli_query($link,"delete from table1 where id=$id");
header("location.index.php");
if(isset($_GET['confirm']) && $_GET['confirm']=='yes'){
    $delete="delete from table1 where id=$id";
    mysqli_query($link,$delete) or die(mysqli_error($link));
    header("location: index.php");
}
?>

<h1>Are you sure to delete item <?php echo $item['firstname'] . ' ' . $item['lastname']; ?>?</h1>
<button><a href="delete.php?id=<?php echo $item['id']; ?>"&confirm="yes">Yes</a></button>
<button><a href="index.php">No</a></button>
<script type="text/javascript">
 window.location="index.php";
    </script>



