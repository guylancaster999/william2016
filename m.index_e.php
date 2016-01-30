<?php 
require "funcz/m.functionz.php";
print head("de","homepage","index_e.php","Y");
?>
<body>
<script>$(document).delegate('a.top', 'click', function () {
    $.mobile.silentScroll(0);
    return false;
});
</script>
<div data-role="page" id="pageone">
  <div data-role="header">
    <?php print top("en","Homepage","Homepage");?>
</div>
  <div data-role="main" class="ui-content" >
                 <?php photocenter("m.frontpagephoto.jpg", "William%20Cuthbertson%20am%20Klavier%201.3.2010%20-%20Photo%20by%20Hans%20Jürgen%20Kugler%201.3.2010");?>
   	           	 <br/>
				<ul>
					<li>Sunday 27 December 2015, 19.30pm: Poetry and Piano</a> : Hymne an die Nacht by Novalis plus Piano Pieces by Chopin, Skrjabin and Schumann. With Martin Lunz (spoken word). 
					At <a href="http://www.rehaklinik-sonneneck.de">Haus Sonneneck</a>, Kandenerstr.18, 79410 Badenweiler,Breisgau-Hochschwarzwald, Baden-Württemberg, Germany. 
					Tickets &euro;12.
					Further Details <a href="https://www.facebook.com/events/548766628633166/">here</a>.
					<br/><br/>
					</li>
					<li>2016 Concert Programme : Further Details   <a href="program_e.php" title="2016 Concert Piano Program"><strong>here</strong></a>.
					<br/><br/>
					</li>
				   <li>29.August – 3.September 2016: 17. International  Peter Feuchtwanger Piano Masterclass. Details follow.
				   <br/><br/>
				   </li>
			   </ul>
	</div>
 <div data-role="footer">
      <?php print foot();?>
  </div>
  </div> 
</body>
</html>