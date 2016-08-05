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
                 <div class="col-lg-3">         
				 <a href="http://www.alexandertechnique.com/">
                   <img src="img/alexandertechnique.png" alt="Alexander Technique" height="160" class="pic">
				  </a>
				  </div>
				 <div class="col-lg-9">         
					<a href="http://www.alexandertechnique.com/">Alexander Technique</a> 
					</div>
				</div>
				<div class="row">
                 <div class="col-lg-3">         
					<img src="img/wikipedia.png" alt="Wikipedia" height="160" class="pic"/>
				</div>
				 <div class="col-lg-9">         
				<a href="http://en.wikipedia.org/wiki/Alexander_technique">Alexander Technique (wikipedia)</a>
				</div>
             </div>
			<div class="row">
                 <div class="col-lg-3">         
				 	<a href="http://de.abrsm.org/en/home">
						<img src="img/abrsm.jpg" height="160" class="img-rounded pic" alt="abrsm">
					</a>
				</div>
				 <div class="col-lg-9">         
					<a href="http://de.abrsm.org/en/home">Associated Board of the Royal Schools of Music (ABRSM)</a> 
					- Exams
				</div>
				</div>
              	<div class="row">
                    <div class="col-lg-3">         
                        <img src="img/eltzalmuseum.gif" height="160" class="pic" alt="eltzal museum">
					</div>
                <div class="col-lg-9">         
 					<a href="http://www.elztalmuseum.de/">Elztal Museum</a>, Waldkirch
					</div>
                	</div>
       	           	<div class="row">
                      <div class="col-lg-3">         
							<img src="img/epta.png" alt="EPTA"  class="pic" height="160"/>
					</div>
					  <div class="col-lg-9">         
					    <a href="http://epta-europe.org">European Piano Teachers' Association</a>
					</div>
                	</div>
       	           	<div class="row">
                      <div class="col-lg-3">         
					  		<a href="http://www.klappe11.de/">
							<img src="img/klappe11.jpg" height="160" alt="klappe 11" class="pic">
							</a>
						</div>
					  <div class="col-lg-9">         
							<a href="http://www.klappe11.de/">Klappe 11 Arts Festival</a>, Wladkirch
						</div>
					</div>
       	           	<div class="row">
                      <div class="col-lg-3">         
					  <a href="http://www.fv-musikschule-waldkirch.de/">
						<img src="img/musicschulewaldkirch.jpg" height="160" alt="music schule waldkirch" class="pic">
						</a>
						</div>
					  <div class="col-lg-9">         
						<a href="http://www.fv-musikschule-waldkirch.de/">Waldkirch Music School</a>
				</div>
					 </div>
      	           	<div class="row">
                      <div class="col-lg-3">         
						<img src="img/pf.png" height="160" alt="Peter Feuchtwanger" class="pic"/>
						</div>
					  <div class="col-lg-9">         
						<a href="http://www.peter-feuchtwanger.de/">Peter Feuchtwanger</a> - Pianist, Composer, Padagogue
						</div>
					</div>
					<div class="row">
                      <div class="col-lg-3">         
					    <img src="img/pfclub.jpg" height="160" class="pic" alt="Peter Feuchtwanger" >
						</div>
					  <div class="col-lg-9">         
							<a href="https://www.facebook.com/Peter-Feuchtwanger-Club-195576167160189/">Peter Feuchtwanger Club</a> (Facebook)
						</div>
					</div>
					<div class="row">
                      <div class="col-lg-3">         
					  <a href="https://en.wikipedia.org/wiki/Peter_Feuchtwanger">
							<img src="img/wikipedia.png" height="160"  class="pic" alt="Peter Feuchtwanger" >
							</a>
						</div>
					  <div class="col-lg-9">         
						<a href="https://en.wikipedia.org/wiki/Peter_Feuchtwanger">Peter Feuchtwanger</a> (Wikipedia)
						</div>
						</div>
					<div class="row">
                      <div class="col-lg-3">  
							<a href="http://www.ram.ac.uk/">
							<img src="img/ram.png" alt="Royal Academy of Music"  class="pic" height="160"/>
							</a>
						</div>
					  <div class="col-lg-9">  
						<a href="http://www.ram.ac.uk/">Royal Academy of Music</a> 
						</div>
						</div>
					<div class="row">
						<div class="col-lg-3">  
							<img src="img/blido.jpg" alt="Stefan Blido" height="160"  class="pic"/>
					</div>
					  <div class="col-lg-9">  
						<a href="http://www.blido.de/" title="Stefan Blido">Stefan Blido</a>
						</div>
						</div>
					<div class="row">
						<div class="col-lg-3">  
							<img src="img/kulturwoche.jpg" alt="kultur woche" height="160"  class="pic">
						</div>
						<div class="col-lg-9">  
                           <a href="http://kulturwoche-waldkirch.de/">Waldkirch Culture Week</a> 
						</div>
						</div>
					<div class="row">
						<div class="col-lg-3">  
							<img src="img/wo.jpg" height="160" class="pic" alt="waldkircher-orgelstiftung">
						</div>
						<div class="col-lg-9">  
                        	<a href="http://www.waldkircher-orgelstiftung.de/">Waldkirch Organ Foundation</a> 
						</div>
						</div>
					<div class="row">
						<div class="col-lg-3">  
							<img src="img/fb.jpg" height="160" class="pic" alt="William Cuthbertson Facebook">
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
        </div>        <!-- /#page-content-wrapper -->
    </div>    <!-- /#wrapper -->
	<?php  print endPage();?></body>
</html>