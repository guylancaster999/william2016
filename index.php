<?php
	require "funcz/functionz.php";
	print head("de","homepage","index.php");
?>
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
            <?php print  menu("de","Homepage",'index_e.php','index.php','index_ch.php');?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid">
			<?php topRight();?>
        	   <div class="row">
					<div class="col-lg-12">
                      <h2>Homepage</h2>
					</div>
             </div>
             <div class="row">
               <div class="col-lg-12">
                <?php photocenter("frontpagephoto1.jpg", "William%20Cuthbertson%20am%20Klavier%201.3.2010%20-%20Photo%20by%20Hans%20Jürgen%20Kugler%201.3.2010");?>
               </div>
              </div>
             <div class="row">
               <div class="col-lg-12">
			   <br/>
			   <ul>
 				<li>2016 Konzertprogramm : Klicken Sie  <a href="program.php" title="2016 Klavier Program"><strong>hier</strong></a>.
				<br/><br/>
				</li>
			   <li>29.August – 3.September 2016: 17. Internationaler <a href="http://peter-feuchtwanger.de/">Peter Feuchtwanger</a> Meisterkurs für Klavier. 
			   Einzelheiten <a href="meisterkurse.php">hier</a>.
			   <br/><br/>
			   </li>
			   </ul>
			<?php print foot();	?>
               </div>  <!-- col -->
              </div> <!-- row -->
     </div>  <!-- /#page-content-wrapper -->
     </div>  <!-- /#page-content-wrapper -->
    </div>    <!-- /#wrapper -->
	<?php  print endPage();?>
</body>
</html>
