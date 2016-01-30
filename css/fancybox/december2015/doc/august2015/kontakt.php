<?php 
require "funcz/functionz.php";
print head("de","Kontakt ");
?>
<body>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <?php print  menu("de","Kontakt");?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid"> 
			    <?php topRight("kontakt_e.php","kontakt.php","kontakt_ch.php");?>
                <div class="row">
                  <div class="col-lg-12 header"> 
                      <h2>Kontakt</h2> 
                  </div>
             </div>
            <div class="row">
                <div class="col-sm-6">         
                    <table class="table">
<tr>
<td  ><strong>Post</strong></td>
<td>:</td>
<td  >William Cuthbertson<br/>
Theodor-Heuss-Str.16<br/>
79183 Waldkirch<br/>
Baden-Württemberg<br/>
Deutschland</td>
</tr>
<tr>
<td  ><strong>Tel.</strong></td>
<td>:</td>
<td  >0 76 81 / 40 92 60</td></tr>
<tr>
<td  ><strong>E-Mail</strong></td>
<td>:</td>
<td  ><a href="mailto:w.cuthbertson@gmx.de">w.cuthbertson@gmx.de</a></td></tr>
</table>
            </div>
            <div class="col-sm-6">
                <?php photorightnolink("FotoChopinKonzertSept2010_350.jpg","William Cuthbertson - Chopin Konzert Sept 2010");?>
		    </div>
        </div>   
        <div class="row">
           <div class="col-sm-12">
				<div class="alpha">Ihre Nachricht</div>
<a id="form"></a>
<div class="alpha" style="color:#F00;"><?php print $_GET["error"];?></div>
<form action="do_contact.php" method="POST" title="Send me a message"> 
	<table class="table">
		<tr>
		<td>Name&nbsp;:&nbsp;</td>
		<td><input type="text" id="sname" name="sname"  size="70" required value="<?php print $_GET["sname"]; ?>"/></td>
       </tr>
		<tr>
		<td>Email&nbsp;:&nbsp;</td>
		<td><input type="email" required id="email" name="email" size="70" value="<?php print $_GET["email"]; ?>" /></td>
		</tr>
		<tr>
		<td>Telefon&nbsp;:&nbsp;</td>
		<td><input type="text" id="phone"  name="phone" size="70"  value="<?php print $_GET["phone"];?>"/></td>
       </tr>
		<tr>
		<td>Betreff&nbsp;:&nbsp;</td>
		<td> <input type="text" id="subject"  name="subject" size="70" required  value="<?php print $_GET["subject"];?>" /></td>
      	</tr>
		<tr>
		<td  >Anfrage&nbsp;:&nbsp;</td>
		<td><textarea rows="6" cols="60" id="message" name="message" required><?php print $_GET["message"];?></textarea></td>
     	</tr>
		<tr>
		<td>&nbsp;</td>
		<th><input type="submit"  value="Versenden"/></th>
		</tr>
	</table>
</form>
<br/>
* Ihre E-Mail werden nicht an Dritte weitergegeben
<?php print foot(); ?>
                    </div>
                </div>
            </div>
        </div>        <!-- /#page-content-wrapper -->
    </div>    <!-- /#wrapper -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 </body>
</html>