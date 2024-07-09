<?php
include("connection.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $query = "DELETE FROM form WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if($result) {
        echo "<script>alert('Record deleted successfully');</script>";
        header("Location: display.php");
        exit();
    } else {
        echo "<script>alert('Failed to delete record');</script>";
        header("Location: display.php");
        exit();
    }
} else {
    echo "<script>alert('ID not found');</script>";
    header("Location: display.php");
    exit();
}
?>