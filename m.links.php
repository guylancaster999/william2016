<?php 
require "funcz/m.functionz.php";
print head("de","links","links.php","Y");
?>
<body>
<div data-role="page" id="pageone">
  <div data-role="header">
     <?php print top("de","Linken","Linken");?>
     </div>
	<div data-role="main" class="ui-content">
		<table CELLPADDING="10">
					<?php 
				   alink("alexandertechnique.png","Alexander Technique","http://www.alexandertechnique.com/");
				   alink("wikipedia.png","Alexandertechnik (wikipedia)","https://de.wikipedia.org/wiki/Alexander-Technik");
				   alink("abrsm.jpg","Associated Board of the Royal Schools of Music (ABRSM)","http://de.abrsm.org/en/home");
				   alink("eltzalmuseum.gif","Elztal Museum","http://www.elztalmuseum.de/");
                   alink("epta.png","European Piano Teachers Association (EPTA)","http://epta-europe.org");
				   alink("klappe11.jpg","Kappe 11","http://www.klappe11.de/");
                   alink("musicschulewaldkirch.jpg","Musikschule Waldkirch","http://www.fv-musikschule-waldkirch.de/");
				   alink("pf.png","Peter Feuchtwanger","http://www.peter-feuchtwanger.de/");
                   alink("pfclub.jpg","Peter Feuchtwanger Club","https://www.facebook.com/Peter-Feuchtwanger-Club-195576167160189/");
				   alink("wikipedia.png" ,"Peter Feuchtwanger (wikipedia)","https://de.wikipedia.org/wiki/Peter_Feuchtwanger");
				   alink("ram.png","Royal Academy of Music","http://www.ram.ac.uk/");
				   alink("blido.jpg","Stefan Blido","http://www.blido.de/");
				   alink("kulturwoche.jpg","Waldkirch kulturwoche","http://kulturwoche-waldkirch.de/"); 
				   alink("wo.jpg","Waldkircher Orgelstiftung","http://www.waldkircher-orgelstiftung.de/");
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
