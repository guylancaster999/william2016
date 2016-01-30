<?php
require "funcz/functionz.php";
print head("en","homepage","index.php");
?>
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
            <?php print  menu("en","Homepage",'index_e.php','index.php','index_ch.php');?>
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
                <?php  photocenter("frontpagephoto.jpg", "William%20Cuthbertson%20am%20Klavier%201.3.2010%20-%20Photo%20by%20Hans%20Jürgen%20Kugler%201.3.2010");?>
               </div>
              </div>
             <div class="row">
               <div class="col-lg-12">
                <br/>
			   <ul>
		 
			   <li>2016 International Concert Programme - Click <a href="program_e.php" title="2016 International Piano Program"><strong>here</strong></a>
			   <br/><br/>
				</li>
			   <li>29th August&ndash;3rd September 2016</strong> : 
			   17th International <a title="Peter Feuchtwanger" href="http://peter-feuchtwanger.de/english-version/index.html">Peter Feuchtwanger</a> Piano Masterclass 
			   &ndash; Details <a href="masterclasses_e.php" title="2016 Peter Feuchtwanger Piano Masterclass">here</a>.
			   </li>
			   </ul>
			   <?php print foot();	?>
                    </div>
                </div>
            </div>
        </div>        <!-- /#page-content-wrapper -->
    </div>    <!-- /#wrapper -->
		<?php  print endPage();?>
 </body>
</html>
