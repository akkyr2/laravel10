<?php //echo '.'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Task</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="font-family:arial">
	<br><br><br>
<div class=row>
	<div class="col-sm-4">
	</div>
	<div class="col-sm-5">
		<form action="show_all.php">
			  <input type="checkbox" id="JS" name="JS" value="Bike">
			  <label for="JS"> Q1: How many letters are there in "JS"?</label><br>
			  	<ul class="choices">
		            <li><label><input type="radio" name="question1" value="A" /><span>1</span></label></li>
		            <li><label><input type="radio" name="question1" value="C" /><span>3</span></label></li>
		            <li><label><input type="radio" name="question1" value="B" /><span>2</span></label></li>
		            <li><label><input type="radio" name="question1" value="D" /><span>4</span></label></li>
		        </ul>
			  <input type="checkbox" id="PHP" name="PHP" value="Bike">
			  <label for="PHP"> Q2: How many letters are there in "PHP"?</label><br>
			  	<ul class="choices">
		             <li><label><input type="radio" name="question2" value="A" /><span>1</span></label></li>
		            <li><label><input type="radio" name="question2" value="C" /><span>3</span></label></li>
		            <li><label><input type="radio" name="question2" value="B" /><span>2</span></label></li>
		            <li><label><input type="radio" name="question2" value="D" /><span>4</span></label></li>
		        </ul>
			  <input type="checkbox" id="BMW" name="BMW" value="Bike">
			  <label for="BMW"> Q3: How many letters are there in "BMW"?</label><br>
			    <ul class="choices">
		            <li><label><input type="radio" name="question3" value="A" /><span>1</span></label></li>
		            <li><label><input type="radio" name="question3" value="C" /><span>3</span></label></li>
		            <li><label><input type="radio" name="question3" value="B" /><span>2</span></label></li>
		            <li><label><input type="radio" name="question3" value="D" /><span>4</span></label></li>
		        </ul>
			  <input type="checkbox" id="JAVA" name="JAVA" value="Bike">
			  <label for="JAVA"> Q4: How many letters are there in "JAVA"?</label><br>
			    <ul class="choices">
		            <li><label><input type="radio" name="question4" value="A" /><span>1</span></label></li>
		            <li><label><input type="radio" name="question4" value="C" /><span>3</span></label></li>
		            <li><label><input type="radio" name="question4" value="B" /><span>2</span></label></li>
		            <li><label><input type="radio" name="question4" value="D" /><span>4</span></label></li>
		        </ul>
		</form>

	</div>
	<div class="col-sm-3">

		<a href="./show_all"><button type="button" class="btn btn-primary" style="font-size: 42px; padding: 0px 20px 0px 20px;">Show All</button></a>
	</div>
</div>
</body>
<script>
	document.addEventListener("contextmenu", function (e){
    	//e.preventDefault();
	}, false);

	//$("#prospects_form").submit(function(e) {
    	//e.preventDefault();
	//});

</script>
</html>
