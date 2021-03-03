<!DOCTYPE html>
<html>
<head>
	<title>Registration form</title>

<!-- a link to bootstrap to help beautify the page -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- bit of css to make the page presentable -->
	<style type="text/css">
		h1{text-align: center;background-color: #eeeeee;padding-top: 10px;
  		padding-bottom: 10px;}
  		form{text-align: center}
	</style>

</head>

<!-- kindly scroll down to line 78 for the actual php codes thanks -->

<body class="container">
	
	<h1 >STUDENT REGISTRATION </h1>

<form action="dforms.php" method="post" class="jumbotron">
	<div class='form-group'>
		<label for="FN">Firstname:</label>
		<input id="FN" type="text" name="firstname" placeholder="Enter your Firstname" required >

		<label for="LN">Lastname:</label>
		<input id="LN" type="text" name="lastname" placeholder="Enter your Lastname" required>
	</div>

	<div class='form-group'>
		<label for="email">Email</label>
		<input id="email" type="email" name="Email" placeholder="Enter your email" required>
	</div>

	<div class='form-group'>
		<label for="male">Male</label>
		<input id="male" type="radio" name="gender" value="male" required>

		<label for="female">Female</label>
		<input id="female" type="radio" name="gender" value="female">

		<label for="others">Others</label>
		<input id="others" type="radio" name="gender" value="others">
	</div>

	<div class='form-group'>
		<label for="adolesents">below 12yrs </label>
		<input id="adolesents" type="radio" name="age" value="below 12yrs">

		<label for="teens">13yrs - 19yrs</label>
		<input id="teens" type="radio" name="age" value="13yrs - 19yrs">

		<label for="youth">20yrs - 35yrs</label>
		<input id="youth" type="radio" name="age" value="20yrs - 35yrs"> 

		<label for="adult">35yrs - 60yrs</label>
		<input id="adult" type="radio" name="age" value="35yrs - 60yrs">

		<label for="aged">above 60yrs</label>	
		<input id="aged" type="radio" name="age" value="above 60yrs">
	</div>

	<div class='form-group'>
		<label for="UN">Username:</label>
		<input id="UN" type="text" name="username" placeholder="choose a Username" >

		<label for="PW">Password:</label>
		<input id="PW" type="Password" name="password" placeholder="choose a password" required>
	</div>

	<input type="submit" name="submit" value="submitted" class="btn btn-success">

</form>

<?php 

// this function is defined to help catch the undefined error that pops up when the variable $info is not yet defined//
	function myErr($errno, $errstr){
		return ;
	}

	set_error_handler("myErr");
	
// this array is made from the global variable in the html session
	$info = ['Firstname'=>$_POST['firstname'],
			'Lastname'=>$_POST['lastname'],
			'Email'=>$_POST['Email'],
			'Gender'=>$_POST['gender'],
			'Age'=>$_POST['age'],
			'Username'=>$_POST['username'],
			'Password'=>$_POST['password']];

	
	foreach ($info as $key => $value) {
		if (isset($value)) {

			echo $key .': '.$value.'<br>';
			}
			}
 ?>

</body>
</html>