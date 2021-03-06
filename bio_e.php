<?php 
require "funcz/functionz.php";
print head("en","Biography");
?>
<body>
    <div id="wrapper">
      <div id="sidebar-wrapper">
            <?php print  menu("en","Biography","bio_e.php","bio.php","bio_ch.php"); ?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid">
			   <?php topRight();?>
                <div class="row">
                 <div class="col-lg-12"> 
                      <h2>Biography</h2>
                   </div>
             </div>
             <div class="row">
                 <div class="col-lg-12">    <?php	photoright("IMG_2402.JPG","Img_2402_200.jpg","Bio", "William Cuthbertson plays Beethoven","bio_e.php","en");?>		
					Pianist  William Cuthbertson, who was born and brought up in England, has lived in Waldkirch, Baden Wurtenburg, in Germany&rsquo;s Black Forest, for many years. 
					He plays  an active part in local cultural activities, both as performer and organiser.
					<br/>
<br/>
As a child, Cuthbertson won many musical prizes in his home county of Kent as a pupil of Bernard King at Sevenoaks School. 
He studied piano at the <a href="http://www.ram.ac.uk/" title="Royal Academy of Music">Royal Academy of Music</a> in London with Ruth Harte and Gordon Green. 
He then continued his studies in Krakow, Poland on a Polish Government scholarship, studying with Ludwik Stefanski, and has continued to specialise in playing the works of Chopin.
<br/>
<br/>
A very significant person in William Cuthbertson&rsquo;s life was the renowned London-based German pianist, composer and pedagogue, Peter Feuchtwanger.
William Cuthbertson organised annual international Master Class with Peter Feuchtwanger in 
Waldkirch, and since his recent death, continues to do so - click  <a href="masterclasses_e.php"  title="piano Master Class">here</a> for details.
<br/>
<br/>
William Cuthbertson has performed at concerts in Russia, Germany, Holland, Poland, Denmark, Norway, England, Scotland, Austria, Sweden, Switzerland and the United States of America. 
<br/>
<br/>
The Badische Zeitung (4/03/2010 ) wrote:
<blockquote><em>&quot;Cuthbertson's  playing attests to the highest technical skill and virtuosic brilliance and  his interpretation is thereby absolutely free and rich in nuances. 
A mastery of  musical expression, which is probably only possible through a lifelong preoccupation with Chopin.
His stupendous  technique allows him to conquer technical hurdles with casual elegance&quot;</em> 
(Fränkische Landeszeitung ).&rdquo;</blockquote>
Cuthbertson is also co-organiser of <a href="http://kulturwoche-waldkirch.de/">Waldkircher Kulturwochen (Arts  Festival) </a> and is a founding member of the local Community Cinema,  where he regularly accompanies silent films with free improvisation, and the <a href="http://www.klappe11.de/">Klappe 11</a> festival.
<br/>
<br/>					<?php
					print foot();
					?>
                    </div>
                </div>
            </div>
        </div>      <!-- /#page-content-wrapper -->
    </div>    <!-- /#wrapper -->
	<?php  print endPage();?>
 </body>
</html>