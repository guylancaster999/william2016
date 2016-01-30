<?php 
require "funcz/functionz.php";
print head("ch","剧目");
?>
<body>
    <div id="wrapper">
       <div id="sidebar-wrapper">
            <?php    print  menu("ch","剧目");	?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid"> 
			   <?php topRight("repertoire_e.php","repertoire.php","repertoire_ch.php"); ?>
                <div class="row">
	                <div class="col-lg-12"> 
                    <h2>剧目</h2> 
    	            </div>
        	     </div>
            	 <div class="row">
                	 <div class="col-lg-12">         
       					<table>
						<tr>
							<td>
								<a href="http://en.wikipedia.org/wiki/Isaac_Alb%C3%A9niz">
									<h3>I.Albeniz</h3>
								</a>
					<ul>
						<li>Pieces from Iberia (ab 2001)</li>
						<li>Tango, arranged by von  L. Godowski</li>
					</ul>
				</td>
				<td>
					<?php photorightnolink("m.Albeniz.jpg","I.Albeniz:%20Photo:Wikipedia");?> 
               </td>
			   </tr>
			   <tr>
			   <td>
			   <a href="http://en.wikipedia.org/wiki/Johann_Sebastian_Bach"><h3>J.S.Bach</h3></A>
 			<ul>
				<li>Partita Nr. 1 B flat major</li>
				<li>Partita Nr. 6 E minor</li>
				<li>Preludes and fugues from the Well-Tempered Clavier Book 1: C major, C minor, C# major, C sharp minor, D major, D minor, E-flat, E-flat minor, E major, F minor, G major, B-flat, B-flat minor.</li>
				<li>Preludes and fugues from the Well-Tempered Clavier Book 2: D major, D minor, E-flat, F minor, F sharp minor, G major, A-flat major</li>
				<li>Goldberg Variations BWV 988</li>
				<li>Toccata  E minor BWV 914</li>
				<li>Italian Concerto BWV 971</li>
			</ul>
			</td>
			<td>         <?php photorightnolink("Johann_Sebastian_Bach_240.jpg","Johann%20Sebastian%20Bach-Photo:Wikipedia");?> 
         </td>
			   </tr>
			   <tr>
			   <td>		<a href="http://en.wikipedia.org/wiki/Mily_Balakirev">
					<h3>M.I.Balakirev</h3>
				</a>
				<ul>
					<li>Sonate B flat minor</li>
					<li>Islamey</li>
				</ul>
	      </td>
		<td>
		<?php photorightnolink("Balakirev.jpg","Milij_Aleksejevic_Balakirev-Photo:Wikipedia");?> 
</td>
			   </tr>
			   <tr>
			   <td>
		<a href="http://en.wikipedia.org/wiki/Ludwig_van_Beethoven">
					<h3>L.V.Beethoven</h3>
				</a>
				<ul>
				  <li>Sonata in A Major Op. 2, No. 2</li>
				  <li>Sonata in C major Op. 2, No. 3</li>
				  <li>Sonata in E flat major Op. 7</li>
				  <li>Sonata in C minor Op. 13 &quot;Pathetique&quot;</li>
				  <li>Sonata in A flat major Op. 26</li>
				  <li>Sonata in C sharp minor Op. 27, No. 2 &quot;Moonlight&quot;</li>
				  <li>Sonata in D Major Op. 28</li>
				  <li>Sonata in C major Op. 53 &quot;Waldstein&quot;</li>
				  <li>Sonata in F minor Op. 57 &quot;Appassionata&quot;</li>
				  <li>Sonata in F sharp major, Op. 78</li>
				  <li>Sonata in A Major Op. 101</li>
				  <li>Sonata in B Flat Major Op. 106 &quot;Hammerklavier&quot;</li>
				  <li>Sonata in E major Op. 109</li>
				  <li>Sonata in A flat major Op. 110</li>
				  <li>Sonata in C minor Op.111</li>
			  </ul>
           </td>
           <td>
		     <?php photorightnolink("Beethoven_240.jpg","L.V.Beethoven-Photo:Wikipedia");?> 
</td>
			   </tr>
			   <tr>
			   <td>				<a href="http://en.wikipedia.org/wiki/Johannes_Brahms">
					<h3>J.Brahms</h3>
				</a>
				<ul>
				  <li>16 Waltzes Op. 39</li>
				  <li>Paganini Variations book1</li>
				  <li>2 Rhapsodies Op. 79</li>
				  <li>Op. 118 No. 1, No. 2</li>
				  <li>Op. 119 No. 1, No. 2</li>
				</ul>
				</TD>
				<TD>
					<?php photorightnolink("JohannesBrahms_240.jpg","Johannes Brahms-Photo:Wikipedia")?>
				</td>
			   </tr>
			   <tr>
			   <td>				<a href="http://en.wikipedia.org/wiki/Fr%C3%A9d%C3%A9ric_Chopin">
					<h3>F.Chopin</h3>
				</a>
				<ul>
				  <li>The 4 Ballades</li>
				  <li>The Preludes</li>
				  <li>The 3 Sonatas</li>
				  <li>The 4 Scherzi</li>
				  <li>The etudes</li>
				  <li>The Waltz</li>
				  <li>selected mazurkas</li>
				  <li>selected Nocturnes</li>
				  <li>selected Polonaises (also Polonaise-Fantasie and Grande polonaise brillante Andante et Spinato)</li>
				  <li>Fantasy</li>
				  <li>Barcarolle</li>
				  <li>Berceuse</li>
				  <li>Tarantella Op.43</li>
				</ul>
			</td>
			<td>
				<?php photorightnolink("Chopin_240.png","F.Chopin-Photo:Wikipedia");?>
			</td>
			   </tr>
			   <tr>
			   <td>				<a href="http://en.wikipedia.org/wiki/Claude_Debussy">
					<h3>C.Debussy</h3>
				</a>
				<ul>
					<li>Children´s Corner</li>
					<li>Preludes: Des pas sur la neige</li>
					<li>La fille aux cheveux de lin</li>
					<li>La cathédrale engloutie</li>
					<li>General Lavine - eccentric</li>
					<li>Deux Arabesques</li>
					<li>Claire de lune</li>
					<li>Reflets dans l'eau ( ab 2001 )</li>
				</ul>
			</td>
			<td>
				<?php photorightnolink("Claude_Debussy_240.jpg","Claude_Debussy%20:%20Photo:Wikipedia");?>
				</td>
			   </tr>
			   <tr>
			   <td>				<A href="http://en.wikipedia.org/wiki/John_Field_(composer)">
					<h3>J. Field</h3>
				</A>
				<ul>
					<li>Nocturne in A major</li>
				</ul>
			</td>
			<td>
			   <?php photorightnolink("John_field_240.jpg","John%20Field-Photo:Wikipedia");?>
			</td>
			   </tr>
			   <tr>
			   <td><a href="http://en.wikipedia.org/wiki/C%C3%A9sar_Franck">
								<h3>C.Franck.</h3>
							</a>
							<ul>
								<li>Variations Symphoniques (Piano und Orchestra)</li>
								<li>Prelude, Chorale and Fugue</li>
							</ul>
					</td>
		<td><?php photorightnolink("Cesar_Franck_240.jpg","Cesar%20Franck-Photo:Wikipedia");?>
			</td>
			   </tr>
			   <tr>
			   <td><A href="http://en.wikipedia.org/wiki/George_Gershwin">
								<h3>G.Gershwin</h3>
							</A>
							<ul>
								<li>
									<?php linkedPhoto("Rhapsodie in Blue","Gershwin2.JPG","Repertoire","repertoire_e.php","en");?>
								</LI>
							</ul>
					</td>
					<td><?php photorightnolink("m.George_Gershwin.jpg","George%20Gershwin-Photo:Wikipedia");?>
						</td>
			   </tr>
			   <tr>
			   <td>	<A href="http://en.wikipedia.org/wiki/Mikhail_Glinka">
								<h3>M.Glinka</h3>
							</A>
							<ul>
							  <li>"The Lark" arr. M.Balakirew</li>
							</ul>
					</td>
					<td>
						<?php photorightnolink("Mikhail_Glinka_240.jpg","Mikhail%20Glinka-Photo:Wikipedia");?>
					</td>
			   </tr>
			   <tr>
			   <td>					<A href="http://en.wikipedia.org/wiki/Enrique_Granados">
							<h3>E.Granados </h3>
						</A>
						<ul>
							<li>The Maiden and the Nightingale (Goyescas)</li>
						</ul>
					</td>
					<td>
						   <?php photorightnolink("Granados.jpg","Enrique%20Granados-Photo:Wikipedia");?>
					</td>
			   </tr>
			   <tr>
			   <td><a href="http://en.wikipedia.org/wiki/Edvard_Grieg"><h3>E.Grieg</h3></a>
				<ul>
				  <li>Some works from &quot;Lyric Pieces&quot;</li>
				  <li>Sonata in E minor Op.7</li>
				  <li>Suite &quot;From Holberg's Time&quot; Op.40</li>
				  </ul>
					</td>
					<td>					<?php photorightnolink("m.Edvard_Grieg.jpg","E.Grieg-Photo:Wikipedia");?>
					</td>
			   </tr>
			   <tr>
			   <td>	   <a href="http://en.wikipedia.org/wiki/Joseph_Haydn"><h3>J.Haydn</h3></a>
				<ul>
				  <li>Variations in F minor</li>
				  <li>Variations in E flat major</li>
				</ul>
               </td>
               <td>
                   <?php photorightnolink("m.Joseph_Haydn.jpg","J.Haydn-Photo:Wikipedia");?>
               </td>
			   </tr>
			<tr>
			   <td><a href="https://en.wikipedia.org/wiki/Leo%C5%A1_Jan%C3%A1%C4%8Dek"><h3> L.Janacek</h3></a>
					<ul>
					  <li >On an overgrown path</li>
					  </ul>
					</td>
					<td>		<?php  photorightnolink("m.Janacek.jpg","Janacek-Photo:Wikipedia");?>
					</td>
					</tr>
					<tr>
					<td>     <a href="http://en.wikipedia.org/wiki/Franz_Liszt"><h3>F.Liszt</h3></a>
					 <ul>
					  <li> Sonata in B minor</li>
					<li>Mephisto Waltz</li>
					<li>Hungarian Rhapsody Nr.2,4,6</li>
					<li>Liebestraume &ndash; Three Notturnos</li>
					<li>Valse oubli&eacute;e Nr.1 in Fis&ndash;Dur, Nr.2 in As&ndash;Dur</li>
					<li>Consolation Nr.1 in E-Dur, Nr.2 in E-Dur, Nr.3 in Des&ndash;Dur, Nr.4 in Des&ndash;Dur, Nr.5 in E&ndash;Dur, Nr.6 in E&ndash;Dur</li>
					<li>Chopin/Liszt Ein Madchens Wunsch</li>
					<li>Etudes:La leggierezza,Un sospiro, La campanella, Feux Follets &ndash; Irrlichter (Etude d'execution transcendente Nr. 5) Zwei Konzert Etuden: 1. Waldesrauschen, 2. Gnomenreigen</li>
					<li>aus Ann&eacute; de pelerinage
					<ul>
					<li>Premi&egrave;re Ann&eacute;e &ndash; Suisse :Au lac de Wallenstadt ,Au bord d'une source ,Vallee d'Obermann</li>
					<li>Deuxi&egrave;me ann&eacute;e: Italie :104th Sonnetto del Petrarca</li>
					<li>Troisi&egrave;m&eacute; &ndash; Italie :Les jeux d'eaux a la Villa d'Este</li>
					 </li>
					</ul>
					</li>
					</ul></td>
					<td>			<?php  photorightnolink("m.Franz_Liszt.jpg","Franz%20List-Photo:Wikipedia");?>
						</td>
								   </tr>
								   <tr>
								   <td><a href="http://en.wikipedia.org/wiki/Anatoly_Lyadov"><h3>A.Lyadov</h3></a>
					<ul>
					  <li>Variations on a Polish Folk Song</li>
					  <li>Some Preludes</li>
					  </ul>
					</td>
					<td><?php  photorightnolink("m.Anatoly_Lyadov.jpg","Anatoly%20Lyadov-Photo:Wikipedia");?>
					</td>
								   </tr>
								   <tr>
								   <td><a href="http://en.wikipedia.org/wiki/Felix_Mendelssohn"><h3>F.Mendellsohn</h3></a>
					<ul>
					  <li>Rondo Capriccioso Op.14</li>
					  <li>Variations  serieuses Op.54</li>
					  <li>Fantasia on 'The Last Rose' Op.15</li>
					  <li>Songs without Words:
						<ul>
						  <li>Op.19 Nr.1.2,4,6</li>
						  <li>Op. 30 Nr.1,2,3,6</li>
						  <li>Op. 38 Nr.2,4,6      </li>
						  <li>Op. 53 Nr.2,4      </li>
						  <li>Op. 62 Nr. 3,6      </li>
						  <li>Öp.67 Nr. 2,4      </li>
						  <li>Op. 102 Nr.3,5</li>
						</ul>
					  </li>
					</ul>
					</td>
					<td><?php  photorightnolink("m.Mendelssohn.jpg","Felix%20Mendelssohn-Photo:Wikipedia"); ?>
						</td>
								   </tr>
								   <tr>
								   <td><a href="http://en.wikipedia.org/wiki/Ignaz_Moscheles"><h3>I.Moscheles</h3></a>
					<ul>
					<li>Etudes Op. 70 Nr. 5, Nr. 9</li></ul>
					</td>
					<td>             <?php  photorightnolink("m.Ignaz_Moscheles.jpg","I.Moscheles-Photo:Wikipedia"); ?>
						</td>
								   </tr>
								   <tr>
								   <td><a href="http://en.wikipedia.org/wiki/Wolfgang_Amadeus_Mozart"><h3>W.A.Mozart</h3></a>
					<ul>
					  <li>Sonata in A minor, K. 310</li>
					  <li>Sonata in C major K 330</li>
					  <li>Sonata in A major, K 331</li>
					  <li>Sonata in F major K 332</li>
					  <li>Sonata in B flat major K 333</li>
					  <li>Sonata in C Major K. 545</li>
					  <li>Sonata in B flat major, K. 570</li>
					  <li>Sonata in D major, K. 576</li>
					  <li>Variations on &quot;Ah, vous dirai-je, Maman&quot; K. 265</li>
					  <li>Fantasie in D minor K. 397</li>
					</ul>
					</td>
					<td>       <?php  photorightnolink("Mozart_240.jpg","W.Mozart-Photo:Wikipedia"); ?>
						</td>
								   </tr>
								   <tr>
								   <td>   <a href="http://en.wikipedia.org/wiki/Modest_Mussorgsky"><h3>M.Mussorgski</h3></a>	
							<ul>
							<li>Pictures at an Exhibition</li>
							</ul>
					</td>
					<td>	       <?php  photorightnolink("m.Musorgskiy.jpg","M.Mussorgski-Photo:Wikipedia"); ?>
						</td>
								   </tr>
								   <tr>
								   <td><a href="http://en.wikipedia.org/wiki/Sergei_Prokofiev"><h3>S.Prokofiev</h3></a>
					<ul>
					<li>Sonata No.3 in A minor Op. 28</li>
					</ul>
					</td>
					<td>           <?php  photorightnolink("m.Sergei_Prokofiev.jpg","S.Prokofiev-Photo:Wikipedia"); ?>
					</td>
					 </tr>
					 <tr>
					   <td>
							<a href="http://en.wikipedia.org/wiki/Sergei_Rachmaninoff">
								<h3>S.Rachmaninov</h3>
							</a>
					<ul>
					  <li>Corelli Variations, Op. 42</li>
					  <li>Etudes Tableaux Nos. 2, 5, 7, Op.33</li>
					  <li>9 Etudes Tableaux Op. 39</li>
					  <li>Polka de W.R</li>
					  <li>10 Preludes Op. 23</li>
					  <li>Preludes No. 1, 2, 5, 7, 10, 12 Op. 32</li>
					  <li>Piano Concerto No. 3 in D minor, Op. 30</li>
					  <li>Sonata in B flat minor Op. 36</li>
					   <li>Piano Concerto Number 1</li>
					  </ul>
					</td>
					<td>
							 <?php  photorightnolink("m.Sergei_Rachmaninoff.jpg","Sergei%20Rachmaninoff-Photo:Wikipedia"); ?>
						</td>
								   </tr>
								   <tr>
								   <td><a href="http://en.wikipedia.org/wiki/Maurice_Ravel"><h3>M.Ravel</h3></a>
					<ul>
					  <li>Valses nobles et sentimentales</li>
					  <li>Sonatine</li>
					  <li>Alborado del grazioso</li>
					  <li>Jeux d'eau</li>
					</ul>
					</td>
					<td>   	        <?php  photorightnolink("m.Maurice_Ravel.jpg","Maurice%20Ravel-Photo:Wikipedia"); ?>
						</td>
								   </tr>
								   <tr>
								   <td><a href="http://en.wikipedia.org/wiki/Franz_Schubert"><h3>F.Schubert</h3></a>
					<ul>
					  <li>Sonata in B major, Op. Posth. 147</li>
					  <li>Sonata in A Major Op. Posth. 120</li>
					  <li>Sonata in A minor Op. Posth. 143</li>
					  <li>Sonata in A minor Op. 42</li>
					  <li>Sonata in B flat major, D. 960</li>
					  <li>Wanderer Fantasy in C major Op. 15</li>
					  <li>Impromptu in E flat major Op. 90 No. 2</li>
					  <li>Impromptu in G flat major, Op. 90 No. 3</li>
					  <li>Six Moments Musicaux Op. 94</li>
					  <li>Impromptu in A flat major, Op. Posth. 142 No. 2</li>
					  <li>Impromptu in B flat major Op. Posth. 142 No. 3</li>
					</ul>
					</td>
					<td>            <?php  photorightnolink("m.Franz_Schubert.jpg","Franz%20Schubert-Photo:Wikipedia"); ?>
						</td>
								   </tr>
								   <tr>
								   <td><a href="http://en.wikipedia.org/wiki/Robert_Schumann"><h3>R.Schumann</h3></a>
					<ul>
					  <li>Abegg Variations Op.1</li>
					  <li>Papillons Op.2</li>
					  <li>Op.7 Tocata</li>
					  <li>Carnival Op.9</li>
					  <li>Etudes Op.13 Symphoniques</li>
					  <li>Op.15 Kinderszenen</li>
					  <li>Fantasy in C major Op.17</li>
					</ul>
					</td>
					<td><?php  photorightnolink("m.Schumann.jpg","Robert%20Schumann-Photo:Wikipedia");?>
						</td>
								   </tr>
								   <tr>
								   <td><a href="http://en.wikipedia.org/wiki/Alexander_Scriabin">
							   <h3>A.Scriabin [2015 is the centenery of his death]</h3>
							   </a>
						<ul>
					  <li>Deux Poèmes</li>
					  <li>24 Preludes Op. 11</li>
					  <li>Etudes Op. 2 No. 2, Op. 8, No. 5, 11, 12,  Op. 42, Op. 65 No. 1</li>
					  <li>Piano Concerto in F sharp minor, Op. 20</li>
					  <li>Prelude and Nocturne for the Left Hand</li>
					  <li>Sonata No. 4 in F# Major, No 5, No 6, No 10</li>
					  <li>Vers la flamme Op. 72</li>
					</ul>
					</td>
					<td>      <?php  photorightnolink("m.Skrjabin_Alexander.jpg","Alexander%20Skrjabin-Photo:Wikipedia");?>
						</td>
								   </tr>
								   <tr>
								   <td><a href="http://en.wikipedia.org/wiki/Richard_Strauss"><h3>R.Strauss</h3></a>
					<ul>
					<li>Arrangement by Schulz-Evler,An die schöne blaue Donau</li>
					<li>Arrangement by Godowski,Fledermaus</li></ul>
					</td>
					<td>      <?php  photorightnolink("m.Richard_Strauss.jpg","Richard%20Strauss-Photo:Wikipedia");?>
						</td>
								   </tr>
								   <tr>
								   <td><a href="http://en.wikipedia.org/wiki/Karol_Szymanowski"><h3>K.Szymanowski</h3></a>
					<ul>
					<li>9 Preludes Op. 1</li></ul>
					</td>
					<td>  <?php  photorightnolink("m.Karol_Szymanowski.jpg","Karol%20Szymanowski-Photo:Wikipedia");?>
					</td>
								   </tr>
								   <tr>
								   <td><a href="http://en.wikipedia.org/wiki/Pyotr_Ilyich_Tchaikovsky"><h3>P.I.Tchaikovsky</h3></a>
					<ul>
					  <li>The Seasons, Op. 37 a</li>
					  <li>Doumka Op. 59</li>
					</ul>
					</td>
					<td><?php  photorightnolink("m.Pjotr_I._Tschaikowski.jpg","Peter%20I%20Tschaikowski-Photo:Wikipedia");?>
					</td>
								   </tr>
								   <tr>
								   <td><a href="https://en.wikipedia.org/wiki/Carl_Maria_von_Weber"><h3>C.M. von Weber</h3></a>
					<ul>
					<li>Sonate Nr. 2 As-Dur</li></ul>
					 </td>
					 <td><?php  photorightnolink("m.Carl-Maria-Von-Weber.jpg","Carl-Maria-Von-Weber by After Ferdinand Schimon");?>
					</td>
								   </tr>
								   <tr>
								   <td><a href="http://en.wikipedia.org/wiki/Alexander_von_Zemlinsky"><h3>A.Zemlinski</h3></a>
					<ul>
					<li>Rural Dances Op. 1 (from 2001)</li>
					</ul>
					</td>
					<td><?php  photorightnolink("m.Zemlinsky.jpg","Alexander%20von%20Zemlinsky-Photo:Wikipedia");?>
					</td>
			   </tr>
			   </table>
					
</div>
</div>
<div class="row">
		<div class="col-sm-12">
 <?php 	print foot();
				?>
                    </div>
                </div>
            </div>
        </div>        <!-- /#page-content-wrapper -->
    </div>    <!-- /#wrapper -->
	</body>
</html>