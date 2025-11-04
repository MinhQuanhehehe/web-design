<?php
global $link;
include "connection.php";
$id=$_GET["id"];
if(isset($_GET['confirm']) && $_GET['confirm']=='yes'){
    $delete="delete from table1 where id=$id";
    mysqli_query($link,$delete) or die(mysqli_error($link));
    header("location: index.php");
    exit;
}
$result = mysqli_query($link, "SELECT * FROM table1 WHERE id = $id");
$item = mysqli_fetch_array($result);
?>

<?php if($item): ?>
    <h1>Are you sure to delete item <?php echo $item['firstname'] . ' ' . $item['lastname']; ?>?</h1>
    <button><a href="delete.php?id=<?php echo $item['id']; ?>&confirm=yes">Yes</a></button>
    <button><a href="index.php">No</a></button>
<?php else: ?>
    <h1>Item not found.</h1>
    <button><a href="index.php">Go Back</a></button>
<?php endif; ?>