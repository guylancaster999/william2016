<?php 
require "funcz/functionz.php";
print head("en","Video");
?>
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
            <?php print  menu("en","Video","video_e.php","video.php","video_ch.php"); ?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid">
			  <?php topRight();?>
                <div class="row">
                <div class="col-lg-12"> 
                    <h2>Video</h2> 
                </div>
             </div>
             <div class="row">
                <div class="col-lg-12">         
         <iframe src="http://www.youtube.com/embed/s9yxdd37QuU" width="500" height="300"></iframe>
					<br/>
					William Cuthbertson plays Nocturnes Op.15 by Frédérick Chopin, Gutshof Güntert, Sulzburg. September 2013
					<br class="brclear"/>
					<br/>
					<br>
					<iframe src="http://www.youtube.com/embed/OJF0MTa3QH4" height="300" width="500"></iframe>
					<br/>
					William Cuthbertson at the Feuchtwanger Piano Festival in 2006, playing:
					<ul class="ulsquare">
					<li>Franz Liszt: Liebestraum No. 3 in A flat major</li>
					<li>Frédéric Chopin: Study in A flat major Op.25 No.1</li>
					<li>Alexander Scriabin: Study in D sharp minor Op.8 No.12</li>
						</ul>

						<br/>
					<iframe src="http://www.youtube.com/embed/HczH9E5nhQc" height="300" width="500"></iframe>
					<br/>
					William Cuthbertson plays Felix Blumenfeld, Etude for the Left hand op 36
					<br/><br/>
					 <table>
					<tr>
					<td>
					<iframe src="http://www.youtube.com/embed/HAh3FAbdicU" width="500" height="300"></iframe>
					 </td>
					 <td>&nbsp;&nbsp;</td>
					<td><a href="#" title="Amaryllis Waltz von William Cuthbertson, Copyright  William Cuthbertson &copy;2012">
					   <img class="img-responsive" src="img/anarylliswalz.png" alt="Amaryllis Walz von William Cuthbertson, Copyright &copy;2012 William Cuthbertson 2013"/>
					   </a>
					   </td>
					   </tr>
				   </table>
					<?php print foot();				?>
                    </div>
                </div>
            </div>
        </div>        <!-- /#page-content-wrapper -->
    </div>    <!-- /#wrapper -->
    <?php endPage();?>
	</body>
</html>