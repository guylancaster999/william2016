<?php 
session_start(); 
require "pics.php";
$_SESSION["gpics"]	= $gpics; 
$x 					= json_decode($gpics,true);
$sz					= count($x["gallery"]);
require "funcz/functionz.php";
print head("de","Fotos");
?>
<body>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <?php print  menu("de","Fotografien","foto_e.php","foto.php","foto_ch.php");?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid">
               <?php topRight();?>
                <div class="row">
                <div class="col-lg-12"> 
                    <h2>Fotografien</h2> 
                </div>
             </div>
		 	<? 
				$ctr=999;
				for ($i=0;$i<$sz;$i++)
					{ 	
						$y 			= $x["gallery"][$i]; 
						$picSmall	= $y["picSmall"];
						$picLarge	= $y["picLarge"];
						$flag		= $y["flag"];
 						switch($flag)
						{case "T":
							$grpTtl		= $y["picTtl"];					
							if ($ctr<999)print "</div>";
							print '<h3>'.$grpTtl.'</h3>
							<div class="row rowBorder">';
							$ctr=0;
							break;
						default:
				 			$picTtl		= $y["picTtl"];					
							$ctr++;
							if ($ctr>5)
							{
								print '</div>';
								print '<div class="row rowBorder">';
								$ctr = 1;
							}
							print '<div class="col-lg-2 col-md-2 col-sm-2 bordered">';
							displayPic($i,"foto.php","de");
							print "</div>";
				 		}
					}
					?>
			 </div>
			<div class="alpha">Klicken Sie auf die Fotografien in voller Größe zu sehen</div>
			<?php print foot(); ?>
                    </div>
                </div>
            </div>
        </div>         <!-- /#page-content-wrapper -->
    </div>     <!-- /#wrapper -->
	<?php  print endPage();?>	
</body>
</html>