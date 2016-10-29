<?php 
session_start();
require "pics_ch.php";
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
							displayPic($i,"foto_ch.php","ch");
							print "</div>";
				 		}
					}
					?>			 </div>			
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
	
	 