<?php 
require "funcz/functionz.php";
print head("ch","设为首页");
?>
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
            <?php print  menu("ch","设为首页"); ?>
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
			   <br/><br/><br clear="all">
               <div class="table-responsive">          
               		<table class="table">
     					<tr>
							<td>
                				<ul>
        					        <li>威廉将于7月5日 打<a href="concert_ch.php"> Schriabin和拉赫玛尼诺夫</a>在Waldkirch。</li>
		                		</ul>
                		</td>
                </tr>
                
                <tr>
                <td>
                <ul>
                <li>威廉将从8月31日 钢琴Wandkirch任教于<a href="masterclasses_ch.php">第16届国际大师班</a></li>
				</ul>
				</td></tr></table> 
                </div>  
                <?php print foot();	?>
                    </div>
                </div>
            </div>
        </div>        <!-- /#page-content-wrapper -->
    </div>     <!-- /#wrapper -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>