<?php
require "funcz/functionz.php";
print head("en","Contact");
?>
<body>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <?php print menu("en","Contact","kontakt_e.php","kontakt.php","kontakt_ch.php");?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid">
			     <?php topRight();?>
                <div class="row">
                <div class="col-lg-12">
                    <h2>Contact</h2>
                </div>
             </div>
              <div class="row">
                <div class="col-sm-6">
					<table class="table">
					<tr>
					<td><strong>Post</strong></td>
					<td><strong> : </strong></td>
					<td>William Cuthbertson<br/>
					Theodor-Heuss-Str.16<br/>
					79183 Waldkirch<br/>
					Baden-Württemberg<br/>
					Germany</td>
					</tr>
					</table>
					<tr>
  					<td><strong>Tel.</strong></td>
  					<td><strong> : </strong></td>
  					<td><a href="tel:+497681409260">0049-76 81  40 92 60</a></td>
          </tr>
					<tr>
    					<td ><strong>E-Mail</strong></td>
    					<td><strong> : </strong></td>
    					<td ><a href="mailto:w.cuthbertson@gmx.de">w.cuthbertson@gmx.de</a></td>
          </tr>
       </table>
       </div>
      <div class="col-sm-6">
                   <?php photorightnolink( "FotoChopinKonzertSept2010_350.jpg", "William%20Cuthbertson%20-%20Chopin%20Concert%20Sept%202010");?>
                      </div>
                   </div>
                   <div class="row">
                     <div class="col-sm-12">
                     <br/>
                     <br/>
                        <div class="alpha">Thankyou for your message - I will get back to you as soon as possible</div>
						            <?php print foot(); ?>
                    </div>
                </div>
            </div>
        </div>        <!-- /#page-content-wrapper -->
    </div>    <!-- /#wrapper -->
	<?php  print endPage();?>
	</body>
</html>
