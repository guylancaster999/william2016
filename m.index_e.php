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
			<li><b>August 31st - A memorial concert for Peter Feuchtwanger, featuring many of his former students</b>.
					<ul>
					<li>17.30 G.Rossini's "Semiramide" Overture, arr. Czerny, for 16 pianists on 8 pianos 
					at <A href="http://www.lepthien.de/">Pianohaus Lepthien</a>  in Freiburg. 
					Entry free. 
					Transport from Waldkirch - Email <a href="mailto:w.cuthbertson@gmx.de">w.cuthbertson@gmx.de</a> to book transport.</li>		      	
					<li>19.30 at the Baroque room,  Elztalmuseum, Waldkirch.
					Click <a href="m.concert_e.php">here</a> for more information.
					Tickets: 12&euro;/10&euro;(conc. )/9&euro; children. </li>
					 </ul>
				<br/><br/>
			</li>			  
			 <li><B>29.August – 3.September 2016: 17. International  Peter Feuchtwanger Piano Masterclass.</b>
			<ul>
				<li> Details <a href="m.meisterkurse_e.php">here</a>.</li>
			</ul>
	   <br/>
	   <br/>
	   </li>
	   </ul>
	</div>
 <div data-role="footer">
      <?php print foot();?>
  </div>
  </div> 
</body>
</html>