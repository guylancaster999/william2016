<?php 
require "funcz/functionz.php";
print head("en","homepage");
?>
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
            <?php print  menu("en","Homepage");?>
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
                <?php   photocenter("frontpagephoto.jpg", "William%20Cuthbertson%20am%20Klavier%201.3.2010%20-%20Photo%20by%20Hans%20Jürgen%20Kugler%201.3.2010");?>
               </div>
              </div>
             <div class="row">
               <div class="col-lg-12">         
                <br/>
                <br/><div class="table-responsive">          
               <table class="table">
     			<tr>
					<td>
	    	           	 <ul>
            	    	<li>William will be performing <a href="concert_e.php">a Concert</a> featuring music by Schriabin and  Rachmaninoff in Waldkirch on October 25th. 
                		</li>
                		</ul>
                	</td>
                </tr>
                <tr>
                	<td>
                		<ul>
		                <li>William will be teaching at the <a href="masterclasses_e.php">16th International Piano Masterclass</a> in Waldkirch from 31st August.</li>
						</ul>
					</td>
                </tr>
                </table>
                </div>
				
                <?php
				print foot();
				?>
                    </div>
                </div>
            </div>
        </div>        <!-- /#page-content-wrapper -->
    </div>    <!-- /#wrapper -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>