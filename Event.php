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
		</style>
		<script>
			function deleteRow(r) {
				var i = r.parentNode.parentNode.rowIndex;
				document.getElementById("myTable").deleteRow(i);
				
			}
		</script>
	</head>
	<body>
		
		<?php include "top.php"; ?>
		
		
		<!-- Page Content -->
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
			<div class="row">
				
				<div class="col-md-3">
					<div class="list-group">
						<?php
							
							$eventQuery="Select * from student_branch order by sno";
							$eventResult=mysqli_query($connect,$eventQuery);
							while($eventRow=mysqli_fetch_assoc($eventResult)) {
							?>
							<a  class="list-group-item" id="<?php echo $eventRow['sno']; ?>"><?php echo $eventRow['inst_name'] ?></a>
						<?php } ?>
						
					</div>
					
				</div>
				
				<!-- Content Column -->
				<div class="col-md-9">
					<?php
						$eventQuery="Select * from student_branch order by inst_name";
						$eventResult=mysqli_query($connect,$eventQuery);
						while($eventRow=mysqli_fetch_assoc($eventResult)) {
						$email=$eventRow['email'];
					?>
					<div class="hide" id="event<?php echo $eventRow['sno']; ?>">
					<?php
					$qry="SELECT * from event_detail where Type='Y' AND Added_By='$email' order by from_date desc";
					$res=mysqli_query($connect,$qry)or die(mysqli_error($connect));
					while($row=mysqli_fetch_assoc($res))
					{
					$today=strtotime(date('Y-m-d'));
					$frm1=strtotime($row['from_date']);
					$frm=date('d-m-Y',strtotime($row['from_date']));
					$to=date('d-m-Y',strtotime($row['to_date']));
					echo "<div class='row'><div class='col-md-12'><h3 align='center'><u>".$row['eventName'];
					if($today<=$frm1)
					echo "<img src='images/new12.gif' style='width:33px;height:16px;' />";	
					echo"</u></h3></div></div><br><div class='row'><div class='col-md-1'></div><div class='col-md-5'><b>Start Date: ".$frm."</b></div><div class='col-md-5'><b>End Date: ".$to."</b></div></div><br><div class='row'><p align='center'>".$row['Eventdetail_1']."</p></div><div class='row'><p align='center'>".$row['Eventdetail_2']."</p></div><div class='row'><p align='center'>".$row['Eventdetail_3']."</p></div><div class='row'><p align='center'>".$row['Eventdetail_4']."</p></div><div class='row'><p align='center'>".$row['Eventdetail_5']."</p></div>";
					}
					?>
					</div>
						<?php } ?>
				</div>
			</div>
			<?php include 'footer.php'; ?>
			<script src="js/jquery-1.10.2.min.js"></script>
			<script>
				jQuery('a.list-group-item').click(function(){
					jQuery('a.list-group-item').removeClass('active');
					jQuery('div[id^=event]').removeClass('show');
					jQuery('div[id^=event]').addClass('hide');
					var eventId=jQuery(this).attr('id');
					jQuery(this).addClass('active');
					console.log(eventId);
					jQuery('div#event'+eventId).toggleClass('show hide');
				})
			</script>
			<!-- Bootstrap Core JavaScript -->
			<script src="assets/bootstrap/js/bootstrap.min.js"></script>
			
		</body>
	</html>
