<?php 
require "funcz/functionz.php";
print head("ch","设为首页","index_ch.php");
?>
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
            <?php print  menu("ch","设为首页",'index_e.php','index.php','index_ch.php'); ?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid"> 
                <?php topRight();?>
                <div class="row">
                  <div class="col-lg-12"> 
                    <h2>设为首页</h2> 
                </div>
             </div>
                <div class="row">
                 <div class="col-lg-12">      
                   <?php photocenter("frontpagephoto.jpg", "William%20Cuthbertson%20am%20Klavier%201.3.2010%20-%20Photo%20by%20Hans%20Jürgen%20Kugler%201.3.2010");?>		            
                <br/>
			   <ul>
			   <li><a href="program_ch.php" title="2016/7 International Piano Program"><strong>点击查看2017年国际演出节目</strong></a> 
			<br/>
			<br/>
			</li>
			      </ul>
                <?php print foot();	?>
                    </div>
                </div>
            </div>
        </div>        <!-- /#page-content-wrapper -->
    </div>     <!-- /#wrapper --> 
	<?php  print endPage();?>
	</body>
</html>