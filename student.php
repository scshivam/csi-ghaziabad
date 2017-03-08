<!doctype html>
<html lang="en">
    <head>
		
        <!-- meta data & title -->
        <meta charset="utf-8">
        <title>CSI Ghaziabad</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
		
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300">
        <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" type="text/css" media="all" href="assets/css/style-projects.css">
        
		
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
	</head>
	<body>
	
		<?php include "top.php"; 
			include "dbConnect.php";?>
		<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-10"><br>
					<h2 class="page-header"><center>Institutional Members & Branches</center>
						
					</h2>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a>
						</li>
						<li >Institutional Members & Branches</li>
					</ol>
				</div>
			</div>
		<br><br>
		<?php if(isset($_SESSION['log3']))
			if($_SESSION['log3']=='ADMIN')
			{
			if(isset($_POST['submit']))
			{
			$name=$_POST['ins_name'];	
			$add=$_POST['addr'];	
			$coun=$_POST['couns'];	
			$email=$_POST['email'];	
			$website=$_POST['website'];	
			$pass=$_POST['pass'];	
			$qry="Insert into student_branch (inst_name,addr,couns,email,website) VALUES ('$name','$add','$coun','$email','$website')";
			$res=mysqli_query($connect,$qry)or die(mysqli_error($connect));
			$qry="Insert into login (id,password,log3) VALUES ('$email','$pass','USER')";
			$res=mysqli_query($connect,$qry)or die(mysqli_error($connect));
			}
			?>
			<form method="post">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-2"><label>Institute name</label></div>
					<div class="col-md-2"><input type="text" name="ins_name" class="form-control" required/></div>
					<div class="col-md-1"></div>
					<div class="col-md-1"><label>Address</label></div>
					<div class="col-md-2"><input type="text" name="addr" class="form-control" required/></div>
				</div><br>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-2"><label>Counsellor</label></div>
					<div class="col-md-2"><input type="text" name="couns" class="form-control" required/></div>
					<div class="col-md-1"></div>
					<div class="col-md-1"><label>E-mail</label></div>
					<div class="col-md-2"><input type="text" name="email" class="form-control" required/></div>
				</div><br>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-2"><label>Website</label></div>
					<div class="col-md-2"><input type="text" name="website" class="form-control" required/></div>
					<div class="col-md-1"></div>
					<div class="col-md-1"><label>Password</label></div>
					<div class="col-md-2"><input type="password" name="pass" class="form-control" required/></div>
				</div><br>
				<div class="row">
					<center><button type="submit" name="submit" class="btn btn-submit">Add New</button>
					</center>
				</div>
			</form><br>
		<?php } ?>
		<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th><center>S.no.</center></th>
					<th><center>Institute Name</center></th>
					<!--<th>Institute Address</th>-->
					<th><center>Counsellor</center></th>
					<th><center>E-mail</center></th>
					<th><center>Website</center></th>
				</tr>
			</thead>
			<tbody>
			<?php
				
				$qry="Select * from student_branch order by sno";
				$res=mysqli_query($connect,$qry)or die(mysqli_error($connect));
				$i=1;
				while($row=mysqli_fetch_assoc($res))
				{
				?>
				<tr>
					<td><?php echo $i++;?></td>
					<td><?php echo $row['inst_name'] ?></td>
					<!--<td><?php //echo $row['addr'] ?></td>-->
					<td><?php echo $row['couns'] ?></td>
					<td><?php echo $row['email'] ?></td>
					<td><a href="<?php echo $row['website'] ?>" target="_blank"><?php echo $row['website'] ?></a></td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
		</div>
		</div>
		<?php include "footer.php"; ?>
		
		
		<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>
	</body>
</html>
