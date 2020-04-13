<?php
  session_start();
      $title=$_SESSION['title'];
	  $color=$_SESSION['color'];
	  $txtcolor=$_SESSION['txtcolor'];
	  $element= $_SESSION['element'];
	  $size=$_SESSION['fsize'];
	   ?>
	   
<?php
		  for($i=0;$i<$element;$i++)
		  { 
			  $_SESSION['faltu'][$i]=$_POST['label'][$i];
		      $selec[$i]=$_POST['select'][$i];
             
               $id[$i]=$_POST['id'][$i];
		  }
?>

<html> 
<fieldset>
<legend align="center"> READY TO FILL </legend>
  <body bgcolor='<?php echo $color?>'>
    <style>
       table{
		      font-size:<?php echo $size?>;
			  color:<?php echo $txtcolor ?>;
			  border:2px solid grey;
			  border-radius:10px;
			  padding:10px;
	       }
   </style>
  <center>
  <form name="forms" method="POST" action="form3.php">
    <table>
     <tr>
	    <td colspan="3"><h1><?php echo $title ?></h1></td>
      </tr>		
	  <?php
	   for($i=0;$i<$element;$i++)
	   {
		 echo  
	         "<tr>
			   <td>".$_SESSION['faltu'][$i]."</td>
			   <td><input type=$selec[$i] name='sele[$i]' style='border-radius:10px'></td>
			   </tr>";
	   }
	   ?>
	   
	  <tr><td> <center>
	  <button type="submit">SUBMIT</button>
 <button type="reset">RESET</button></center>
	   </td>
	   </tr>
	   
	   </table>
	   </form>
	   </center>
	   </body>
	   </html>
	   
	   
	   
	   