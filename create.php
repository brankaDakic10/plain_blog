<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Vivify Blog</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
        integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="styles/blog.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
    <style>


    </style>
</head>

<body>
    <?php include "partials/header.php"; ?>
    <div class="post-form">
        <h2>Create post:</h2>
        <form name="postForm" action="create-post.php" method="POST" onsubmit="return required()">
            <label for="title">Title</label>
            <input type="text" id="title" name="title">
            <div class="alert alert-danger" style="display: none">
                <p>Required field</p>
            </div>
            <br>
            <label for="content">Content</label>
            <textarea type="text" id="content" name="body"></textarea>
            <div class="alert alert-danger" style="display: none">
                <p>Required field</p>
            </div>
            <br>
            <label for="author">Author</label>
            <input type="text" id="author" name="author">
            <div class="alert alert-danger" style="display: none">
                <p>Required field</p>
            </div>
            <br>
            <input type="submit" name="submit" value="Add New Post">
            <br>
            <br>

        </form>
    </div>
    <br>
    <?php include "partials/footer.php"; ?>
    <script type="text/javascript" src="js/script1.js"></script>
</body>

</html>