<?php 
session_start();
$eid=$_SESSION['create_account_logged_in'];
error_reporting(1);
?>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a href="index.php"><img src="logo/logowide.png"/width="160px"height="40px"style="margin-top:5px;"> </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php"title="Home">Home</a></li>
        <li><a href="#"title="About">About us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="admin/index.php"title="Admin Login">&nbsp;&nbsp;Admin Login</a></li>

        <?php 
      if($_SESSION['create_account_logged_in']!="")
      {
        ?>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">View Status <span class="caret"></span></a>
        	<ul class="dropdown-menu">
          		<li><a href="profile.php">Profile</a></li>
              <li><a href="logout.php">Logout</a></li>
        	</ul>
        </li>
        <?PHP } else
		{
		?>
		<li><a href="#"title="login"> &nbsp;&nbsp;User Login</a>
        </li>
		<?php 
		} ?>
      </ul>
    </div>
  </div>
</nav>   
