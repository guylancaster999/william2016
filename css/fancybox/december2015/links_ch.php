<?php 
require "funcz/functionz.php";
print head("ch","链接");
?>
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
            <?php  print  menu("ch","链接"); ?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid"> 
			    <?php topRight("links_e.php","links.php","links_ch.php"); ?>
                <div class="row">
                  <div class="col-lg-12"> 
                      <h2>链接</h2> 
                  </div>
               </div>
              <div class="row">
                <div class="col-lg-12">   
                   <?php   photorightnolink( "Valldemosa_400.jpg","Neben Büste von Chopin, Valldemosa");?>
					<ul>
					<li><a href="http://www.alexandertechnique.com/">Alexander technique</a>
					<br/>
					<br/>
					</li><li><a href="http://en.wikipedia.org/wiki/Alexander_technique">Alexander  technique (wikipedia)</a>
					<br/>
					<br/>
					</li>
					<li><a href="http://gb.abrsm.org/ch/home">Associated Board of the Royal Schools of Music (ABRSM)</a> - 考试<br/>
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
					<li><a href="http://www.ram.ac.uk/ch/study/studying-at-the-academy">Royal Academy of Music</a><br/>
					<br/>
					</li>
					<li><a href="http://kulturwoche-waldkirch.de/">Waldkirch  Kultur Weeks Festival</a><br/><br/>
					</li>
					<li><a href="http://www.fv-musikschule-waldkirch.de/">Waldkirch Music School </a><br/><br/>
					</li>
					<li><a href="http://www.waldkircher-orgelstiftung.de/">Waldkirch Organ Foundation</a><br/>
					 <br/>
					</li>
					<li><a href="https://www.facebook.com/william.cuthbertson.12">William Cuthbertson Facebook</a><br/>
					<br/>
					</li>
					</ul>
                <?php 
			 	print foot();
				?>
                    </div>
                </div>
            </div>
        </div>        <!-- /#page-content-wrapper -->
    </div>    <!-- /#wrapper -->
</body>
</html>