<?php 
require "funcz/m.functionz.php";
print head("de","kontakt","kontakt.php","Y");
?>
<body>
<div data-role="page" id="pageone">
  <div data-role="header">
       <?php print top("de","kontakt","Kontakt");?>
  </div>
  <div data-role="main" class="ui-content">
     <table class="table">
<tr>
<td  valign="top"><strong>Post</strong></td>
<td valign="top">:</td>
<td  >William Cuthbertson<br/>
Theodor-Heuss-Str.16<br/>
79183 Waldkirch<br/>
Baden-Württemberg<br/>
Deutschland</td>
</tr>
<tr>
<td   valign="top"><strong>Tel.</strong></td>
<td valign="top">:</td>
<td  >0 76 81 / 40 92 60</td></tr>
<tr>
<td  valign="top" ><strong>E-Mail</strong></td>
<td valign="top">:</td>
<td  valign="top" ><a href="mailto:w.cuthbertson@gmx.de">w.cuthbertson@gmx.de</a></td></tr>
</table>
<table cellspacing="1"><tr><td> 
				<div align="center" class="alpha">Ihre Nachricht</div>
<a id="form"></a>
<div class="alpha" style="color:#F00;"><?php print $_GET["error"];?></div>
<form action="m.do_contact.php" method="POST" title="Send me a message"> 
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
		<td valign="top" >Anfrage&nbsp;:&nbsp;</td>
		<td><textarea rows="8" cols="60" id="message" name="message" required><?php print $_GET["message"];?></textarea></td>
     	</tr>
		<tr>
		<td>&nbsp;</td>
		<th><input type="submit"  value="Versenden"/></th>
		</tr>
	</table>
</form>
</div>
* Ihre E-Mail werden nicht an Dritte weitergegeben
 </div> 
   <div data-role="footer">
     <?php print foot();?>
  </div>
  </div>
</body>
</html>