<?php 
session_start();
$gpics=
	'{"gallery":[ 
	{"flag":"T","picTtl":"Konzerte 2015"},	
	{"flag":"P","grpTtl":"Konzerte 2015","picLarge":"21april2015.jpg","picSmall":"21april2015_120.jpg","picTtl":"Foto 1 - Preludes%20by%20Chopin%20and%20Scriabin%20-%20Photo%20Badisher%20Zeitung"},		
	{"flag":"P","grpTtl":"Konzerte 2015","picLarge":"bz2015-1.jpg","picSmall":"bz2015-1-120.jpg","picTtl":"Foto 2 - Benefizkonzert mit Klassik und Chansons zugunsten der Renovierung des  Gemeindezentrums,%20Photo%20%20Badisher%20Zeitung"},   
	{"flag":"T","picTtl":"Meisterkurse 2015"},
    {"flag":"P","grpTtl":"Meisterkurse 2015", "picLarge":"masterclass2015_1.jpg","picSmall":"masterclass2015_1_tn.jpg","picTtl":"Foto%201"},
	{"flag":"P","grpTtl":"Meisterkurse 2015","picLarge":"masterclass2015_2.jpg","picSmall":"masterclass2015_2_tn.jpg","picTtl": "Foto%202"},	
	{"flag":"P","grpTtl":"Meisterkurse 2015", "picLarge":"masterclass2015_3.jpg","picSmall":"masterclass2015_3_tn.jpg","picTtl":"Foto%203"},	
	{"flag":"P","grpTtl":"Meisterkurse 2015", "picLarge":"masterclass2015_4.jpg","picSmall":"masterclass2015_4_tn.jpg","picTtl":"Foto%204"},	
	{"flag":"P","grpTtl":"Meisterkurse 2015","picLarge":"masterclass2015_5.png","picSmall":"masterclass2015_5_tn.png","picTtl":"Foto%205"},	
	{"flag":"P","grpTtl":"Meisterkurse 2015","picLarge":"masterclass2015_6.png","picSmall":"masterclass2015_6_tn.png","picTtl":"Foto%206"},	
	{"flag":"P","grpTtl":"Meisterkurse 2015","picLarge":"masterclass2015_11.jpg","picSmall":"masterclass2015_11_tn.jpg","picTtl":"Foto%207"},	
	{"flag":"P","grpTtl":"Meisterkurse 2015",  "picLarge":"masterclass2015_7.jpg", "picSmall":"masterclass2015_7_tn.jpg","picTtl":"Foto%208 - Abschlusskonzert. TeilnehmerInnen kriegen Blumen"},	
	{"flag":"P","grpTtl":"Meisterkurse 2015", "picLarge":"masterclass2015_8.jpg","picSmall":"masterclass2015_8_tn.jpg","picTtl":"Foto%209 - Stefan Blido (Feuchtwanger Übungen)"},
	{"flag":"P","grpTtl":"Meisterkurse 2015", "picLarge":"masterclass2015_9.jpg","picSmall":"masterclass2015_9_tn.jpg","picTtl":"Foto%2010- Und wir kriegen ein nettes Geschenk. William Cuthbertson (Klavier)"},
	{"flag":"P","grpTtl":"Meisterkurse 2015", "picLarge":"masterclass2015_10.jpg","picSmall":"masterclass2015_10_tn.jpg","picTtl":"Foto%2011-Martina Barufke (Alexander Technik)"},	
	{"flag":"T","picTtl":"Unterricht 2015"},
	{"flag":"P","grpTtl":"Unterricht 2015", "picLarge":"Vorspiel1.jpg","picSmall":"Vorspiel1_tn.jpg","picTtl":"Foto%201"},
	{"flag":"P","grpTtl":"Unterricht 2015",
	"picLarge":"Vorspiel2.jpg","picSmall":"Vorspiel2_tn.jpg","picTtl":"Foto%202"},
	{"flag":"P","grpTtl":"Unterricht 2015",
	"picLarge":"Vorspiel3.jpg","picSmall":"Vorspiel3_tn.jpg","picTtl":"Foto%203"},
	{"flag":"P","grpTtl":"Unterricht 2015",
	"picLarge":"Abrsm1-1.jpg","picSmall":"Abrsm1-1_tn.jpg","picTtl":"Foto%204"},
	{"flag":"P","grpTtl":"Unterricht 2015",
	"picLarge":"Abrsm2-1.jpg","picSmall":"Abrsm2-1_tn.jpg","picTtl":"Foto%205"},
	{"flag":"T","picTtl":"Meisterkurse 2014"},
	{"flag":"P","grpTtl":"Meisterkurse 2014","picLarge":"foto1.JPG","picSmall":"foto1_tn.jpg","picTtl":"Foto%201"},
	{"flag":"P","grpTtl":"Meisterkurse 2014","picLarge":"foto2.JPG","picSmall":"foto2_tn.jpg","picTtl":"Foto%202"},
	{"flag":"P","grpTtl":"Meisterkurse 2014","picLarge":"foto3.JPG","picSmall":"foto3_tn.jpg","picTtl":"Foto%203"},	
	{"flag":"P","grpTtl":"Meisterkurse 2014","picLarge":"foto4.JPG","picSmall":"foto4_tn.jpg","picTtl":"Foto%204"},
	{"flag":"P","grpTtl":"Meisterkurse 2014","picLarge":"foto5.JPG","picSmall":"foto5_tn.jpg","picTtl":"Foto%205"},
	{"flag":"P","grpTtl":"Meisterkurse 2014","picLarge":"foto6.JPG","picSmall":"foto6_tn.jpg","picTtl":"Foto%206 Peter Feuchtwanger, William Cuthbertson und Student"},
	{"flag":"P","grpTtl":"Meisterkurse 2014","picLarge":"foto7.JPG","picSmall":"foto7_tn.jpg","picTtl":"Foto%207"},
	{"flag":"P","grpTtl":"Meisterkurse 2014","picLarge":"foto8.JPG","picSmall":"foto8_tn.jpg","picTtl":"Foto%208 William Cuthbertson"},
	{"flag":"T","picTtl":"Konzerte 2014"},
	{"flag":"P","grpTtl":"Konzerte 2014","picLarge":"foto9.jpg","picSmall":"foto9_120.jpg","picTtl":"Photo%201:Waldkircher Musiker singen und spielen Musik von Mozart bis Bob Dylan"},
	{"flag":"P","grpTtl":"Konzerte 2014","picLarge":"foto10.jpg","picSmall":"foto10_120.jpg","picTtl":"Photo%202 William Cuthbertson und Weimo Gao"},
	{"flag":"P","grpTtl":"Konzerte 2014","picLarge":"foto12.jpg","picSmall":"foto12_120.jpg","picTtl":"Photo%203 Open Air Konzert mit den Waldkircher Tanzrhythmiker"},	
	{"flag":"P","grpTtl":"Konzerte 2014","picLarge":"22october2014.jpg","picSmall":"22october2014_120.jpg","picTtl":"Photo%204"},
	{"flag":"P","grpTtl":"Konzerte 2014","picLarge":"chopin.jpg","picSmall":"chopin_120.jpg", "picTtl":"Photo%205&ndash;Chopin%20Konzert"},
	{"flag":"P","grpTtl":"Konzerte 2014","picLarge":"concert_fb.jpg", "picSmall":"concert_fb_120.jpg","picTtl":"Photo%206&ndash;Konzert%20mit%20Weimo%20Gao"},
	{"flag":"T","picTtl":"Konzerte 2013"},
	{"flag":"P","grpTtl":"Konzerte 2013","picLarge":"foto11.jpg","picSmall":"foto11_120.jpg","picTtl":"Photo%201-Gedichte von Wilhelm Busch, Musik von William Cuthbertson"},	
	{"flag":"T","picTtl":"Konzerte 2012"},
	{"flag":"P","grpTtl":"Konzerte 2012","picLarge":"IMG_2402.JPG", "picSmall":"IMG_2402_120.jpg", "picTtl": "Foto 1 - Nov.26th%202012%20in%20St.%20James,%20Piccadilly,%20London,%20England,%20wo%20William%20spielte%20Beethovens%20Hammerklavier-Sonate"},		
	{"flag":"P","grpTtl":"Konzerte  2012", "picLarge":"WilhelmBuschAbend.jpg","picSmall":"WilhelmBuschAbend_120.jpg","picTtl":"Foto 2 - Wilhelm Busch Abend"},
	{"flag":"P","grpTtl":"Konzerte 2012","picLarge":"sunyiqi.png","picSmall":"sunyiqi_120.png",	"picTtl":"Foto 3 - Konzert mit Sun Yiqi und William Cuthbertson"}
 	]}';
session_start();
$_SESSION["gpics"]	=$gpics;	
$x 					= json_decode($gpics,true);
$sz					= count($x["gallery"]);
require "funcz/functionz.php";
print head("de","Fotos");
?>
<body>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <?php print  menu("de","Fotografien");?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid">
               <?php topRight("foto_e.php","foto.php","foto_ch.php");?>
                <div class="row">
                <div class="col-lg-12"> 
                    <h2>Fotografien</h2> 
                </div>
             </div>
 			<div class="row">
				<div class="col-sm-12">         
					<? 
					for ($i=0;$i<$sz;$i++)
					{ 	
						$y 			= $x["gallery"][$i]; 
						$picSmall	= $y["picSmall"];
						$picLarge	= $y["picLarge"];
						$flag		= $y["flag"];
						switch($flag)
						{case "T":
							$grpTtl		= $y["picTtl"];					
							if ($i>0) print "</tr></table>";
							print '<h3>'.$grpTtl.'</h3>
							<table class="table">
							<tr>';
							$colCtr=0;
							break;
						default:
							$picTtl		= $y["picTtl"];					
							if ($colCtr>=4)
							{
								$colCtr=0;
								print "</tr>
								<tr>";
							}
							$colCtr++;
							print "<td>";
							displayPic($i,"foto.php","de");
							print "</td>";
						}
					}
					?>
				</tr>
			</table>			
 						<div class="alpha">Klicken Sie auf die Fotografien in voller Größe zu sehen</div>
						<?php print foot(); ?>
                    </div>
                </div>
            </div>
        </div>         <!-- /#page-content-wrapper -->
    </div>     <!-- /#wrapper -->
	
</body>
</html>