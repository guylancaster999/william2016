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
				<li>Sontag 27 December 2015, 19.30pm: Poesie und Piano</a> : Hymne an die Nacht von Novalis mit Klavierstücke von Chopin, Skrjabin und Schumann, mit Martin Lunz (Rezitation). Am <a href="http://www.rehaklinik-sonneneck.de">Haus Sonneneck</a>, Kandenerstr.18, 79410 Badenweiler, Breisgau-Hochschwarzwald, Baden-Württemberg. 
				Eintritt &euro;12.
				Weitere Informationen finden Sie <a href="https://www.facebook.com/events/548766628633166/">hier</a>.
				<br/><br/>
				</li>
				<li>2016 Konzertprogramm : Klicken Sie  <a href="m.program.php" title="2016 Klavier Program"><strong>hier</strong></a>.
				<br/><br/>
				</li>
			   <li>29.August – 3.September 2016: 17. Internationaler Peter Feuchtwanger Meisterkurs für Klavier. Einzelheiten folgen.
			    
			   </li>
			</ul>
	   </div>
 <div data-role="footer">
      <?php print foot();?>
  </div>
  </div> 
</body>
</html>