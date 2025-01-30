<?php
	include('conn.php');

	$id=$_GET['category'];

	$cname=$_POST['cname'];
	$sub = addslashes($cname);

	$sql="update category set catname='$sub' where categoryid='$id'";
	$conn->query($sql);

	header('location:category.php');
?>