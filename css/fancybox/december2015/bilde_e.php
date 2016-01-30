<?php 
require "funcz/functionz.php";
print head("de","Sketches");
session_start();
$gpics='{"gallery":[ 
	{"flag":"P","grpTtl":"Sketches by Gosia Kulczyk","picLarge":"1.png","picSmall":"1_tn.png","picTtl":"Picture%201"},	
	{"flag":"P","grpTtl":"Sketches by Gosia Kulczyk","picLarge":"2.jpg","picSmall":"2_tn.jpg","picTtl":"Picture%202"},	
	{"flag":"P","grpTtl":"Sketches by Gosia Kulczyk","picLarge":"4.jpg","picSmall":"4_tn.jpg","picTtl":"Picture%203"},	
	{"flag":"P","grpTtl":"Sketches by Gosia Kulczyk","picLarge":"6.jpg","picSmall":"6_tn.jpg","picTtl":"Picture%204"},	
	{"flag":"P","grpTtl":"Sketches by Gosia Kulczyk","picLarge":"7.png","picSmall":"7_tn.jpg","picTtl":"Picture%205"},	
	{"flag":"P","grpTtl":"Sketches by Gosia Kulczyk","picLarge":"8.jpg","picSmall":"8_tn.jpg","picTtl":"Picture%206"},	
	{"flag":"P","grpTtl":"Sketches by Gosia Kulczyk","picLarge":"3.jpg","picSmall":"3_tn.jpg","picTtl":"Picture%207"},	
	{"flag":"P","grpTtl":"Sketches by Gosia Kulczyk","picLarge":"5.jpg","picSmall":"5_tn.jpg","picTtl":"Picture%208"}
	]}';
$_SESSION["gpics"]	=$gpics;	
$x 					= json_decode($gpics,true);
$sz					= count($x["gallery"]);
	
?>
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
            <?php print  menu("de","Skizzen");?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid"> 
			    <?php topRight("bilde_e.php","bilde.php","bilde_ch.php");?>
                <div class="row">
                <div class="col-lg-12"> 
                      <h2>Sketches &ndash; by Gosia Kulczyk</h2> 
                </div>
             </div>
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-12">         
					<table class="table">
					<tr>
					<? 
					$colCtr=0;
				    for ($i=0;$i<$sz;$i++)
					{ 	
						if ($colCtr>=4)
						{
								$colCtr=0;
								print "</tr>
								<tr>";
						}
						$colCtr++;
						print "<td>";
						displayPic($i,"bilde_e.php","en");
						print "</td>";
						print "<td>&nbsp;</td>";
					}
					?>
				</tr>
			</table>			
				<br/>
 <div class="alpha" >Click on Pictures to see larger image</div>
<?php print foot();?>
                    </div>
                </div>
            </div>
        </div>        <!-- /#page-content-wrapper -->
    </div>    <!-- /#wrapper -->
</body>
</html>
