<?php
//send value in database comments table
$connection = mysqli_connect('localhost','root','','plainBlog');
if(mysqli_connect_errno($connection)){
    echo 'Faild connect!';
}

if (!empty($_POST)) {
    $author = $_POST['author'];
    $comment = $_POST['content'];
    $com_id = $_POST['post_id'];


    $sql = "INSERT INTO comments (author,text,post_id) VALUES ('$author','$comment','$com_id')";
    if ($connection->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
}



header("Location:http://localhost:8001/single_post.php?post_id=$com_id ");
?>

