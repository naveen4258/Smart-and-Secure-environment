
<?php
if(!($conn=mysql_connect("localhost","root","")))
  die("could not connect");
if(!($db=mysql_select_db("registration",$conn)))
  die("could not connect to database");
$d=$_POST['email'];
$f=$_POST['pwd'];
$sql="select * from reg1 where email='$d'&&ps='$f' ";
$result=mysql_query($sql,$conn);
if($result){
 $row1 = mysql_fetch_array($result); 
 $num=mysql_num_rows($result);
 if($num==1){
 echo "you are a valid user!!\n";
 echo "<br><span>Name:<span>";
 echo $row1['username'];
}
else{
echo "Inalid user!!";
}
}   
else 
  echo mysql_error();
?>
