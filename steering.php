<?php
        $page_title="Steering Committee";
        include("include/header.php");
?>

<h2 class="hcls">Steering Committee</h2>

<ul data-role="listview" data-inset="true" data-theme="d" data-content-theme="d">

	<li data-role="list-divider">Members</li>
	<?php
		add_listitem("images/hermann.jpg","Hermann de Meer", "University of Passau, Germany", "http://www.fim.uni-passau.de/en/fim/faculty/chairs/computer-networks-and-communications/people/team/prof-de-meer.html");
		add_listitem("images/david.jpg","David Hutchison", "Lancaster University, United Kingdom", "http://www.comp.lancs.ac.uk/department/staff.php?name=dh");
		add_listitem("images/marco.jpg","Marco Ajmone Marsan", "Politecnico di Torino, Italy", "http://www.telematica.polito.it/public/faculty/marco-ajmone-marsan");
		add_listitem("images/keshav.png","S. Keshav", "University of Waterloo, Canada", "http://blizzard.cs.uwaterloo.ca/keshav/wiki/index.php/Main_Page");
		add_listitem("images/shenoy.jpg","Prashant Shenoy", "U. Massachusetts Amherst, USA", "http://people.cs.umass.edu/~shenoy/home");
		add_listitem("images/jon.jpg","Jon Crowcroft", "University of Cambridge, UK", "http://www.cl.cam.ac.uk/~jac22/");
	?>
</ul>

<?php
    include ("include/footer.php");
?>
