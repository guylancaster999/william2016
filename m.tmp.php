<?php 
require "funcz/m.functionz.php";
print head("en","kontakt","kontakt_e.php","Y");
?>
<body>
<div data-role="page" id="pageone">
  
	  <form method="post" action="do_tmp.php">
      <label for="fname">First name:</label>
      <input type="text" name="fname" id="fname">
	  <input type="submit"/>
      </form>
	  
    <div data-role="footer">
     <?php print foot();?>
  </div>
  </div>
</body>
</html>