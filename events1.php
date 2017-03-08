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
					<h2 class="page-header"><center>Events</center>
						
					</h2>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a>
						</li>
						<li >Events</li>
					</ol>
				</div>
			</div>
			<div class="row">
				
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<p><center><strong>COMPUTER SOCIETY OF INDIA GHAZIABAD CHAPTER</strong></center></p>
					<p><center><strong><u>Events held at all student Branches of Ghaziabad Chapter</u></strong></center></p>
					<p>&nbsp;</p>
					<table>
						<tbody>
							<tr>
								<td >
									<p><center><strong>S.No.</strong></center></p>
								</td>
								<td >
									<p><center><strong>Event-Detail</strong></center></p>
								</td>
								<td >
									<p><center><strong>DATE </strong></center></p>
								</td>
								<td>
									<p><center><strong>Guest / Expert</strong></center></p>
								</td>
								<td >
									<p><center><strong>Student Branch</strong></center></p>
								</td>
							</tr>
							<tr>
								<td >
									<p>1.</p>
								</td>
								<td >
									<p>2<sup>nd</sup> CSI IT Excellence Awards 2016,</p>
								</td>
								<td >
									<p>09<sup>th</sup> &nbsp;April, 2016</p>
								</td>
								<td>
									<p>Mr. Tanmoy Chakarbarty (Vice President and Global Head Government ISU, TCS), Guest of Honour Mr. Anoop Mandal ( Chief Technology officer- HT Media Ltd.)</p>
									<p>&nbsp;</p>
								</td>
								<td >
									<p>ABES Engineering College, GZB</p>
								</td>
							</tr>
							<tr>
								<td >
									<p>2.</p>
								</td>
								<td >
									<p>Technovation-2016</p>
								</td>
								<td >
									<p>21<sup>st</sup>&nbsp;April, 2016</p>
									<p>&nbsp;</p>
								</td>
								<td>
									<p>Sh. Abhinav Sinha, COO, EKO Financial Services</p>
								</td>
								<td >
									<p>ITS, Mohan Nagar, GZB</p>
								</td>
							</tr>
							<tr>
								<td >
									<p>3.</p>
								</td>
								<td >
									<p>FDP on &ldquo;Soft Computing Technique: Ant Colony</p>
								</td>
								<td >
									<p>9<sup>th</sup> May 2016</p>
								</td>
								<td>
									<p>Professional from&nbsp;TCS</p>
								</td>
								<td >
									<p>Krishna&nbsp; Institute of Engineering&nbsp; &amp;&nbsp; Technology,GZB</p>
								</td>
							</tr>
							<tr>
								<td >
									<p>4.</p>
								</td>
								<td >
									<p>FDP on &ldquo;Neural Network&rdquo;</p>
								</td>
								<td >
									<p>9<sup>th</sup> May 2016</p>
								</td>
								<td>
									<p>IBNC India &amp; I-MEDITA</p>
								</td>
								<td >
									<p>Krishna&nbsp; Institute of Engineering&nbsp; &amp;&nbsp; Technology,GZB</p>
								</td>
							</tr>
							<tr>
								<td >
									<p>5.</p>
								</td>
								<td >
									<p>FDP on &ldquo;Bee Colony Optimization&rdquo;</p>
								</td>
								<td >
									<p>10<sup>th</sup> May 2016.</p>
									<p><strong>&nbsp;</strong></p>
								</td>
								<td>
									<p>Professional from&nbsp;IBM</p>
								</td>
								<td >
									<p>Krishna&nbsp; Institute of Engineering&nbsp; &amp;&nbsp; Technology,GZB</p>
								</td>
							</tr>
							<tr>
								<td >
									<p>6.</p>
								</td>
								<td >
									<p>FDP on &ldquo;Test case optimization and Prioritization using Soft Computing Techniques&rdquo;</p>
								</td>
								<td >
									<p>10<sup>th</sup> May 2016.</p>
									<p><strong>&nbsp;</strong></p>
								</td>
								<td>
									<p>Professional from&nbsp;IIT, Delhi</p>
								</td>
								<td >
									<p>Krishna&nbsp; Institute of Engineering&nbsp; &amp;&nbsp; Technology,GZB</p>
								</td>
							</tr>
							<tr>
								<td >
									<p>7.</p>
								</td>
								<td >
									<p>FDP on &ldquo;Hybrid Genetic Algorithm and Applications&rdquo; on</p>
								</td>
								<td >
									<p>11<sup>th</sup> May 2016.</p>
								</td>
								<td>
									<p>Dr. B.Chandra , from IIT, Delhi</p>
								</td>
								<td >
									<p>Krishna&nbsp; Institute of Engineering&nbsp; &amp;&nbsp; Technology, GZB</p>
								</td>
							</tr>
							<tr>
								<td >
									<p>8.</p>
								</td>
								<td >
									<p>Spoken Tutorial &nbsp;on Java &amp; PHP</p>
								</td>
								<td >
									<p>8<sup>th</sup> &nbsp;August, 2016 - 12 August 2016</p>
								</td>
								<td>
									<p>Mr. Ravi Singhal, Asst. Professor, KIET</p>
								</td>
								<td >
									<p>ITS, Mohan Nagar, GZB</p>
								</td>
							</tr>
							<tr>
								<td >
									<p>9.</p>
								</td>
								<td >
									<p>FDP on &ldquo;Solution of Transcendental equations using&nbsp; On CBNST&rdquo;</p>
								</td>
								<td >
									<p>12<sup>th</sup> May 2016.</p>
								</td>
								<td>
									<p>CMS IT organization</p>
								</td>
								<td >
									<p>Krishna&nbsp; Institute of Engineering&nbsp; &amp;&nbsp; Technology, GZB</p>
								</td>
							</tr>
							<tr>
								<td >
									<p>10</p>
								</td>
								<td >
									<p>One Day Workshop on Android Apps Development,</p>
								</td>
								<td >
									<p>23<sup>rd </sup>August, 2016</p>
									<p>&nbsp;</p>
								</td>
								<td>
									<p>Mr. Devender Khari, CEO&nbsp;and Director of&nbsp;DKOP Labs Private Ltd,</p>
								</td>
								<td >
									<p>ITS Engineering College, Greater Noida</p>
								</td>
							</tr>
							<tr>
								<td >
									<p>11.</p>
								</td>
								<td >
									<p>Technical Talk with Student members of CSI</p>
								</td>
								<td >
									<p>9<sup>th</sup> September,2016</p>
								</td>
								<td>
									<p>Mr. Saurabh, Past Chairman, Agarwal, Mr. Anilji Garg ,Vice Chairman</p>
								</td>
								<td >
									<p>IIMT, Greater Noida</p>
								</td>
							</tr>
							<tr>
								<td >
									<p>12.</p>
								</td>
								<td >
									
													<p>Workshop on &ldquo;Cloud Computing&rdquo;</p>
												
								</td>
								<td >
									<p>17<sup>th</sup> &nbsp;September, 2015</p>
								</td>
								<td>
									<p>Mr. Karan Chaturvedi Solution Architect, IBM Cloud Technical Evangelist,</p>
								</td>
								<td >
									<p>ITS Engineering College, Greater Noida</p>
								</td>
							</tr>
							<tr>
								<td >
									<p>13.</p>
								</td>
								<td >
									<p>Inter college Technical event (<strong>Trikumbh'16</strong>) on</p>
									<p>&nbsp;</p>
								</td>
								<td >
									<p>23<sup>rd</sup></p>
									<p>&nbsp;</p>
									<p>and 24<sup>th</sup> September 2016</p>
								</td>
								<td>
									<p>Sh. Anshul Gupta from CSI Ghaziabad Chapter.</p>
									<p>&nbsp;</p>
									<p>&nbsp;</p>
								</td>
								<td >
									<p>ABES,GZB</p>
								</td>
							</tr>
							<tr>
								<td >
									<p>14.</p>
								</td>
								<td >
									<p>TETRAHEDRON 2016</p>
									<p>&nbsp;</p>
								</td>
								<td >
									<p>14<sup>th</sup> and 15<sup>th</sup> Oct, 2016</p>
									<p>&nbsp;</p>
								</td>
								<td>
									<p>Mr. Anilji Garg, Vice-chairman, CSI-GZB</p>
								</td>
								<td >
									<p>ABES Engineering College, GZB</p>
								</td>
							</tr>
							<tr>
								<td >
									<p>15.</p>
								</td>
								<td >
									<p>&ldquo;Talent Hunt-2k16 &ldquo;Codographer&rdquo;</p>
									<p>Tentative Date :</p>
								</td>
								<td >
									<p>20<sup>th</sup> October 2016.</p>
								</td>
								<td>
									<p>Inter College Technical Event</p>
								</td>
								<td >
									<p>ITS Engineering College, Greater Noida</p>
								</td>
							</tr>
						</tbody>
					</table>
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
