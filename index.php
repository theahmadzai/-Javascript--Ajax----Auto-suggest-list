<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajax Country lsit</title>
<script>
	window.onload = function()
	{
		var search = document.getElementById("search"),
			result = document.getElementById("results");

		search.addEventListener("keyup", function()
		{
			var xmlhttp;

			if (window.XMLHttpRequest) xmlhttp = new XMLHttpRequest();
			else xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

			xmlhttp.onreadystatechange = function()
  			{
  				if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
    			{
    				result.innerHTML = xmlhttp.responseText;
    			}
  			};
			xmlhttp.open("GET","list.php?search=" + search.value, true);
			xmlhttp.send();

		});
	};
</script>
<style>
	body{
		margin:0;
		background:#333333;
		padding:50px;
	}
	input{
		display:block;
		margin:0 auto;
		width:30%;
		height:25px;
		padding:5px;
		color:#efefef;
		font-size:20px;
		border-radius:5px;
		font-weight:100;
		box-shadow:0 0 8px 4px #222;
	}
	div{
		width:40%;
		margin:30px auto;
	}
	p{
		width:100%;
		min-height:40px;
		margin:0;
		padding:5px 10px;
		background:#e2e2e2;
		color:#222;
		font-size:28px;
		line-height:40px;
		border-bottom:1px solid #333;
	}
</style>
</head>
<body>
	<form action="" method="post">
		<input type="text" id="search">
	</form>
	<div id="results">

	</div>
</body>
</html>



