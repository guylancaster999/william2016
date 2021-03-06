<?php 	 
require "funcz/functionz.php";
print head("en","Concerts");
?>
<body>
    <div id="wrapper">
      <div id="sidebar-wrapper">
            <?php print  menu("en","Concerts","concert_e.php","concert.php","concert_ch.php");	?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid">
			    <?php topRight();?>
                <div class="row rgp">
                 <div class="col-lg-12"> 
                      <h2>Concerts</h2>
              </div>
          </div>
          <div class="row rgp">
              <div class="col-lg-12 box">2017</div>
			</div>	
		    <div class="row rgp">
				<div class="col-md-2 boldTxt">Sat 9th<br/>Sun 10th<br/>September<br/>5pm</div>
				<div class="col-md-8">Concert at <a href="http://www.elfenaupark.ch/">Elfenau Park</a>, Bern, Switzerland.
				<ul>
					<li>J.S.Bach Goldberg Variations</li>
				</ul>
				</div>
				<div class="col-md-2">
				   <?php photorightnolink("elfenau.jpg" ,"Elfenau Park");?>
				</div>
			</div>
				<div class="row rgp">
              <div class="col-lg-12 box">2016</div>
			</div>	
  		    <div class="row rgp">
				<div class="col-md-2 boldTxt">Fri 11th March</div>
				<div class="col-md-8"><b>Concert at <a href="http://www.rehaklinik-sonneneck.de">Haus Sonneneck</a></b>
					<br/>Kanderner Strasse 18, 79410 Badenweiler, Breisgau-Hochschwarzwald, Baden-Württemberg, Germany. 
					<ul>
						<li>F.Schubert, Impromptu G flat major Op.90 No.3, Impromptu B flat major Op.142 No.3</li>
						<li>A.Scrjabin, Sonata No.2  Op.19</li>
						<li>F.Chopin, Sonata No.2 B flat minor Op.35</li>
					</ul>
				</div>
				<div class="col-md-2"> 
					<?php photorightnolink("sonneneck.jpg" ,"Haus Sonneneck" );?>
	      	</div>
		</div>
	 	<div class="row rgp">
    		<div class="col-md-2 boldTxt">Sun 20th March</div>
			<div class="col-md-8"> <b>Concert, Stiftung Beatus, Sigriswil, Switzerland </b>
					<ul>
						<li>A.Scriabin Sonata Nr.2 Op.19</li>
						<li>S.Rachmaninoff Prelude in D major Op.23 No.4</li>
						<li>F.Schubert Impromptu G flat major Op.90 No.3</li>
						<li>F.Chopin Sonata Nr.2 in B flat minor Op. 35</li>
					</ul>
					</div>
						<div class="col-md-2">
				<?php photorightlinked("stbeatus.jpg","Stiftung St.Beatus","http://www.stbeatus.ch/");?>
						</div>
			</div>
			<div class="row rgp">
				<div class="col-md-2 boldTxt">Wed 25th May<br/>6pm</div>
				<div class="col-md-8">
						<b>Concert In the <a href="http://balamus.ru">Balakhna Museum of History and Art</a>, Nizhny Novgorod, Russia. </b> 
						<ul>
						<li>F.Chopin   Sonata Nr.2 in B flat minor	Op. 35</li>
						<li>S.Rachmaninoff	Polka de W.R.</li>	
						<li>F.Schubert  Impromptu Ges-Dur 	Op.90 Nr.3, Impromptu B-Dur	Op.142 Nr.3</li>
						<li>A.Skrjabin Sonata No.2	Op.19 </li>
						</ul>
					</div>
					<div class="col-md-2">
					    
     					<?php photorightlinked("russiaconcert_240.jpg","Balakhna Museum für Geschichte und Kunst","http://balamus.ru");?>
						</div>
					</div>
					<div class="row rgp">
						<div class="col-md-2 boldTxt">Sun<br/>July 3rd<br/> 11 a.m.</div>
						<div class="col-md-8"><b>Concert at the Elztalmuseum, Waldkirch </b>
						<ul>
							<li>L.van Beethoven Sonata E flat major Op.31 No.3</li>
							<li>F.Chopin 3 Mazurkas Op.59</li>
							<li>R.Schumann Études Symphoniques Op.13</li>
						</ul>
						</div>
						<div class="col-md-2">
    						<?php photorightnolink("etzal_240.jpg","Etzal Museum");?>
							</div>
						</div>
						<div class="row rgp">
						<div class="col-md-2 boldTxt">
						  Sun 10th Juli <br/>11 am</div>
						  <div class="col-md-8">
						  	<b>Duo recital  Piano and Violin</b>
							<br/>
							<a href="http://www.friedrich-husemann-klinik.de/"><b>Friedrich-Husemann Klinik</b></a>,Friedrich-Husemann-Weg 8, 79256 Buchenbach, Freiburg, Germany
						<Br/>
						William Cuthbertson—piano, Carina Kaltenbach-Schonhardt-violin	
						<UL>
							<LI>L.van Beethoven, 1st mov, Sonata for violin und piano No.5  F major, Op. 24</LI>
							<LI>F.Schubert, Impromptu G flat major Op.90 No.3   (piano)</LI>
							<LI>Cesar Franck,    Sonata for violin and piano A major</LI>
							<LI>Antonin Dvorak,  Humoresque</LI>
							<LI>William Cuthbertson,   Butterfly Bounce No.1</LI>
							<LI>Fritz Kreisler, Schön Rosmarin</LI>
						</UL>
						</div>
						<div class="col-md-2">
						<?php photorightnolink("duo.jpg","William Cuthbertson, Carina Kaltenbach");?>
						</div>
					</div>
						<div class="row rgp">
						<div class="col-md-2 boldTxt">
							Wed<br/>August 31st <br/>5.30pm
						</div>
						<div class="col-md-8">
					 <b>Peter Feuchtwanger Memorial concert, Part 1</b>
					 <br/>
	 				To honour the legacy of the pianist, pedagogue and composer Peter Feuchtwanger, many of his former students will perform in two concert events.
					<br>
					Rossini's "Semiramide" Overture, arr. Czerny, for 16 pianists on 8 pianos.</b>
					 <br/>
					At <A href="http://www.lepthien.de/">Pianohaus Lepthien</a>  ‪Schwarzwaldstraße 9A, 79117 Freiburg im Breisgau‬. 
					Entry free. 
					For all those who are interested in attending both events, there will be a direct bus transfer organised (from Freiburg to Waldkirch and back, for around 6€ each way).
                    To book transport, please email: <A href="mailto:feuchtwanger-memorial@email.de">feuchtwanger-memorial@email.de</a>.
					</div>
				<div class="col-md-2">
	              <?php photorightnolink("pianos.png" ,"Pianos");?>
		</div>
		</div>
				<div class="row rgp">
						<div class="col-md-2 boldTxt"><a name="31st" id="31st"></a>
							Wed<br/>August 31st<br/>7.30pm
						</div>
						<div class="col-md-8"><b>Peter Feuchtwanger Memorial concert, Part 2</b>					<br/>At the Baroque room,  Elztalmuseum, Waldkirch.
<ul>
			<li>Joseph Haydn, Adagio F Major Hob. XII/9 - <a href="http://susanne-von-laun.de">Susanne von Laun</a></li> 
			<li>Franz Xaver Mozart, Andantino A Major FXWM:41 - <a href="http://susanne-von-laun.de">Susanne von Laun</a></li>
			<li>Joseph Haydn, Sauschneidercappriccio - Robert Bärwald </li>
			<li>Peter Feuchtwanger, Variations - <a href="https://www.facebook.com/lennart.speer">Lennart Speer</a></li>
			<li>Franz Schubert, Walzes D779 No.1 (1823), Nr.2 Ländler D 366 Nr.3,4 - Agnes Joshi</li>
			<li>Jean Sibelius, The Fir, Op.75 Nr.5  - Agnes Joshi</LI>
			<LI>Peter Feuchtwanger, Tariqa No.2 - <a href="https://www.youtube.com/watch?v=-OONZvd7X6k">Christian Löschke</a></LI>
			<LI>J.S. Bach, Andante from Piano Concerto in F minor BWV 1056 - <a href="https://www.facebook.com/daniel.kasparian">Daniel Kasparian</a></LI>
			<li>Friedrich Kuhlau, Rondo C Major on Themes from Mozart's "Don Giovanni" - <a href="https://www.facebook.com/daniel.kasparian">Daniel Kasparian</a></li>
			<li>Peter Feuchtwanger, Study in the Eastern Idiom  Op.3 (Macedonian and Bosnian)- <a href="http://www.masako-kamikawa.com/">Masako Kamikawa</a>.</li>
			<li>Elisabeth Jaquet de La Guerre, Prelude-Allemande-Menuet-Gavotte aus der Suite A-Moll - Anna Roth </LI>
			<LI>Felix Mendelssohn, Bartholdy Fantasia in F sharp minor Op.28 Con motto Agitato, Allegro con Moto, Presto - Manfred Seewann </LI>
			<LI>Ina Birk, Soniyage - <a href="http://www.ina-birk-klavier.de/">Ina Birk</a></LI>
			<LI>Giacinto Scelsi, Rotativa - <A href="https://en.wikipedia.org/wiki/Marianne_Schroeder">Marianne Schroeder </a>.</LI>
			<LI>Frederik Chopin, Nocturne in C sharp minor, Op.post - Nina Attorf </LI>
			<LI>Louis Moreau Gottschalk, La Gallina Op.53, Ojos Criollos, Dance Cubaine	Op.37 - <a href="http://www.blido.de/">Stefan und Fedra Blido</a> </LI>
			<li>Serge Bortkiewicz, Etüde Des-dur Op. 15, Nr. 8 - Klaus Cutik </li>
			<LI>Franz Liszt, Freudvoll und Leidvoll - <a href="http://www.mezzo-soprano-sophia-grech.co.uk/">Sophia Grech</a>, mezzosoprano und <a href="http://sanjastefanovic.instantencore.com/">Sanja Stefanovic</a>, Klavier </LI>
			<LI>Benjamin Vanden Heuvel, From 4 Short Piano Pieces No.3,4 Dirge and American Suite, with mprovisation - <a href="http://sanjastefanovic.instantencore.com/">Sanja Stefanovic </a></LI>
			<LI>César Cui, Causerie - William Cuthbertson</LI>
			<LI>Franz Liszt, Consolation No.3 in Des Dur - <a href="https://www.facebook.com/jorritvdham">Jorrit van den Ham</a></LI>
			<LI>L. M. Gottschalk, Souvenirs d'Andalousie - <a href="https://www.facebook.com/jorritvdham">Jorrit van den Ham</a></LI>
			<li>Franz Schubert, Polonaisen D599 No. 1,2 - <a href="https://de.wikipedia.org/wiki/Paul_Cibis">Paul Cibis</a> und <a href="https://de.wikipedia.org/wiki/Sophie-Mayuko_Vetter">Mayuko Vetter</a>  </li> 
    		<LI>Manuel de Falla, Fire Dance from The Love Spell - <a href="http://www.achimclemens.de/">Achim Clemens</a></LI>
			<LI>Shura Cherkassky, Prelude Pathétique  - <a href="http://www.achimclemens.de/">Achim Clemens</a></LI>
			<LI>Ludwig van Beethoven, 6 Bagatellen Op.126, No.1,2,3 - <a href="https://de.wikipedia.org/wiki/Jean-Jacques_D%C3%BCnki">Jean Jaques Dünki</a></LI>
		 	<LI>Robert Schumann, Evening - Andrew Kraus</LI>
			<LI>Adolph von Henselt, Wiegenlied  - Andrew Kraus</LI>
			<LI>Franz Schubert, arr. Leopold Godowsky, Wiegenlied - Andrew Kraus</LI>
			<LI>David Saperton, Zephyr - Andrew Kraus</LI>
			<LI> E.Granados - Andaluza and Allegro de Concerto - <a href="https://www.facebook.com/emma.stratton.39"> Emma Stratton</a></LI>
		
			</ul>		
 					Tickets: 12&euro; / 10&euro;(conc) / 9&euro;(children). 
	 				</div>
		           <div class="col-md-2">
	              	<?php photorightnolink("Peter_Feuchtwanger_250.jpg","Peter_Feuchtwanger");?>
		          </div>
            	</div>
			</div>
			<div class="row rgp">
					<div class="col-lg-12 box">2015</div>
				</div>
				<div class="row rgp">
						<div class="col-md-2 boldTxt">
							 Fri March 13<br/> 8.30pm 
						</div>
						<div class="col-md-8">
		 					<strong><A href="http://www.klappe11.de/">Klappe11 : CHARLEY CHASE / LIMOUSINE LOVE At the Piano: William Cuthbertson</A></strong>
						<br/>
						Limousine Love One of the best short silent films ever with Charley Chase in the lead role! Chase was not an easy slapstick comedian, but coined a form of situation comedy in which he usually appeared as a shy, nervous average citizen or as a young daredevils. So also LIMOUSINE LOVE is hilarious: suddenly discover Chase has on the way to his own wedding that a naked, totally unknown woman is in the back seat of his car ... Admission: Adults € 5.50. At Kommunales Kino, Fabrikstrasse 16, 79183 Waldkirch, Germany
						</div>
						<div  class="col-md-2">
						 <?php photorightlinked("klappe11.jpg","Klappe11 Festival","http://www.klappe11.de/");?>
						</div>
					</div>
					<div class="row rgp">
						<div class="col-md-2 boldTxt">
							Sat 28th<br/>Sun 29th March<br/> 5pm
						</div>
						<div class="col-md-8">
						<ul>
						 <li>Beethoven Sonata E flat major "Les Adieux" Op.81a</li>
						<li>Chopin Tarantella A flat major Op.43</li>
						<li>Granados The maiden and the nightingale ( Goyescas)</li>
						<li>Glinka, arr. M.Balakirew "The lark"</li>
						<li>F.Liszt Verdi Rigoletto Fantasy</li>
						<li>A.Skrjabin (1872-1915) Poème F sharp major Op.32 No.1, Sonata No.4 Op.30</li>
						</ul>
						 Concert Hall, Wohnark Elfenau, Elfenauweg 68, 3006 Bern, Switzerland 
						</div>
					</div>
					<div class="row rgp">
						<div class="col-md-2 boldTxt">
							Sun 19th April <br/> 11 am
						</div>
						<div class="col-md-8">	
						Concert including:
						<ul>
						<li>Chopin 24 Preludes Op.28</li>
						<li>Schriabin 24 Preludes Op.11</li>
						</ul>Orgelbauersaal, Gewerbekanal 1, Waldkirch, Germany. 
						</div>
					<div class="col-md-2">	
    					<?php photorightlinked("orgelbauersaal_240.jpg" ,"orgelbauersaal","http://bz-ticket.de/orgelbauersaal-waldkirch-waldkirch");?>
						</div>
					</div>
					<div class="row rgp">
						<div class="col-md-2 boldTxt">
							Sun 19th September<br/>7.30pm
					</div>
					<div class="col-md-8">
						Benefit Concert donated for the renovation of the community center
						<br/>
						With:<ul>
						<li>William Cuthbertson (Piano)</li>
						<li>Heinz Vogel (Piano)</li>
						<li>Carina Kaltenbach-Schonhardt (Violin)</li>
						<li>Nicole Friedrich (Violin)</li>
						<li>Katharina Weeber (Viola)</li>
						<li>Carolina Berghorn (Violoncello) </li>
						<li>Michael Bornhak (Double Bass) </li>
						<li>Frauke Hoffmann (Mezzosoprano)</li>
						<li>Fritz Schätzle (Baritone)</li>
						<li>Ursula Disch (Acordion and French Chansons)</li>
						</ul>
						At the Catholic community center, Kirchplatz, 79183 Waldkirch.
						Eintritt frei, Spenden willkommen zu heissen.
						</div>
						<div class="col-md-2">
							<img class="pic" src="img/KatholischesGemeindezentrumWaldkirch_240.jpg" alt="Katholisches Gemeindezentrum Waldkirch">
					</div>
					</div>
					<div class="row rgp">
	 				<div class="col-md-2 boldTxt">
						Mon 5th October<br/>8pm
					</div>
					<div class="col-md-8">
					<b>The musician Alexander Scriabin (1871-1915) Concert and lecture</b>
					<br/>
					Catholic community center , Church Square 7, Waldkirch. 
					<br/>
					At the Piano: William Cuthberson, Waldkirch; 
					<br/>
					Introduction: Dr. Ulrich Ruh, a journalist from Elzach.<br/>
					<br/>
						Music: inter alia, Sonata No.5 and 6.
					<br/>
						Entry 3 Euros
					</div>
 				</div>
            	<div class="row rgp">
						<div class="col-md-2 boldTxt">
							Sun October 25th<br/>11 am
						</div>
						<div class="col-md-8">
					   <b>The musician Alexander Scriabin (1871-1915) Concert and lecture</b>
					   <br/> Catholic community center , Church Square 7, Waldkirch. At the Piano: William Cuthberson, Waldkirch; 
						Concert including:
						<ul>
						<li>Alexander Scriabin 
						  <ul class="ulsqr" >
						<li>Etude E major Op.8 Nr. 5</li>
						<li>Etude G sharp minor Op.8 Nr.9</li>
						<li>Etude B flat minor Op.8 Nr.11</li>
						<li>Etude D sharp minor Op.8 Nr.12</li>
						<li>Etude F sharp major Op.42 Nr.4</li>
						<li>Etude C sharp minor Op.42 Nr.5</li>
						<li>Etude D flat major Op.42 Nr.6</li>
						<li>Etude F minor Op.42 Nr.7</li>
						<li>Sonata No.2 Op.19</li>
						<li>Sonata No.4 Op.30</li>
						</ul>
						</li>
						<li>Sergei Rachmaninoff 
						<ul class="ulsqr" >
						<li>Polka de W.R.</li>
						<li>Prelude D major Op.23 Nr.4</li>
						<li>Prelude G minor Op.23 Nr.5</li>
						<li>Prelude C minor Op.23 Nr.7</li>
						<li>Etude E flat major Op.33 Nr.7</li>
						<li>Etude C minor Op.39 Nr.1</li>
						<li>Etude E flat minor Op.39 Nr.5</li>
						<li>Etude D minor Op.39 Nr.8</li>
						</ul>
						</li>
						</ul> 
						<a href="http://www.elztalmuseum.de/">Elztal Museum</a>, Kirchplatz 14, D-79183 Waldkirch, Germany. 17&euro;, 15&euro; (concession), 9&euro; (children)  
						</div>
						<div class="col-md-2">	
						   <a title="Skrjabin_Alexander" href="#">
						   <img src="img/Skrjabin_Alexander_240.jpg" alt="Skrjabin,Alexander">
						   </a>
						</div>
					</div>
					<div class="row rgp">
						<div class="col-md-2 boldTxt">
							Sun 27th December<br/>7.30pm
						</div>
						<div class="col-md-8">
							<a href="https://www.facebook.com/events/548766628633166/">
								Poetry and Piano
							</a>
							<br/>
							Hymne an die Nacht by Novalis, plus piano pieces by Chopin, Skrjabin and Schumann.
							With Martin Lunz (Spoken Word) and William Cuthbertson (Piano).
							At <a href="http://www.rehaklinik-sonneneck.de">Haus Sonneneck</a>, 
							Kanderner Strasse 18, 79410 Badenweiler, Breisgau-Hochschwarzwald, Baden-Württemberg, Germany. 
							Tickets 12 &euro;.
						</div>
						<div class="col-md-2">	
						    <a title="Martin Lunz+William%20Cuthbertson" href="#">
								<img src="img/martinwilliam_240.jpg" alt="Martin Lunz+William%20Cuthbertson"/>
							</a>
						</div>
				</div>
				<div class="row rgp">
					<div class="col-lg-12 box">2014</div>
				</div>
				<div class="row rgp">
					<div class="col-md-2 boldTxt">
						Sun 26th January<br/>10.30am
					</div>
					<div class="col-md-8">
						<strong>New Year's Concert with William Cuthbertson and Gao Weimo</strong>
						<br/>
						J.S.Bach, 3 Suites C major(Cello)<br/>
						Cui, Causerie (Piano)
						<br/>
						Liu Zhuang, Romantic piece 
						<br/>
						Xu Xiyi, lullaby (Piano &amp; Cello) <br/>
						W.Cuthbertson. 3 Little Pieces (Cello &amp; Piano)
						<br/>
						F. Chopin, Nocturne in F major Op.15 No.1.  (Piano)<br/>
						F. Chopin, Nocturne in F sharp major  Op.15 No.2  (Piano)<br/>
						P.Tchaikovsky. Rococo Variations Op.33<br/>
						&euro;10 Tickets now available from Jäger und Brommer,  Gewerbekanal 1, Waldkirch. Tel: 07681 3927 (They can be ordered now and picked  up just before  the concert) or from  Buchhandlung Augustiniok, Langestr. 25-29,  Waldkirch. Tel: 07681 409041. (must be picked up on the morning of 25th  January at the latest)
						<br/>
						Orgelbauersaal, Gewerbekanal 1, 79183 Waldkirch, Baden-Württemberg, Germany
						</div>
						<div class="col-md-2">
						 <a title="Gao%20Weimo+William%20Cuthbertson" href="#">
						  <img src="img/William_Weimo_Cello_240.jpg" alt="Gao%20Weimo+William%20Cuthbertson">
						  </a>
						  
						</div>
					</div>
				<div class="row rgp">
					<div class="col-md-2 boldTxt">
						Thu 30th January<br/> 8pm
					</div>
					<div class="col-md-8"> 
					   <strong>Gao Weimo+William Cuthbertson
						Eurythmy Hall Concert</strong><br/>
						C.Cui : &quot;Causerie&quot;    (Piano)
						<br/>
						Liu Zhuang : Romantisches Stück    (Piano und Cello),  Improvisation 1 (Piano und Cello)
						<br/>
						W.Cuthbertson: Nocturne (Piano) + Walzes (Piano) +3 Short Pieces(Piano+Cello) +Improvisation 2 (Piano + Cello)
						<br/>
						Xu Xiyi :Lullaby  (Piano + Cello)
						<br/> 
						F.Chopin: Nocturne F Major  (Piano) Op.15 Nr.1+  Nocturne F# Major (Piano) Op.15 Nr.2
						<br/> 
						P.Tschaikowski : Rococo Variations (Piano + Cello) Op.33
						<br/>
						<a href="https://www.lahnhoehe.de/start/">Klinic lahnhohe</a>,Am Kurpark 1, 56112 Lahnstein, Germany. Entry Free
						</div>
					</div>
				<div class="row rgp">
					<div class="col-md-2 boldTxt">
                        Sun 6th April
					</div>
					<div class="col-md-8">
						<strong>Trio Recital</strong><br/>
						With:<ul>
						<li>Margriet van Reisen, Mezzo-soprano; </li>
						<li>Antoine Billet, Cello;  </li>
						<li>William Cuthbertson, Piano</li></ul>
						Elztalmuseum, Waldkirch, Germany.
						Admission: &euro;17 / &euro;15 / Children &euro;9  
						<ul>
						<li>Joseph Glaeser - Four Songs</li>
						<li> Dmitri Shostakovich - Song of Ophelia </li>
						<li>Peter I. Tchaikovsky - Valse sentimental Only he who knows longing </li>
						<li>Alexandr Dargomiskji - Ana Pridjot</li>
						<li> Johannes Brahms - My love is green, down there in the valley, Och Mod'r, ich well 'n Ding hah'n </li>
						<li> Paul Graener - Three Songs 'A voice and  cello music' </li>
						<li>Felix Mendelssohn - Songs without Words </li>
						<li>Alphons Diepenbrock - Berceuse</li>
						<li> Jules Massenet - Elegy</li></ul>
					</div>
					<div class="col-md-2">
					<a title="Antoine Billet" href="#">
		<img class="pic" src="img/cello.jpg" alt="Antoine Billet" width="240">
						</a>
						<br/>
	                   <a title="Margriet%20van%20Reisen" href="#">
		<img class="pic" src="img/margrietvanreisen_240.jpg" alt="Margriet%20van%20Reisen,%20Mezzo-soprano">
					   </a>
						</li>
					</div>
					</div>
				<div class="row rgp">
					<div class="col-md-2 boldTxt">
     					 Sun 1st June<br/>3pm
				    </div>
					<div class="col-md-8">
					<strong>Reading from <a href="https://www.facebook.com/events/405564799585463/" title="Bulgarian Impressions">Bulgarian Impressions</a> - an adventurous journey through an unknown country - Helmut Matt</strong><br/> 
						Live Music with William Cuthbertson and Carina Kaltenbach: Dvorak Humoresque, Tchaikovski Sérénade melancolique and 2 Bulgarian Folk Songs, champagne reception.
						<br/>
						Reiseb&uuml;ro am Markt/Fiore, Lange Straße 65,Waldkirch, Germany. <br/>
						Admission free, donations for the musicians are welcome
					</div>
					<div class="col-md-2">
                        <a title="Carina Kaltenbach" href="#">
						<img src="img/CorinaKaltenbach_240.jpg" alt="Carina Kaltenbach">
						</a>
					 </div>		
				</div>		
				<div class="row rgp">
					<div class="col-md-2 boldTxt">
						Tue 24th June<br/> 8pm
					</div>
					<div class="col-md-8">
						<a href="https://www.facebook.com/#!/events/532745816825705/"  title="Mozart to Bob Dylan"><strong>Mozart to Bob Dylan</strong></a>
						<br/>
						Waldkirch musicians sing and play music from "Mozart to Bob Dylan" for victims of the fire disaster in Valparaiso with Wolfgang Brommer, William Cuthbertson, Stephan Ronkov, Frauke Hofmann, Carina Kaltenbach, Manuel Torres, Adrian Oswalt and Markus Trenkle.
						<br/>
						Stadtkapelle Waldkirch, Lange Strasse, Germany
					</div>
					<div class="col-md-2">
						<a href="https://www.facebook.com/#!/events/532745816825705">
						<img class="pic" src="img/benefitconcert_240.jpg" alt="Mozart to Bob Dylan">
						</a>
					</div>
					</div>
				<div class="row rgp">
					<div class="col-md-2 boldTxt">
     					Sun 13th July  11am
					</div>
					<div class="col-md-8">
						<strong>Piano Recital with William Cuthbertson </strong><br/>
						<ul>
						  <li>L.van Beethoven,	Sonate E-flat  major  Op.81a "<em>Les Adieux</em>"	</li>
						   <li>F:Chopin, Berceuse D-flat  major Op.57, Tarantella A-flat  major  Op.43		</li>
						 <li>F.Liszt, Verdi Rigoletto Paraphrase	</li>
						 <li>Glinka, arr. M.Balakirew	<em>"The  Lark"</em></li>
						 <li>E.Granados, <em>The  Maiden and the Nightingale</em> (Goyescas) </li>
						 <li>J.Brahms,	Variations on a Theme of Paganini Op.35 Book 1</li>
						</ul> 
						<A href="http://www.elztalmuseum.de/">Elztalmuseum</A>, Kirchplatz 14, Waldkirch, Germany.
						Entry: 17&euro;/15&euro; Children 9&euro;.
						</div>
					<div class="col-md-2">
						<a title="William Cuthbertson at piano" href="#">
							<img class="pic" src="img/williamatpiano_240.jpg" alt="William at piano">
						</a>
						</div>
				</div>
				<div class="row rgp">
					<div class="col-md-2 boldTxt">
                        Sun 20th July<BR/>
						2pm</div>
						<div class="col-md-8">
						<A href="https://www.facebook.com/events/418229254981777/"><strong>Open Air Concert with the  Waldkircher Tanzrythmiker (Dance Rhythm Orchestra)</strong></a> <br/>
						At Stadtrainsee, Waldkirch. 
						The Orchestra will play dance music from the 1930s to the 60s.
						</div>
				<div class="col-md-2">
				       <a href="https://www.facebook.com/events/418229254981777/" title="Open Air Concert">
	   				      <img class="pic" src="img/openair2014_240.jpg" alt="Open Air Concert">
					   </a>
		 			</div>
				</div>
				
				<div class="row rgp">
					<div class="col-md-2 boldTxt">
						Mon 21 July<br /> 
						8pm</div>
					<div class="col-md-8">
						<a href="https://www.facebook.com/events/747215315337186"><strong>Wilhelm Busch Evening with William Cuthbertson and Martin Lunz</strong></a>
						<br/>
						Zeltkultur, (the circus tent in the school yard), Elzach, Germany. Advance tickets: bookstore Merkle. Entry: 8/7&euro;.
					</div>
					<div class="col-md-2">
						<a title="Wilhelm Busch" href="https://www.facebook.com/events/747215315337186">
							<img class="pic" src="img/WilhelmBuschAbend_240.jpg" alt="Wilhelm%20Busch%20Evening">
						</a>
					</div>
					</div>
					<div class="row rgp">
						<div class="col-md-2 boldTxt">
							Mon 4th August<br/>8.30pm 
						</div>
						<div class="col-md-8">
							<strong>Informal Concert</strong>
							<br/>
							 at <a href="http://theislayhotel.com/" title="Islay Hotel">Islay Hotel </a>
							 (Sponsor) 
							 <br/>
							Charlotte Street, Port Ellen, Isle of Islay, Scotland, PA42 7DF
						</div>
					<div class="col-md-2">
				<img class="pic"  src="img/islayhotel.jpg" alt="iSLAY hOTEL">
						  	</div>
				</div>
	
				<div class="row rgp">
						<div class="col-md-2 boldTxt">
							Wed 6th. August<br/>12 noon
						</div>
						<div class="col-md-8">
						<strong>Informal Concert</strong>
						<br/>
						at <a href="http://www.ardbeg.com/ardbeg/distillery">Ardbeg Distillery</a> 
						(Sponsor) 
						<br />
						Port Ellen, Islay, Argyll, Scotland, PA42 7EA</div>
						<div class="col-md-2 boldTxt">
		<a href="http://www.islay-gaelic.net">
						  <img class="pic"  src="img/islaycentre.JPG" alt="Islay Centre">
						  </a>
				 </div>
		</div>	
				<div class="row rgp">
						<div class="col-md-2 boldTxt">
							Fri 8th August<br/>7.30pm
						</div>
						<div class="col-md-8">
						<strong> Concert with William Cuthbertson and Fiona Middleton ("Fiona of the seals") , Violin, Vocals</strong>
						<br/>
						Works by Franck, Kreisler, Elgar, Faur&eacute;, Liszt, Cuthbertson and Middleton<br/>
						<a href="http://www.islay-gaelic.net/" title="Islay Gaelic Centre">Islay Gaelic Centre (Ionad Chaluim Chille Ìle)</a>, 
						Bowmore,PA43 7LN, Islay, Scotland.<br/>
						Entry: &pound;10</div>
					</div>
				<div class="row rgp">
					<div class="col-md-2"><b>Thu 16th October<br/>8pm</b> 
					</div>
					<div class="col-md-8"> 
					<a href="http://kulturwoche-waldkirch.de/programm.php"><strong>Poetry and Piano</strong></a>
						<br/>
						&quot;Time - eternity - Transience: A Journey&quot; / Litera theater, Martin Lutz &amp; William Cuthbertson Orgelbauersaal, Gewerbekanal 1, Waldkirch. Doors open 19:30 | Admission 10 €. A collage of texts to &quot;time-eternity -Transience&quot; paired with piano music by and with William Cuthbertson opens the listeners new spaces, also by connecting the recitations of the actor Martin Lutz. A voice and sound journey This performance is part of the <a href="http://kulturwoche-waldkirch.de/programm.php">Waldkirch Culture Week</a>
						</div>
						<div class="col-md-2">
							<a title="Wilhelm Busch" href="#">
							<img src="img/WilhelmBuschAbend_240.jpg" alt="Wilhelm Busch Abend">
							</a>
									</div>
						</div>
				<div class="row rgp">
						<div class="col-md-2 boldTxt">
							Sun 19th October<br/> 11am
						</div>
						<div class="col-md-8">
						<strong>Musical love time travel &quot;Love through the Ages&quot; with duo <a href="http://www.frauke-hofmann.de">Frauke Hofmann</a> (Mezzo-soprano), and William Cuthbertson (Grand Piano)</strong>
						<br/>
						At Orgelbauersaal Gewerbekanal 1, Waldkirch. The mezzo-soprano Frauke Hofmann and the concert pianist William Cuthbertson provide the theme of love in the musical world over the centuries. Has this changed over time? The journey from the Renaissance to modern times will be presented, including songs, arias, and piano music by Dowland, Bizet, Rachmaninov, Weil and Yiddish Tango, illuminated by music, complemented by explanations, which demonstrates  love.through the ages in a great program, including  &quot;Habanera&quot; from Carmen and &quot;Liebestraum&quot; by Liszt. 
						This performance is part of the <a href="http://kulturwoche-waldkirch.de/programm.php">Waldkirch Culture Week</a>
				</div>
					<div class="col-md-2">
						<a title="" href="http://www.frauke-hofmann.de">
						<img class="pic" src="img/hoffman_240.jpg" alt="Frauke Hofmann">
						</a>
					</div>
				</div>				
				<div class="row rgp">
					<div class="col-lg-12 box">2013</div>
				</div>
				<div class="row rgp">
						<div class="col-md-2 boldTxt">
				            <b>July</b>
						</div>
						<div class="col-md-8">
						F.Schubert, Sonata in B flat major  D 960<BR/>
						J. Brahms (1833-1897), 6 Piano Pieces.
						<br/>
						Waldkirch, Baden-Württemberg,
						Germany
						</div>
				</div>
				<div class="row rgp">
					<div class="col-md-2 boldtxt">
						<b>September 28th<br/>September 29th <br/>
						5pm</b>
					</div>
					<div class="col-md-8">
						Piano recital : Schubert Sonate in B flat D 960
						<br/>
						Brahms 6 Piano Pieces Op.118
						<br/>
						Entry free, collection.<br/>
						Elfenau Park, Bern, Switzerland.Elfenauweg 50, 3006 Bern.
					</div>
					</div>
					<div class="row rgp">
					<div class="col-md-2 boldtxt">
						October 10th<br/>8pm
					</div>
						<div class="col-md-8">
						<a href="https://www.facebook.com/events/574251399303080">Poems and piano</a>
						<br/>
						Poems by Wilhelm Busch. Music by William Cuthbertson. Entry free, collection.
						<br/>
						Haus Sonneneck, Badenweiler.
						</div>
					<div class="col-md-2">
						<a href="https://www.facebook.com/events/574251399303080">
						<img class="pic" src="img/poemsandpiano_200.jpg" alt="poems and piano">
						</a>
						</div>
					</div>
					<div class="row rgp">
						<div class="col-md-2 boldtxt">October 12th <br/>
						 7pm
					</div>
					<div class="col-md-8">
					   <a href="https://www.facebook.com/events/574251399303080">Poems und piano</a>
						<br/>
						Poems by Wilhelm Busch<br/>
						Music by William Cuthbertson,
						Tickets &euro;10 <br/>
						Orgelbauersaal, Gewerbekanal 1, Waldkirch. Baden-Württemberg,Germany</div>
					</div>
					<div class="row rgp">
						<div class="col-md-2 boldtxt">&nbsp;Wed 6th November <br/>8pm
						</div>
						<div class="col-md-8">
						<a href="https://www.facebook.com/events/233043576858233/">Lecture on Wagner and Verdi (Ecumenical Educational Institute)</a>
						<br/>
						Dr. Ulrich Ruh (Herder Korespondenz) <br />
						 William Cuthbertson plays Liszt / Wagner Isolde's Love Death and Liszt / Verdi Rigoletto. 
						 <br/>
						 Catholic Community Centre, Church Square 7,Waldkirch Baden-Württemberg.
						Germany</div>
					</div>
				<div class="row rgp">
					<div class="col-lg-12 box">2012</div>
				</div>
				<div class="row rgp">
						<div class="col-md-2 boldTxt">
					       July</div>
						<div class="col-md-8">
						Beethoven Sonata Bflat major Op.106, "Hammerklavier"<br />
						Works by Debussy<br />
						Balakirew, "Islamei" <br/>Waldkirch
					</div>
				</div>
				<div class="row rgp">
					<div class="col-md-2 boldTxt">
						July</div>
					<div class="col-md-8">Hudié Duo with Sun Yiqi (Violin)<br/>
						Herbolzheim	</div>
					</div>
				<div class="row rgp">
						<div class="col-md-2 boldTxt">
                            October
						</div>
						<div class="col-md-8">
						Opening Concert of the Waldircher Kulturwochen (Arts Festival)<br/>
						 Hudié Duo with Fiona Middleton (Violin)<br/>
						 Works by Brahms, Franck, Cuthbertson and Middleton.
						  </div>
                      </div>
				<div class="row rgp">
						<div class="col-md-2 boldTxt">
							 October
					</div>
					<div class="col-md-8">
						Waldircher Kulturwochen (Arts Festival)<br/>
						Gershwin with the Waldkirch  Brass Ensemble. 
						<br/>Waldkirch	Baden-Württemberg,
						Germany.
					</div>
					<div class="col-md-2">
						<img class="pic"  src="img/NeuesBild_200.jpg"  alt="Waldircher  Kulturwochen"/>
					</div>
				</div>
				
				<div class="row rgp">
						<div class="col-md-2 boldTxt">
                            November 
						</div>
						<div class="col-md-8">
						Tour with Fiona Middleton	Forest Row , inluding the premiére of the Winnie-the-Pooh Suite for violin solo (dedicated to Sun Yiqi) by William Cuthbertson ,
						Stonehouse, Manchester (charity), Liverpool Cathedral, Watford, Wadhurst, St.James Piccadilly, London (Beethoven's "Hammerklavier" Sonata)
						UK
						</div> 
						<div class="col-md-2">
						    <img class="pic"  src="img/Img_2402_200.jpg" alt="Nov.26th%202012%20invSt.James,%20Piccadilly,%20London,%20England,%20where%20William%20spielte%20Beethovens%20Hammerklavier-Sonate">
						</div> 
					</div> 
				<div class="row rgp">
					<div class="col-lg-12 box">2011</div>
				</div>
				<div class="row rgp">
						<div class="col-md-2 boldTxt">
	                        24th&nbsp;July,<br /> 
						24th&nbsp;September,<br />
						17th&nbsp;October,<br />
						29th&nbsp;October</strong></div>
						<div class="col-md-8">
						<a href="doc/FlyerLiszt2011992_William.pdf">Liszt Concerts</a>
						<Ul>
						<Li> Robert Schumann Fantasie in C</Li>
						<Li> Franz Liszt, Sonata in B Minor</Li>
						<Li> Franz Liszt, Hungarian Rhapsody No. 4</Li>
						<Li> Franz Liszt, Liebesträume - Three Nocturnes: No. 1 A flat major, No. 2 in E major, No. 3 A flat major</Li>
						<li> Franz Liszt, Sonetto del Petrarca from Anne de pelerinage , Deuxième Année - Italie</Li>
						<li> Franz Liszt, Vallée d'Obermann from Anne de pelerinage, Première Année - Suisse</li>
					</Ul>
						Elztalmuseum, Orgelstiung. Gemeindezentrum St.Margarethen, Waldkirch Baden-Württemberg, Germany</div>
						</div>
				<div class="row rgp">
					<div class="col-lg-12 box">2010</div>
				</div>
				<div class="row rgp">
						<div class="col-md-2 boldTxt">
	        			1st&nbsp;March,
						1st&nbsp;April,
						11th&nbsp;July, 
						19th&nbsp;September, 8th October</strong></div>
				
						<div class="col-md-8"><a href="doc/FlyerChopin.pdf">Chopin Concerts 2010</a>
						<br/>
						<ul>
						<li>4 Scherzos,4 Ballades</li>
						<li>Etudes</li>
						<li>Impromptues, Preludes</li>
						<li>14 Waltzes, Barcarolle,Fantasie, Berceuse</li>
						<li>3 Sonatas</li>
						<li>Selected Polonaises,Mazurkas and Nocturnes</li>
						</ul>
						Orgelstiftung, Elztalmuseum, Gemeindezentrum St. Margarethen, WaldkirchBaden-Württemberg, Germany 
						</div>
						</div>
				<div class="row rgp">
						<div class="col-md-12">
						<?php print foot(); ?>
                    </div>
                </div>
            </div>
        </div>        <!-- /#page-content-wrapper -->
    </div>   <!-- /#wrapper -->
	<?php  print endPage();?>	
 </body>
</html>