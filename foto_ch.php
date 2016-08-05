<?php 
session_start();
$gpics='{"gallery":[';
$gpics.='{"flag":"T","picTtl":"音乐会 2016"},	
{"flag":"P","grpTtl":"音乐会 2016","picLarge":"2006_1.jpg","picSmall":"2006_1_120.jpg","picTtl":"Stiftung Beatus, Sigriswil, Switzerland"},
{"flag":"P","grpTtl":"音乐会 2016","picLarge":"novgorod1.png","picSmall":"novgorod1_tn.png","picTtl":"Novgorod, Russia"},
{"flag":"P","grpTtl":"音乐会 2016","picLarge":"Fr08Juli2016.jpg","picSmall":"Fr08Juli2016_tn.jpg","picTtl":"Elztal Museum Concert,Photo: Badische Zeitung,  G. Zahn"}';
$gpics.=',{"flag":"T","picTtl":"音乐会 2015"},
{"flag":"P","grpTtl":"音乐会 2015","picLarge":"21april2015.jpg","picSmall":"21april2015_120.jpg","picTtl":"Preludes%20by%20Chopin%20and%20Scriabin%20-%20Photo%20Badischer%20Zeitung"},		
{"flag":"P","grpTtl":"音乐会 2015","picLarge":"bz2015-1.jpg","picSmall":"bz2015-1-120.jpg","picTtl":"Benefizkonzert mit Klassik und Chansons zugunsten der Renovierung des  Gemeindezentrums,%20Photo%20%20Badischer%20Zeitung"}';
$gpics.=',{"flag":"T","picTtl":"大师班 2015"},
{"flag":"P","grpTtl":"大师班 2015", "picLarge":"masterclass2015_1.jpg","picSmall":"masterclass2015_1_tn.jpg","picTtl":"William Cuthbertson with Student"},
{"flag":"P","grpTtl":"大师班 2015","picLarge":"masterclass2015_2.jpg","picSmall":"masterclass2015_2_tn.jpg","picTtl": "William Cuthbertson with Students"},	
{"flag":"P","grpTtl":"大师班 2015", "picLarge":"masterclass2015_3.jpg","picSmall":"masterclass2015_3_tn.jpg","picTtl":"William Cuthbertson with Student"},	
{"flag":"P","grpTtl":"大师班 2015", "picLarge":"masterclass2015_4.jpg","picSmall":"masterclass2015_4_tn.jpg","picTtl":"William Cuthbertson with Student"},	
{"flag":"P","grpTtl":"大师班 2015","picLarge":"masterclass2015_5.png","picSmall":"masterclass2015_5_tn.png","picTtl":"Masterclass Students"},	
{"flag":"P","grpTtl":"大师班 2015","picLarge":"masterclass2015_6.png","picSmall":"masterclass2015_6_tn.png","picTtl":"Masterclass Students"},	
{"flag":"P","grpTtl":"大师班 2015","picLarge":"masterclass2015_11.jpg","picSmall":"masterclass2015_11_tn.jpg","picTtl":"After Party - William Cuthbertson with Students"},	
{"flag":"P","grpTtl":"大师班 2015",  "picLarge":"masterclass2015_7.jpg", "picSmall":"masterclass2015_7_tn.jpg","picTtl":"Final concert. Participants receive flowers"},	
{"flag":"P","grpTtl":"大师班 2015", "picLarge":"masterclass2015_8.jpg","picSmall":"masterclass2015_8_tn.jpg","picTtl":"Stefan Blido (Feuchtwanger Exercises teacher) at After Party"},
{"flag":"P","grpTtl":"大师班 2015", "picLarge":"masterclass2015_9.jpg","picSmall":"masterclass2015_9_tn.jpg","picTtl":"William Cuthbertson (Klavier) receives a gift at After Party"},
{"flag":"P","grpTtl":"大师班 2015", "picLarge":"masterclass2015_10.jpg","picSmall":"masterclass2015_10_tn.jpg","picTtl":"Martina Barufke (Alexander Technik)"}';

$gpics.=',{"flag":"T","picTtl":"教学 2015"},
	{"flag":"P","grpTtl":"教学 2015", "picLarge":"Vorspiel1.jpg","picSmall":"Vorspiel1_tn.jpg","picTtl":"Piano Pupil"},
	{"flag":"P","grpTtl":"教学 2015",	"picLarge":"Vorspiel2.jpg","picSmall":"Vorspiel2_tn.jpg","picTtl":"Piano and Violin Pupils at Concert"},
	{"flag":"P","grpTtl":"教学 2015",	"picLarge":"Vorspiel3.jpg","picSmall":"Vorspiel3_tn.jpg","picTtl":"Piano Pupil"},
	{"flag":"P","grpTtl":"教学 2015",	"picLarge":"Abrsm1-1.jpg","picSmall":"Abrsm1-1_tn.jpg","picTtl":"Piano Pupil with ABRSM Certificate"},
	{"flag":"P","grpTtl":"教学 2015",	"picLarge":"Abrsm2-1.jpg","picSmall":"Abrsm2-1_tn.jpg","picTtl":"Piano Pupil with ABRSM Certificate"}';

$gpics.=',{"flag":"T","picTtl":"大师班 2014"},
{"flag":"P","grpTtl":"Meisterkurse 2014","picLarge":"peterfeutchtwangerKaoruMaruyamawilliam.jpg","picSmall":"peterfeutchtwangerKaoruMaruyamawilliam_tn.jpg","picTtl":"Peter Feutchtwanger,Kaoru Maruyama, William Cuthbertson"},
{"flag":"P","grpTtl":"大师班 2014","picLarge":"foto1.JPG","picSmall":"foto1_tn.jpg","picTtl":"Peter Feutchtwanger, William Cuthbertson and students"},
{"flag":"P","grpTtl":"大师班 2014","picLarge":"foto2.JPG","picSmall":"foto2_tn.jpg","picTtl":"Peter Feutchtwanger, William Cuthbertson and student"},
{"flag":"P","grpTtl":"大师班 2014","picLarge":"foto3.JPG","picSmall":"foto3_tn.jpg","picTtl":"William Cuthbertson and students"},
{"flag":"P","grpTtl":"大师班 2014","picLarge":"foto4.JPG","picSmall":"foto4_tn.jpg","picTtl":"Peter Feutchtwanger and student"},
{"flag":"P","grpTtl":"大师班 2014","picLarge":"foto5.JPG","picSmall":"foto5_tn.jpg","picTtl":"Peter Feutchtwanger, William Cuthbertson and students"},
{"flag":"P","grpTtl":"大师班 2014","picLarge":"foto6.JPG","picSmall":"foto6_tn.jpg","picTtl":":Peter Feuchtwanger, William Cuthbertson und Student"},
{"flag":"P","grpTtl":"大师班 2014","picLarge":"foto7.JPG","picSmall":"foto7_tn.jpg","picTtl":"William Cuthbertson and students"},
{"flag":"P","grpTtl":"大师班 2014","picLarge":"foto8.JPG","picSmall":"foto8_tn.jpg","picTtl":"William Cuthbertson"}';

$gpics.=',{"flag":"T","picTtl":"音乐会 2014"},
{"flag":"P","grpTtl":"音乐会 2014","picLarge":"kulturwoche2014.jpg","picSmall":"kulturwoche2014_120.jpg","picTtl":"Waldkirch Culture Week 2014:Photo Badische Zeitung"},
{"flag":"P","grpTtl":"音乐会 2014","picLarge":"foto9.jpg","picSmall":"foto9_120.jpg","picTtl":"Waldkirch musicians play and sing music from Mozart to Bob Dylan"},
{"flag":"P","grpTtl":"音乐会 2014","picLarge":"foto10.jpg","picSmall":"foto10_120.jpg","picTtl":"William Cuthbertson and Weimo Gao"},
{"flag":"P","grpTtl":"音乐会 2014","picLarge":"foto12.jpg","picSmall":"foto12_120.jpg","picTtl":"Open Air consert with Waldkirche Dance band"},	
{"flag":"P","grpTtl":"音乐会 2014","picLarge":"22october2014.jpg","picSmall":"22october2014_120.jpg","picTtl":"William Cuthbertson with Singer"},
{"flag":"P","grpTtl":"音乐会 2014","picLarge":"chopin.jpg","picSmall":"chopin_120.jpg", "picTtl":"Chopin Concert"},
{"flag":"P","grpTtl":"音乐会 2014","picLarge":"concert_fb.jpg", "picSmall":"concert_fb_120.jpg","picTtl":"Concert with Weimo Gao"},
{"flag":"P","grpTtl":"音乐会 2014","picLarge":"chopinetuden.jpg", "picSmall":"chopinetuden_120.jpg","picTtl":"Chopin Etuden - Photo Badische Zeitung"}';

$gpics.=',{"flag":"T","picTtl":"音乐会 2013"},
{"flag":"P","grpTtl":"音乐会 2013","picLarge":"foto11.jpg","picSmall":"foto11_120.jpg","picTtl":"Words by Wilhelm Busch, Music by William Cuthbertson"}';
$gpics.=',{"flag":"T","picTtl":"音乐会 2012"},
{"flag":"P","grpTtl":"音乐会 2012","picLarge":"IMG_2402.JPG", "picSmall":"IMG_2402_120.jpg", "picTtl": "Nov.26th%202012 Concert in Piccadilly,%20London,%20England, where William plays Beethovens Hammerklavier-Sonate"},		
{"flag":"P","grpTtl":"音乐会  2012","picLarge":"WilhelmBuschAbend.jpg","picSmall":"WilhelmBuschAbend_120.jpg","picTtl":"Wilhelm Busch Evening"},
{"flag":"P","grpTtl":"音乐会 2012","picLarge":"yikisun.jpg","picSmall":"yikisun_120.jpg","picTtl":"Photo 3:Concert with mit Sun Yiqi and William Cuthbertson"},
{"flag":"P","grpTtl":"音乐会 2012","picLarge":"Gershwin2.JPG","picSmall":"Gershwin2_120.JPG","picTtl":"Foto4:Rhapsody in Blue"},
{"flag":"P","grpTtl":"音乐会 2012","picLarge":"NeuesBild.JPG","picSmall":"NeuesBild_120.JPG","picTtl":"Foto4:Rhapsody in Blue"}';

$gpics.=']}';
session_start();
$_SESSION["gpics"]	=$gpics;	
$x 					= json_decode($gpics,true);
$sz					= count($x["gallery"]);
require "funcz/functionz.php";
print head("ch","照片");
?>
<body>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <?php print  menu("ch","Photographs","foto_e.php","foto.php","foto_ch.php");?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid">
               <?php topRight();?>
                <div class="row">
                <div class="col-lg-12"> 
                    <h2>照片</h2> 
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
     		<div class="alpha">点击图片查看原图</div>
				<?php print foot(); ?>
                   </div>
               </div>
           </div>
       </div>         <!-- /#page-content-wrapper -->
    </div>     <!-- /#wrapper -->
	<?php  print endPage();?>	
</body>
</html>
	
	 