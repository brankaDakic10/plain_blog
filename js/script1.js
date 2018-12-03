// Validation 

var buttonAlert = document.querySelector('.alert');

function required()
{                        // form->name,input->name
    var title_post =document.forms["postForm"]["title"].value;
    var post_content =document.forms["postForm"]["body"].value;
    var author_post =document.forms["postForm"]["author"].value;
    var isFormValid = false;
    if (title_post==null || title_post=="")
    {
        buttonAlert.style.display = 'block';

        isFormValid = false;
    }
    else
    {
       buttonAlert.style.display = 'none';
        isFormValid =  true;
    }

    if (post_content==null || post_content=="")
    {
        bbuttonAlert.style.display = 'block';

        isFormValid = false;
    }
    else
    {
        buttonAlert.style.display = 'none';
        isFormValid = true;
    }
     if (author_post  =null || author_post  =="")
    {
       buttonAlert.style.display = 'block';

        isFormValid = false;
    }
    else
    {
       buttonAlert.style.display = 'none';
        isFormValid = true;
    }

    return isFormValid;
}


