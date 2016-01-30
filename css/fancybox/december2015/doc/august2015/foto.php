<?php 
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
    			<h3>Konzerte 2015</h3>
				<?php photo("21april2015.jpg","21april2015_120.jpg","Photos","Photo%201%20:%20Preludes%20by%20Chopin%20and%20Scriabin%20-%20Photo%20Badisher%20Zeitung","foto.php","de");?>
<h3>Unterricht 2015</h3>
<table class="table">
<tr>
<td><?php photo("Vorspiel1.jpg","Vorspiel1_tn.jpg","Fotografien","Photo%201","foto.php","de"); ?></td>
<td>&nbsp;</td>
<td><?php photo("Vorspiel2.jpg","Vorspiel2_tn.jpg","Fotografien","Photo%202","foto.php","de");?></td>
<td>&nbsp;</td>
<td><?php photo("Vorspiel3.jpg","Vorspiel3_tn.jpg","Fotografien","Photo%203","foto.php","de");?></td>
<td>&nbsp;</td>
<td><?php photo("Abrsm1-1.jpg","Abrsm1-1_tn.jpg","Fotografien","Photo%204","foto.php","de");?></td>
<td>&nbsp;</td>
<td><?php photo("Abrsm2-1.jpg","Abrsm2-1_tn.jpg","Fotografien","Photo%205","foto.php","de");?></td>
</tr>
</table>
<br class="brclear"/>
<h3> Meisterkurse 2014</h3>
<table class="table">
<tr>
<td><?php photo("foto1.JPG","foto1_tn.jpg","Fotografien","Photo%201","foto.php","de");?></td>
<td> <?php photo("foto2.JPG","foto2_tn.jpg","Fotografien","Photo%202","foto.php","de");?></td>
<td><?php photo("foto3.JPG","foto3_tn.jpg","Fotografien","Photo%203","foto.php","de");?></td>
<td> <?php photo("foto4.JPG","foto4_tn.jpg","Fotografien","Photo%204","foto.php","de");?></td>
<td><?php photo("foto5.JPG","foto5_tn.jpg","Fotografien","Photo%205","foto.php","de");?></td>
</tr>
<tr>
<td><?php photo("foto6.JPG","foto6_tn.jpg","Fotografien","Photo%206","foto.php","de");?></td>
<td> <?php photo("foto7.JPG","foto7_tn.jpg","Fotografien","Photo%207","foto.php","de");?></td>
<td> <?php photo("foto8.JPG","foto8_tn.jpg","Fotografien","Photo%208","foto.php","de");?></td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table><br class="brclear"/>
<h3>Konzerte 2014</h3>
<table class="table">
<tr>
<td><?php photo("foto9.jpg","foto9_120.jpg","Fotografien","Photo%209","foto.php","de");?></td>
<td><?php photo("foto10.jpg","foto10_120.jpg","Fotografien","Photo%2010","foto.php","de");?></td>
<td><?php photo("foto12.jpg","foto12_120.jpg","Fotografien","Photo%2011","foto.php","de");?></td>
<td><?php photo("22october2014.jpg","22october2014_120.jpg","Fotografien","Photo%2012","foto.php","de");?></td>
<td><?php photo("chopin.jpg","chopin_120.jpg","Fotografien","Photo%2013&ndash;Chopin%20Konzert","foto.php","de");?></td>
<td><?php photo("concert_fb.jpg","concert_fb_120.jpg","Photos","konzert%20mit%20Weimo%20Gao","foto_e.php","en");?></td>
</tr>
</table>
<br class="brclear"/>
<h3>Konzerte 2013</h3>
<table class="table">
<tr>
<td><?php photo("foto11.jpg","foto11_120.jpg","Fotografien","Photo%2014","foto.php","de");?></td>
</tr></table>
<br class="brclear"/>
<br />
<div >Klicken Sie auf die Fotografien in voller Größe zu sehen</div>
<?php print foot(); ?>
                    </div>
                </div>
            </div>
        </div>         <!-- /#page-content-wrapper -->
    </div>     <!-- /#wrapper -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>