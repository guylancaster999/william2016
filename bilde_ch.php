<?php 
require "funcz/functionz.php";
print head("ch","速写");
session_start(); 
$gpics='{"gallery":[ 
{"flag":"P","grpTtl":"速写 -  Gosia%20Kulczyk","picLarge":"1.png","picSmall":"1_tn.png","picTtl":"Sketch 1"},	
{"flag":"P","grpTtl":"速写 -  Gosia%20Kulczyk","picLarge":"2.jpg","picSmall":"2_tn.jpg","picTtl":"Sketch 2"},	
{"flag":"P","grpTtl":"速写 -  Gosia Kulczyk","picLarge":"4.jpg","picSmall":"4_tn.jpg","picTtl":"Sketch 3"},	
{"flag":"P","grpTtl":"速写 -  Gosia%20Kulczyk","picLarge":"6.jpg","picSmall":"6_tn.jpg","picTtl":"Sketch 4"},	
{"flag":"P","grpTtl":"速写 -  Gosia%20Kulczyk","picLarge":"7.png","picSmall":"7_tn.jpg","picTtl":"Sketch 5"},	
{"flag":"P","grpTtl":"速写 -  Gosia%20Kulczyk","picLarge":"8.jpg","picSmall":"8_tn.jpg","picTtl":"Sketch 6"},	
{"flag":"P","grpTtl":"速写 -  Gosia%20Kulczyk","picLarge":"3.jpg","picSmall":"3_tn.jpg","picTtl":"Sketch 7"},	
{"flag":"P","grpTtl":"速写 -  Gosia%20Kulczyk","picLarge":"5.jpg","picSmall":"5_tn.jpg","picTtl":"Sketch 8"}
]}';
$_SESSION["gpics"]	=$gpics;	
$x 		= json_decode($gpics,true);
$sz		= count($x["gallery"]);
?>
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
            <?php print menu("ch","速写","bilde_e.php","bilde.php","bilde_ch.php");	?>
			</div>
          <div id="page-content-wrapper">
            <div class="container-fluid"> 
			    <?php topRight();?>
                <div class="row">
                <div class="col-lg-12"> 
                      <h2>速写 &ndash; Gosia Kulczyk</h2> 
                </div>
             </div>
            <div class="row">
					<? 
					
					for ($i=0;$i<$sz;$i++)
					{ 	
						print '<div class="col-lg-2 col-md-3 col-sm-4 bordered">';
						displayPic($i,"bilde_ch.php","ch");
						print "</div>";
					}
					?>
			</div>			
				<br/>
				<div class="alpha" >点击图片查看原图</div>
				<?php print foot();?>
                    </div>
                </div>
            </div>
        </div>        <!-- /#page-content-wrapper -->
    </div>    <!-- /#wrapper -->
	<?php print endPage();?>
</body>
</html>
 