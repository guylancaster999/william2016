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
<h3>大师班 2015</h3>
<table class="table">
<tr>
<td><?php photo("masterclass2015_1.jpg","masterclass2015_1_tn.jpg","Photos","Photo%201","foto_ch.php","ch");?></td>
<td><?php photo("masterclass2015_2.jpg","masterclass2015_2_tn.jpg","Photos","Photo%202","foto_ch.php","ch");?></td>
<td><?php photo("masterclass2015_3.jpg","masterclass2015_3_tn.jpg","Photos","Photo%203","foto_ch.php","ch");?></td>
<td><?php photo("masterclass2015_4.jpg","masterclass2015_4_tn.jpg","Photos","Photo%204","foto_ch.php","ch");?></td>
<td><?php photo("masterclass2015_5.png","masterclass2015_5_tn.png","Photos","Photo%205","foto_ch.php","ch");?></td>
<td><?php photo("masterclass2015_6.png","masterclass2015_6_tn.png","Photos","Photo%206","foto_ch.php","ch");?></td>
</tr>
</table>
<table class="table">
<tr>
<td><?php photo("masterclass2015_11.jpg","masterclass2015_11_tn.jpg","Photos","Photo%207","foto_ch.php","de");?></td>
<td><?php photo("masterclass2015_7.jpg","masterclass2015_7_tn.jpg","Photos","Photo%208-Final concert. The participants receive flowers.","foto_ch.php","ch");?></td>
<td><?php photo("masterclass2015_8.jpg","masterclass2015_8_tn.jpg","Photos","Photo%209-Stefan Blido (Feuchtwanger exercises)","foto_ch.php","ch");?></td>
<td><?php photo("masterclass2015_9.jpg","masterclass2015_9_tn.jpg","Photos","Photo%210-We too receive a present. William Cuthbertson (Piano)","foto_ch.php","ch");?></td>
<td><?php photo("masterclass2015_10.jpg","masterclass2015_10_tn.jpg","Photos","Photo%2011-Martina Barufke (Alexander Technique)","foto_ch.php","ch");?></td>
</tr>
</table>
<h3>音乐会 2015 </h3>
<table class="table">
<tr>
<td><?php photo("21april2015.jpg","21april2015_120.jpg","Photos","Photo 1 : Preludes by Chopin and Scriabin - Photo Badisher Zeitung","foto_ch.php","ch");?>
</td>

<td><?php photo("bz2015-1.jpg","bz2015-1-120.jpg","Photos"," Charity Concert with classical music and songs for the renovation of the community center,%20Photo%20%20Badisher%20Zeitung","foto_ch.php","ch");?>
</td>


</tr></table>
<h3>教学 2015</h3>
<table class="table">
<tr>
<td><?php photo("Vorspiel1.jpg","Vorspiel1_tn.jpg","Photos","Photo 1","foto_ch.php","ch");?></td>
<td><?php photo("Vorspiel2.jpg","Vorspiel2_tn.jpg","Photos","Photo 2","foto_ch.php","ch");?></td>
<td><?php photo("Vorspiel3.jpg","Vorspiel3_tn.jpg","Photos","Photo 3","foto_ch.php","ch");?></td>
<td><?php photo("Abrsm1-1.jpg","Abrsm1-1_tn.jpg","Photos","Photo 4","foto_ch.php","ch");?></td>
<td><?php photo("Abrsm2-1.jpg","Abrsm2-1_tn.jpg","Photos","Photo 5","foto_ch.php","ch");?></td>
</tr></table>
<h3>大师班 2014</h3>
<table class="table">
<tr>
<td><?php photo("foto1.JPG","foto1_tn.jpg","Photos","Photo 1","foto_ch.php","ch");?></td>
<td><?php photo("foto2.JPG","foto2_tn.jpg","Photos","Photo 2","foto_ch.php","ch");?></td>
<td> <?php photo("foto3.JPG","foto3_tn.jpg","Photos","Photo 3","foto_ch.php","ch");?></td>
<td><?php photo("foto4.JPG","foto4_tn.jpg","Photos","Photo 4","foto_ch.php","ch");?></td>
<td> <?php photo("foto5.JPG","foto5_tn.jpg","Photos","Photo 5","foto_ch.php","ch");?></td>
<td><?php photo("foto6.JPG","foto6_tn.jpg","Photos","Photo 6","foto_ch.php","ch");?></td>
</tr>
</table>
<table class="table">
<tr>
<td> <?php photo("foto7.JPG","foto7_tn.jpg","Photos","Photo 7","foto_ch.php","ch");?></td>
<td> <?php photo("foto8.JPG","foto8_tn.jpg","Photos","Photo 8","foto_ch.php","ch");?></td>
</tr>
</table>
<a name="2014concerts"></a>
<h3>音乐会 2014 </h3>
<table class="table">
<tr>
<td><?php photo("foto9.jpg","foto9_120.jpg","Photos","Photo 9","foto_ch.php","ch");?></td>
<td><?php photo("foto10.jpg","foto10_120.jpg","Photos","Photo 10","foto_ch.php","ch");?></td>
<td><?php photo("foto12.jpg","foto12_120.jpg","Photos","Photo 11","foto_ch.php","ch");?></td>
<td><?php photo("22october2014.jpg","22october2014_120.jpg","Photos","Photo 12","foto_ch.php","ch");?></td>
<td><?php photo("chopin.jpg","chopin_120.jpg","Photos","Photo 13-Chopin Konzert","foto_ch.php","ch");?></td>
<td><?php photo("concert_fb.jpg","concert_fb_120.jpg","Photos","Concert%20with%20Weimo%20Gao","foto_e.php","en");?></td>
</tr>
</table>
<h3>音乐会 2013 </h3>
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