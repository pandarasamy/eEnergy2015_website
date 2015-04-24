<?php
        $page_title="Organization Committee";
        include("include/header.php");
?>

<h2 class="hcls">Organization Committee</h2>

<ul data-role="listview" data-inset="true" data-theme="d" data-content-theme="d">

	<li data-role="list-divider">General Chairs</li>
	<?php
		add_listitem("images/shiv.jpg","Shivkumar Kalyanaraman", "IBM Research, Australia", "https://researcher.watson.ibm.com/view.php?person=in-shivkumar-k");
		add_listitem("images/deva1.jpg","Deva P. Seetharam", "Independent Researcher", "http://www.dseetharam.org/");
		add_listitem("images/rajeevshorey.jpg","Rajeev Shorey", "TCS Innovation Labs, USA/India", "");
	?>

	<li data-role="list-divider">Technical Program Committee Chairs</li>
	<?php
		add_listitem("images/sarvapali.jpg","Sarvapali Ramchurn", "University of Southampton", "http://www.sramchurn.com/about/");
		add_listitem("images/mani.jpg","Mani Srivastava", "UCLA", "http://www.ee.ucla.edu/people/faculty/faculty-directory/mani-srivastava");
	?>

	<li data-role="list-divider">Publicity Chairs</li>
	<?php
		add_listitem("images/vincenzo.jpg","Vincenzo Mancuso", "IMDEA Networks, Spain", "http://fourier.networks.imdea.org/~vincenzo_mancuso/");
		add_listitem("images/amarjeet.jpg","Amarjeet Singh", "IIIT, Delhi", "https://www.iiitd.edu.in/~amarjeet");
	?>

	<li data-role="list-divider">Registration Chairs</li>
	<?php
		add_listitem("","TBD", "", "");
	?>

	<li data-role="list-divider">Sponsorship Chair</li>
	<?php
		add_listitem("images/sudipta.jpg","Sudipta Maitra", "Penny Lane Hospitality", "");
	?>

	<li data-role="list-divider">Poster and Demo Chairs</li>
	<?php
		add_listitem("images/nirath.png","Niranth Amogh", "Huawei, India", "");
		add_listitem("images/sid.jpg","Sid Chi-Kin Chau", "Masdar Institute, Abu Dhabi, UAE", "https://www.masdar.ac.ae/faculty-top/list-of-faculty/item/5718-sid-chi-kin-chau");
		add_listitem("images/minghua.png","Minghua Chen", "The Chinese University of Hong Kong", "http://home.ie.cuhk.edu.hk/~mhchen/");
		//add_listitem("images/matteo.jpg","Matteo Vasirani", "EPFL", "http://people.epfl.ch/matteo.vasirani?lang=en");
	?>

	<li data-role="list-divider">Finance Chair</li>
	<?php
		add_listitem("images/vinod.jpg","Vinod Kumar", "IIIT Delhi, India", "");
	?>

	<li data-role="list-divider">Publication Chairs</li>
	<?php
		add_listitem("images/sonja.jpg","Sonja Klingert", "Researcher at University of Mannheim", "https://www.linkedin.com/pub/sonja-klingert/11/b4b/109");
		add_listitem("images/mathieu.jpg","Mathieu Sinn", "IBM Research, Ireland", "http://researcher.watson.ibm.com/researcher/view.php?person=ie-MATHSINN");
	?>		
	
	<li data-role="list-divider">Local Arrangement Chairs</li>
	<?php
		add_listitem("images/zainul.jpg","Zainul Charbiwala", "IBM Research, India", "https://researcher.ibm.com/view.php?person=in-zainulcharbiwala");
		add_listitem("images/sudipta.jpg","Sudipta Maitra", "Penny Lane Hospitality", "");
	?>
	
	<li data-role="list-divider">Local Arrangement Coordinator</li>
	<?php
		add_listitem("","Anandhi Ramaswamy", "IBM Research, India", "");
	?>
	
	<li data-role="list-divider">Web Chairs</li>
	<?php
		add_listitem("images/samy.jpg","Pandarasamy Arjunan", "IIIT Delhi", "http://www.iiitd.edu.in/~samy/");
		add_listitem("images/sunil.jpg","Sunil Ghai", "IBM Research, India", "https://researcher.ibm.com/view.php?person=in-sunilkrghai");
	?>	
</ul>

<?php
    include ("include/footer.php");
?>
