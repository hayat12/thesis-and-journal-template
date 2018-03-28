<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ajax</title>
</head>

<body>

name: <input type="text" id="t1" name="t1" name="t2">
city: <input type="text" id="t2" name="t2" name="t2">
<input type="button" onClick="aa()" name="button1" value="insert">
Statues: <div id="d1"></div>

<script type="text/javascript">
function aa(){
	alert('function is woring');
var xmlhttp =new XMLHttpRequest();
xmlhttp.open("GET","ins.php?name="+document.getElementById("t1").value+"&city="+document.getElementById("t2").value,false);
xmlhttp.send(null);
document.getElementById("d1").innerHTML = xmlhttp.responseText;

//alert('function is working');
}
</script>
</body>
</html>