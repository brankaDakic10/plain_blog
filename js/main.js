	
	var button = document.querySelector(".btn-comments");

	/// all comments from single-post page

	var commentInfo = document.querySelector(".blog-comments");
	//   add inicValue
	var inicValue = button.innerHTML;
	button.addEventListener('click', function () {

	    if (inicValue === 'Hide comments') {
	        commentInfo.style.display = 'none';
	        button.innerHTML = 'Show Comments';
	        inicValue = 'Show Comments';
	    } else {
	        commentInfo.style.display = 'inline';
	        button.innerHTML = 'Hide comments';
	        inicValue = 'Hide comments';


	    }
    });
	
	


	// Validation for commetns php
var buttonAlert = document.querySelector('.alert');
function required()
{                        // form->name,input->name
    var name =document.forms["myForm"]["author"].value;
    var com =document.forms["myForm"]["content"].value;
    var isFormValid = false;
    if (name==null || name=="")
    {
        buttonAlert.style.display = 'block';

        isFormValid = false;
    }
    else
    {
       buttonAlert.style.display = 'none';
        isFormValid =  true;
    }

    if (com==null || com=="")
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
