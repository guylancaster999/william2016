<?php 
require "funcz/functionz.php";
print head("de","homepage","index.php");
?>
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
            <?php print  menu("de","Homepage");?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid">
			<?php topRight('index_e.php','index.php','index_ch.php');?>
            	   <div class="row">
                <div class="col-lg-12"> 
                      <h2>Homepage</h2> 
                </div>
             </div>
             <div class="row">
               <div class="col-lg-12">         
                <?php photocenter("frontpagephoto.jpg", "William%20Cuthbertson%20am%20Klavier%201.3.2010%20-%20Photo%20by%20Hans%20Jürgen%20Kugler%201.3.2010");?>
               </div>
              </div>
             <div class="row">
               <div class="col-lg-12">         
					<?php print foot();	?>
               </div>  <!-- col -->
              </div> <!-- row -->
         </div>  <!-- /#page-content-wrapper -->
    </div>    <!-- /#wrapper -->
</body>
</html>