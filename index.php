<?php
	require "funcz/functionz.php";
	print head("de","Homepage","index.php");
?> 
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
            <?php print  menu("de","Homepage",'index_e.php','index.php','index_ch.php');?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid">
			<?php topRight();?>
       	   <div class="row">
					<div class="col-lg-12">
                      <h2>Homepage</h2>
					</div>
             </div>
             <div class="row">
               <div class="col-lg-12">
                <?php photocenter("frontpagephoto1.jpg", "William%20Cuthbertson%20am%20Klavier%201.3.2010%20-%20Photo%20by%20Hans%20Jürgen%20Kugler%201.3.2010");?>
               </div>
              </div>
			  <div class="row">
               <div class="col-lg-12">
			   <br/>
			   <ul>
 				<li><b>2016 Konzertprogramm</b> 
				<ul>
					<li>Klicken Sie  <a href="program.php" title="2016 Klavier Program"><strong>hier</strong></a>
						<br/>
						<br/>
					</li>
				</ul>
				</li>
				<li><strong>29.August – 3.September 2016:</strong> 17. Internationaler <a href="http://peter-feuchtwanger.de/">Peter Feuchtwanger</a> Meisterkurs für Klavier. 
				  <ul>
					  <li>Einzelheiten <a href="meisterkurse.php">hier</a>	</li>
					</ul>
				<br/>
			</li>
			<li>
			  <b>31.August -	ein Gedenkkonzert für Peter Feuchtwanger.</b>
			  	<br/><br/>	  
				Zu Ehren des im Juni verstorbenen Pianisten, Pädagogen und Komponisten Peter Feuchtwanger spielen viele seiner ehemaligen Studenten in folgenden zwei Konzerten: 
				<br/><br/>	  
				Als erster Konzertteil wird ‪um 17:30 in Freiburg ein selten zu hörendes Stück für 32 Hände aufgeführt. 16 Pianisten spielen an 8 Klavieren Giacomo Rossinis "Semiramide" Overture im Arrangement von Carl Czerny. 
				Dieser Konzertteil findet im <A href="http://www.lepthien.de/">Pianohaus Lepthien</a> statt (‪Schwarzwaldstraße 9A, 79117 Freiburg im Breisgau‬). 
				Das Hauptkonzert ist der Klavierabend mit mehreren Solo-und Duo-Stücken ‪um 19:30h‬ im
				<a href="http://www.elztalmuseum.de/" title="Elztal Museum">Elztalmuseum</a>, ‪Kirchplatz 14‬, D-79183 Waldkirch. 
				<br/>
				<br/>	  
				Es spielen ca. 20 Pianisten, die dafür extra aus ganz Europa und den USA anreisen.
				<br/><br/>	  
				Für alle Besucher, die beide Veranstaltungen besuchen möchten, wird ein direkter Bustransfer angeboten (von Freiburg nach Waldkirch und zurück, für jeweils ca. 6€).   Voranmeldung dafür bitte per Email an: 
				<A href="mailto:feuchtwanger-memorial@email.de">feuchtwanger-memorial@email.de</a>.
				<br/><br/>	  
				Dieses Konzert war ursprünglich als ein Rezital der Meisterkurs-Gäste Sanja Stefanovic und Sophia Grech geplant. Frau Stefanovic hat nach dem unerwarteten Tod Feuchtwangers vorgeschlagen, dieses Konzert in eine Gedenkveranstaltung umzuwandeln, dafür sei ihr herzlich gedankt.
<br/><br/>	  
				
			  
			  Mehr information <a href="concert.php#31st">hier</a>.
		  </li>
		  </ul>
			<?php print foot();	?>
            </div>  <!-- col -->
        </div> <!-- row -->
      </div>  <!-- /#page-content-wrapper -->
     </div>  <!-- /#page-content-wrapper -->
    </div>    <!-- /#wrapper -->
	<?php  print endPage();?>
</body>
</html>
