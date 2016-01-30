<?php 
require "funcz/functionz.php";
print head("en","Photos");
?>
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
            <?php print  menu("en","Photos"); ?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid">
			    <?php topRight("foto_e.php","foto.php","foto_ch.php");?>
                <div class="row">
                <div class="col-lg-12"> 
                      <h2>Photos</h2> 
                </div>
             </div>
             <div class="row">
               <div class="col-lg-12">         
               <h3>Concerts 2015</h3>
<table class="table">
<tr>
<td><?php photo("21april2015.jpg","21april2015_120.jpg","Photos","Photo%20%201%20:%20Preludes%20by%20Chopin%20and%20Scriabin,%20Photo%20%20Badisher%20Zeitung","foto_e.php","en");?>
</td></tr></table>
			   <h3>Teaching 2015</h3>
               <table class="table">
<tr>
<td><?php photo("Vorspiel1.jpg","Vorspiel1_tn.jpg","Photos","Photo%201","foto_e.php","en");?></td>
<td><?php photo("Vorspiel2.jpg","Vorspiel2_tn.jpg","Photos","Photo%202","foto_e.php","en");?></td>
<td><?php photo("Vorspiel3.jpg","Vorspiel3_tn.jpg","Photos","Photo%203","foto_e.php","en");?></td>
<td><?php photo("Abrsm1-1.jpg","Abrsm1-1_tn.jpg","Photos","Photo%204","foto_e.php","en");?></td>
<td><?php photo("Abrsm2-1.jpg","Abrsm2-1_tn.jpg","Photos","Photo%205","foto_e.php","en");?></td>
</tr></table>
<h3>Master Class 2014</h3>
<table class="table">
<tr>
<td><?php photo("foto1.JPG","foto1_tn.jpg","Photos","Photo%201","foto_e.php","en");?></td>
<td><?php photo("foto2.JPG","foto2_tn.jpg","Photos","Photo%202","foto_e.php","en");?></td>
<td><?php photo("foto3.JPG","foto3_tn.jpg","Photos","Photo%203","foto_e.php","en");?></td>
<td><?php photo("foto4.JPG","foto4_tn.jpg","Photos","Photo%204","foto_e.php","en");?></td>
<td><?php photo("foto5.JPG","foto5_tn.jpg","Photos","Photo%205","foto_e.php","en");?></td>
</tr>
<tr>
<td><?php photo("foto6.JPG","foto6_tn.jpg","Photos","Photo%206","foto_e.php","en");?></td>
<td><?php photo("foto7.JPG","foto7_tn.jpg","Photos","Photo%207","foto_e.php","en");?></td>
<td><?php photo("foto8.JPG","foto8_tn.jpg","Photos","Photo%208","foto_e.php","en");?></td>
<td></td>
<td></td>
</tr>
</table>
&nbsp;<a id="2014concerts"></a>
<br />
<h3>2014 Concerts</h3>
<table class="table">
<tr>
<td><?php photo("foto9.jpg","foto9_120.jpg","Photos","Photo%209","foto_e.php","en");?></td>
<td><?php photo("foto10.jpg","foto10_120.jpg","Photos","Photo%2010","foto_e.php","en");?></td>
<td> <?php photo("foto12.jpg","foto12_120.jpg","Photos","Photo%2011","foto_e.php","en");?></td>
<td><?php photo("22october2014.jpg","22october2014_120.jpg","Photos","Photo%2012","foto_e.php","en");?></td>
<td><?php photo("chopin.jpg","chopin_120.jpg","Photos","Photo%2013,Chopin$20Concert","foto_e.php","en");?></td>
<td><?php photo("concert_fb.jpg","concert_fb_120.jpg","Photos","Concert%20with%20Weimo%20Gao","foto_e.php","en");?></td>
</tr>
</table>
<h3>2013 Concerts</h3>
<table class="table">
<tr>
<td><?php photo("foto11.jpg","foto11_120.jpg","Photos","Photo%2014","foto_e.php","en");?></td>
</tr>
</table>
<div class="alpha">Click on photos to view full size</div>
			     <?php print foot();				?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

  <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


</body>

</html>
