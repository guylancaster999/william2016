<?php 
session_start();
$gpics=
	'{"gallery":[ 
	{"flag":"T","picTtl":"Concerts 2015"},	
	{"flag":"P","grpTtl":"Concerts 2015","picLarge":"21april2015.jpg","picSmall":"21april2015_120.jpg",
	"picTtl":"Photo #1-%20Preludes%20by%20Chopin%20and%20Scriabin%20-%20Photo%20Badisher%20Zeitung"},	
	{"flag":"P","grpTtl":"Concerts 2015","picLarge":"bz2015-1.jpg","picSmall":"bz2015-1-120.jpg","picTtl":"Photo #2-Benefit Concert for renovation of the Community Centre,%20Photo%20%20Badisher%20Zeitung"},  
	{"flag":"T","picTtl":"Master Class 2015"},
    {"flag":"P", "grpTtl":"Master Class 2015", "picLarge":"masterclass2015_1.jpg","picSmall":"masterclass2015_1_tn.jpg","picTtl":"Photo #1 - William Cuthbertson with Student"},
	{"flag":"P", "grpTtl":"Master Class 2015", "picLarge":"masterclass2015_2.jpg","picSmall":"masterclass2015_2_tn.jpg","picTtl": "Photo #2"},		
	{"flag":"P", "grpTtl":"Master Class 2015", "picLarge":"masterclass2015_3.jpg","picSmall":"masterclass2015_3_tn.jpg","picTtl":"Photo #3 - William Cuthbertson with Student"},
	{"flag":"P", "grpTtl":"Master Class 2015", "picLarge":"masterclass2015_4.jpg","picSmall":"masterclass2015_4_tn.jpg","picTtl":"Photo #4 - William Cuthbertson with Student"},	
	{"flag":"P", "grpTtl":"Master Class 2015", "picLarge":"masterclass2015_5.png","picSmall":"masterclass2015_5_tn.png","picTtl":"Photo #5"},	
	{"flag":"P", "grpTtl":"Master Class 2015",
	"picLarge":"masterclass2015_6.png","picSmall":"masterclass2015_6_tn.png",	"picTtl":"Photo #6"},
	{"flag":"P", "grpTtl":"Master Class 2015",
	"picLarge":"masterclass2015_11.jpg","picSmall":"masterclass2015_11_tn.jpg",	"picTtl":"Photo #7"},	
	{"flag":"P", "grpTtl":"Master Class 2015",
	"picLarge":"masterclass2015_7.jpg","picSmall":"masterclass2015_7_tn.jpg",	"picTtl":"Photo #8"},
	{"flag":"P", "grpTtl":"Master Class 2015",
	"picLarge":"masterclass2015_8.jpg","picSmall":"masterclass2015_8_tn.jpg","picTtl":"Photo #9-Stefan Blido"},
	{"flag":"P", "grpTtl":"Master Class 2015",
	"picLarge":"masterclass2015_9.jpg","picSmall":"masterclass2015_9_tn.jpg","picTtl":"Photo #10 - William Cuthbertson"},
	{"flag":"P","grpTtl":"Master Class 2015",
    "picLarge":"masterclass2015_10.jpg","picSmall":"masterclass2015_10_tn.jpg","picTtl":"Photo #11-Martina Barufke (Alexander Technique)"},
	{"flag":"T","picTtl":"Teaching 2015"},
	{"flag":"P","grpTtl":"Teaching 2015","picLarge":"Vorspiel1.jpg","picSmall":"Vorspiel1_tn.jpg","picTtl":"Photo #1"},
	{"flag":"P","grpTtl":"Teaching 2015","picLarge":"Vorspiel2.jpg","picSmall":"Vorspiel2_tn.jpg","picTtl":"Photo #2"},
	{"flag":"P","grpTtl":"Teaching 2015","picLarge":"Vorspiel3.jpg","picSmall":"Vorspiel3_tn.jpg","picTtl":"Photo #3"},
	{"flag":"P","grpTtl":"Teaching 2015","picLarge":"Abrsm1-1.jpg","picSmall":"Abrsm1-1_tn.jpg","picTtl":"Photo #4"},
	{"flag":"P","grpTtl":"Teaching 2015","picLarge":"Abrsm2-1.jpg","picSmall":"Abrsm2-1_tn.jpg","picTtl":"Photo #5"},
	{"flag":"T","picTtl":"Master Class 2014"},
	{"flag":"P","grpTtl":"MasterClass 2014","picLarge":"foto1.JPG","picSmall":"foto1_tn.jpg","picTtl":"Photo #1"},
	{"flag":"P","grpTtl":"MasterClass 2014","picLarge":"foto2.JPG","picSmall":"foto2_tn.jpg","picTtl":"Photo #2"},
	{"flag":"P","grpTtl":"MasterClass 2014","picLarge":"foto3.JPG","picSmall":"foto3_tn.jpg","picTtl":"Photo #3"},	{"flag":"P","grpTtl":"MasterClass 2014","picLarge":"foto4.JPG","picSmall":"foto4_tn.jpg","picTtl":"Photo #4"},
	{"flag":"P","grpTtl":"MasterClass 2014","picLarge":"foto5.JPG","picSmall":"foto5_tn.jpg","picTtl":"Photo #5"},
	{"flag":"P","grpTtl":"MasterClass 2014","picLarge":"foto6.JPG","picSmall":"foto6_tn.jpg","picTtl":"Photo #6 Peter Feuchtwanger, William Cuthbertson with Student"},
	{"flag":"P","grpTtl":"MasterClass 2014","picLarge":"foto7.JPG","picSmall":"foto7_tn.jpg","picTtl":"Photo #7"},
	{"flag":"P","grpTtl":"MasterClass 2014","picLarge":"foto8.JPG","picSmall":"foto8_tn.jpg","picTtl":"Photo #8-William Cuthbertson"},	
	{"flag":"P","grpTtl":"MasterClass 2014","picLarge":"peter.feuchtwanger_teaching.jpg","picSmall":"peter.feuchtwanger_teaching_140.jpg","picTtl":"Photo #9-Peter Feuchtwanger teaching"},
	{"flag":"T","picTtl":"Concerts 2014"},
	{"flag":"P","grpTtl":"Concerts 2014","picLarge":"foto9.jpg","picSmall":"foto9_120.jpg","picTtl":"Photo #1-Waldkirch  Musicians sing and play music of Mozart to Bob Dylan"},
	{"flag":"P","grpTtl":"Concerts 2014","picLarge":"foto10.jpg","picSmall":"foto10_120.jpg","picTtl":"Photo #2-William Cuthbertson and Weimo Gao"},
	{"flag":"P","grpTtl":"Concerts 2014","picLarge":"foto12.jpg","picSmall":"foto12_120.jpg","picTtl":"Photo #3-Open Air Concert with the Waldkirch Dance Band"},	
	{"flag":"P","grpTtl":"Concerts 2014","picLarge":"22october2014.jpg","picSmall":"22october2014_120.jpg","picTtl":"Photo #4"},
	{"flag":"P","grpTtl":"Concerts 2014","picLarge":"chopin.jpg","picSmall":"chopin_120.jpg","picTtl":"Photo #5-Chopin%20Concert"},
	{"flag":"P","grpTtl":"Concerts 2014","picLarge":"concert_fb.jpg","picSmall":"concert_fb_120.jpg","picTtl":"Photo #6-Weimo%20Gao"},
	{"flag":"T","picTtl":"Concerts 2013"},
	{"flag":"P","grpTtl":"Concerts 2013","picLarge":"foto11.jpg","picSmall":"foto11_120.jpg","picTtl":"Photo #1-Words by Wilhelm Busch, Music by William Cuthbertson"},	
	{"flag":"T","picTtl":"Concerts 2012"},	
	{"flag":"P","grpTtl":"Concerts 2013","picLarge":"IMG_2402.JPG","picSmall":"IMG_2402_120.jpg","picTtl":"Photo#1-Nov.26th%202012%20in%20St.%20James,%20Piccadilly,%20London,%20England,William%20plays%20Beethovens%20Hammerklavier-Sonate"},
	{"flag":"P","grpTtl":"Concerts 2012", "picLarge":"WilhelmBuschAbend.jpg","picSmall":"WilhelmBuschAbend_120.jpg","picTtl":"Photo#2-Wilhelm Busch Evening"},
	{"flag":"P","grpTtl":"Konzerte 2012","picLarge":"sunyiqi.png","picSmall":"sunyiqi_120.png",	"picTtl":"Photo 3 - Concert with mit Sun Yiqi and William Cuthbertson"}
 	]}';
session_start();
$_SESSION["gpics"]	=$gpics;	
$x 					= json_decode($gpics,true);
$sz					= count($x["gallery"]);
require "funcz/functionz.php";
print head("en","Fotos");
?>
<body>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <?php print  menu("de","Photographs");?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid">
               <?php topRight("foto_e.php","foto.php","foto_ch.php");?>
                <div class="row">
                <div class="col-lg-12"> 
                    <h2>Photographs</h2> 
                </div>
             </div>
 			<div class="row">
				<div class="col-sm-12">         
					<? 
					for ($i=0;$i<$sz;$i++)
					{ 	
						$y 			= $x["gallery"][$i]; 
						$grpTtl		= $y["grpTtl"];
						$picTtl		= $y["picTtl"];
						$flag		= $y["flag"];
				
						switch($flag)
						{case "T":
							if ($i>0) print "</tr></table>";
							print '<h3>'.$picTtl.'</h3>
							<table class="table">
							<tr>';
							$colCtr=0;
							break;
						default:
							if ($colCtr>=4)
							{
								$colCtr=0;
								print "</tr>
								<tr>";
							}
							$colCtr++;
							print "<td>";
							displayPic($i,"foto_e.php","en");
							print "</td>";
						}
					}
					?>
				</tr>
			</table>			
 						<div class="alpha">Click here to see photos full sized</div>
						<?php print foot(); ?>
                    </div>
                </div>
            </div>
        </div>         <!-- /#page-content-wrapper -->
    </div>     <!-- /#wrapper -->
	
</body>
</html>





 