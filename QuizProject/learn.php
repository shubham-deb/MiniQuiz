<html>
 <body bgcolor="#ffffCC">
<center>
 <h1>
 <?php
$filename = "C:\Users\debsh_000\Desktop\pal.txt";
$file = fopen( $filename, "w" );
if( $file == false )
{
   echo ( "Error in opening new file" );
   exit();
}
fwrite( $file, "This is  a simple test\n" );
fclose( $file );
?>

<html>
<head>
<title>Writing a file using PHP</title>
</head>
<body>

<?php
if( file_exists( $filename ) )
{
   $filesize = filesize( $filename );
   $msg = "File  created with name $filename ";
   $msg .= "containing $filesize bytes";
   echo ($msg );
}
else
{
   echo ("File $filename does not exit" );
}
?>
<?php
function printMe($param = NULL)
{
   print $param;
}
printMe("This is test");
printMe();
?>
</h1>
 </center>
 </body>
 </html>