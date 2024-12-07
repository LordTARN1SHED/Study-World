<?php
$servername="localhost";
$username="root";
$password="root";
$dbname="account";

$name=$_POST['userName'];
$email=$_POST['emailnum'];
$pwd=$_POST['userPwd'];
$tname=$_POST['turename'];
$snum=$_POST['schoolnum'];
$gender=$_POST['sex'];
$phone=$_POST['phonenum'];
$address=$_POST['copname'];
$idt=$_POST['identit'];
$conn= new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("连接失败：".$conn->connect_error);
}

$sql="INSERT INTO account (userName,emailnum,userPwd,turename,schoolnum,sex,phonenum,copname,identit) VALUES('$name','$email','$pwd','$tname',$snum,'$gender',$phone,'$address','$idt')";
if($conn->query($sql)===true){
    echo "新记录插入成功";
    header("Location: 3rd work3.html");
}else{
echo"Error:".$sql."<br>".$conn->error;
}

$conn->close();
?>