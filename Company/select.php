<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://use.fontawesome.com/478e097f2b.js"></script>
<link href='http://fonts.googleapis.com/css?family=Lato:300|Oswald' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script>
$(document).ready(function(){

	// Input gains focus on document ready
	//$('input').focus();

	// Define function to add tasks to list
	function addTodo(){
		if($('input').val().trim() == "") {
			// Show error message
			$('.error').fadeIn(200);
			} else {
			// Hide error message
			$('.error').hide();

			// Get input value
			var $todo = $('input').val(); 

			// Create new list item
			var $newListItem = $('<li class="todo" style="background-color: white;border-bottom: 1px dotted #455a64;color: #455a64;font-size: 20px;list-style: none;padding: 20px 130px 20px 15px;position: relative;white-space: normal;width:430px;">' + $todo + '<span style="position: absolute;top: 15px;right: 0;">' + 
			'<a href="#" class="check">' + '<i class="fa fa-check fa-lg"></i>' + '</a>' +
			'<a href="#" class="delete-todo">' + '<i class="fa fa-trash-o fa-lg"></i>' + '</a>' + 
			'</span>' + '</li>');

			// Add list item to end of list
			var $addListItem = $('ul').append($newListItem);

			// Hide list item before fading it into view
			$newListItem.hide().fadeIn(500);

			// Refocus input box for next task
			$('input').val("").focus();
		}
	};

	// Clear error message when 'x' icon is clicked
	$('i.fa-times').on('click', function(){
		$('.error').hide();
	});

	// Call addTodo function on click
	$('.add-todo').on('click', addTodo);


	// Call addTodo function when enter key is pressed
	$(document).on('keypress', function(e){
		if(e.which == 13) {
			addTodo();
		}
	});
	

	// Clear typed text and refocus input box
	$('.clear-text').on('click', function(e) {
		e.preventDefault();
		$('input').val("").focus();
	});


	// Mark list item complete
	$(document).on('click', '.check', function(e){
		e.preventDefault();
		$(this).closest('li').toggleClass('complete');
	});


	// Fade list item and delete from DOM
	$(document).on('click', '.delete-todo' , function(e){
		e.preventDefault();
		$(this).closest('li').fadeOut(500, function(){
			$(this).remove();
		});
	});

});

</script>
</head>
<style>
$dark-gray: #455a64;
$light-gray: #90a4ae;
$white: #eceff1;
$red: #ff5252;
$green: #69f0ae;
$white-border: 1px solid $white;







input{
  
  
  
  &:focus {
    outline: 0;
  }
  @media (min-width: 900px) {
    font-size: 32px;
  }
}

.input-buttons {
  height: 50px;
  border-bottom: $white-border;
  padding: 0;
  i {
    padding: 0 12px;
    color: $white;
    float: right;
  }
  .fa-plus {
    border-right: $white-border;
  }
  @media (min-width: 600px) {
    .fa-trash-o:hover {
      color: $red;
    }
    .fa-plus:hover {
      color: #69f0ae;
    }
	.fa-times{

    &:hover {
      color: #fafafa;
    }
  }
}



  }
}

.todo-list{
  padding: 0;
  margin: 20px 0 50px;
  .todo {
    
  }
}

span {

  a {
    color: $dark-gray;
  }
  i{
    
  }
  .fa-check {
    border-right: 1px solid $dark-gray;
    &:hover {
      color: $green;
    }
  }
  .fa-trash-o:hover {
    color: red;
  }
}

.complete {
  color: $light-gray;
  text-decoration: line-through;
  .check {
    color: $green;
  }
}
</style>
<body style="  
background-color:#455a64;
color: white;
    font-family: 'Lato', sans-serif;
    font-weight: 300;">
<h1 style="  font: 40px 'Oswald', Arial, sans-serif;
  margin: 50px 0;
  margin-left:-80px;
  text-align:center;">To-Do List</h1>
<div class="container" style="width:450px;">
  <div class="row">
    <input type="text" class="col-xs-8 col-sm-9" style="background: transparent;border: none;
    border-bottom: 2px solid white;font-size: 24px;
  height: 50px;
  padding-bottom: 15px;
  }">
    <div class="input-buttons col-xs-4 col-sm-3">
      <a href="#" class="clear-text"><i class="fa fa-trash-o fa-2x" style="padding: 10px 15px;"></i></a>
      <a href="#" class="add-todo"><i class="fa fa-plus fa-2x"></i></a>
    </div> <!-- div.input-buttons-->
  </div> <!-- div.row -->
  <div class="row">
    <div class="error" style="color: red;
  display: none;
  font-size: 16px;
  margin-top: 20px;
  text-align: center;
  ">
      <a href="#"><i class="fa fa-times" style="    color: white;
    padding: 5px 15px;
    float: right;"></i></a>
      <p style="margin-left:-20px;">We both know you should be doing something right now. Please enter a task.</p>
    </div> <!-- div.error -->
    <!-- Start to-do list -->
    <ul class="todo-list col-xs-12" style="  padding: 0;
  margin: 20px 0 50px;">
    </ul>
  </div> <!-- div.row -->
</div> <!-- div.container -->
</body>
</html>