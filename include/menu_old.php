<?php
$mypage = current_pagename();
?>

	<div id="left-column" class="content-secondary">
		<a href="index.php"><img class="center conflogo" src="images/eEnergy.png" alt="ACM e-Energy 2015, 2015, Bangalore, India" /></a>

		<a href="#" onclick="$.mobile.silentScroll(0)" class="ui-btn-right" data-icon="grid"><h2 class="hcls">Site Menu</h2></a>

		<ul class="navlist" data-role="listview" data-inset="true" data-theme="d" data-divider-theme="b">
			<li data-icon="false" <?php if ($mypage=="index.php") echo 'class="navselected"' ?> ><a href="index.php">Home</a></li>
			<li data-icon="false" <?php if ($mypage=="cfp.php") echo 'class="navselected"' ?> ><a href="cfp.php">Call for Papers</a></li>

			<li class="navheader-a" data-icon="plus" data-theme="c" ><a href="#">Workshops</a></li>
			<li data-icon="false" class="subnav-a <?php if ($mypage=="c3.php") echo 'navselected' ?>" data-theme="c"><a href="c3.php">C3</a></li>
			<li data-icon="false" class="subnav-a" data-theme="c"><a href="http://wattalyst.org/WattalystWebsite/DENWorkshop.html">DEN</a></li>
			<li data-icon="false" class="subnav-a" data-theme="c"><a href="http://www.dc4cities.eu/e2dc_15.html">E2DC</a></li>

			<li class="navheader-a" data-icon="plus" data-theme="c" ><a href="#">Keynote Addresses</a></li>
			<li data-icon="false" class="subnav-a <?php if ($mypage=="ahsokj.php") echo 'navselected' ?>" data-theme="c"><a href="ashokj.php">Ashok Jhunjhunwala</a></li>
			<li data-icon="false" class="subnav-a <?php if ($mypage=="ivenmareels.php") echo 'navselected' ?>" data-theme="c"><a href="ivenmareels.php">Iven Mareels</a></li>
			<li data-icon="false" class="subnav-a <?php if ($mypage=="brucenordman.php") echo 'navselected' ?>" data-theme="c"><a href="brucenordman.php">Bruce Nordman</a></li>
			

			<li data-icon="false" <?php if ($mypage=="pclist.php") echo 'class="navselected"' ?> ><a href="pclist.php">Program Committee</a></li>
			<li data-icon="false" <?php if ($mypage=="steering.php") echo 'class="navselected"' ?> ><a href="steering.php">Steering Committee</a></li>
			<li data-icon="false" <?php if ($mypage=="organization.php") echo 'class="navselected"' ?> ><a href="organization.php">Organization Committee</a></li>
			<li data-icon="false" <?php if ($mypage=="registration.php") echo 'class="navselected"' ?> ><a href="registration.php">Registration</a></li>
			<li data-icon="false" <?php if ($mypage=="travel_grant.php") echo 'class="navselected"' ?> ><a href="travel_grant.php">Travel Grant</a></li>
			<li data-icon="false" <?php if ($mypage=="sponsorship.php") echo 'class="navselected"' ?> ><a href="sponsorship.php">Sponsorship</a></li>
			<li data-icon="false" <?php if ($mypage=="localinfo.php") echo 'class="navselected"' ?> ><a href="localinfo.php">Local Information</a></li>
			<li data-icon="false" <?php if ($mypage=="previousyears.php") echo 'class="navselected"' ?> ><a href="previousyears.php">Past eEnergy Conferences</a></li>
		</ul>

		<div class="border ui-corner-all ui-shadow">
			<div class="hcls"> <center> <big>Sponsors</big>  </center></div> 
			<center>
				<a href="http://www.sigcomm.org/"><img src="images/sig.png" alt="ACM SIGCOMM" style="width:80%;padding:4%;vertical-align:middle" /></a>
				<a href="http://www.rolta.com/"><img src="images/rolta.jpg" alt="ROLTA INDIA" style="width:30%;padding:4%;vertical-align:middle" /></a>
			</center>
		</div>
		
		<div class="border ui-corner-all ui-shadow socialbuttons">
			<iframe src="include/socialbtn.php" scrolling="no" height="21" width="100%" frameborder="0" marginheight="0" marginwidth="0"></iframe>
		</div>

 		<div style="margin-top: 2em" class="tweetlist">
			<iframe src="include/tweetlist.php" scrolling="no" height="380" width="100%" frameborder="0" marginheight="0" marginwidth="0"></iframe>
		</div>
		
	
		
		
	</div>