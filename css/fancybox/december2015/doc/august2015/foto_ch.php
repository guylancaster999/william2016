<?php 
require "funcz/functionz.php";
print head("ch","照片");
?>
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
            <?php print  menu("ch","照片");	?>
         </div>
          <div id="page-content-wrapper">
					<div class="container-fluid"> 
			    <?php topRight("foto_e.php","foto.php","foto_ch.php"); ?>
                <div class="row">
                <div class="col-lg-12"> 
                      <h2>照片</h2> 
                </div>
             </div> 
              <div class="row">
                 <div class="col-lg-12">   
                      <h3>  2015 音乐会</h3>
<table class="table">
<tr>
<td><?php photo("21april2015.jpg","21april2015_120.jpg","Photos","Photo 1 : Preludes by Chopin and Scriabin - Photo Badisher Zeitung","foto_ch.php","ch");?>
</td></tr></table>
<h3>教学 2015</h3>
<table class="table">
<tr>
<td><?php photo("Vorspiel1.jpg","Vorspiel1_tn.jpg","Photos","Photo 1","foto_ch.php","ch");?>
</td>
<td>
<?php photo("Vorspiel2.jpg","Vorspiel2_tn.jpg","Photos","Photo 2","foto_ch.php","ch");?>
</td>
<td><?php photo("Vorspiel3.jpg","Vorspiel3_tn.jpg","Photos","Photo 3","foto_ch.php","ch");?>
</td>
<td>
<?php photo("Abrsm1-1.jpg","Abrsm1-1_tn.jpg","Photos","Photo 4","foto_ch.php","ch");?>
</td>
<td>
<?php photo("Abrsm2-1.jpg","Abrsm2-1_tn.jpg","Photos","Photo 5","foto_ch.php","ch");?>
</td></tr></table>
<h3>大师班 2014</h3>
<table class="table">
<tr>
<td><?php photo("foto1.JPG","foto1_tn.jpg","Photos","Photo 1","foto_ch.php","ch");?>
</td>
<td><?php photo("foto2.JPG","foto2_tn.jpg","Photos","Photo 2","foto_ch.php","ch");?>
</td>
<td> <?php photo("foto3.JPG","foto3_tn.jpg","Photos","Photo 3","foto_ch.php","ch");?>
</td>
<td> 
<?php photo("foto4.JPG","foto4_tn.jpg","Photos","Photo 4","foto_ch.php","ch");?>
</td>
<td> 
<?php photo("foto5.JPG","foto5_tn.jpg","Photos","Photo 5","foto_ch.php","ch");?>
</td>
<td> 
<?php photo("foto6.JPG","foto6_tn.jpg","Photos","Photo 6","foto_ch.php","ch");?>
</td>
</tr>
<tr>
<td> <?php photo("foto7.JPG","foto7_tn.jpg","Photos","Photo 7","foto_ch.php","ch");?>
</td>
<td> 
<?php photo("foto8.JPG","foto8_tn.jpg","Photos","Photo 8","foto_ch.php","ch");?>
</td></tr></table>
<a name="2014concerts"></a>
<h3>2014 音乐会</h3>
<table class="table">
<tr>
<td><?php photo("foto9.jpg","foto9_120.jpg","Photos","Photo 9","foto_ch.php","ch");?>
</td>
<td><?php photo("foto10.jpg","foto10_120.jpg","Photos","Photo 10","foto_ch.php","ch");?>
</td>
<td><?php photo("foto12.jpg","foto12_120.jpg","Photos","Photo 11","foto_ch.php","ch");?>
</td>
<td>
<?php photo("22october2014.jpg","22october2014_120.jpg","Photos","Photo 12","foto_ch.php","ch");?>
</td>
<td>
<?php photo("chopin.jpg","chopin_120.jpg","Photos","Photo 13-Chopin Konzert","foto_ch.php","ch");?>
</td>
<td><?php photo("concert_fb.jpg","concert_fb_120.jpg","Photos","Concert%20with%20Weimo%20Gao","foto_e.php","en");?></td>
</tr></table>
<h3>2013 音乐会</h3>
<table class="table">
<tr>
<td><?php photo("foto11.jpg","foto11_120.jpg","Photos","Photo 14","foto_ch.php","ch");?>
</td></tr></table>
<br />
<div >Click on photos to view full size</div>
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