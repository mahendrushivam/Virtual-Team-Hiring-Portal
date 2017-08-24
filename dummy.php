<html>
<head>

</head>
<body>

  
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="modal-body animate">

 <span class="close" title="Close Modal">&times;</span>
 
<input type="text" id="college" name="college" placeholder="College"  style="margin-top:40px" >
<span class="error">*</span>
  </br>
  <input type="text" id="course" name="course" placeholder="Course" >
  <span class="error">*</span> 
  </br>
  <input type="text" id="stream" name="stream" placeholder="Stream" >
  <span class="error">*</span>
  </br>
  <input type="text" id="ssyear" name="ssyear" placeholder="Start Year" >
  <span class="error">*</span>
  </br>
  <input type="text" id="eeyear" name="eeyear" placeholder="End Year" >
  <span class="error">* </span>
  </br>
  <textarea name="message" rows="5" cols="40" placeholder="Add Information" >
  </textarea>
  <span class="error">* </span>
  </br>
  <input type="submit" id="btn1" value="Submit">
  <input type="reset" id="btn2" value="Reset">   
  </form>

<script>
var modal = document.getElementById('myModal1');

 window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>
 