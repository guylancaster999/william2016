<?php 
require "funcz/functionz.php";
print head("ch","链接");
?>
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
            <?php  print  menu("ch","链接","links_e.php","links.php","links_ch.php"); ?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid"> 
			    <?php topRight("links_e.php","links.php","links_ch.php"); ?>
                <div class="row  rowBorder">
                  <div class="col-lg-12"> 
                      <h2>链接</h2> 
                  </div>
               </div>
           	 <?php
			 alink("alexandertechnique.png","Alexander Technique","http://www.alexandertechnique.com/");
			 alink("wikipedia_ch.png","Alexander Technique (Wikipedia)","https://zh.wikipedia.org/wiki/%E4%BA%9E%E6%AD%B7%E5%B1%B1%E5%A4%A7%E6%8A%80%E5%B7%A7");
			 alink("abrsm.jpg","Associated Board of the Royal Schools of Music (ABRSM)-Examinations","http://cn.abrsm.org/en/home");
			 alink("eltzalmuseum.gif","Elztal Museum, Waldkirch","http://www.elztalmuseum.de/");
			 alink("epta.png","European Piano Teachers Association","http://epta-europe.org");
			 alink("klappe11.jpg", "Klappe 11 Cinema and Arts Festival,Waldkirch","http://www.klappe11.de/");
			 alink("musicschulewaldkirch.jpg","Waldkirch Music School","http://www.fv-musikschule-waldkirch.de/");
			 alink("pf.png","Peter Feuchtwanger - Pianist, Composer, Padagogue","http://www.peter-feuchtwanger.de/");
			 alink("pfclub.jpg","Peter Feuchtwanger Club (Facebook)","https://www.facebook.com/Peter-Feuchtwanger-Club-195576167160189/");
			 alink("wikipedia.png","Peter Feuchtwanger (Wikipedia)","https://en.wikipedia.org/wiki/Peter_Feuchtwanger");
			 alink("ram.png","Royal Academy of Music","http://www.ram.ac.uk/");
			 alink("blido.jpg","Fedra and Stefan Blido","http://www.blido.de/");
			alink("kulturwoche.jpg","Waldkirch Culture Week" ,"http://kulturwoche-waldkirch.de/");
			alink("wo.jpg","Waldkirch Organ Foundation","http://www.waldkircher-orgelstiftung.de/");
			alink("fb.jpg","William Cuthbertson Facebook","https://www.facebook.com/william.cuthbertson.12");
		?>
					<div class="row  rowBorder">
						<div class="col-lg-12">  
						
                <?php print foot();	?>
                    </div>
                </div>
            </div>
        </div>        <!-- /#page-content-wrapper -->
    </div>    <!-- /#wrapper -->
	<?php  print endPage();?>
	</body>
</html>