<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php

include_once 'dbconfig.php';

if(isset($_POST['btn-save']))

{

 // variables for input data

 $complete_name = $_POST['complete_name'];

 $nickname = $_POST['nickname'];

 $Email_Address = $_POST['Email_Address'];

 $cellphone = $_POST['cellphone'];

 $comment = $_POST['comment'];

 // variables for input data

 

 // sql query for inserting data into database

 

        $sql_query = "INSERT INTO guestform(complete_name,nickname,Email_Address,cellphone,comment) 

		VALUES('$complete_name','$nickname','$Email_Address','$cellphone','$comment')";

 // sql query execution function

 if(mysqli_query($con, $sql_query))

 {

  ?>

  <script type="text/javascript">

  alert('Data Are Inserted Successfully ');

  window.location.href='database.php';

  </script>

  <?php

 }

 else

 {

  ?>

  <script type="text/javascript">

  alert('error occured while inserting your data');

  </script>

  <?php

 }

 // sql query execution function

}

?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Add Data Page</title>

<link rel="stylesheet" href="style.css" type="text/css" />

<style>

#body {

	width: 100%;

	height: 415px;

	margin-left: 0px;

	margin-top: 212px;

	overflow: auto;

}

</style>

</head>

<body style="background: url(bg.png); background-repeat:no-repeat; background-position:top center; background-size:100%; margin:0; padding:0;">

<center>



<div id="body">

 <div id="content">

    <form method="post">

    <table align="center">

    <tr>

    <td align="center"><a href="database.php">back to main page</a></td>

    </tr>

    <tr>

    <td><input type="text" name="complete_name" placeholder="Complete Name" required /></td>

    </tr>

    <tr>

    <td><input type="text" name="nickname" placeholder="Nickname" required /></td>

    </tr>

    <tr>

    <td><input type="text" name="Email_Address" placeholder="Email Address" required /></td>

    </tr>

	<tr>

    <td><input type="number" name="cellphone" placeholder="Cellphone Number" required /></td>

    </tr>

	 <td>Comment: <br>

	 <textarea name="comment" placeholder="Comment" rows="5" cols="144"></textarea>

	 </td>

    <tr>

    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>

    </tr>

    </table>

    </form>

    </div>

</div>



</center>

</body>