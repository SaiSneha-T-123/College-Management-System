<?php include("connection.php");
$query = "DELETE * FROM comments";
$data = mysqli_query($conn, $query);
if ($data) {
    header("location:admindashboard.php");
} else {
    echo "Failed to delete";
}
