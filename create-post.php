<?php
//send value in database posts table

$connection = mysqli_connect('localhost','root','','plainBlog');
if(mysqli_connect_errno($connection)){
    echo 'Faild connect!';
}

if (!empty($_POST)) {
    $title = $_POST['title'];
    $post_content = $_POST['body'];
    $author = $_POST['author'];
    //$created_at = $_POST['created_at'];
                    

    $sql = "INSERT INTO posts (title,body,author,created_at) VALUES ('$title',' $post_content ','$author',NOW())";
    if ($connection->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
}


header("Location:http://localhost:8001/index.php");

