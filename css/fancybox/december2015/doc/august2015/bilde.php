<?php 
require "funcz/functionz.php";
print head("de","Fotos");
?>
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
            <?php print  menu("de","Skizzen");?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid"> 
			    <?php topRight("bilde_e.php","bilde.php","bilde_ch.php");?>
                <div class="row">
                <div class="col-lg-12"> 
                      <h2>Skizzen &ndash; von Gosia Kulczyk</h2> 
                </div>
             </div>
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-12">         
  <table class="table">
  <tr>
  <td><?php photo("1.png","1_tn.png","Skizzen%20von%20Gosia%20Kulczyk","Bild%201","bilde.php","de");?> &nbsp;
  </td>
  <td><?php photo("2.jpg","2_tn.jpg","Skizzen%20von%20Gosia%20Kulczyk","Bild%202","bilde.php","de");?> &nbsp;
  </td>
  <td><?php photo("4.jpg","4_tn.jpg","Skizzen%20von%20Gosia%20Kulczyk","Bild%203","bilde.php","de");?> &nbsp;
 </td>
  <td><?php photo("6.jpg","6_tn.jpg","Skizzen%20von%20Gosia%20Kulczyk","Bild%204","bilde.php","de");?> &nbsp;
 </td>
  <td><?php photo("7.png","7_tn.jpg","Skizzen%20von%20Gosia%20Kulczyk","Bild%205","bilde.php","de");?> &nbsp;
 </td>
 </tr></table>
  <table class="table">
  <tr> 
  <td><?php photo("8.jpg","8_tn.jpg","Skizzen%20von%20Gosia%20Kulczyk","Bild%206","bilde.php","de");?>  </td>
  <td><?php photo("3.jpg","3_tn.jpg","Skizzen%20von%20Gosia%20Kulczyk","Bild%207","bilde.php","de"); ?>  </td>
  <td><?php photo("5.jpg","5_tn.jpg","Skizzen%20von%20Gosia%20Kulczyk","Bild%208","bilde.php","de"); ?></td></tr>
  </table>
<br/>
 <div class="alpha" >Klicken Sie auf die Fotografien in voller Größe zu sehen</div>
<?php print foot();?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 
</body>

</html>
