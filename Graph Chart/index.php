<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
	<section class="login">

	<script>
		document.getElementById("#lgErro").style.color = "red";
		console.log("test");
	</script>

	<?php

		include "connection.inc";

		if(isset($_POST["f_logar"])) {
			$user=$_POST["f_user"];
			$senha=$_POST["f_senha"];

			$sql="SELECT * FROM tb_projetos WHERE projectname='$user' AND password='$senha'";
			$res=mysqli_query($con,$sql);
			$ret=mysqli_fetch_array($res);

			if($ret == 0) {
				
			} else {

				echo "DADOS: ".$ret['valores']."<br>";
				
				$chave1="abcdefghiofdnwikfsj";
				$chave2="ABSJNEOWFNEWOFJHWFJ";
				$chave3="1234567890";
				$chave=str_shuffle($chave1.$chave2.$chave3);
				$tam=strlen($chave);
				$num="";
				$qtde=rand(100,200);
				for($i=0;$i<$qtde;$i++) {
					$pos=rand(0,$tam);
					$num.=substr($chave,$pos,1);
				}
				session_start();
				$_SESSION['numlogin']=$num;
				$_SESSION['username']=$user;
				$_SESSION['dados']=$ret['valores'];
				header("Location:project.php?num=$num");
				
			}
			mysqli_close($con);
		}
	?>
	
		<div class="login_box">
			<div class="left">
				<div class="contact">
					<form action="index.php" method="post">
						<h3>SIGN IN</h3>
						<input type="text" name="f_user" placeholder="PROJECT NAME">
						<input type="password" name="f_senha" placeholder="PASSWORD">
						<p id='lgErro'>
						Login Error<br>
						Wrong Project Name<br>
						or Wrong Password<br>
						Try Again
						</p>
						<button class="submit" type="submit" name="f_logar">LET'S GO</button>
					</form>
				</div>
			</div>
			<div class="right">
				<div class="right-text">
					<h2>LOGO</h2>
					<h5>A great company to work with!</h5>
				</div>
				<div class="right-inductor"><img src="" alt=""></div>
			</div>
		</div>
	</section>
</body>
</html>