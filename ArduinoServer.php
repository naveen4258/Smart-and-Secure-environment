<html>
<head>
<title>
<?php
if(isset( $_GET['temp1']))
{
$var1=$_GET['temp'];
print("The temperature is ".$var1);
$fileContent="TEMPERATURE is ".$var1."\n";
$fileStatus=file_put_contents('myFile.txt',$fileContent,FILE_APPEND);
if($fileStatus!=false)
{
echo"Success";
}
else
{
echo"Fail";
}
}
else
{
echo"Data not set";
}
?>

</head>
<body>
</body>
</html>