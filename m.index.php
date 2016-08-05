<?php 
	require "funcz/m.functionz.php";
     print head("de","homepage","index.php","Y");
?>
<script>$(document).delegate('a.top', 'click', function () {
    $.mobile.silentScroll(0);
    return false;
});
</script>
<div data-role="page" id="pageone">
  <div data-role="header">
    <?php print top("de","Homepage","Homepage"); ?>
</div>
  <div data-role="main" class="ui-content" >
            <?php photocenter("m.frontpagephoto.jpg", "William%20Cuthbertson%20am%20Klavier%201.3.2010%20-%20Photo%20by%20Hans%20Jürgen%20Kugler%201.3.2010");?>
   	        <ul>
			   <li><b>29.August – 3.September 2016: 17. Internationaler Peter Feuchtwanger Meisterkurs für Klavier.
</b>			   
			  <ul>
				<li>Einzelheiten <a href="m.meisterkurse.php">hier</a>.</li>
				</ul>
				<br/>
			   </li>				
			<li>
			  <b>31.August -	ein Gedenkkonzert für Peter Feuchtwanger.</b>
				<ul>
				<li>17.30 G.Rossini's "Semiramide" Overture, arr. Czerny, für 16 Pianisten auf 8 Klaviere
					, <A href="http://www.lepthien.de/">Pianohaus Lepthien</a>, Freiburg.<br/>
Eintritt frei. Transport nach Waldkirch - Email <a href="mailto:w.cuthbertson@gmx.de">w.cuthbertson@gmx.de</a> einen Platz zu reservieren.</li>		      	
		<li>19:30 Es spielen etwa 20 ehemalige Studenten von Peter Feuchtwanger. 
		Unter anderen werden Werke von Feuchtwanger gespielt. 
 Eintritt: 12&euro; / 10&euro; ermässigt / 9&euro; Kinder.	
				Barocksaal des Elztalmuseums in Waldkirch.</li>
			<li>Mehr information <a href="m.concert.php">hier</a>.</li>			  
		  </ul>
		  <br/><br/>
		  </li>
		<li><b>2016 Konzertprogramm </b>
				<ul>
				<li>Klicken Sie  <a href="m.program.php" title="2016 Klavier Program"><strong>hier</strong></a>.
				<br/><br/></li>
				</ul>
				</li>

			</ul>
	   </div>
 <div data-role="footer">
      <?php print foot();?>
  </div>
  </div> 
</body>
</html>