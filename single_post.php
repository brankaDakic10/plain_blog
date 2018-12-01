<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Simple Blog</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
        integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="styles/blog.css" rel="stylesheet">
    <link rel="stylesheet" href=" styles/main.css">
</head>

<body>

    <?php include 'partials/header.php';?>

    <main role="main" class="container">

        <div class="row">

            <div class="col-sm-8 blog-main">


                <div class="blog-post">

                    <!--Query for single post page-->

                    <?php
                include "db.php";

                $post_id = $_GET['post_id'];
                $sql = "SELECT * FROM posts WHERE id = " . $post_id ;

                $statement = $connection->prepare($sql);

                $statement->execute();

                $statement->setFetchMode(PDO::FETCH_ASSOC);
//                 take all single post informations 
                $singlePost = $statement->fetch();
                //var_dump($singlePost);
				
                ?>
                    <h2 class="blog-post-title">
                        <?php echo($singlePost['title']) ?>
                    </h2>
                    <p class="blog-post-meta">
                        <?php echo($singlePost['created_at']) ?> by <a href="#">
                            <?php echo($singlePost['author']) ?></a></p>

                    <p>
                        <?php echo($singlePost['body']) ?>
                    </p>


                </div>
                <!--end post-->

            </div>
            <?php include 'partials/sidebar.php';?>
        </div><!-- /.row -->

    </main><!-- /.container -->
    <?php include 'partials/footer.php';?>


</body>

</html>