<?php
        $page_title="Technical Program Committee";
        include("include/header.php");
?>

<h2 class="hcls">Technical Program Committee</h2>

<ul data-role="listview" data-inset="true" data-theme="d" data-content-theme="d">
	<li data-role="list-divider">Senior TPC Members</li>
	<?php
		add_listitem("", "Mario Berges", "Carnegie Mellon University", "http://marioberges.com");
		add_listitem("", "Aj Brush", "Microsoft Research", "http://research.microsoft.com/en-us/people/ajbrush/");
		add_listitem("", "Minghua Chen", "The Chinese University of Hong Kong", "");
		add_listitem("", "Mathijs De Weerdt", "Delft University of Technology",	"http://www.alg.ewi.tudelft.nl/weerdt/");
		add_listitem("", "Julian De Hoog", "IBM Research Australia/The University of Melbourne", "");
		add_listitem("", "Elena	Gaura",	"Cogent Computing Applied Research Centre", "http://www.cogentcomputing.org");
		add_listitem("", "Mike	Hazas",	"University of Lancaster", "");
		add_listitem("", "David	Irwin",	"UMass-Amherst", "");
		add_listitem("", "Karl	Johansson",	"Royal Institute of Technology", "http://www.ee.kth.se/~kallej");
		add_listitem("", "Krithi Ramamritham", "IIT Bombay", "http://www.cse.iitb.ac.in/~krithi");
		add_listitem("", "George Thanos", "Athens University of Economics and Business (AUEB)", "http://nes.cs.aueb.gr/gt.html");
		add_listitem("", "Dan Wang", "Hong Kong Polytechnic University", "");
		add_listitem("", "Kamin	Whitehouse", "University of Virginia", "");

	?>
</ul>

<ul data-role="listview" data-inset="true" data-theme="d" data-content-theme="d">
	<li data-role="list-divider">TPC Members</li>
	<?php
		add_listitem("", "Yuvraj Agarwal", "Carnegie Mellon University", "");
		add_listitem("", "Alberto Cerpa", "University of California, Merced", "");
		add_listitem("", "Keith	Decker", "University of Delaware", "http://www.cis.udel.edu/~decker");
		add_listitem("", "Longbo Huang", "Tsinghua University", "");
		add_listitem("", "Fred Jiang",	"Intel Labs, China", "");
		add_listitem("", "Younghun Kim", "IBM Research", "");
		add_listitem("", "Sebastian	Lehnhoff", "OFFIS - Institut for Informatik", "http://www.offis.de");
		add_listitem("", "Rahul	Mangharam",	"University of Pennsylvania", "http://www.seas.upenn.edu/~rahulm");
		add_listitem("", "Manish Marwah", "HP Labs", "");
		add_listitem("", "Balakrishan Narayanaswamy", "UCSD", "");
		add_listitem("", "Oliver Parson", "University of Southampton", "");
		add_listitem("", "Sarvapali	Ramchurn", "University of Southampton", "http://www.ecs.soton.ac.uk/~sdr");
		add_listitem("", "Alex Rogers",	"University of Southampton", "");
		add_listitem("", "Mani Srivastava", "UCLA", "");
		add_listitem("", "Olle Sundstrom", "IBM Research", "");
		add_listitem("", "Dan-Cristian Tomozei", "Cisco Systems",	"");
		add_listitem("", "Ting Zhu", "University of Maryland", "");
	?>
</ul>

<ul data-role="listview" data-inset="true" data-theme="d" data-content-theme="d">
	<li data-role="list-divider">External Reviewers</li>
	<?php
		add_listitem("", "Tanuja Ganu", "IBM Research, India", "");		
		add_listitem("", "Jagabondhu Hazra", "IBM Research, India", "");		
		add_listitem("", "Harshad Khadilkar", "IBM Research, India", "");		
		add_listitem("", "Bruce Nordman", "Lawrence Berkeley National Laboratory", "");		
		add_listitem("", "Deva Seetharam", "Independent Researcher", "");		
		add_listitem("", "Amith Singhee", "IBM T J Watson Research Center", "");		
		add_listitem("", "George Stamoulis", "AUEB, Greece", "");		
		add_listitem("", "Sebastian Stein", "University of Southampton", "");		
		add_listitem("", "Rene Struik", "Struik Security", "");		
		add_listitem("", "Jay Taneja", "IBM Research, Africa", "");		
		add_listitem("", "Henry Truong", "Unviersity of Southampton", "");		
	?>
</ul>


<?php
    include ("include/footer.php");
?>