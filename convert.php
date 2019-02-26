<!--- <html>
<body>
	<form method="POST" action="">
		<input type="text" name="link"><br>
		<input type="submit" name="submit" value="submit">
	</form>

	require ("gen.php");
if(isset($_POST["link"])){
	$a = explode("\n", $_POST["link"]);
		echo 'http://in.bakaa.me?secure'.split_link(encrypte($_POST['link'],'hashv1.00'));
    
}
</body>
</html> --->
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta name="description" content="SaveLoli">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=0.7, user-scalable=no">
<style>
    body {

	background-image: url("https://share.dmca.gripe/D0OCoiOxN9qzeKe1.png");
	font-family: "Helvetica";
    background-repeat: repeat-y;
    background-size: cover;
	
}
.welcome {

	color: #3F8694;
	text-align: center;
	font-size: 64px;
	padding: 5px;
	
}
.welcomesub {

	padding: 15px;
	color: #57a1b7;
	text-align: center;
	font-size: 22px;

}
.greeting {

	font-family: 'Helvetica'; 
	font-size: 24px; 
	margin-top: -25px;

}

.linkrow {

	font-family: 'Helvetica'; 
	font-size: 14px;

}

.loginstatus {

	font-family: 'Helvetica'; 
	font-size: 12px; 
	margin-top: 5px; 
	margin-bottom: 20px;

}


form {

	padding: 35px;
	border: 2px solid #3F8694;
	border-radius: 25px;
	text-align: center;
	margin-left: auto;
	margin-right: auto;
	background-image: url("texture8.png");
	font-family: "Helvetica";
	font-size: 24px;
	overflow: hidden;
	
}

input[type=url] { 

	width: 35%;
	min-width: 320px;
	height: 45px;
	font-size: 22px;
	font-family: "Helvetica";
	background: #CCE8ED;
	border: 1px solid #142c3c;
	border-radius: 4px;

}

input[type=url]:focus { 

	outline: 0;

}

::-webkit-input-placeholder {
	text-align: center;
	color: #000000;
}

:-moz-placeholder { /* Firefox 18- */
   text-align: center;  
}

::-moz-placeholder {  /* Firefox 19+ */
   text-align: center;  
}

:-ms-input-placeholder {  
   text-align: center; 
}

input[type=submit] {

	border: 2px solid #142c3c;
	padding: 5px;
	border-radius: 5px;
	width: 25%;
	min-width: 250px;
	text-align: center;
	background-color: #CCE8ED;
	font-family: "Helvetica";
	font-size: 22px;

}

input[type=submit]:hover {

	border: 2px solid black;
	padding: 5px;
	border-radius: 5px;
	width: 25%;
	min-width: 250px;
	text-align: center;
	background-color: #B2E7F0;
	font-family: "Helvetica";
	font-size: 22px;
	-webkit-transition: background-color 100ms linear;
	-moz-transition: background-color 100ms linear;
	-o-transition: background-color 100ms linear;
	-ms-transition: background-color 100ms linear;
	transition: background-color 100ms linear;
	cursor: pointer;

}
a.linkbutton {

	color: #3F8694;
	text-decoration: none;

}

a.linkbutton:hover {

	color: #3F8694;
	text-decoration: underline;

}

@media screen and (max-device-width: 640px) {

	form.dz-clickable {

		width: 450px;
		min-height: 250px;

	}

	div.dz-message {

		font-size: 40px;
		font-weight: 400;
		margin-top: 110px;

	}

	.greeting {

		width: 85%;
		font-size: 38px;

	}

	.linkrow {
		
		margin-top: 55px;
		font-size: 30px;

	}

	.loginstatus { 

		font-size: 20px;
		margin-bottom: 240px;

	}

}
.login-box {
    margin-top: 75px;
    height: auto;
    background: #1A2226;
    text-align: center;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
}

.login-key {
    height: 100px;
    font-size: 80px;
    line-height: 100px;
    background: -webkit-linear-gradient(#27EF9F, #0DB8DE);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.login-title {
    margin-top: 15px;
    text-align: center;
    font-size: 30px;
    letter-spacing: 2px;
    margin-top: 15px;
    font-weight: bold;
    color: #ECF0F5;
}

.login-form {
    margin-top: 25px;
    text-align: left;
}

textarea[type=text] {
    background-color: #1A2226;
    border: none;
    border-bottom: 2px solid #0DB8DE;
    border-top: 0px;
    border-radius: 0px;
    font-weight: bold;
    outline: 0;
    margin-bottom: 20px;
    padding-left: 0px;
    color: #ECF0F5;
}

input[type=password] {
    background-color: #1A2226;
    border: none;
    border-bottom: 2px solid #0DB8DE;
    border-top: 0px;
    border-radius: 0px;
    font-weight: bold;
    outline: 0;
    padding-left: 0px;
    margin-bottom: 20px;
    color: #ECF0F5;
}

.form-group {
    margin-bottom: 40px;
    outline: 0px;
}

.form-control:focus {
    border-color: inherit;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-bottom: 2px solid #0DB8DE;
    outline: 0;
    background-color: #1A2226;
    color: #ECF0F5;
}

input:focus {
    outline: none;
    box-shadow: 0 0 0;
}

label {
    margin-bottom: 0px;
}

.form-control-label {
    font-size: 10px;
    color: #6C6C6C;
    font-weight: bold;
    letter-spacing: 1px;
}

.btn-outline-primary {
    border-color: #0DB8DE;
    color: #0DB8DE;
    border-radius: 0px;
    font-weight: bold;
    letter-spacing: 1px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
}

.btn-outline-primary:hover {
    background-color: #0DB8DE;
    right: 0px;
}

.login-btm {
    float: left;
}

.login-button {
    padding-right: 0px;
    text-align: right;
    margin-bottom: 25px;
}

.login-text {
    text-align: left;
    padding-left: 0px;
    color: #A2A4A4;
}

.loginbttm {
    padding: 0px;
}

</style>
<title>Convert Link</title>
</head>

<body>
<center>
<header><h3>Your One & Only Little Kitten House</h3></header>

<br>
<form method="POST" action="">
		<input type="url" name="link"><br>
		<input type="submit" name="submit" value="submit">
	</form>
<br>
<textarea type="text" rows="4" cols="50" readonly>
<?php
	require ("gen.php");
if(isset($_POST["link"])){
	$a = explode("\n", $_POST["link"]);
		echo 'http://in.bakaa.me?secure'.split_link(encrypte($_POST['link'],'hashv1.00')); //change with your website
    
}
?>
</textarea>
<br>
<span><small><a href="<?php	echo 'http://in.bakaa.me?secure'.split_link(encrypte($_POST['link'],'hashv1.00'));?> "><button type="button" class="btn btn-primary btn-xs">Test Link</button></a></small></span><!-- change with your website -->
</center>
</body></html>