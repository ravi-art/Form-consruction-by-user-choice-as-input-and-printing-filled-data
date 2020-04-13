<?php
      session_start();
	  $_SESSION["title"]=$_POST["fna"]; 
	  $_SESSION["color"]=$_POST["co1"];
	  $_SESSION["txtcolor"]=$_POST["co2"];
	  $_SESSION["element"]=$_POST["e1"];
	  $_SESSION["fsize"]=$_POST["f1"];
	  ?>
<html>
<h1 align="center" style="color:blue"> Base of the form</h1>
<fieldset>
	<style>
  table {
	  
          background-color:orange;
          border-radius:3px;
	      font-size:20px;
		  padding:10px;
		  align:center;
		  text-align:center;
	    };
   tr,input{
            
			margin:20px;
        }
	
		
  body{
	    background-color:yellow;
		font-faimly:san-serif;
      }
  </style>
  </head>
  <center>
 <body bgcolor='<?php echo $clr;?>'>
  
<form id='form1' method="post" action="form2.php">
		 <table id="table">
<p>
		<center>
		<tr>
	 	No. of element<input type="text" id="ele" value='<?php echo $_POST["e1"];?>' >
	  	</tr>
		</center><p>
	
		
	  	<td>S.no</td>
            <td>Input</td>
			<td>Input Type</td>
		
			<td>Id</td>
	
		<?php
		  $f="1";
		  for($i=0;$i<$_SESSION["element"];$i++)
		  { 
			  echo"
		           <tr><td><input type='text' name='sr[]'  value='".$f."'required></td>
			<td><input type='textbox' name='label[]' required></td>
            
            <td><select  name='select[]' required>
                <option value='sel'>--select--</option>
			    <option value='radio'>RADIO</option>
			    <option value='checkbox'>CHECKBOX</option>
			    <option value= 'file'>FILE</option>
			   	<option value='text'>TEXT</option>
			   	<option value= 'password'>PASSWORD</option>
			   	<option value='email'>EMAIL</option>
			   	<option value='date'>DATE</option>
			    </select></td>
			
            <td><input type='text' name='id[]' required></td>
        </tr>  ";
		++$f;
		  }
     ?>		
       </table>
       <center>
	   <br>
	   <button type="submit" name="submit" >SUBMIT</button>
	    <button type="reset"  name="reset">RESET</button>	
</br>		
	   </center>
</form>
</center>
</body>
</fieldset>
</html>