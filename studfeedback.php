<?php include("connection.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="commentstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Comment System in PHP - Pure Coding</title>
    <style>
        .checked {
            color: orange
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <form action="" method="POST" class="form">
            <div class="row">
                <div class="input-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your Name" required>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your Email">
                </div>
            </div>
            <div class="input-group textarea">
                <label for="comment">Comment</label>
                <textarea id="comment" name="comment" placeholder="Enter your Comment"></textarea>
            </div>
            <span class="input-group">
                <h4><label for="rating">Rating</label></h4>
                <select name="rating" required>
                    <option value="">--rating--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </span><br><br>
            <span class="input-group">
                <button name="submit" class="btn">Post Comment</button>
            </span>

        </form>
</body>

</html>
<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $rating = $_POST['rating'];
    $sql = "INSERT INTO comments(name,email,comment,rating) VALUES ('$name', '$email', '$comment','$rating')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo  "<script>alert('Comment added successfully.')</script>";
    } else {
        echo "<script>alert('Comment does not add.')</script>";
    }
}
?>