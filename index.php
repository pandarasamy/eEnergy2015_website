<?php
        $page_title="";
        include("include/header.php");
?>

<h2 class="hcls">ACM eEnergy 2015, Bangalore, India</h2>

<p style="text-align:justify">
The sixth International Conference on Future Energy Systems (ACM e-Energy), to be held in Bangalore, India from <u>14th to 17th July 2015</u>, aims to be the premier venue for researchers working in the broad areas of computing and communication for smart energy systems (including the smart grid), and in energy-efficient computing and communication systems. By bringing together researchers in a high-quality single-track conference with significant opportunities for individual and small-group interaction, it will serve as a major forum for presentations and discussions that will shape the future of this area. 
 </p>

<p style="text-align:justify">
Paper submission link: <a href="https://easychair.org/conferences/?conf=eenergy2015">https://easychair.org/conferences/?conf=eenergy2015</a>
</p>

<!--<a href="sigcomm-support.pdf" rel="external" data-role="button" class="button">Supporter Information</a>-->
<a href="mailto:deva@alum.mit.edu" data-role="button" class="button">Contact the Organizers</a>

<h2 class="hcls">News</h2>
<ul data-role="listview" data-inset="true" data-theme="d" class="datetbl">
<?php
        include("include/news.html");
?>
</ul>

<script>
$(".newslibtn").siblings().slice(7).hide();
</script>

<h2 class="hcls">Important Dates</h2>
<?php
    include ("include/dates.html");
?>

<!--
	<h2 class="hcls">Sponsors</h2>
	<a href="http://www.sigcomm.org/"><img src="images/sig.png" alt="ACM SIGCOMM" style="width:41%;padding:4%;vertical-align:middle" /></a>
	<a href="http://www.rolta.com/"><img src="images/rolta.jpg" alt="ROLTA INDIA" style="width:20%;padding:4%;vertical-align:middle" /></a>
-->
<?php
    include ("include/footer.php");
?>
