<?php 
require "funcz/functionz.php";
print head("de","Kinder");
?>
<body>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <?php print  menu("de","Kinder"); ?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid"> 
			 <?php topRight();?>
             <div class="row">
                <div class="col-lg-12"> 
                   <h2>Klavierunterricht f&uuml;r Kinder</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">       
                 William Cuthbertson unterrichtet auch Kinder, von Anfängern bis Fortgeschrittene. 		
                 Dabei könnten die Kinder ausser klassischen Stücken auch Stücke aus derm Pop- und Jazzrepertoire kennenzulernen.  
                 Es besteht auch die Möglichkeit ABRSM Prufüngen zu machen.
                 <br/>
				 <br />
				 <h3>Erwachsene (Laien)</h3>
 				 Späteinsteiger und Wiedereinsteiger sind auch herzlich willkommmen.
                </div>
                <div class="col-sm-6">       
                <?php  photorightfs("Vorspiel1.jpg","Vorspiel1_240.jpg","Kinder","Kind%201", "kinder.php","de");?>
<br  class='brclear'/>
<br  class='brclear'/>
<?php  photorightfs("Vorspiel2.jpg","Vorspiel2_240.jpg","Kinder","Kind%202","kinder.php","de");?>
<br  class='brclear'/>
<br  class='brclear'/> 
 <?php  photorightfs("Vorspiel3.jpg","Vorspiel3_240.jpg","Kinder","Kind%203","kinder.php","de");?>
<br  class='brclear'/>
 <br  class='brclear'/>
<?php photorightfs("Abrsm1-1.jpg","Abrsm1-1_240.jpg","Kinder","Kind%204","kinder.php","de");?>
<br  class='brclear'/>
<br  class='brclear'/>
<?php photorightfs("Abrsm2-1.jpg","Abrsm2-1_240.jpg","Kinder","Kind%205","kinder.php","de");?> 
<?php print foot();?>
                    </div>
                </div>
            </div>
        </div>        <!-- /#page-content-wrapper -->
    </div>    <!-- /#wrapper -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 </body>
</html>