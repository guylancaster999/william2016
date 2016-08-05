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
                <div class="row">
                  <div class="col-lg-12"> 
                      <h2>链接</h2> 
                  </div>
               </div>
            	<div class="row">
                 <div class="col-lg-3">         
                   <img src="img/alexandertechnique.png" alt="Alexander Technique" height="160" class="pic img-rounded" >
				  </div>
				 <div class="col-lg-9">         
					<a href="http://www.alexandertechnique.com/">Alexandertechnik</a> 
					</div>
				</div>

				<div class="row">
                 <div class="col-lg-3">         
					<img src="img/wikipedia.png" alt="Wikipedia" height="160" class="pic img-rounded" />
				</div>
				 <div class="col-lg-9">         
				<a href="http://en.wikipedia.org/wiki/Alexander_technique">Alexandertechnik (wikipedia)</a>
				</div>
             </div>
			<div class="row">
                 <div class="col-lg-3">         
					<img src="img/abrsm.jpg" height="160" class="pic img-rounded" >
				</div>
				 <div class="col-lg-9">         
					<a href="http://de.abrsm.org/en/home">Associated Board of the Royal Schools of Music (ABRSM)</a> 
					- Prufüngen
				</div>
				</div>
              	<div class="row">
                    <div class="col-lg-3">         
                        <img src="img/eltzalmuseum.gif" height="160" class="pic img-rounded" >
					</div>
                <div class="col-lg-9">         
 					<a href="http://www.elztalmuseum.de/">Elztal Museum</a>
					</div>
                	</div>
       	           	<div class="row">
                      <div class="col-lg-3">         
							<img src="img/epta.png" alt="EPTA"  class="pic img-rounded"  height="160"/>
					</div>
					  <div class="col-lg-9">         
					    <a href="http://epta-europe.org">European Piano Teachers' Association</a>
					</div>
                	</div>
       	           	<div class="row">
                      <div class="col-lg-3">         
							<img src="img/klappe11.jpg" height="160"  class="pic img-rounded" >
						</div>
					  <div class="col-lg-9">         
							<a href="http://www.klappe11.de/">Kommunales Kino Klappe 11</a>
						</div>
					</div>
       	           	<div class="row">
                      <div class="col-lg-3">         
						<img src="img/musicschulewaldkirch.jpg" height="160"  class="pic img-rounded" >
						</div>
					  <div class="col-lg-9">         
						<a href="http://www.fv-musikschule-waldkirch.de/">Musikschule Waldkirch</a>
				</div>
					 </div>
      	           	<div class="row">
                      <div class="col-lg-3">         
						<img src="img/pf.png" height="160"  class="pic img-rounded" />
						</div>
					  <div class="col-lg-9">         
						<a href="http://www.peter-feuchtwanger.de/">Peter Feuchtwanger</a>
						</div>
					</div>
					<div class="row">
                      <div class="col-lg-3">         
					    <img src="img/pfclub.jpg" height="160" class="pic img-rounded" >
						</div>
					  <div class="col-lg-9">         
					<a href="https://www.facebook.com/Peter-Feuchtwanger-Club-195576167160189/">Peter-Feuchtwanger-Club</a> (Facebook)
						</div>
						</div>
			<div class="row">
                      <div class="col-lg-3">         
					  <a href="https://en.wikipedia.org/wiki/Peter_Feuchtwanger" title="Peter Feuchtwanger">
							<img src="img/wikipedia.png" height="160" alt="Wikipedia" class="pic img-rounded" >
						</a>
						</div>
					  <div class="col-lg-9">         
						<a href="https://en.wikipedia.org/wiki/Peter_Feuchtwanger" title="Peter Feuchtwanger">
						   Peter Feuchtwanger
						</a> (Wikipedia)
						</div>
						</div>
			<div class="row">
                      <div class="col-lg-3">  
							<img src="img/ram.png" alt="Royal Academy of Music"  class="pic img-rounded"  height="160"/>
					</div>
					  <div class="col-lg-9">  
						<a href="http://www.ram.ac.uk/">Royal Academy of Music</a> 
						</div>
						</div>
					<div class="row">
						<div class="col-lg-3">  
							<img src="img/blido.jpg" alt="Stefan Blido" height="160"  class="pic img-rounded" />
					</div>
					  <div class="col-lg-9">  
						<a href="http://www.blido.de/" title="Stefan Blido">Stefan Blido</a>
						</div>
						</div>
					<div class="row">
						<div class="col-lg-3">  
							<img src="img/kulturwoche.jpg" height="160"  class="pic img-rounded" >
						</div>
						<div class="col-lg-9">  
                           <a href="http://kulturwoche-waldkirch.de/">Waldkirche Kulturwochen</a> 
						</div>
						</div>
					<div class="row">
						<div class="col-lg-3">  
							<img src="img/wo.jpg" height="160" class="pic img-rounded" >
						</div>
						<div class="col-lg-9">  
                        	<a href="http://www.waldkircher-orgelstiftung.de/">Waldkircher Orgelstiftung</a> 
						</div>
						</div>
					<div class="row">
						<div class="col-lg-3">  
							<img src="img/fb.jpg" height="160" class="pic img-rounded" >
						</div>
						<div class="col-lg-9">  
							<a href="https://www.facebook.com/william.cuthbertson.12">William Cuthbertson Facebook</a>
						</div>
						</div>
					</div>
					<div class="row">
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