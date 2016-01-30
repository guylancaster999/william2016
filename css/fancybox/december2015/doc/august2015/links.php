<?php 
require "funcz/functionz.php";
print head("de","Linken");
?>
<body>
    <div id="wrapper">
         <div id="sidebar-wrapper">
            <?php   print  menu("de","Links"); ?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid"> 
			    <?php topRight("links_e.php","links.php","links_ch.php");?>
                <div class="row">
                <div class="col-lg-12"> 
                    <h2>Links</h2> 
                </div>
             </div>
           	<div class="row">
                 <div class="col-lg-12">         
                     <?php photoright("Valldemosa_400.jpg","Valldemosa_400.jpg" ,"Links","Neben%20Büste%20von%20Chopin,%20Valldemosa","links.php","de");?> 
<ul>
<li><a href="http://www.alexandertechnique.com/">Alexandertechnik</a> 
<br/>
<br/>
</li>
<li><a href="http://en.wikipedia.org/wiki/Alexander_technique">Alexandertechnik (wikipedia)</a>
<br/>
<br/>
</li>

<li><a href="http://www.blido.de/" title="Stefan Blido">Stefan Blido</a>
<br/>
<br/>
</li>
<li><a href="http://www.elztalmuseum.de/">Elztal Museum</a><br/>
<br/>
</li>
<li><a href="http://www.klappe11.de/">Kommunales Kino Klappe 11</a>
<br/>
<br/>
</li> 
<li><a href="http://www.fv-musikschule-waldkirch.de/">Musikschule Waldkirch</a><br/><br/></li>

<li><a href="http://www.peter-feuchtwanger.de/">Peter Feuchtwanger</a><br/><br/>
</li>
<li><a href="http://www.ram.ac.uk/">Royal Academy of Music</a><br/>
  <br/>
</li>
<li><a href="http://kulturwoche-waldkirch.de/">Waldkirche Kulturwochen</a><br/>
 <br/>
</li>
<li><a href="http://www.waldkircher-orgelstiftung.de/">Waldkircher Orgelstiftung</a><br/>
<br/>
</li>
<li><a href="https://www.facebook.com/william.cuthbertson.12">William Cuthbertson Facebook</a><br/>
<br/>
</li>

</ul>
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