<?php
session_start();
$name=$_POST['loginuserName'];
$_SESSION["uname"]=$name;
$pwd=$_POST['loginuserPwd'];
$_SESSION["upwd"]=$pwd;
$selectedidentity = $_POST['identit'];
$_SESSION["uidentity"]=$selectedidentity;


$servername="localhost";
$username="root";
$password="root";
$dbname="account";

$conn= new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("连接失败：".$conn->connect_error);
}

$keyword = "$name"; // 搜索关键字

// 构造 SQL 查询语句
$sql = "SELECT * FROM account WHERE userName = '$keyword'";

// 执行查询
$result = $conn->query($sql);

// 处理查询结果
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // 获取其他数据
        $pwd2= $row["userPwd"];
        $idt=$row["identit"];
        $tname=$row['turename'];
$_SESSION["utname"]=$tname;
$snum=$row['schoolnum'];
$_SESSION["uschoolnum"]=$snum;
$phone=$row['phonenum'];
$_SESSION["uphone"]=$phone;
$cname=$row['copname'];
$_SESSION["ucname"]=$cname;
$gender=$row['sex'];
$_SESSION["usex"]=$gender;
$email=$row['emailnum'];
$_SESSION["uemailnum"]=$email;
    }
} else {
    echo "没有匹配的结果";
}

$conn->close();

if($selectedidentity===$idt){
    header("Location: 3rd work1.html");
}
if($name==="Administrator"&&$pwd==="00000000"){
    header("Location: 3rd work5.html");
exit;
}
if($pwd===$pwd2&&$selectedidentity===$idt){
    header("Location: 3rd work5.html");
exit;
}
else{
    header("Location: 3rd work6.html");
}
?>
