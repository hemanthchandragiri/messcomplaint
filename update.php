<?php
include_once 'database.php';
$sql = "UPDATE complaint set status ='resolved' WHERE id='" . $_GET["id"] . "'" ;
if (mysqli_query($conn, $sql)) {
    echo "updated successfully";
} else {
    echo "Error while resolving ! please try again " . mysqli_error($conn);
}
mysqli_close($conn);
?>