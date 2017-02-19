<html>
 <body bgcolor="#ffffCC">
<center>
 <h1><?php
 $f_usr= $_POST["userid"];
 $f_pswd= $_POST["password"];
 $con=mysql_connect("localhost","root","");
 if(! $con)
 {
         die('Connection Failed'.mysql_error());
 }
 mysql_select_db("registration",$con);
 $result=mysql_query("SELECT username,password
 FROM details;");
 while($row=mysql_fetch_array($result))
 {
     if($row["username"]==$f_usr && $row["password"]==$f_pswd)
         {echo"Welcome :  $f_usr";
		 break;
		 }
		
 }
?>
</h1>
 </center>
 </body>
 </html>