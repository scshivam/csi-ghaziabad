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
<?php
if(!isset($_SESSION['log3'])){
    ?>

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
               if($ruleRow['Added_By']=='123')
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
    <!-- /.row -->
 <div class="row">
        <div class="col-lg-12">
            <?php
            $i=1;
			$dat1=date('Y-m-d');
            $ruleQuery="SELECT * FROM event_detail  WHERE Type='Y' AND to_date<'$dat1' ORDER BY Rank ";
            $ruleResult=mysqli_query($connect,$ruleQuery) or die();
			
            
            while($ruleRow=mysqli_fetch_assoc($ruleResult)){
              if($ruleRow['Added_By']=='123')
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
    <!-- Footer -->
    <?php include 'footer.php'; ?>


<!-- /.container -->
<?php }
else
{
    if(isset($_POST['update']))
    {
    	$a=$_POST['rowno1'];
      ?>

    <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Add Events

            </h2>
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a>
                </li>
                <li>Update Events</li><br>
            </ol>
        </div>
    </div>
    <?php
			$dat=date('Y-m-d');
            $i=1;
            $ruleQuery="SELECT * FROM event_detail  WHERE `S.No.`='$a' ";
            $ruleResult=mysqli_query($connect,$ruleQuery) or die();
            
            while($ruleRow=mysqli_fetch_assoc($ruleResult))
            	{?>

    <div class="row">
        <div class="col-lg-12">
        <div id="container">       
<form method='post'>
<input type="hidden" name="rowno2" value="<?php echo $a; ?>">
<?php
$query2="UPDATE event_detail SET Type='N' WHERE `S.No.`='$a'";
    $runq2=mysqli_query($connect,$query2) or die();
?>
<div class="col-lg-8">
<label for="events">Event Name:</label>
<input name="events1" type="text" id="events" name="events" style="margin-top: 20px" value="<?php echo $ruleRow['eventName'];?>" required></div>
 <div class="col-lg-4">
<label for="rank">Rank:</label>
<input name="rank1" type="number" id="rank" name="rank" style="margin-top: 20px" value="<?php echo $ruleRow['Rank'];?>" required> </div>    
<br>
<br>
<hr>
<div class="col-lg-8">
<label for="fromdate">From Date:</label>
<input name="fromdate1" type="date" id="fromdate" name="fromdate" style="margin-top: 20px" value="<?php echo $ruleRow['from_date'];?>" required> </div>  
<div class="col-lg-4">
<label for="todate">To Date:</label>
<input name="todate1" type="date" id="todate" name="todate" style="margin-top: 20px" value="<?php echo $ruleRow['to_date'];?>" required></div>
<br>
<br>
<hr>
<label for="eventdetail1" >EventDetail1:</label>
<textarea name="eventdetail11" rows="2" cols="50" style="margin-top: 20px" required><?php echo $ruleRow['Eventdetail_1'];?></textarea>
    

<label for="eventdetail2">EventDetai2:</label>
<textarea name="eventdetail21" rows="2" cols="50" style="margin-top: 20px"><?php echo $ruleRow['Eventdetail_2'];?></textarea>
<br>
<br>
<hr>
<label for="eventdetail3">EventDetai3:</label>
    <textarea name="eventdetail31" rows="2" cols="50" style="margin-top: 20px"><?php echo $ruleRow['Eventdetail_3'];?></textarea>
    
    
<label for="eventdetail4">EventDetai4:</label>
    <textarea name="eventdetail41" rows="2" cols="50" style="margin-top: 20px"><?php echo $ruleRow['Eventdetail_4'];?></textarea>
    <br>
<br>
<hr>
<label for="eventdetail5">EventDetai5:</label>
    
    <textarea name="eventdetail51" rows="2" cols="50" style="margin-top: 20px"><?php echo $ruleRow['Eventdetail_5'];?></textarea>
<div id="lower">
<br>
<?php  }?>



<div class="row">
 <div class="col-lg-12"></div>
 <center><b>
 <input type="submit" value="submit" name="submit">
 </b></center>
 </div>
 <hr>
</div>
</form>
<?php
if(isset($_POST['events1']))
{
    require 'dbConnect.php';
    if($_SESSION['log3']=='ADMIN')
    	$e="123";
    if($_SESSION['log3']=='USER')
    	$e="546";
     $qry7="SELECT MAX(Rank) FROM event_detail";
     $run7=mysqli_query($connect,$qry7) or die();
     $row7=mysqli_fetch_assoc($run7);
     $r=$row7['Rank'];
    $event=$_POST['events1'];
    $FD=$_POST['fromdate1'];
    $TD=$_POST['todate1'];
    $R=$_POST['rank1'];
    $E1=$_POST['eventdetail11'];
    $E2=$_POST['eventdetail21'];
    $E3=$_POST['eventdetail31'];
    $E4=$_POST['eventdetail41'];
    $E5=$_POST['eventdetail51'];
    
 $c11="INSERT INTO event_detail (eventName,from_date,to_date,Rank,Eventdetail_1,Eventdetail_2,Eventdetail_3,Eventdetail_4,Eventdetail_5,Added_By) VALUES ('$event','$FD','$TD','$R','$E1','$E2','$E3','$E4','$E5','$e')";

if(mysqli_query($connect,$c11))
{
   ?>
   <script> alert("New Events Added Successfully");</script>
<?php 
}
else
{
    echo "ERROR".$c11."<br>".mysqli_error($connect);
}}  
if(isset($_POST['delete']))
{
    $w=$_POST['rowno'];
     $query1="UPDATE event_detail SET Type='N' WHERE `S.No.`='$w'";
    $runq=mysqli_query($connect,$query1) or die();
}


?>

</div>

            <div class="row">
        <div class="col-lg-12">
           <center><h1>Events</h1></center><hr>
           <div class="col-lg-10">                   
                     <div class="row">
                     <table id="myTable">
                     <tr>
                     <th>SNo.</th>
                     <th>Event Name</th>
					 <?php if(isset($_SESSION['log3']))
				if($_SESSION['log3']=='ADMIN'){?>
                     <th>Remove</th>
                     <th>Update</th>
					 <?php } ?>
                     
                     </tr>
                     
            <?php
            $i=1;
             
            
            $ruleQuery="SELECT * FROM event_detail WHERE Type='Y' ORDER BY Rank ";
            $ruleResult=mysqli_query($connect,$ruleQuery) or die();
            
            while($ruleRow=mysqli_fetch_assoc($ruleResult)){?>
            <form action="" method="POST">
            <tr>
               <td><?php echo $i;?></td>
              <td><?php echo $ruleRow['eventName'];?></td>
			  <?php if(isset($_SESSION['log3']))
			  {
				if($_SESSION['log3']=='ADMIN'){?>
              <td><input type="submit" name="delete" value="Remove" ></td>
              <input type="hidden" name="rowno" value="<?php echo $ruleRow['S.No.'];?>">
              <td><input type="submit" name="update" value="Update" ></td>
              <input type="hidden" name="rowno1" value="<?php echo $ruleRow['S.No.'];?>">
				<?php  } 
                

				}?>
              </tr>
               </form>
                
          <?php $i++;  }?>
          </table>
          </div>
          </div>
          </div>
          </div>

            </div>
    </div>
    <hr>
    <!-- /.row -->

    
</div>
    <!-- Footer -->
    <?php include 'footer.php'; ?>


    <?php
    }
    else
    {
     ?>
    <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Add Events

            </h2>
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a>
                </li>
                <li>Add Events</li><br>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12">
        <div id="container">       
<form method='post'>
<div class="col-lg-8">
<label for="events">Event Name:</label>
<input name="events1" type="text" id="events" name="events" style="margin-top: 20px" required></div>
     
<br>
<br>
<hr>
<div class="col-lg-8">
<label for="fromdate">From Date:</label>
<input name="fromdate1" type="date" id="fromdate" name="fromdate" style="margin-top: 20px" required> </div>  
<div class="col-lg-4">
<label for="todate">To Date:</label>
<input name="todate1" type="date" id="todate" name="todate" style="margin-top: 20px" required></div>
<br>
<br>
<hr>
<label for="eventdetail1" >EventDetail1:</label>
<textarea name="eventdetail11" rows="2" cols="50" style="margin-top: 20px" required></textarea>
    

<label for="eventdetail2">EventDetai2:</label>
<textarea name="eventdetail21" rows="2" cols="50" style="margin-top: 20px"></textarea>
<br>
<br>
<hr>
<label for="eventdetail3">EventDetai3:</label>
    <textarea name="eventdetail31" rows="2" cols="50" style="margin-top: 20px"></textarea>
    
    
<label for="eventdetail4">EventDetai4:</label>
    <textarea name="eventdetail41" rows="2" cols="50" style="margin-top: 20px"></textarea>
    <br>
<br>
<hr>
<label for="eventdetail5">EventDetai5:</label>
    
    <textarea name="eventdetail51" rows="2" cols="50" style="margin-top: 20px"></textarea>
<div id="lower">
<br>



<div class="row">
 <div class="col-lg-12"></div>
 <center><b>
 <input type="submit" value="submit" name="submit">
 </b></center>
 </div>
 <hr>
</div>
</form>
<?php
if(isset($_POST['events1']))
{
    require 'dbConnect.php';
     $qry7="SELECT MAX(Rank) FROM event_detail";
     $run7=mysqli_query($connect,$qry7) or die();
     $row7=mysqli_fetch_assoc($run7);
     
    $event=$_POST['events1'];
    $FD=$_POST['fromdate1'];
    $TD=$_POST['todate1'];
    $R=8;
    $E1=$_POST['eventdetail11'];
    $E2=$_POST['eventdetail21'];
    $E3=$_POST['eventdetail31'];
    $E4=$_POST['eventdetail41'];
    $E5=$_POST['eventdetail51'];
    
 $c11="INSERT INTO event_detail (eventName,from_date,to_date,Rank,Eventdetail_1,Eventdetail_2,Eventdetail_3,Eventdetail_4,Eventdetail_5) VALUES ('$event','$FD','$TD','$R','$E1','$E2','$E3','$E4','$E5')";

if(mysqli_query($connect,$c11))
{
   ?>
   <script> alert("New Events Added Successfully");</script>
<?php 
}
else
{
    echo "ERROR".$c11."<br>".mysqli_error($connect);
}}  
if(isset($_POST['delete']))
{
    $w=$_POST['rowno'];
     $query1="UPDATE event_detail SET Type='N' WHERE `S.No.`='$w'";
    $runq=mysqli_query($connect,$query1) or die();
}


?>

</div>

            <div class="row">
        <div class="col-lg-12">
           <center><h1>Events</h1></center><hr>
           <div class="col-lg-10">                   
                     <div class="row">
                     <table id="myTable">
                     <tr>
                     <th>SNo.</th>
                     <th>Event Name</th>
					 <?php if(isset($_SESSION['log3']))
				if($_SESSION['log3']=='ADMIN'){?>
                     <th>Remove</th>
                     <th>Update</th>
					 <?php } ?>
                     
                     </tr>
                     
            <?php
            $i=1;
             
            
            $ruleQuery="SELECT * FROM event_detail WHERE Type='Y' ORDER BY Rank ";
            $ruleResult=mysqli_query($connect,$ruleQuery) or die();
            
            while($ruleRow=mysqli_fetch_assoc($ruleResult)){?>
            <form action="" method="POST">
            <tr>
               <td><?php echo $i;?></td>
              <td><?php echo $ruleRow['eventName'];?></td>
			  <?php if(isset($_SESSION['log3']))
			  {
				if($_SESSION['log3']=='ADMIN'){?>
              <td><input type="submit" name="delete" value="Remove" ></td>
              <input type="hidden" name="rowno" value="<?php echo $ruleRow['S.No.'];?>">
              <td><input type="submit" name="update" value="Update" ></td>
              <input type="hidden" name="rowno1" value="<?php echo $ruleRow['S.No.'];?>">
				<?php } 
                

				}?>
              </tr>
               </form>
                
          <?php $i++;  }?>
          </table>
          </div>
          </div>
          </div>
          </div>

            </div>
    </div>
    <hr>
    <!-- /.row -->

    
</div>
    <!-- Footer -->
    <?php include 'footer.php'; ?>


    <?php
    }
    
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
