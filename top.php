    <style type="text/css">
    ul{
        padding: 0;
        list-style: none;
    }
    ul li{
        display: inline-block;
        position: relative;
        text-align: left;
    }
    ul li a{
        display: block;
        padding: 8px 25px;
        color: #333;
        text-decoration: none;
    }
    ul li a:hover{
        color: #fff;
        background: #74B9B9;
    }
    ul li ul.dropdown{
		white-space: nowrap;
        min-width: 100%;
        background: #f2f2f2;
        display: none;
        position: absolute;
        z-index: 999;
        left: 0;
    }
    ul li:hover ul.dropdown{
        display: block; 
    }
    ul li ul.dropdown li{
        display: block;
    }
    html,body{
        height:100%;
    }
</style>
 	<?php
    @session_start();
    if(!isset($_SESSION['log3'])){

            ?>
    <nav id="navbar-section" class="navbar navbar-default navbar-static-top navbar-sticky" role="navigation">
        <div class="container">
        
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand wow fadeInDownBig" href="index.html"><img src="assets/img/slider/Office.png" width="100" alt="Office"></a>      
            </div>
        
            <div id="navbar-spy" class="collapse navbar-collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav pull-right">
                    <li >
                        <a href="index.php">Home</a>
                    </li>
					<li>
                        <a href="#">About Us</a>
						<ul class="dropdown">
						<li><a href="AboutCsi.php">About CSI</a></li>
						<li><a href="AboutUs.php">About Chapter</a></li>
						</ul>
                    </li>
					<li>
                        <a href="manage.php">Managing Committee</a>
                    </li>
                    <li>
                        <a href="student.php">Members</a>
                    </li>
                    <li>
                        <a href="events1.php">Events</a>
                       
                    </li>
                    <li>
                        <a  href="gallery.php">Gallery</a></li>
                    </li>
                    
                    <li>
                        <a href="#">Membership</a>
						<ul class="dropdown">
						<li><a target="_blank" href="http://www.csi-india.org/IndividualRegistration.aspx">Become a Member</a></li>
						</ul>
                    </li>
					<li>
                        <a href="contactUs.php">Contact Us</a>
                    </li>
                    
                </ul>         
            </div>
        </div>
    </nav>
    <?php
        }elseif($_SESSION['log3']=='USER'){
    ?>
    <nav id="navbar-section" class="navbar navbar-default navbar-static-top navbar-sticky" role="navigation">
        <div class="container">
        
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand wow fadeInDownBig" href="index.html"><img src="assets/img/slider/Office.png" width="100" alt="Office"></a>      
            </div>
        
            <div id="navbar-spy" class="collapse navbar-collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav pull-right">
                <li >
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#">About Us</a>
						<ul class="dropdown">
						<li><a href="AboutCsi.php">About CSI</a></li>
						<li><a href="AboutUs.php">About Chapter</a></li>
						</ul>
                    </li>
                    <li>
                        <a href="#">Membership</a>
                        <ul class="dropdown">
                        <li><a target="_blank" href="http://www.csi-india.org/IndividualRegistration.aspx">Become a Member</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="events.php">Events</a>
                        
                      
                    </li>
                    <li>
                        <a href="student.php">Student</a>
                    </li>
                    <li>
                        <a href="#">Archive</a>
                        <ul class="dropdown">
                        <li><a  href="notice.php">Notice</a></li>
                        <li><a  href="circular.php">Circular</a></li>
                        <li><a  href="gallery.php">Gallery</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="manage.php">Committee</a>
                    </li>
                    <li>
                        <a href="contactUs.php">Contact Us</a>
                    </li>
                    <li>
                        <a href="logout.php">LogOut</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <?php
    }
    else
    {?>
<nav id="navbar-section" class="navbar navbar-default navbar-static-top navbar-sticky" role="navigation">
        <div class="container">
        
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand wow fadeInDownBig" href="index.html"><img src="assets/img/slider/Office.png" width="100" alt="Office"></a>      
            </div>
        
            <div id="navbar-spy" class="collapse navbar-collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav pull-right">
                <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#">About Us</a>
						<ul class="dropdown">
						<li><a href="AboutCsi.php">About CSI</a></li>
						<li><a href="AboutUs.php">About Chapter</a></li>
						</ul>
                    </li>
                    <li>
                        <a href="#">Membership</a>
                        <ul class="dropdown">
                        <li><a target="_blank" href="http://www.csi-india.org/IndividualRegistration.aspx">Become a Member</a></li>
                        </ul>
                    </li>
                   
                        <li>
                        <a href="events.php">Events</a>
                        
                      
                    
                    </li>
                    <li>
                        <a href="student.php">Student</a>
                    </li>
                    <li>
                        <a href="#">Archive</a>
                        <ul class="dropdown">
                        <li><a  href="notice.php">Notice</a></li>
                        <li><a  href="circular.php">Circular</a></li>
                        <li><a  href="gallery.php">Gallery</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="manage.php">Committee</a>
                    </li>
                    <li>
                        <a href="contactUs.php">Contact Us</a>
                    </li>
                    <li>
                        <a href="logout.php">LogOut</a>
                    </li>
                    
                    
                </ul>
            </div>
            
        </div>
       
    </nav>

    <?php }
?>