<?php 
require "funcz/functionz.php";
print head("ch","设为首页","index_ch.php");
?>
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
            <?php print  menu("ch","设为首页",'index_e.php','index.php','index_ch.php'); ?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid"> 
                <?php topRight();?>
                <div class="row">
                  <div class="col-lg-12"> 
                    <h2>设为首页</h2> 
                </div>
             </div>
                <div class="row">
                 <div class="col-lg-12">      
                   <?php photocenter("frontpagephoto.jpg", "William%20Cuthbertson%20am%20Klavier%201.3.2010%20-%20Photo%20by%20Hans%20Jürgen%20Kugler%201.3.2010");?>		            
                <br/>
			   <ul>
			   <li><a href="program_ch.php" title="2016 International Piano Program"><strong>点击查看2016年国际演出节目</strong></a> 
			<br/>
			<br/>
			</li>
			   <li><strong><a href="masterclasses_ch.php">8月29日至9月3日2016年17国际彼得·希特万格钢琴大师班。</a><br/>
			   </strong><br/>
			</li>
 		       <li><b>August 31st - A memorial concert for Peter Feuchtwanger, featuring many of his former students</b>.
					<ul>
					<li>17.30 G.Rossini's "Semiramide" Overture, arr. Czerny, for 16 pianists on 8 pianos 
					at <A href="http://www.lepthien.de/">Pianohaus Lepthien</a>  in Freiburg. Entry free. 
				For all those who are interested in attending both events, there will be a direct bus transfer organised 
				(from Freiburg to Waldkirch and back, for around 6€ each way). 
				To book transport, please email: <A href="mailto:feuchtwanger-memorial@email.de">feuchtwanger-memorial@email.de</a>.
				</li>		      	
				<li>19.30 at the Baroque room,<a href="http://www.elztalmuseum.de/" title="Elztal Museum">Elztal museum</a>, ‪Kirchplatz 14, Waldkirch.
				Tickets: 12&euro;/10&euro;(conc. )/9&euro; children. </li>
				<li>More information <a href="concert_ch.php#31st">here</a>.</li>
			      </ul>
                <?php print foot();	?>
                    </div>
                </div>
            </div>
        </div>        <!-- /#page-content-wrapper -->
    </div>     <!-- /#wrapper --> 
	<?php  print endPage();?>
	</body>
</html>