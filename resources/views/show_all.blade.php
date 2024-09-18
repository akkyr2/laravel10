<!DOCTYPE html>
<html>
<head>
<title>Show All</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="font-family:arial">
	<br><br><br>
<div class=row>
	<div class="col-sm-2">
	</div>
	<div class="col-sm-7">
		<div>
			  <H3> Q1: How many letters are there in "JS"?<span style="background-color:#64ef64;"> Completed</span></H3><br>
			  <H3> Q2: How many letters are there in "PHP"?<span style="background-color:#f5e630;"> Not Completed</span></H3><br>
			  <H3> Q3: How many letters are there in "BMW"?<span style="background-color:#64ef64;"> Completed</span></H3><br>
			  <H3> Q4: How many letters are there in "JAVA"?<span style="background-color:#f5e630;"> Not Completed</span></H3><br>
		</div>

	</div>
	<div class="col-sm-3">

		<a href="#"><button type="button" onclick="show_confirmation();" class="btn btn-primary" style="font-size: 42px; padding: 0px 20px 0px 20px;">Delete</button></a>
	</div>
</div>
</body>
<script>
	function show_confirmation(){ 
		if(confirm("Are u sure to delete this task ?") == true){
			window.location = '/index';
		}
	}

	document.addEventListener("contextmenu", function (e){
    	e.preventDefault();
	}, false);

	//$("#prospects_form").submit(function(e) {
    	//e.preventDefault();
	//});

</script>
</html>
