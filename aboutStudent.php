<?php
require 'dbConnect.php';
?>

<!DOCTYPE html>
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
        <link rel="stylesheet" type="text/css" media="all" href="assets/css/style.css">
        
		
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
	
	<script>
function deleteRow(r) {
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("myTable").deleteRow(i);

}
</script> 
</head>

<body>

<!-- Navigation -->
<?php include 'top.php'; ?>
<?php
if(!isset($_SESSION['log3'])){
    ?>
 <div class="container">
 <div class="well">
   <div class="row">
   <hr >
   <h4>About Student Chapter</h4>
  <hr>
        <div class="col-lg-12">
		 
            <?php
			
             $ruleQuery="SELECT * FROM student  ORDER BY sno ";
            $ruleResult=mysqli_query($connect,$ruleQuery) or die();
			while($ruleRow=mysqli_fetch_assoc($ruleResult)){?>
			 <p><?php echo $ruleRow['data'];?></p>
                  <?php  }?>

            </div>
			</div>
			<?php include 'footer.php'; ?>
			</div>
			</div>
<?php }
else{
    ?>
    <div class="container">
	<div class="well">
	  <div class="row">
        <div class="col-lg-12">
           <h1>About Student Chapter</h1><hr>
           <div class="col-lg-10">                   
                     <div class="row">
                     <table class="table-responsive table-bordered" id="myTable">
                     <tr>
                     <th>Paragraph No.</th>
                     <th><center>Data</center></th>
					 <?php if(isset($_SESSION['log3']))
				if($_SESSION['log3']=='ADMIN'){?>
                     <th>Remove</th>
					 <?php } ?>
                     
                     </tr>
                     
            <?php
            $i=1;
             
            
            $ruleQuery="SELECT * FROM student ORDER BY pno ";
            $ruleResult=mysqli_query($connect,$ruleQuery) or die();
            
            while($ruleRow=mysqli_fetch_assoc($ruleResult)){?>
           <form action="" method="post" >
            <tr>
               <td><?php echo $ruleRow['pno'];?></td>
              <td><?php echo $ruleRow['data'];?></td>
			  <?php if(isset($_SESSION['log3']))
				if($_SESSION['log3']=='ADMIN'){?>
              <td><input type="submit" name="delete" value="Remove" ></td>
              <input type="hidden" name="sno" value="<?php echo $ruleRow['sno'];?>">
				<?php } ?>
              </tr>
               </form>
			<?php } ?> 
          
          </table>
          </div>
          </div>
          </div>
		  <div class="row">
		  <div class="col-lg-6">
		  <center><button class="btn btn-primary">Add Paragraph</button></center>
		  </div>
		 
		  </div>
          </div>
 <?php include 'footer.php'; ?>
            </div>
			<!-- Footer -->
    
    </div>
    <hr>
    <!-- /.row -->

    <?php
}
?>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
