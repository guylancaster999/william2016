<?php 
require "funcz/functionz.php";
session_start();
$gpics=
	'{"gallery":[ 
	{"flag":"P","picLarge":"Vorspiel1.jpg","picSmall":"Vorspiel1_240.jpg","picTtl":"Foto1 - Kind am Klavier"},		{"flag":"P","picLarge":"Vorspiel2.jpg","picSmall":"Vorspiel2_240.jpg","picTtl":"Foto2 - Kind am Klavier und Kind mit Violine"},		{"flag":"P","picLarge":"Vorspiel3.jpg","picSmall":"Vorspiel3_240.jpg","picTtl":"Foto3 - Kind am Klavier"},	
	{"flag":"P","picLarge":"Abrsm1-1.jpg","picSmall":"Abrsm1-1_240.jpg","picTtl":"Foto4 - Kind am Klavier mit Zertifikat"},
	{"flag":"P","picLarge":"Abrsm2-1.jpg","picSmall":"Abrsm2-1_240.jpg","picTtl":"Foto5 - Kind am Klavier mit Zertifikat"}
	]}';
	$_SESSION["gpics"]	=$gpics;	
$x 					= json_decode($gpics,true);
$sz					= count($x["gallery"]);
	print head("de","Kinder");
?>
<body>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <?php print  menu("de","Kinder",'teaching_e.php','kinder.php','teaching_ch.php'); ?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid"> 
			 <?php topRight();?>
             <div class="row">
                <div class="col-lg-12"> 
                   <h2>Klavierunterricht f&uuml;r Kinder</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12 col-12">       
                 William Cuthbertson unterrichtet auch Kinder, von Anfängern bis Fortgeschrittene. 		
                 Dabei könnten die Kinder ausser klassischen Stücken auch Stücke aus derm Pop- und Jazzrepertoire kennenzulernen.  
                 Es besteht auch die Möglichkeit <a href="http://gb.abrsm.org/">ABRSM Prufüngen</a> zu machen.
          	 <h4>Erwachsene (Laien)</h4>
 				 Späteinsteiger und Wiedereinsteiger sind auch herzlich willkommen.
				<table class="table">
					<tr>
				 <? 
					for ($i=0;$i<$sz;$i++)
					{ 	
						$y 			= $x["gallery"][$i]; 
						$picSmall	= $y["picSmall"];
						$picLarge	= $y["picLarge"];
						$picTtl		= $y["picTtl"];
						$flag		= $y["flag"];
						if ($colCtr>=4)
							{
								$colCtr=0;
								print "</tr>
								<tr>";
							}
							$colCtr++;
							print "<td>";
							displayPic($i,"kinder.php","en");
							print "</td>";
					}
					$neededCol=4-$colCtr;
					if ($neededCol>0) for ($i=0;$i<$neededCol;$i++) print "<td>&nbsp;</td>";
					?>
				</tr>
			</table>			
				<?php print foot();?>
             </div>
		   </div></div>
        </div>        <!-- /#page-content-wrapper -->
    </div>    <!-- /#wrapper -->
 	<?php  print endPage();?>
	</body>
</html>