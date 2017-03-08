<?php

require 'dbConnect.php';
?>
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
        <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
.img:hover{
    color: #424242; 
  -webkit-transition: all .3s ease-in;
  -moz-transition: all .3s ease-in;
  -ms-transition: all .3s ease-in;
  -o-transition: all .3s ease-in;
  transition: all .3s ease-in;
  opacity: 1;
  transform: scale(1.7);
  -ms-transform: scale(1.7); /* IE 9 */
  -webkit-transform: scale(1.7); /* Safari and Chrome */
  border-radius:25px;
</style>
	</head>
	<body>
		
		<?php include "top.php"; ?>
<?php
if(!isset($_SESSION['log3'])){
    ?>
<div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><center>Gallery</center>

            </h2>
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a>
                </li>
                <li>Gallery</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12">
            

<?php
  $query2="SELECT * FROM gallery WHERE Type='G' AND View='Y' ORDER BY Rank";
  $runq2=mysqli_query($connect,$query2) or die();
  $num=mysqli_num_rows($runq2);
  if($num>0)
  {
  while($rowf=mysqli_fetch_assoc($runq2))
  { 
	$sno=$rowf['S.No.']; ?>
    <img  src='<?php echo "images/$rowf[File]"; ?>' style="margin:2px;margin-bottom:20px;" class="img" width="265px" height="190px"/>
 <?php }
  }
?>

     </div>
    </div>
    <!-- /.row -->

    <hr>

</div></div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>


<!-- /.container -->
<?php }
else{
    ?>
   <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Add Images

            </h2>
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a>
                </li>
                <li >Add Images</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12">

        <div id="container"><?php
        if(isset($_POST['submit']))
        {
            //var_dump($_POST);
           // var_dump($_FILES["File"]);
            $F=$_FILES["File"]["name"];
    $m=explode(".", $F);
    $num=count($m);
    $ext=$m[$num-1];
    $r=date("d_h_i_s");
    $g="IMG_".$r.".".$ext;
            move_uploaded_file($_FILES["File"]["tmp_name"],"images\\" .$g);
        }

            ?>
<form action="Gallery.php" method='post' enctype="multipart/form-data">
<div class="col-lg-8">
<label for="Data">Image Name:</label>
<input name="Data" type="text" id="Data" name="Data" style="margin-top: 20px" required></div>
    <div class="col-lg-4">
<label for="rank">Rank:</label>
<input name="rank1" type="number" id="rank" name="rank" style="margin-top: 20px" required> </div>   
<br>
<br>
<hr>
<div class="col-lg-8">
<label for="File">File Name:</label>
<input name="File" type="file" id="File" name="File" style="margin-top: 20px" required> </div>  
<div class="col-lg-4">
<label for="Event">Event Name:</label>
<select name="event"  style="margin-top: 20px" required>
<option value="">Choose One</option>
<?php  $qry1="Select `S.No.`,`eventName` from event_detail where Type='Y'";
$res1=mysqli_query($connect,$qry1)or die(mysqli_error($connect));
while($row1=mysqli_fetch_assoc($res1))
{ ?>
<option value="<?php echo $row1['S.No.'];?>"><?php echo $row1['eventName'];?></option>
<?php } ?></select> </div>  

<br>
<br>
<hr>

<div class="row">
 <div class="col-lg-12"></div>
 <center><b>
 <input type="submit" value="submit" name="submit">
 </b></center>
 </div>
 <hr>
</form>
</div>
<?php
if(isset($_POST['Data']))
{
    require 'dbConnect.php';
    $event=$_POST['Data'];
   $F=$_FILES["File"]["name"];
    $m=explode(".", $F);
    $num=count($m);
    $ext=$m[$num-1];
    $r=date("d_h_i_s");
    $g="IMG_".$r.".".$ext;
    $R=$_POST['rank1'];
	$events=$_POST['event'];

    $c11="INSERT INTO gallery (Data,File,Type,Rank,EventName) VALUES ('$event','$g','G','$R','$events')";
  

if(mysqli_query($connect,$c11))
{
    ?>
   <script> alert("New Image Added Successfully");</script>
<?php
}
else
{
    echo "ERROR".$c11."<br>".mysqli_error($connect);
}}  
if(isset($_POST['delete']))
{
    
    $w=$_POST['rowno'];
     $query1="UPDATE gallery SET View='N' WHERE `S.No.`='$w'";
    $runq=mysqli_query($connect,$query1) or die();
}


    ?>
    </div>

    <div class="row">
        <div class="col-lg-12">
           <center><h1>Images</h1></center><hr>
           <div class="col-lg-10">                   
                     <div class="row">
                     <table id="myTable">
                     <tr>
                     <th>S.No.</th>
                     <th>Image Name</th>
					 <th>Event Name</th>
					  <?php if(isset($_SESSION['log3']))
				if($_SESSION['log3']=='ADMIN'){?>
                     <th>Remove</th>
				<?php } ?>
                     </tr>
            <?php
            $i=1;
             $ruleQuery="SELECT g.*,ed.eventName FROM gallery g,event_detail ed WHERE g.Type='G' AND g.View='Y' and ed.`S.No.`=g.EventName";
            $ruleResult=mysqli_query($connect,$ruleQuery) or die();
            
            while($ruleRow=mysqli_fetch_assoc($ruleResult)){?>
                <form action="" method="POST">
            <tr>
               <td><?php echo $i;?></td>
              <td><?php echo $ruleRow['Data'];?></td>
			  <td><?php echo $ruleRow['eventName'];?></td>
			   <?php if(isset($_SESSION['log3']))
				if($_SESSION['log3']=='ADMIN'){?>
              <td><input type="submit" name="delete" value="Remove" ></td>
              <input type="hidden" name="rowno" value="<?php echo $ruleRow['S.No.'];?>">
				<?php } ?>
              </tr>
               </form>
                
          <?php $i++; }?>
          </table>
          </div>
          </div>


            </div>
    </div>
    <!-- /.row -->

    <hr>
    </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>


    <?php
}
?>
		
		
		<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>
	</body>
</html>
