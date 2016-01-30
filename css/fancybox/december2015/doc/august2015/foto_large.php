<?php 
require "funcz/functionz.php";
$lan		=$_REQUEST["lan"];
$album   	=$_REQUEST["album"];
$photoFile  =$_REQUEST["photoFile"];
$photoTtl	=$_REQUEST["photoTtl"];
$fromUrl	=$_REQUEST["fromUrl"];
print head("de","homepage");
?>
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
            <?php
            print  menu($lan,$albumTtl);
			?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid">
            <?php topRight();?>
             <div class="row">
                <div class="col-lg-12"> 
                    <h2><?php print $photoTtl;?></h2> 
                </div>
             </div>
              <div class="row">
                <div class="col-lg-12">         
  <a href="<?php print $fromUrl;  ?>"><img src="img/<?php print $photoFile;?>"   
          class="img-responsive img-rounded picturecenter" alt="<?php print $photoTtl;?>"/></a>
 <br/>
<br />
<div class="alpha">
<?php
switch($lan)
{case "de":
   print "Klicken Sie auf das Foto, um zurückzukehren";
   break;
   
   case "ch":
   print  "点击照片返回";
   break;
default:
  print "Click on the Photo to return";
}
?></div> 
<?php
print foot();
?>
                    </div>
                </div>
            </div>
        </div>        <!-- /#page-content-wrapper -->

    </div>    <!-- /#wrapper -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 </body>

</html>
