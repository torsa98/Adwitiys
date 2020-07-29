<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		function findmatch(){
			if (window.XMLHttpRequesr) {
				xmlhttp = new XMLHttpRequesr();
			} else {
				xmlhttp = new ActiveXObject('Microsoft.xmlhttp');
			}
			xmlhttp.onreadystatechange = function (){
				if(xmlhttp.readyState == 4 && xmlhttp.status ==200){
					document.getElementById('results ').innerHTML =xmlhttp.responseText;
				}
			}
			xmlhttp.open('GET','search.inc.php',true);
			xmlhttp.send();
		}
	</script>
</head>
<body>
<form id="search" name="search">
	Type a name:<br>
	<input type="text" name="keyword" onkeydown="findmatch();">
</form>
<div id="results"></div>


</body>
</html>