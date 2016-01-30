<?php 
require "funcz/functionz.php";
print head("ch","速写");
?>
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
            <?php print menu("ch","速写","bilde_e.php","bilde.php","bilde_ch.php");	?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid"> 
			    <?php topRight(); ?>
                <div class="row">
                <div class="col-lg-12"> 
                      <h2>速写</h2> 
                </div>
             </div>
              <div class="row">
                 <div class="col-sm-12"> 
                 <table class="table">
					 <tr>
				   <td><?php photo("1.png","1_tn.png","速写","速写 1","bilde_ch.php","ch");?></td>
					<td><?php photo("2.jpg","2_tn.jpg","速写","速写 2","bilde_ch.php","ch");?></td>
					<td><?php photo("4.jpg","4_tn.jpg","速写","速写 4","bilde_ch.php","ch");?></td>
					<td><?php photo("3.jpg","3_tn.jpg","速写","速写 3","bilde_ch.php","ch");?></td>
						</tr>
						</table>
						<table class="table">
						<tr>
					<td>   <?php photo("6.jpg","6_tn.jpg","速写","速写 6","bilde_ch.php","ch");?>		</td>
					<td>   <?php photo("7.png","7_tn.jpg","速写","速写 7","bilde_ch.php","ch");?>		</td>
					<td>   <?php photo("8.jpg","8_tn.jpg","速写","速写 8","bilde_ch.php","ch");?>			</td>
					<td>   <?php photo("5.jpg","5_tn.jpg","速写","速写 5","bilde_ch.php","ch");?>	</td>
						</tr> 
					</table>   
                <?php 
			 	print foot();
				?>
                    </div>
                </div>
            </div>
        </div>         <!-- /#page-content-wrapper -->
    </div>    <!-- /#wrapper -->
	<?php  print endPage();?>
 </body>
</html>
