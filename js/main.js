	
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
    