<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>个人信息</title>
	<link rel="stylesheet" type="text/css" href="fzx.css">
</head>
<style>
	body {
		background-image: url('bg.jpg');
		background-repeat: no-repeat;
		background-size: cover;
	}
</style>

<body style=font-family:华文新魏>
	<h1 class="H" align="center">学习world</h1>
	<div class="nav" height="50px">
		<a href="#" class="navbox" align="center">个人信息</a>
		<a href="3rd work5.html" class="navbox" align="center">网上课程</a>
		<a href="photographing.html" class="navbox" align="center">文件传输</a>
	</div>
	
	<p align="center">
	<br /><br /><h2 class="H2" align="center" bgcolor="#ffffff">信息表格</h2>
	<table class="center" border="1" bgcolor="#ffffff" align="center" width="500">
		<tr>
			<td style="text-align:center;background-color: darkgray;"><b>姓名</b></td>
			<td>
				<?php
				    session_start();
				    echo $_SESSION["utname"];
				?>
			</td>
			<td style="text-align:center;background-color: darkgray;"><b>性别</b></td>
			<td><?php
				    session_start();
				    echo $_SESSION["usex"];
				?></td>
			<td rowspan="4"><img src="fzx.jpg" alt=“肖像logo" width="200" height="280" style="text-align: right;" /></td>
		</tr>
		<tr>
			<td style="text-align:center;background-color: darkgray;"><b>用户名</b></td>
			<td><?php
				    session_start();
				    echo $_SESSION["uname"];
				?></td>
			<td style="text-align:center;background-color: darkgray;"><b>学号</b></td>
			<td><?php
				    session_start();
				    echo $_SESSION["uschoolnum"];
				?></td>

		</tr>
		<tr>
			<td style="text-align:center;background-color: darkgray;"><b>手机号</b></td>
			<td colspan="3"><?php
				    session_start();
				    echo $_SESSION["uphone"];
				?></td>

		</tr>
		<tr>
			<td style="text-align:center;background-color: darkgray;"><b>电子邮件</b></td>
			<td colspan="3"><?php
				    session_start();
				    echo $_SESSION["uemailnum"];
				?></td>

		</tr>
		<tr>

			<td style="text-align:center;background-color: darkgray;" colspan="5"><b>身份</b></td>

		</tr>
		<tr>

			<td colspan="5">
				<ul>
				<?php
				    session_start();
				    echo $_SESSION["uidentity"];
				?>
				</ul>
			</td>

		</tr>
		<tr>

			<td style="text-align:center;background-color: darkgray;" colspan="5"><b>单位地址</b></td>

		</tr>
		<tr>

			<td colspan="5">
				<ul>
				<?php
				    session_start();
				    echo $_SESSION["ucname"];
				?>
				</ul>
			</td>

		</tr>
		<tr>

			<td style="text-align:center;background-color: darkgray;" colspan="5"><b>爱好</b></td>

		</tr>
		<tr>

			<td colspan="5">
				<ul>

				</ul>
			</td>

		</tr>
		<tr>

			<td style="text-align:center;background-color: darkgray;" colspan="5"><b>个性签名</b></td>

		</tr>
		<tr>

			<td colspan="5">
				<ul>

				</ul>
			</td>

		</tr>


	</table>

	<br /><br /><h2 class="H2" align="center" bgcolor="#ffffff">修改账户密码</h2>
	<form align="center " action="modify.php" method="post" enctype="multipart/form-data"
					onsubmit="return confirm('确认提交吗？');">
					用户名　：<input type="text" name="userName" id="userName" placeholder="请输入用户名" required /> <br /><br />
					学　号　：<input type="text" name="schoolnum" id="schoolnum" required pattern="[0-9]{8}"
						placeholder="请输入学号" title="请输入8位由数字组成的学号" required /><br /><br />

					旧密码　：<input type="password" name="olduserPwd" id="olduserPwd" required pattern="[A-Za-z0-9_]{8,16}"
						title="请输入8-16位由字母数字或下划线组成的密码" placeholder="请输入密码" required /><br /><br />

						密　码　：<input type="password" name="userPwd" id="userPwd" required pattern="[A-Za-z0-9_]{8,16}"
						title="请输入8-16位由字母数字或下划线组成的密码" placeholder="请输入密码" required /><br /><br />
					确认密码：<input type="password" name="userRePwd" id="userRePwd" placeholder="请输入确认密码"
						required /><br /><br />
					<script>
						const password1 = document.getElementById("userPwd");
						const password2 = document.getElementById("userRePwd");

						password2.addEventListener("input", () => {
							if (password2.value !== password1.value) {
								password2.setCustomValidity("两次输入密码不一致！");
							} else {
								password2.setCustomValidity("");
							}
						});
					</script>
					<p align="center">
						<input class="mybutton" type="submit" value="修改"
							name="btnSubmit" />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<input class="mybutton" type="reset" value="重置" name="btnReset" /><br /><br />
					</p>
					</form>
	<p align="center">
		<a href="3rd work.html">点此进入注册页面</a>
		<a href="3rd work2.html">点此进入登录页面</a><br /><br />
		<h10 style="color: grey;font-family:Times New Roman">copyright--1798224146@qq.com</h10>
	</p>
	</p>
</body>

</html>