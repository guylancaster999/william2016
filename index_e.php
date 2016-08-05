<?php
require "funcz/functionz.php";
print head("en","homepage","index.php");
?>
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
            <?php print  menu("en","Homepage",'index_e.php','index.php','index_ch.php');?>
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
                <?php  photocenter("frontpagephoto.jpg", "William%20Cuthbertson%20am%20Klavier%201.3.2010%20-%20Photo%20by%20Hans%20Jürgen%20Kugler%201.3.2010");?>
               </div>
              </div>
             <div class="row">
               <div class="col-lg-12">
                <br/>
			   <ul>
			   <li><b>29th August&ndash;3rd September 2016</b> : 
			   <b>17th International <a title="Peter Feuchtwanger" href="http://peter-feuchtwanger.de/english-version/index.html">Peter Feuchtwanger</a> Piano Masterclass</b> 
				   <ul>
					<li>Details <a href="masterclasses_e.php" title="2016 Peter Feuchtwanger Piano Masterclass">here</a>.
					<br/><br/>
					</li>
					</ul>
				</li>
				<li><b>2016 International Concert Programme</b>
				   <ul><li>Click <a href="program_e.php" title="2016 International Piano Program"><strong>here</strong></a>
				   </li></ul><br/>
				</li>
				<li><b>August 31st - Prter Feuchtwanger memorial concerts.</b>
				<br/>
				<br/>
				To honour the legacy of the pianist, pedagogue and composer Peter Feuchtwanger, many of his former students will perform in two concert events:
				<br/>
				<br/>
				The first part is a rare performance of Giacomo Rossini’s "Semiramide” Overture in the arrangement for 32 hands by Carl Czerny. 
				16 pianists will perform this piece on 8 pianos ‪at 17:30‬ at the <A href="http://www.lepthien.de/">Pianohaus Lepthien</a> ‪Schwarzwaldstraße 9A, 79117 Freiburg im Breisgau‬).
				Entry free.
				<br/>
				<br/>
				For all those who are interested in attending both events, there will be a direct bus transfer organised
				(from Freiburg to Waldkirch, for around 6€ each way). 
				To book transport, please email: <A href="mailto:feuchtwanger-memorial@email.de">feuchtwanger-memorial@email.de</a>.
				<br/>
				<br/>
				Afterwards the main concert takes place ‪at 19:30‬ at the Baroque room,  <a href="http://www.elztalmuseum.de/" title="Elztal Museum">Elztal museum</a>, ‪Kirchplatz 14, D-79183 Waldkirch. 
				The programme consists of a wide range of solo and duo pieces, performed by about 20 pianists who will be coming from all over Europe and the USA to take part in this unique event.
				More information <a href="concert_e.php#31st">here</a>.
				<br/>
				Tickets: 12&euro; / 10&euro;(conc.) / 9&euro; children.
				<br/>
				<br/>
				I would like to thank Sanja Stefanovic as this concert was originally going to be a concert by her and singer Sophia Grech as guest artists of the master class week. After Prof. Feuchtwanger's death Mrs. Stefanovic suggested it would be more appropriate to have a memorial concert instead.
				</li>
				</li>		
				</ul>
 			   <?php print foot();	?>
                    </div>
                </div>
            </div>
        </div>        <!-- /#page-content-wrapper -->
    </div>    <!-- /#wrapper -->
		<?php  print endPage();?>
 </body>
</html>