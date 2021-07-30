<?php
	session_start();
	include "connection.php";
	if(isset($_POST['submit']))
	{
		$filename=$_FILES['file']['name'];
		if(move_uploaded_file($_FILES['file']['tmp_name'], "images/".$filename))
		{
			unlink("images/".$_SESSION['pic']);
			$_SESSION['pic'] = $filename;
			$query="UPDATE `admin` SET firstname='".$_POST['firstname']."' ,  lastname='".$_POST['lastname']."' , 
			username='".$_POST['username']."' , email='".$_POST['email']."' , contact='".$_POST['contact']."' , pic='".$filename."' 
			WHERE username='".$_SESSION['login_user']."' ";
			if(mysqli_query($conn, $query))
			{
				echo "<script>alert('Saved successfully');window.open('profile_admin.php','_SELF');</script>";
			}
			else
			{
				echo '<script>alert("Not saved")</script>';
			}
		}
		else
		{
			echo '<script>alert("Image not uploaded successfully.")</script>';
		}
	}
	$Query = "SELECT * FROM `admin` WHERE username='".$_SESSION['login_user']."' ";
	$res = mysqli_query($conn, $Query) or die(mysqli_error());
	$row=mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include('includes/links.php'); ?>
		<title>Edit profile</title>
		<style>
			.form-control
			{
				width: 360px;
				margin: 0px auto;
			}
			label
			{
				color: white;
				margin-left: 469px;
			}
		</style>
	</head>
	<body style="background-color: darkolivegreen;">
		<?php include("navbar.php");?>
		<h3 style="color: white; text-align: center;">EDIT INFORMATION</h3>
		<div class="profile_info" style="text-align: center;">
			<span style="color: white;">Welcome</span>
			<h4 style="color: white;"><?php echo $_SESSION['login_user'];?></h4>
		</div><br>
		<form method="post" enctype="multipart/form-data">
			<label><h4><b>First Name:</b></h4></label>
			<input type="text" class="form-control" name="firstname" required="" value="<?php echo $row['firstname'];?>"> 
			<label><h4><b>Last Name:</b></h4></label>  
			<input type="text" class="form-control" name="lastname" required="" value="<?php echo $row['lastname'];?>">
			<label><h4><b>User Name:</b></h4></label>
			<input type="text" class="form-control" name="username" required="" value="<?php echo $row['username'];?>">
			<label><h4><b>Email:</b></h4></label>
			<input type="email" class="form-control" name="email" required="" value="<?php echo $row['email'];?>">
			<label><h4><b>Contact:</b></h4></label>
			<input type="text" class="form-control" name="contact" required="" value="<?php echo $row['contact']; ?>"><br> 
			<input type="file" name="file" class="form-control"><br>
			<button type="submit" class="btn btn-primary" name="submit" style="margin-left: 48%;" class="form-control" >Save</button> 
		</form>
	</body>
</html>