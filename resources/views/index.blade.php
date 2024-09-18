
<?php
/*
* Functionalities which you have to do in the task. 
1) When clicking on the enter button task should appear in the Frontend & page should not reload and refresh. 
2) By clicking on the checkbox the task should disappear and Should mark it as completed. 
3) By clicking on the show all task button, All the tasks should show completed and Non completed. 
4) The task should be deleted when you click on the delete button. 
5) you have to add the warning (Are u sure to delete this task ?) When you click on the delete button. 
6) No duplicate tasks should be there.
*/
?>

<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="font-family:arial">
	<br><br><br><br><br><br>
	<center>
		<h2>To start test, click on bellow button...</h2>
		<a href="./task"><button type="button" class="btn btn-primary" style="font-size: 44px; padding: 0px 20px 0px 20px;">Enter</button></a>
	</center>
</body>
<script>
	document.addEventListener("contextmenu", function (e){
    	e.preventDefault();
	}, false);

	//$("#prospects_form").submit(function(e) {
    	//e.preventDefault();
	//});

</script>
</html>



