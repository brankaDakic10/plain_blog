<link href="styles/blog.css" rel="stylesheet">
<link href="styles/main.css" rel="stylesheet">

<h5>Add Comment Please:</h5>
<form action="create-comment.php" method="POST" name="myForm" onsubmit="return required()">

    <label for="author">Author:</label>
    <br>
    <input type="text" id="author" name="author" class="inp">
    <div class="alert alert-danger" style="display: none">
        <p>Required field</p>
    </div>
    <br>
    <label for="content">Comment: </label>
    <br>

    <textarea type="text" id="content" name="content"></textarea>
    <div class="alert alert-danger" style="display: none">
        <p>Required field</p>
    </div>
    <!--///input  for store comment on that single_post-->
    <input type="hidden" name="post_id" value="<?php echo($post_id) ?>">
    <!---->
    <br>
    <br>
    <input id="inpForm" type="submit" name="submit" value="Add comment" class="btn btn-default add-comment">
    <br>
    <br>
</form>