<html>
<head>
	<title>form</title>
	<style>
	body,form{

       
       background-color: skyblue; 
       height: 300px; 
       background-position: relative; 
       background-repeat: no-repeat; 
        background-size: cover; 
        backface-visibility: visible;
}
	
</style>
</head>
<h1 align="center" >Assignment:2</h1>
<fieldset>
<legend align="center">FORM DETAILS</legend>
<center>
<body bgcolor="#880C24"  style="font" img src="download.jpg" >
	
	<form method="POST" action="form.php">
		
	<table border=1px cellspacing="2" bgcolor="orange" cellpadding="15px">
	<tr>
		<tr>
			<td>Form Name</td><td><input name="fna" type="text" id="forms"placeholder="TYPE OF FORM" required></td>
		</tr>
		</tr>
		<tr>
			<td>Background colour</td><td><input type="color" name="co1" required></td>
		</tr>
		<tr>
			<td>Textcolour</td><td><input type="color" name="co2" required></td>
		</tr>
		<tr>
			<td>Element</td><td><input type="number" name="e1" placeholder="NO. OF ELEMENT" id="e1" required></td> 
		</tr>
		<tr>
			<td>Font Size</td><td><input type="text" placeholder="ENTER SIZE " name="f1" id="f1"	></td></tr>
	</table>
	
	<br><center><input type="submit" value="submit" ></center></br>
</form>
</body>
</center>
</fieldset>

</html>
