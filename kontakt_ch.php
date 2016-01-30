<?php
require "funcz/functionz.php";
print head("ch","联系");
?>
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
            <?php print  menu("ch","联系","kontakt_e.php","kontakt.php","kontakt_ch.php"); 	?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid">
			     <?php topRight(); ?>
                <div class="row">
                <div class="col-lg-12">
                      <h2 >联系</h2>
                </div>
             </div>
             <div class="row">
               <div class="col-lg-12">
                 <?php photorightnolink("FotoChopinKonzertSept2010_350.jpg", "William Cuthbertson-Chopin Konzert Sept 2010");?>
                 <table class="tbl">
						<tr>
						<td  ><strong>Post</strong></td>
						<td>:</td>
						<td  >William Cuthbertson<br/>
						Theodor-Heuss-Str.16<br/>
						79183 Waldkirch<br/>
						Baden-Württemberg<br/>
						Germany</td>
						</tr>
						<tr>
						<td  ><strong>Tel.</strong></td>
						<td>:&nbsp;</td>
						<td  ><a href="tel:+497681409260">0049-76 81 40 92 60</a></td></tr>
						<tr>
						<td  ><strong>E-Mail</strong>&nbsp;&nbsp;</td>
						<td>:</td>
						<td  ><a href="mailto:w.cuthbertson@gmx.de">w.cuthbertson@gmx.de</a></td>
						</tr>
						</table>
                <?php  print foot();				?>
                    </div>
                </div>
            </div>
        </div>        <!-- /#page-content-wrapper -->
    </div>   <!-- /#wrapper -->
	<?php  print endPage();?>
	</body>
</html>
