<!doctype html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <title>CSI Ghaziabad</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

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
		
		<?php include "top.php"; ?>
<?php include 'dbConnect.php';?>
<div class="container">
<div class="row">
	<br><br>
        <div class="col-lg-12">
            <h2 class="page-header"><center>Managing Committee </center>             
            </h2>
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a>
                </li>
                <li>Managing Committee</li>
            </ol>
        </div>
    </div>
    <?php
   
$i=1;
if(isset($_POST['Sno']))
{
	$sno=$_POST['Sno'];
	$qry="update committee set View='N' where Sno='$sno'"; 
	$res=mysqli_query($connect,$qry)or die(mysqli_error($connect));
}
 ?>
<div class="container">
<?php 
if(isset($_POST['Add']))
{
	$name=$_POST['Name'];
	$desg=$_POST['Desg'];
	$rank=$_POST['Rank'];
	//$event=$_POST['picture'];
    $F=$_FILES["picture"]["name"];
    $m=explode(".", $F);
    $num=count($m);
    $ext=$m[$num-1];
    $r=date("d_h_i_s");
    $g="IMG_".$r.".".$ext;
   
	$qry="INSERT INTO committee (Name,Desg,Rank,Type,Photo) VALUES ('$name','$desg','$rank','M','$g')"; 
	$res=mysqli_query($connect,$qry)or die(mysqli_error($connect));
}
if(isset($_SESSION['log3']))
	if($_SESSION['log3']=='ADMIN')
	{
		?>
		<?php
        if(isset($_POST['Add']))
        {
            //var_dump($_FILES);
            
           // var_dump($_FILES["File"]);
            $F=$_FILES["picture"]["name"];
    $m=explode(".", $F);
    $num=count($m);
    $ext=$m[$num-1];
    $r=date("d_h_i_s");
    $g="IMG_".$r.".".$ext;
            move_uploaded_file($_FILES["picture"]["tmp_name"],"images\\" .$g);
        }

            ?>
		<br>
		<br>
		<h2>Add Committee Member</h2>
		<br>
		<div class="row">
		<form action="" method="POST" enctype="multipart/form-data">
		<div class="col-lg-1">
		<label>Name:</label></div>
		<div class="col-lg-3">
		<input type="text" name="Name" required></input>
		</div>
		<div class="col-lg-1">
		<label>Desg:</label></div>
		<div class="col-lg-3">
		<input type="text" name="Desg" required></input>
		</div>
		<div class="col-lg-1">
		<label>Rank:</label></div>
		<div class="col-lg-2">
		<input type="number" name="Rank" required></input>
		</div>
		<br>
		<br>
        
        <label for="File">Upload photo : </label>
        <input type="file" id="File" name="picture" style="margin-top: 20px" required>
		<br>
		<center>
		<input type="Submit" name="Add"></input>
		</center></form>
		</div>
		<br>
		<br>
	<?php } ?>
    
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered table-responsive">
                <thead>
                <th align="center">S.No</th>
                <th align="center">Photo</th>
                <th align="center">Name</th>
                <th align="center">Post</th>
				<?php if(isset($_SESSION['log3']))
				if($_SESSION['log3']=='ADMIN'){?>
				<th align="center">Rank</th>
				<th align="center">Delete</th>
				<?php } ?>
                </thead>
                <tbody>
                <?php $qry="Select * from committee where View='Y' AND Type='M' order by Rank"; 
						$res=mysqli_query($connect,$qry)or die(mysqli_error($connect));
						while($row=mysqli_fetch_assoc($res))
						{
							?>
							<tr>
							<form action="" method="POST">
							<td><?php echo $i++; ?></td>
							<td><img  src='<?php echo "images/$row[Photo]"; ?>' style="margin:2px;margin-bottom:20px;" class="img" width="140px" height="130px"/></a></td>
							<td><?php echo $row['Name'].'<br>'.$row['Post'].'<br>'.$row['email']; ?></td>
							<td><?php echo $row['Desg']; ?></td>
							<?php if(isset($_SESSION['log3']))
							if($_SESSION['log3']=='ADMIN'){?>
							<td><?php echo $row['Rank']; ?></td>
							<td><input type="submit" name="delete" value="Delete"></td>
							<input type="hidden" value="<?php echo $row['Sno']; ?>" name="Sno" />
							<?php } ?>
							</form>
							</tr>
							<?php
						}
						?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.row -->

    <hr>
</div>
</div>
   
    <?php include 'footer.php'; ?>


		<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>
	</body>
</html>
