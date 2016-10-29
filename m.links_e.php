<?php 
require "funcz/m.functionz.php";
print head("en","links","links_e.php","Y");
?>
<body>
<div data-role="page" id="pageone">
  <div data-role="header">
     <?php print top("en","Links","Links");?>
     </div>
  <div data-role="main" class="ui-content">
 <table cellpadding="10">
			 <?php
			 alink("alexandertechnique.png","Alexander Technique","http://www.alexandertechnique.com/");
			 alink("wikipedia.png" ,"Alexander Technique (wikipedia)","http://en.wikipedia.org/wiki/Alexander_technique");
			 alink("abrsm.jpg","Associated Board of the Royal Schools of Music (ABRSM) - Examinations","http://de.abrsm.org/en/home");
			 alink("eltzalmuseum.gif","Elztal Museum, Waldkirch","http://www.elztalmuseum.de/");
			 alink("epta.png","European Piano Teachers Association" ,"http://epta-europe.org");
			 alink("klappe11.jpg", "Klappe 11 Cinema and Arts Festival, Waldkirch","http://www.klappe11.de/");
			 alink("musicschulewaldkirch.jpg","Waldkirch Music School","http://www.fv-musikschule-waldkirch.de/");
			 alink("pf.png","Peter Feuchtwanger - Pianist, Composer, Padagogue","http://www.peter-feuchtwanger.de/");
			 alink("pfclub.jpg","Peter Feuchtwanger Club (Facebook)","https://www.facebook.com/Peter-Feuchtwanger-Club-195576167160189/");
			 alink("wikipedia.png","Peter Feuchtwanger (Wikipedia)","https://en.wikipedia.org/wiki/Peter_Feuchtwanger");
			 alink("ram.png","Royal Academy of Music","http://www.ram.ac.uk/");
			 alink("blido.jpg","Stefan Blido","http://www.blido.de/");
			alink("kulturwoche.jpg","Waldkirch Culture Week" ,"http://kulturwoche-waldkirch.de/");
			alink("wo.jpg","Waldkirch Organ Foundation","http://www.waldkircher-orgelstiftung.de/");
			alink("fb.jpg","William Cuthbertson Facebook","https://www.facebook.com/william.cuthbertson.12");
		?>
		</table>
  </div>
  <div data-role="footer">
     <?php print foot();?>
  </div>
</div> 
</body>
</html>
