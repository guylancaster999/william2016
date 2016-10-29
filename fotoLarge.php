<?php 
require "funcz/functionz.php";
session_start();
$lan		= $_REQUEST["lan"];
switch($lan)
{case "en":
  $back=" - Click to return";
  break;
  case "de":
  $back=' - Klicken Sie zur Galerie zurückzukehren.';
break;
	default:
  $back=" - 点击返回图库";
 }
$photoPtr	= $_REQUEST["photoPtr"];
$fromUrl	= $_REQUEST["fromUrl"];
$gpics		= $_SESSION["gpics"];
$picCtr		= $_REQUEST["picCtr"];
$copy		= $_REQUEST["copy"];
$x 			= json_decode($gpics,true);
$sz			= count($x["gallery"]);
$y 			= $x["gallery"][$photoPtr]; 
$picLarge	= $y["picLarge"];
$grpTtl 	= str_replace( "%20"," ",$y["grpTtl"]);
$picTtl		= str_replace( "%20"," ",$y["picTtl"]);
$prevFlag	= "T";
$prevPtr	= $photoPtr;
$prevArrrow ="";

while ($prevPtr>0 && $prevFlag=="T")
{
	$prevPtr--;
	$yPrev= $x["gallery"][$prevPtr]; 	
	$prevFlag	= $yPrev["flag"];
	$prevCopy	= $yPrev["copy"];
}
if($prevFlag=="P")
{
  $prevArrow='<a href="fotoLarge.php';
  $prevArrow.='?lan='.$lan;
  $prevArrow.='&amp;photoPtr='.$prevPtr;
  $prevArrow.='&amp;fromUrl='.$fromUrl;
  $prevArrow.='&amp;copy='.$prevCopy	.'" ';
  switch ($lan)
  {
    case "de":$prevArrow.=' title="Zurück" ';
	break;
	case "ch":$prevArrow.=' title="以前" ';
	break; 
	default:$prevArrow.=' title="Previous Photo" ';
  }
  $prevArrow.='>';
  $prevArrow.='<span class="glyphicon glyphicon-backward"></span>';
  $prevArrow.='</a> ';
}
$nextFlag	="T";
$nextPtr	=$photoPtr;
$nextArrrow="";

while ($nextPtr<$sz && $nextFlag=="T")
{
	$nextPtr++;
	$yNext		= $x["gallery"][$nextPtr]; 	
	$nextFlag	= $yNext["flag"];
	$nextCopy	= $yNext["copy"];
	
}
if($nextFlag=="P")
{
  $nextArrow='<a href="fotoLarge.php';
  $nextArrow.='?lan='.$lan;
  $nextArrow.='&amp;photoPtr='.$nextPtr;
  $nextArrow.='&amp;fromUrl='.$fromUrl;
  $nextArrow.='&amp;copy='.$nextCopy.'" ';
  switch ($lan)
  {case "de":$nextArrow.=' title="Weiter" ';
	break;
	case "ch":$nextArrow.=' title="下一个" ';
	break;
	default:$nextArrow.=' title="Next" ';
  }
  $nextArrow.='>';
  $nextArrow.='<span class="glyphicon glyphicon-forward"></span>';
  $nextArrow.='</a>';
}
print head("de","homepage");
?>
<body>
	<div id="wrapper">
       <div id="sidebar-wrapper">
            <?php
            print  menu($lan,$albumTtl,"foto_e.php","foto.php","foto_ch.php");
			?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid">
            <?php topRight();?>
			 <div class="row">
			    <div class="col-lg-12 col-md-12 col-sm-6"> 
					<h2><?php print $grpTtl;?></h2>
				</div>
			</div>
			<div class="row">
                <div class="col-1 col-md-1 col-lg-1"><?php print $prevArrow;?></div>
                <div class="col-lg-10 col-md-10 col-10"><h3><?php print $picTtl;?></h3></div>
				<div class="col-1 col-md-1 col-lg-1"><?php print $nextArrow;?></div>
              </div>
			  <BR/>
              <div class="row">
                <div class="col-lg-12">      				
					<a href="<?php print $fromUrl;  ?>" 
					title="<?php print $picTtl.$back;?>">
						<img src="img/<?php print $picLarge;?>" class="img-responsive img-rounded picturecenter" alt="<?php print $picTtl;?>"/>
					</a>
				<br/>
				 <?php print '<div style="font-weight:600;font-size:9pt;margin-top:-20px;padding-left:140px;">'.$copy.'</div>';?>
				<br/>	
			<div class="row">
                <div class="col-1 col-md-1 col-lg-1"><?php print $prevArrow;?></div>
                <div class="col-lg-10 col-md-10 col-sm-6"><h3>
					<?php
					switch($lan)
					{case "de":
					   print "Klicken Sie auf das Foto, um zur Galerie zurückzukehren";
					   break;
					   case "ch":
					   print  "点击照片返回";
					   break;
					default:
					  print "Click on the Photo to return to Gallery";
					}
				?>
				</h3></div>
				<div class="col-1 col-md-1 col-lg-1"><?php print $nextArrow;?></div>
		      </div>
				 	<?php print foot();?>
                    </div>
                </div>
            </div>
        </div>        <!-- /#page-content-wrapper -->
    </div>    <!-- /#wrapper -->
	<?php  print endPage();?>
	</body>
</html>