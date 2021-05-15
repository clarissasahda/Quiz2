<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: Verdana, Geneva, Tahoma, sans-serif;
		}
		body{
			height: 100%;
		}
		/* login */
		#Login{
			position: relative;
			width: 100%;
			height: 100vh;
			display: flex;
		}
		.foto{
			position: relative;
			width: 50%;
			height: 100%;
		}
		.foto img{
			position: absolute;
			/* top: 0px; */
			left: 0;
			width: 90%;
			height: 100%;
			background-attachment: fixed;
			background-repeat: no-repeat;
		}
		.konten{
			display: flex;
			width: 50%;
			height: 100%;
			justify-content: center;
			align-items: center;
		}
		.formLogim{
			width: 50%;
		}
		.formLogin h2{
			color: orange;
			font-weight: 600;
			text-transform: uppercase;
			margin-bottom: 20px;
			border-bottom: 4px solid #ff4584;
			display: inline-block;
			letter-spacing: 1px;
			padding-top: 100px;
		}
		.inputForm{
			margin-bottom: 20px;

		}
		.inputForm span{
			font-size: 16px;
			margin-bottom: 5px;
			display: inline-block;
			color: orange;
			font-weight: 300;
			font-size: 16px;
			letter-spacing: 1px;
		}
		input{
			width: 100%;
			padding: 10px 20px;
			outline: none;
			font-weight: 400;
			border: 1px solid orange;
			font-size: 16px;
			letter-spacing: 1px;
			color: orange;
			background: transparent;
			border-radius: 30px;
			cursor: pointer;
		}
		input:hover{
			background-color:#f53677;
			color: white;
		}
		.inputForm p{
			color: orange;
		}
		.inputForm p a{
			color:#f53677;
		}
		h3{
			color: orange;
			text-align: center;
			margin: 50px 0 10px;
			font-weight: 500;
		}
		.sosmed{
			display: flex;
			justify-content: center;
			align-items: center;
		}
		#Login .sosmed li{
			list-style: none;
			width: 50px;
			height: 50px;
			display: flex;
			justify-content: center;
			align-items: center;
			background: orange;
			border-radius: 50%;
			margin: 0 7px;
			cursor: pointer;
		}
		#Login .sosmed li img{
			width: 50px;
		}
		#Login .sosmed li:hover{
			background:#f53677;
		}
	</style>
</head>
<body>
<section id="Login">
    <div class="foto">
      <img src="makanan1.jpg" alt="">
    </div>
    <div class="konten">
      <div class="formLogin">
        <h2>Masuk</h2>
        <form action="logincontroller.php" method="POST">
          <div class="inputForm">
            <span>Username</span>
            <input type="username" name="username" id="user" required>
          </div>
          <div class="inputForm">
            <span>Password</span>
            <input type="password" name="password" id="pw" required>
          </div>
          <div class="inputForm">
            <input type="submit" value="Masuk" id="tombol">
          </div>
        </form>
        <h3>Masuk dengan sosial media</h3>
        <ul class="sosmed">
          <li><a href="http://facebook.com/"><img src="facebook.png" alt=""></a></li>
          <li><a href="http://instagram.com/"><img src="insta.png" alt=""></a></li>
          <li><a href="http://twitter.com/"><img src="twitter.png" alt=""></a></li>
        </ul>
      </div>
    </div>
  </section>
</body>
</html>
