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
        <script type="text/javascript">
function myfunction()
{
  document.getElementById('myform').submit();
}
</script>
	</head>
	<body>
		
		<?php include "top.php"; ?>
        <div class="services-header">
						<center><h2 class="services-header-title">Branch Events</h2></center>
						<hr>
					</div>
		<div class="col-md-1"></div>
		<form id="myform" method="post" action="">
            <div class="row">
                            <div class="col-lg-4">
		                    <label>Branch:</label></div>
		                    <div class="col-lg-4">
		                    <select class="form-control" name="CollegeName" onchange="myfunction()">
		                        <option value="">Choose One</option> 
		                    	<?php
		                    	$qryx="select inst_name,email from student_branch";
		                    	$resx=mysqli_query($connect,$qryx)or die(mysqli_error($connect));
		                    	while($rowx=mysqli_fetch_assoc($resx))
		                    	{
		                    		extract($rowx);
		                    		echo "<option value='$email'>$inst_name</option>";
		                    	}
		                    	?>
		                    </select>
		                    </div>
		</div>
		
		</form>
		<?php 
         if(isset($_POST['CollegeName']))
         {
         	?>
         	<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12"><br>
            <h2 class="page-header">Events

            </h2>
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a>
                </li>
                <li >Events</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12">
            <?php
			$dat=date('Y-m-d');
            $i=1;
             $ruleQuery="SELECT * FROM event_detail  WHERE Type='Y' AND to_date>='$dat' ORDER BY Rank ";
            $ruleResult=mysqli_query($connect,$ruleQuery) or die();
            
            while($ruleRow=mysqli_fetch_assoc($ruleResult)){
                if($ruleRow['Added_By']==$_POST['CollegeName'])
                {
            	?>
              <div class="center" align="center">   <h2><b><u><?php echo $ruleRow['eventName']."<img src='images/new12.gif' style='width:33px;height:16px;' />";?></u></b></h2> </div>
                <div class="col-lg-8">
               <h3><u>Event Starts From</u> : <?php echo $ruleRow['from_date'];?></h3></div>
               <div class="col-lg-4"><h3><u>Event Ends On </u> : <?php echo $ruleRow['to_date'];?></h3></div>
               <hr>

               <center><h3><u>Event Details </u> : </h3></center>
               
               <p><?php echo $ruleRow['Eventdetail_1'];?></p>
               <p><?php echo $ruleRow['Eventdetail_2'];?></p>
               <p><?php echo $ruleRow['Eventdetail_3'];?></p>
               <p><?php echo $ruleRow['Eventdetail_4'];?></p>
               <p><?php echo $ruleRow['Eventdetail_5'];?></p>
               <hr>
               
                
          <?php } }?>

            </div>
    </div>
    <!-- /.row -->
 <div class="row">
        <div class="col-lg-12">
            <?php
            $i=1;
			$dat1=date('Y-m-d');
            $ruleQuery="SELECT * FROM event_detail  WHERE Type='Y' AND to_date<'$dat1' ORDER BY Rank ";
            $ruleResult=mysqli_query($connect,$ruleQuery) or die();
			
            
            while($ruleRow=mysqli_fetch_assoc($ruleResult)){
            	if($ruleRow['Added_By']==$_POST['CollegeName'])
            		{
            			?>
              <div class="center" align="center">   <h2><b><u><?php echo $ruleRow['eventName'];?></u></b></h2> </div>
                <div class="col-lg-8">
               <h3><u>Event Starts From</u> : <?php echo $ruleRow['from_date'];?></h3></div>
               <div class="col-lg-4"><h3><u>Event Ends On </u> : <?php echo $ruleRow['to_date'];?></h3></div>
               <hr>

               <center><h3><u>Event Details </u> : </h3></center>
               
               <p><?php echo $ruleRow['Eventdetail_1'];?></p>
               <p><?php echo $ruleRow['Eventdetail_2'];?></p>
               <p><?php echo $ruleRow['Eventdetail_3'];?></p>
               <p><?php echo $ruleRow['Eventdetail_4'];?></p>
               <p><?php echo $ruleRow['Eventdetail_5'];?></p>
               <hr>
               
                
          <?php } }?>

            </div>
    </div>
    
</div>

         	<?php
         }
		?>


		
		
		<?php include "footer.php"; ?>
		
		
		<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>
	</body>
</html>
