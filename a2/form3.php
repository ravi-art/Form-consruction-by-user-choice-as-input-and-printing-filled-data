<?php 
   
    session_start();
	?>
	
	<html>
	<head>
	<title>form3</title>
	<style>
	
		table{ 
		      border-radius:5px;
			  border:5px solid white;
			  padding:10px;
			  color:orange;
		  };
		body{
			font-family:san-serif;
			background-color:red;
		}
	
		</style>
		</head>
	<body bgcolor="red">
	<center>
	<table bgcolor="black">
	  <tr>
	  <td><h1>Submitted Information</h1></td>
	  </tr>
	  <?php 
	  $count = $_SESSION['element'];
	       for($j=0;$j<$count;$j++)
		   {
			   $detail[]=$_POST['sele'][$j];
			   echo 
			      "<tr>
			      <td>".$_SESSION['faltu'][$j]."</td>
				  <td>".$detail[$j]."</td>
				  </tr>";
			   
		   }
		   
		   ?>
		   </table>
		   </center>
		   </body>
		   </html>
	  