<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="brand" href="index.php">Big Fish</a>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li><a href="#contact">Contact</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="gps2.php">Track GPS</a></li>
              <li><a href="map.php">Track Map</a></li>
              <li><a href="showBouyInfo.php">Show Bouy Info</a></li>
			  <li><a href="logoff.php">Logoff</a></li>
              <li class="divider"></li>
              <li class="nav-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
		<?php 
		if (empty($_SESSION['idusers']))
		{ ?>
			
        <form class="navbar-form pull-right" method="post" action="login.php">
          <input name="myUsername" class="span2" type="text" placeholder="Email">
          <input name="myPassword" class="span2" type="password" placeholder="Password">
          <button type="submit" class="btn">Sign in</button>
        </form>
		<?php } 
		else
		{ ?>
			<div class="navbar-form pull-right">
				<ul class="nav">
				  <li><a href="#"><?php echo $_SESSION['nickname']; ?></a></li>
			    </ul>
			</div>
			<?php }
		?>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>
