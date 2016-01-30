<?php 
require "funcz/functionz.php";
print head("en","homepage");
?>
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
            <?php print  menu("en","Links","links_e.php","links.php","links_ch.php");  ?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid">
			    <?php topRight();?>
                <div class="row">
                <div class="col-lg-12"> 
                      <h2>Links</h2> 
                </div>
             </div>
              <div class="row">
               <div class="col-lg-12">      
                <?php photorightnolink("Valldemosa_400.jpg","Neben%20Büste%20von%20Chopin,%20Valldemosa");?>
                <ul>
					<li><a href="http://www.alexandertechnique.com/">Alexander technique</a>
					<br/>
					<br/>
					</li><li><a href="http://en.wikipedia.org/wiki/Alexander_technique">Alexander  technique (wikipedia)</a>
					<br/>
					<br/>
					</li>
					<li><a href="http://de.abrsm.org/en/home">Associated Board of the Royal Schools of Music (ABRSM)</a> - Examinations<br/>
					<br/>
					</li>
					<li><a href="http://www.blido.de/" title="Stefan Blido">Stefan Blido</a>
					<br/>
					<br/>
					</li>
					<li><a href="http://www.elztalmuseum.de/">Elztal Museum</a><br/>
					<br/>
					</li>
					<li><a href="http://www.klappe11.de/">Kommunales Kino Klappe 11</a>
					<br/>
					<br/>
					</li> 
					<li><a href="http://www.peter-feuchtwanger.de/">Peter Feuchtwanger</a><br/>
					<br/>
					</li>
					<li><a href="http://www.ram.ac.uk/">Royal Academy of Music</a><br/>
					<br/>
					</li>
					<li><a href="http://kulturwoche-waldkirch.de/">Waldkirch  Kultur Weeks Festival</a><br/><br/></li>
					<li><a href="http://www.fv-musikschule-waldkirch.de/">Waldkirch Music School</a>
					<br/><br/></li>
					<li><a href="http://www.waldkircher-orgelstiftung.de/">Waldkirch Organ Foundation</a><br/>
					 <br/>
					</li>
					<li><a href="https://www.facebook.com/william.cuthbertson.12">William Cuthbertson Facebook</a><br/>
					<br/>
					</li>
					</ul>   
                <?php print foot();	?>
                    </div>
                </div>
            </div>
        </div>        <!-- /#page-content-wrapper -->
    </div>    <!-- /#wrapper -->
	<?php  print endPage();?></body>
</html>