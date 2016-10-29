<?php 
require "funcz/functionz.php";
print head("de","Konzerte");
?>
<body>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <?php print menu("de","Konzerte","concert_e.php","concert.php","concert_ch.php"); ?>
         </div>
          <div id="page-content-wrapper">
            <div class="container-fluid">
                <?php topRight();?>
                <div class="row">
                    <div class="col-lg-12"> 
                      <h2>Konzerte</h2> 
                 </div>
              </div>
   			<div class="row">
              <div class="col-lg-12 box">2017</div>
			</div>	
		    
			<div class="row">
              <div class="col-md-2 boldTxt">
				Samstag 9<br/>Sonntag 10<br/>September<br/>17.00 Uhr
			  </div>
			  <div class="col-md-8">
				  <div class="boldTxt">
					Konzert im <a href="http://www.elfenaupark.ch/">Elfenau Park</a>
				  </div>
				  Bern, Schweiz.
				<ul>
					<li>J.S.Bach, Goldberg Variationen</li>
				</ul> 
			</div>
			<div class="col-md-2">
				<?php photorightnolink("elfenau.jpg","Elfenau Park");?>
			</div>
		</div> 
		<div class="row">
			<div class="col-md-12 box">2016</div>
		</div>
		<div class="row">
		 <div class="col-md-2 boldTxt">
			Freitag 11<br/>März
		</div>
		<div class="col-md-8">
			<div class="boldTxt">Konzert im <a href="http://www.rehaklinik-sonneneck.de">Haus Sonneneck</a>
			</div>
			Kanderner Strasse 18, 79410 Badenweiler, Breisgau-Hochschwarzwald, Baden-Württemberg.
			<ul>
				<li>F.Schubert Impromptu Ges-Dur Op.90 Nr.3, Impromptu B-Dur Op.142 Nr.3</li>
				<li>A.Skrjabin Sonate Nr.2  Op.19</li>
				<li>F.Chopin Sonate Nr.2 b-Moll Op.35</li>
			</ul>					
			</div>
				<div class="col-md-2">
				<?php photorightnolink("sonneneck.jpg","Haus Sonneneck");?>
			</div>
		</div>
		<div class="row">
		<div class="col-md-2 boldTxt">Sonntag 20<br/>März<br/>15:00 Uhr</div>
		<div class="col-md-8">
			<div class="boldTxt">
				Konzert im <a href="http://www.stbeatus.ch/">Stiftung Beatus</a>
			</div>
			Bühlweg 2, 3655 Sigriswil, Schweiz. 
			<ul>
					<li>A.Skrjabin Sonate Nr.2 Op.19</li>
					<li>S.Rachmaninow Prelude D-Dur Op.23 Nr.4</li>
					<li>F.Schubert Impromptu Ges-Dur Op.90 Nr.3</li>
					<li>F.Chopin Sonate Nr.2 b-Moll Op. 35</li>
			</ul>
		</div>
		<div class="col-md-2">
	<?php photorightlinked("stbeatus.jpg" ,"Stiftung St.Beatus","http://www.stbeatus.ch/");?>
		</div>
	</div>
	<div class="row rgp">
		<div class="col-md-2 boldTxt">Mittwoch 25 Mai&nbsp;<br/>18.00 Uhr</div>
		<div class="col-md-8">
			<div class="boldTxt">
				Konzert im <a href="http://balamus.ru">Balakhna Museum für Geschichte und Kunst</a>
			</div>
			Nischni Nowgorod, Russland. 
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
		<div class="col-md-2 boldTxt">
			Sonntag 3.Juli<br/>11 Uhr
		</div>
		<div class="col-md-8">
			<div class="boldTxt">
				Konzert im <a href="http://www.elztalmuseum.de/">Elztal Museum</a>
			</div>
				Kirchplatz 14, D-79183 Waldkirch.
				<ul>
				<li>L.van Beethoven, Sonate Es-Dur Op.31 Nr.3</li>
				<li>F.Chopin,3 Mazurken Op.59</li>
				<li>R.Schumann, Études Symphoniques Op.13</li>
				</ul>
		</div>
		<div class="col-md-2 "><?php photorightnolink("etzal_240.jpg","Etzal Museum");?>
		</div>
	</div>
	<div class="row rgp">
		<div class="col-md-2 boldTxt">Sonntag 10. Juli<br/>11 Uhr
		</div> 
		<div class="col-md-8"> 	
			<div class="boldTxt">
				Duo-Konzert  Klavier und Violine
			</div> 
			Im <a href="http://www.friedrich-husemann-klinik.de/"><b>Friedrich-Husemann Klinik</b></a><br/>
			Friedrich-Husemann-Weg 8, 79256 Buchenbach bei Freiburg
			<br/>
			Mit William Cuthbertson—Klavier, Carina Kaltenbach-Schonhardt-Violine.
			<ul><li>L.van Beethoven, 1. Satz  Sonate für Violine und Klavier Nr. 5  F-Dur, Op. 24</li>
			<li>F.Schubert, Impromptu Ges-Dur Op.90 Nr.3   (nur Klavier)</li>
			<li>Cesar Franck, Sonate für Violine und Klavier A-Dur</li>
			<li>Antonin Dvorak, Humoresque </li>
			<li>William Cuthbertson, Butterfly Bounce Nr.1</li>
			<li>Fritz Kreisler, Schön Rosmarin</li>
			</ul>
		</div>
		<div class="col-md-2">	
			<?php photorightnolink("duo.jpg","William Cuthbertson, Carina Kaltenbach");?>
		</div>
	</div>
	<div class="row rgp">
		<div class="col-md-2 boldTxt"><a name="31st" id="31st"></a>
						Mittwoch<br/>August 31st <br/>17.30 uhr
					</div>
					<div class="col-md-8">
				 <b>Ein Gedenkkonzert für Peter Feuchtwanger - Teil 1</b>
				 <br/>
					 G.Rossini's "Semiramide" Overture, arr. Czerny, für 16 Pianisten auf 8 Klaviere		</b>
				 Eintritt free. 
				  Dieser Konzertteil findet im Flügelsaal, <A href="http://www.lepthien.de/">Pianohaus Lepthien</a> statt (‪Schwarzwaldstraße 9A, 79117 Freiburg im Breisgau‬). 
				Für alle Besucher, die beide Veranstaltungen besuchen möchten, wird ein direkter Bustransfer angeboten (von Freiburg nach Waldkirch und zurück, für jeweils ca. 6€). 
				Voranmeldung dafür bitte per Email an: 
				<A href="mailto:feuchtwanger-memorial@email.de">feuchtwanger-memorial@email.de</a>.
				</div>
				<div class="col-md-2">
	         		<?php photorightnolink("pianos.png","Pianos");?>
		</div>
		</div>
				<div class="row rgp">
					<div class="col-md-2 boldTxt">
						Mittwoch<br/>August 31st <br/>19.30 uhr
					</div>
					<div class="col-md-8"><b>Ein Gedenkkonzert für Peter Feuchtwanger - Teil 2</b>.
			<br/>Es spielen eh em alige Studenten von Peter Feuchtwanger. 
		<ul>
			<li>Joseph Haydn, Adagio F-Dur Hob. XII/9 - <a href="http://susanne-von-laun.de">Susanne von Laun</a></li> 
			<li>Franz Xaver Mozart, Andantino A-Dur FXWM:41 - <a href="http://susanne-von-laun.de">Susanne von Laun</a></li>
			<li>Joseph Haydn, Sauschneidercappriccio - Robert Bärwald </li>
			<li>Peter Feuchtwanger, Variationen - <a href="https://www.facebook.com/lennart.speer">Lennart Speer</a></li>
			<li>Franz Schubert, Walzer D 779 Nr.1 (1823), Nr.2 Ländler D 366 Nr.3,4 - <a href="http://cuthbertson.de/fotoLarge.php?lan=de&album=Konzerte:2016&photoPtr=10&fromUrl=foto.php">Agnes Joshi</a></li>
			<li>Jean Sibelius, Die Tanne Op.75 Nr.5  - <a href="http://cuthbertson.de/fotoLarge.php?lan=de&album=Konzerte:2016&photoPtr=10&fromUrl=foto.php">Agnes Joshi</a></LI>
			<LI>Peter Feuchtwanger, Tariqa Nr.2 - <a href="https://www.youtube.com/watch?v=-OONZvd7X6k">Christian Löschke</a></LI>
			<LI>J.S. Bach, Andante aus dem Klavierkonzert in f-Moll BWV 1056 - <a href="https://www.facebook.com/daniel.kasparian">Daniel Kasparian</a></LI>
			<li>Friedrich Kuhlau, Rondo C-Dur über Motive aus Mozart's "Don Giovanni" - <a href="https://www.facebook.com/daniel.kasparian">Daniel Kasparian</a></li>
			<li>Peter Feuchtwanger, Study in the Eastern Idiom  Op.3 (Macedonian and Bosnian)- <a href="http://www.masako-kamikawa.com/">Masako Kamikawa</a>.</li>
			<li>Elisabeth Jaquet de La Guerre Prelude-Allemande-Menuet-Gavotte aus der Suite A-Moll - <a href="http://cuthbertson.de/fotoLarge.php?lan=de&photoPtr=13&fromUrl=foto.php">Anna Roth </a></LI>
			<LI>Felix Mendelssohn Bartholdy Fantasie fis-Moll Op.28 Con motto Agitato, Allegro con Moto, Presto - <a href="http://cuthbertson.de/fotoLarge.php?lan=de&photoPtr=14&fromUrl=foto.php&copy=">Manfred Seewann</a></li>
			<LI>Ina Birk, Soniyage - <a href="http://www.ina-birk-klavier.de/">Ina Birk</a></LI>
			<LI>Giacinto Scelsi, Rotativa - <A href="https://en.wikipedia.org/wiki/Marianne_Schroeder">Marianne Schroeder </a>.</LI>
			<LI>Frederik Chopin, Nocturne cis-Moll, Op.post - <a href="http://cuthbertson.de/fotoLarge.php?lan=de&photoPtr=17&fromUrl=foto.php&copy=">Nina Attorf</a> </LI>
			<LI>Louis Moreau Gottschalk, La Gallina Op.53, Ojos Criollos, Dance Cubaine	Op.37 - <a href="http://www.blido.de/">Stefan und Fedra Blido</a> </LI>
			<li>Serge Bortkiewicz, Etüde Des-dur Op. 15, Nr. 8 - <a href="http://cuthbertson.de/fotoLarge.php?lan=de&photoPtr=19&fromUrl=foto.php">Klaus Cutik</a></li>
			<LI>Franz Liszt, Freudvoll und Leidvoll - <a href="http://www.mezzo-soprano-sophia-grech.co.uk/">Sophia Grech</a>, mezzosoprano und <a href="http://sanjastefanovic.instantencore.com/">Sanja Stefanovic</a>, Klavier </LI>
			<LI>Benjamin Vanden Heuvel, Aus 4 Short Piano Pieces Nr.3,4 Dirge and American Suite, mit eigener Improvisation - <a href="http://sanjastefanovic.instantencore.com/">Sanja Stefanovic </a></LI>
			<LI>César Cui, "Causerie" - William Cuthbertson</LI>
			<LI>Franz Liszt, Consolation Nr.3 in Des Dur - <a href="https://www.facebook.com/jorritvdham">Jorrit van den Ham</a></LI>
			<LI>L. M. Gottschalk, Souvenirs d'Andalousie - <a href="https://www.facebook.com/jorritvdham">Jorrit van den Ham</a></LI>
			<li>Franz Schubert, Polonaisen D599 Nr. 1,2 - <a href="https://de.wikipedia.org/wiki/Paul_Cibis">Paul Cibis</a> und <a href="https://de.wikipedia.org/wiki/Sophie-Mayuko_Vetter">Mayuko Vetter</a>  </li> 
    		<LI>Manuel de Falla, Feuertanz aus Der Liebeszauber - <a href="http://www.achimclemens.de/">Achim Clemens</a></LI>
			<LI>Shura Cherkassky, Prelude Pathétique  - <a href="http://www.achimclemens.de/">Achim Clemens</a></LI>
			<LI>Ludwig van Beethoven, 6 Bagatellen Op.126, Nr.1,2,3 - <a href="https://de.wikipedia.org/wiki/Jean-Jacques_D%C3%BCnki">Jean Jaques Dünki</a></LI>
		 	<LI>Robert Schumann, Des Abends - <a href="http://www.andrewkraus.com/">Andrew Kraus</a></LI>
			<LI>Adolph von Henselt, Wiegenlied  - <a href="http://www.andrewkraus.com/">Andrew Kraus</a></LI>
			<LI>Franz Schubert, arr. Leopold Godowsky, Wiegenlied - <a href="http://www.andrewkraus.com/">Andrew Kraus</a></LI>
			<LI>David Saperton, Zephyr - <a href="http://www.andrewkraus.com/">Andrew Kraus</a></LI>
			<LI>E.Granados - Andaluza and Allegro de Concerto - <a href="https://www.facebook.com/emma.stratton.39"> Emma Stratton</a></LI>
			</ul>		
			Eintritt: 12&euro; / 10&euro; ermässigt / 9&euro; Kinder.	
			Barocksaal des Elztalmuseums in Waldkirch. 
	 	</div>
		<div class="col-md-2">
   			<?php photorightnolink("Peter_Feuchtwanger_250.jpg","Peter_Feuchtwanger");?>
		</div>
	</div>
	  	<div class="row rgp">
              <div class="col-lg-12 box">2015</div>
		</div>
		<div class="row rgp">
     		<div class="col-md-2 boldTxt">13. märz<br/>20.30 Uhr </div>
		    <div class="col-md-8">
			<div class="boldTxt">
			<a href="http://www.klappe11.de/">Klappe11</a>:CHARLEY CHASE / LIMOUSINE LOVE -  
			Am Piano: William Cuthbertson</div>
     		Die Kurzfilme: Limousine Love Einer der besten Kurz-Stummfilme überhaupt mit Charley Chase in der Hauptrolle! Chase war kein einfacher Slapstick-Komiker, sondern prägte eine Form der Situationskomödie, in der er meist als ein schüchterner, nervöser Durchschnittsbürger oder als jugendlicher Draufgänger auftrat. So ist auch LIMOUSINE LOVE umwerfend komisch: Chase muss auf der Fahrt zu seiner eigenen Hochzeit plötzlich entdecken, dass sich auf dem Rücksitz seines Autos eine nackte, wildfremde Frau befindet ... 
				<br/>
				Weitere Kurzfilme: Ballett ist ausgefallen, Hochbetrieb, Goal, Die Fahrt seines lebens... 
				<br/>
				Eintritt: &euro;5.50. Am Kommunales Kino, Fabrikstrasse 16, 79183 Waldkirch 
			</div>
			<div class="col-md-2"> 
				<?php photorightlinked("klappe11.jpg" ,"Klappe11 Festival","http://www.klappe11.de");?>
				</div>
			</div>
			<div class="row rgp">		
				<div class="col-md-2 boldTxt">
				    Samstag 28<br/>Sontag 29<br/> März<br/> 17.00 Uhr
				</div>
		    	<div class="col-md-8">
					<ul>
						 <li>Beethoven, Sonate Es-Dur &quot;Les Adieux&quot; Op.81a</li>
						 <li>Chopin, Tarantella As-Dur Op.43</li>
						 <li>Granados, Das Mädchen und die Nachtigall (aus Goyescas)</li>
						 <li>Glinka, bearb.von M.Balakirew &quot;Die Lerche&quot;</li>
						 <li>F.Liszt, Verdi Rigoletto Paraphrase</li>
						 <li>A.Skrjabin, Poème Fis-Dur Op.32 Nr.1, Sonate Nr.4 Op.30</li>
					</ul>
					  Konzertsaal Wohnark Elfenau, Elfenauweg 68, 3006 Bern, Schweiz. 
					<br/>
					Eintritt frei, Spenden erbeten.
				  </div>
				</div>     
				<div class="row rowBorder">	
						<div class="col-md-2 boldTxt"> 
							Sontag April&nbsp;19<br/>11&nbsp;Uhr
						</div>
						<div class="col-md-8">
						<ul>
							<li>Chopin 24 Preludes Op.28</li>
							<li>Skrjabin 24 Preludes Op.11</li>
						</ul>
						Orgelbauersaal, Gewerbekanal 1, Waldkirch Baden-Württemberg, Deutschland
						</div>
						<div class="col-md-2">
							<?php  photorightlinked("orgelbauersaal_240.jpg","orgelbauersaal","http://bz-ticket.de/orgelbauersaal-waldkirch-waldkirch");?>
						</div>
					</div>
					<div class="row rowBorder">	
						<div class="col-md-2 boldTxt"> 
							Sontag 19 September <br/>19.30 Uhr</div>
						<div class="col-md-8">
						Benefizkonzert zugunsten des Umbaus des Gemeindezentrums
						<br/>
						Mit:
						<ul>
						<li>William Cuthbertson (Klavier)</li>
						<li>Heinz Vogel (Klavier)</li>
						<li>Carina Kaltenbach-Schonhardt (Violine)</li>
						<li>Nicole Friedrich (Violine)</li>
						<li>Katharina Weeber (Viola)</li>
						<li>Carolina Berghorn (Violoncello) </li>
						<li>Michael Bornhak (Kontrabass ) </li>
						<li>Frauke Hoffmann (Mezzosopran)</li>
						<li>Fritz Schätzle (Bariton)</li>
						<li>Ursula Disch (Akkordeon, Französische Chansons)</li> 
						</ul>
						Katholisches Gemeindezentrum Waldkirch, Kirchplatz.
						Eintritt frei, Spenden willkommen zu heissen.
					</div>
					<div class="col-md-2">
						<?php  photorightnolink("KatholischesGemeindezentrumWaldkirch_240.jpg","Katholisches Gemeindezentrum Waldkirch");?>
					</div>
					</div>
					<div class="row rowBorder">	
						<div class="col-md-2 boldTxt"> 
					      Montag 5 Oktober<br/>20 Uhr
						</div>
						<div class="col-md-8">
						Katholisches Gemeindezentrum Waldkirch, Kirchplatz 7.
						<ul>
						<li>Am Klavier: William Cuthberson, Waldkirch; </li>
						<li>Einführung: Dr. Ulrich Ruh, Journalist aus Elzach.</li>
						<li> Musik: u.A. Sonate Nr.5 und 6.</li>
						</ul>Eintritt 3 Euros.
						</div>
					<div class="col-md-2">
						<?php photoright("Skrjabin_Alexander.jpg","Skrjabin_Alexander_240.jpg","konzerte","Skriabin Alexander.jpg","concert.php","de");?>
				</div>
				</div>
					<div class="row rowBorder">	
						<div class="col-md-2 boldTxt"> 
							Sontag 25 Oktober<br/>
						11&nbsp;Uhr</div>
						<div class="col-md-8">
						Konzert mit:
						<ul>
						<li>A.Skrjabin [2015 ist die Centenery seines Todes]
						<ul>
						<li> Sonate Nr.2 Op.19 (Andante,Presto)</li>
						<li>Sonata No.4 Op.30 (Andante, Prestissmo Volando)</li>
						<li>Etude E-Dur Op.8 Nr. 5</li>
						<li>Etude Gis-Moll Op.8 Nr.9</li>
						<li>Etude B-Moll Op.8 Nr.11</li>
						<li>Etude Dis-Moll Op.8 Nr.12</li>
						<li>Etude Fis Dur Op.42 Nr.4</li>
						<li>Etude Cis-Moll Op.42 Nr.5</li>
						<li>Etude Des Dur Op.42 Nr.6</li>
						<li>Etude Es-Dur Op.42 Nr.8</li>
						</ul></li>
						<li>S.Rachmaninow <ul>
						<li>Polka de W.R.</li>
						<li>Prelude D-Dur Op.23 Nr.4</li>
						<li>Prelude G-Moll Op.23 Nr.5</li>
						<li>Prelude C-Moll Op.23 Nr.7</li>
						<li>Etude Gis-Moll Op.8 Nr.9</li>
						<li>Etude B-Moll Op.8 Nr.11</li>
						<li>Etude Dis-Moll Op.8 Nr.12</li>
						<li>Etude Es-Dur Op.33 Nr.7</li>
						<li>Etude C-Moll Op.39 Nr.1</li>
						<li>Etude Es-Moll Op.39 Nr.5</li>
						<li>Etude D-Moll Op.39 Nr.8</li>
						</ul>
						</li>
						</ul>
						<a href="http://www.elztalmuseum.de/">Elztal Museum</a>, Kirchplatz 14, D-79183 Waldkirch. 17&euro; ,15euro; ( erm.), 9euro; (Kinder).
						</div>
						<div class="col-md-2">
							<?php photoright("etzal.jpg","etzal_240.jpg","Konzerte","Etzal%20Museum","concert.php","de");?>
						</div>
						</div>
					<div class="row rowBorder">	
						<div class="col-md-2 boldTxt"> 
							Sontag 27 December<br/> 19:30Uhr
						</div>
						<div class="col-md-8">
							<div class="boldTxt">
							   Poesie und Piano
							</div>
						Hymne an die Nacht von Novalis mit Klavierstücke von Chopin, Skrjabin und Schumann.
						Mit Martin Lunz (Rezitation) und William Cuthbertson (Klavier).
						Am <a href="http://www.rehaklinik-sonneneck.de">Haus Sonneneck</a>, Kanderner Strasse 18, 79410 Badenweiler,Breisgau-Hochschwarzwald, Baden-Württemberg.
						Eintritt 12 €.
						</div>
						<div class="col-md-2"> 
						  <?php photorightnolink("martinwilliam_240.jpg","Martin Lunz+William%20Cuthbertson");?>
						</div>
						</div>
					<div class="row rowBorder">	
						<div class="col-md-12 box"> 
						   2014</div>
						</div>
                     <div class="row rowBorder">	
						<div class="col-md-2 boldTxt"> 
							Donnerstag 30. Januar<br/> 20.00 Uhr
						</div>
						<div class="col-md-8">	
						   <div class="boldTxt">
							  Gao Weimo+William Cuthbertson Eurythmie Saal  Konzert
							</div>
							C.Cui : &quot;Causerie&quot;    (Klavier)
						<br/>
						Liu Zhuang : Romantisches Stück    (Klavier und Cello),  Improvisation 1 (Klavier und Cello)
						<br/>
						W.Cuthbertson: Nocturne (Klavier) + Walzes (Klavier) +3 Kleine Stücke (Klavier+Cello) +Improvisation 2 (Klavier und 'Cello)
						<br/>
						Xu Xiyi :Lullaby  (Klavier und Cello)
						<br/> 
						 F.Chopin: Nocturne F-Dur  (Klavier) Op.15 Nr.1+ 
						 Nocturne  Fis-Dur (Klavier) Op.15 Nr.2
						 <br/> 
						 P.Tschaikowski : Rococo Variationen (Piano und Cello) Op.33
						<br/>
						<a href="https://www.lahnhoehe.de/start/">Klinic lahnhohe</a>,Am Kurpark 1, 56112 Lahnstein, Deutschland. Eintritt frei, Spenden willkommen
								</div>
						</div>
										<div class="row rowBorder">	
					<div class="col-md-2 boldTxt"> 
						26. Januar<br/> 10.30 Uhr
					</div>
					<div class="col-md-8">
						J.S.Bach, 3 Suite für Violoncelllo C-Dur<br/>
						C.Cui, Causerie    (Klavier)<br/>
						Liu Zhuang,  Romantisches    Stück <br/>
						Xu Xiyi, Wiegenlied, (Klavier &amp; Cello)<br/>
						W.Cuthbertson. 3 Kleine Stücke (Cello &amp; Klavier)<br/>
						F.Chopin, Nocturne F-Dur  Op.15 Nr.1 (Klavier)<br/>
						F.Chopin, Nocturne Fis-Dur  Op.15 Nr.2 (Klavier)<br/>
						P.Tschaikowski. Rococo  Variationen Op.33 
						<br/>
						&euro;10 Karten sind jetzt schon erhältlich (oder können  vorbestellt werden) von Jäger und Brommer, Gewerbekanal 1, Waldkirch.Tel: 07681  3927  (zum zurücklegen bis zum  Konzert ) und von der Buchhandlung  Augustiniok (muss spätestens am Vormittag   den 25.1 abgeholt werden)   Langestr. 25-29, Waldkirch. Tel: 07681 409041.
						<br/>
						Orgelbauersaal, Gewerbekanal 1, 79183 Waldkirch
						</div>
						<div class="col-md-2"> 
						   <?php photorightnolink("William_Weimo_Cello_240.jpg","Gao%20Weimo%20&amp;%20William%20Cuthbertson","concert.php","de");?>
						</div>
					</div>
					<div class="row rowBorder">	
     					<div class="col-md-2 boldTxt"> 
								Sontag 6 April<br/>11.00Uhr
						</div>
					<div class="col-md-8">
					    <div class="boldTxt"> 
							Trio-Rezital &quot;Spätromantische Naturstimmungen&quot; mit Gesang, Cello und Klavier
						</div>
						Elztalmuseum Waldkirch; <br/>
						Eintritt: &euro;17 / &euro;15 / Kinder &euro;9
						<ul class="ulsquare">
						<li> William Cuthbertson, Klavier</li>
						<li> Margriet van Reisen</li>
						<li>Antoine Billet</li>
						</ul>
						<ul><li>Joseph Glaeser - Vier Lieder </li>
						<li>Dmitri Schostakowitsch -  Lied der Ophelia</li>
						<li>Pjotr I. Tchaikovsky - Valse sentimental  Nur wer die Sehnsucht kennt</li>
						<li>Alexandr Dargomiskji -  Ana Pridjot</li>
						<li>Johannes Brahms - Meine Liebe ist grün,
						 Da unten im Tale,
						 Och Mod'r, ich well 'n Ding hah'n
						</li>
						<li>Paul Graener -  Drei Lieder 'Eine Singstimme und ein Cello musizieren'</li>
						<li>Felix Mendelssohn - Lied ohne Worte</li>
						<li>Alphons Diepenbrock -  Berceuse</li>
						<li>Jules Massenet -  Élégie</li>
						</ul>
						</div>
					<div class="col-md-2">
						<?php photoright("cello_900.jpg","cello_240.jpg","Konzerte","Antoine%20Billet","concert.php","de");?>
					</div>
					</div>
					<div class="row rowBorder">	
     					<div class="col-md-2 boldTxt"> 
							Dienstag 24 Juni <br/>20:00Uhr 
						</div>
						<div class="col-md-8">
							<div class="boldTxt"> 
								<strong>Mozart bis Bob Dylan</strong>
							</div>
						Waldkircher Musiker singen und spielen Musik von &quot;Mozart bis Bob Dylan&quot; zugunsten Opfern der Feuerkatastrophe in Valparaiso z.B. mit Wolfgang Brommer, William Cuthbertson, Stephan Ronkov, Frauke Hofmann, Carina Kaltenbach, Manuel Torres, Adrian Oswalt und Markus Trenkle.
						<br/>Stadtkapelle,  Lange Strasse,  Waldkirch  
							</div>
						<div class="col-md-2">
							<?php photorightnolink("benefitconcert_240.jpg","Mozart%20bis%20Bob%20Dylan");?>
						</div>
				</div>		
					<div class="row rowBorder">	
     					<div class="col-md-2 boldTxt"> 
							Sontag 1 Juni<br/>15:00 Uhr
						</div>
						<div class="col-md-8">
						   <div class="boldTxt">
						      Lesung mit Musik: <a title="Bulgarische Impressionen" href="https://www.facebook.com/events/405564799585463/">Bulgarische Impressionen &ndash; abenteuerliche Reise durch ein unbekanntes Land</a>  &ndash; Helmut Matt
						  </div> 
						Musik Live  mit William Cuthbertson und Carina Kaltenbach: Dvorak Humoreske, Tschaikowski Sérénade melancolique und 2 Bulgarische Volkslieder, Sektempfang.
						 <br/>
						 Reiseb&uuml;ro am Markt/Fiore, Lange Straße 65, Waldkirch. 
						  <br/>
						Eintritt frei, Spenden für die Musiker sind willkommen.
						</div>
					<div class="col-md-2">
						<?php photoright("CorinaKaltenbach.jpeg","CorinaKaltenbach_240.jpg","Konzerte","Carina%20Kaltenbach","concert.php","de");?>
						</div>
					</div>
					<div class="row rowBorder">	
     					<div class="col-md-2 boldTxt"> 
							Sonntag 13 Juli<br/>11.00 Uhr
						</div>
						<div class="col-md-8"> 
						<ul>
						  <li>L.van Beethoven,	Sonate Es-Dur Op.81a <em>"Les Adieux"</em>	</li>
							<li>F:Chopin,	Berceuse Des-Dur Op.57, Tarantella As-Dur Op.43		</li>
							<li>F.Liszt,	Verdi Rigoletto Paraphrase	</li>
							<li>Glinka, bearb.von M.Balakirew	"<em>Die Lerche</em>"		</li>
							<li>E.Granados,	<em>Das Mädchen und die Nachtigall</em> (aus Goyescas) </li>
							<li>J.Brahms,	Variationen über ein Thema von Paganini Op.35 Heft 1	</li>
						</ul>
						<a href="http://www.elztalmuseum.de/">Elztalmuseum</a>, Kirchplatz 14, Waldkirch. Eintritt: 17&euro;/15&euro; Kinder 9&euro;
						</div>
						<div class="col-md-2"> 
							<?php photoright("williamatpiano.jpg","williamatpiano_240.jpg","Konzerte","William%20at%29piano","concert.php","de");?><strong>Klavier Matin&eacute; mit William Cuthbertson</strong><br/>
						</div>
						</div>
					<div class="row rowBorder">	
     					<div class="col-md-2 boldTxt"> 
					      Sonntag 20 July<br/>14.00Uhr
						 </div>
						<div class="col-md-8">
						<div class="boldTxt">
							<a href="https://www.facebook.com/events/418229254981777/">Open Air Konzert mit den Waldkircher Tanzrhythmiker</a>
						</div>
						Am Stadtrainsee Waldkirch. Das Orchester mit Tanzmusik im Stile der 1930er bis 60er Jahre
						</div>
						<div class="col-md-2">
							<?php photorightnolink("openair2014_240.jpg","Open Air Konzert");?>
						</div>
						</div>
					<div class="row rowBorder">	
     					<div class="col-md-2 boldTxt"> 
							Montag 21 July<br />
						20.00Uhr   </div>
     					<div class="col-md-8">
						<div class="boldTxt">
							Wilhelm Busch Abend mit William Cuthbertson und Martin Lunz
						</div>
						Zeltkultur, Elzach (auf dem Schulhof in Elzach im Zirkuszelt statt). Kartenvorverkauf: Buchhandlung Merkle. 
						 Eintritt: 8/7&euro;</div>
     					<div class="col-md-2">
						  <?php photorightnolink("WilhelmBuschAbend_240.jpg","Wilhelm%20Busch%20Abend%20mit%20William%20Cuthbertson%20und%20Martin%20Lunz");?>
		</div>
						</div>
				 <div class="row rowBorder">	
     					<div class="col-md-2 boldTxt"> 
						 Montag 4. August 
						<br/>
						20.30Uhr</div>
						<div class="col-md-8">
						<div class="boldTxt">
							Weitere Konzerte
							</div>
						im <a href="http://theislayhotel.com/" title="Islay Hotel">Islay Hotel </a>
						(Sponsor)<br/> 
						Charlotte Street, Port Ellen, Isle of Islay, Schottland
						</div>
						<div class="col-md-2">
							<?php photorightlinked("islayhotel.jpg","islay%20hotel","http://theislayhotel.com/");?> <br/>
						</div>
					</div>
					<div class="row rowBorder">	
     					<div class="col-md-2 boldTxt"> 
								Mittwoch 6. August<br/>Mittags
						</div>
    					<div class="col-md-8">
						<div class="boldTxt"> 
							Weitere Konzerte
						</div>
    					Im <a href="http://www.ardbeg.com/ardbeg/distillery">Ardbeg Distillery</a> 
						(Sponsor)<br/>
						Port Ellen, Islay, Argyll Schottland PA42 7EA.
						</div>
    					<div class="col-md-2">
							<?php photorightlinked("ardbeg.gif","Ardbeg%20Distillary","http://www.ardbeg.com/ardbeg/distillery");?>
						</div>
    					</div>
						<div class="row rowBorder">	
							<div class="col-md-2 boldTxt"> 
								Freitag 8.August<br/>19.30 Uhr
							</div>
							<div class="col-md-8">
								<div class="boldTxt">
									Konzert mit William Cuthbertson und Fiona Middleton ("Fiona of the seals") , Violin, Gesang.
								</div>
						
						Werke von Franck, Kreisler, Elgar, Fauré, Liszt, Cuthbertson and Middleton .<br/>
						<a href="http://www.islay-gaelic.net/">Islay Gaelic Centre (Ionad Chaluim Chille Ìle )</a>, Bowmore PA43 7LN, Islay, Schottland.
						Eintritt: &pound;10
					</div>
					<div class="col-md-2">
						<?php photorightlinked("islaycentre.JPG", "Islay%20Centre","http://www.islay-gaelic.net/");?> 
					</div>
					</div>
					<div class="row rowBorder">	
     					<div class="col-md-2 boldTxt"> 
							Sontag 19 October<br/>11 Uhr
						</div>
						<div class="col-md-8">
							<div class="boldTxt"> 
								Musikalische Liebeszeitreise "Die Liebe im Wandel der Zeit" / Duo
							</div>
						<a href="http://www.frauke-hofmann.de">Frauke Hofmann</a> (Mezzosopran), William Cuthbertson (Flügel)
							<br/>
						ORT:Orgelbauersaal Gewerbekanal 1, Waldkirch.
						Die Mezzosopranistin Frauke Hofmann und der Konzertpianist William Cuthbertson stellen das schönste Thema der Welt musikalisch im Laufe der Jahrhunderten dar. Hat sich das Thema mit der Zeit gewandelt? Die Reise geht von der Renaissance bis in die Moderne. Lieder, Arien, und Klaviermusik von Dowland, Bizet, Rachmaninov, Weil und jiddischen Tango bis zum Musical beleuchten, ergänzt durch Testerläuterungen, was die Zeit mit der Liebe macht. in deinem spannenden Programm wird z.B. die "Habanera" aus Carmen und der "Liebestraum" von Liszt zu hören sein. Diese Performance ist Teil der  <a href="http://kulturwoche-waldkirch.de/programm.php">Kulturwoche Waldkirch</a>.
							</div>
						<div class="col-md-2">
							<?php photorightlinked("hoffman_240.jpg","Frauke%20Hofmann" ,"http://www.frauke-hofmann.de");?>
							</div>
						</div>
					<div class="row rowBorder">	
     					<div class="col-md-2 boldTxt"> 
                              Donnerstag 16&nbsp;October
							  <br/>
						20 Uhr</div>
						<div class="col-md-8">

     					<div class="boldTxt"> 
							Poesie und Piano
							</div>
						"Zeit - Ewigkeit - Vergänglichkeit: Eine Reise" / Litera Theater, Martin Lutz &amp; William Cuthbertson
						ORT:Orgelbauersaal, Gewerbekanal 1, Waldkirch. Einlass 19.30 | Eintritt 10 &euro;.
						Eine Collage aus Texten zu "Zeit-Ewigkeit -Vergänglichkeit" gepaart mit Klaviermusik von und mit William Cuthbertson öffnet den Zuhörern neue Räume, auch durch die Verbindung der Rezitationen des Schauspielers Martin Lutz. Eine Sprach und Klangreise. Diese Performance ist Teil der  <a href="http://kulturwoche-waldkirch.de/programm.php">Kulturwoche Waldkirch</a>
						</div>
					<div class="col-md-2">
						<?php photoright("WilhelmBuschAbend.jpg","WilhelmBuschAbend_240.jpg","Konzerte","Wilhelm%20Busch%20Abend","concert.php","de");?>
						</div>
						</div>
					<div class="row rowBorder">	
     					<div class="col-md-12 box"> 
                    	2013 
						</div>
						</div>
					<div class="row rowBorder">	
     					<div class="col-md-2 boldTxt"> 
    					   Juli</div>
						<div class="col-md-8">
						F.Schubert, Sonate B-Dur  D 960<br/>
						J.Brahms, 6 Klavierstücke
						<br/>
						Waldkirch </div>
						</div>
					<div class="row rowBorder">	
     					<div class="col-md-2 boldTxt"> 
							28. und 29. September <br/>
						17 Uhr</div>
     					<div class="col-md-8">
						<div class="boldTxt"> 
							Klavierkonzert 
						</div>
						Schubert Sonate B-Dur D 960 <br/>
						Brahms 6 Klavierstücke Op.118 <br/>
						Eintritt frei, Kollekte. <br/>
						Elfenau Park, Bern, Schweiz,  Elfenauweg 50, 3006 Bern
						</div>
						</div>
					<div class="row rowBorder">	
     					<div class="col-md-2 boldTxt"> 
							10.October <br/>
						20 Uhr </div>
						<div class="col-md-8">
						<div class="boldtxt">
							<a href="https://www.facebook.com/events/574251399303080">Poesie und piano</a> <br/>
					</div>
					Gedichte von Wilhelm Busch, Musik von William Cuthbertson Eintritt frei, Kollekte.
						<br/>
						Haus Sonneneck, Badenweiler.</div>
					<div class="col-md-2">
					 <?php photorightlinked("poemsandpiano_200.jpg","Poems%20und%20Piano","https://www.facebook.com/events/574251399303080");?>
			</div>
					</div>
					<div class="row rowBorder">	
     					<div class="col-md-2 boldTxt"> 
								12.October <br/>
						19 Uhr</div>
						<div class="col-md-8">
						<div class="boldtxt">
							<a href="https://www.facebook.com/events/574251399303080">Poesie und piano</a> 
						</div>
						Gedichte von Wilhelm Busch, Musik von William Cuthbertson <br/>
						Eintritt &euro;10 <br/>
						Orgelbauersaal, Gewerbekanal 1,Waldkirch.
						</div>
						</div>
					<div class="row rowBorder">	
     					<div class="col-md-2 boldTxt"> 
							6.November <br/>
						20 Uhr</div>
						<div class="col-md-8"> 
							<div class="boldTxt">
							<a href="https://www.facebook.com/events/233043576858233/">Dr.Ulrich Ruh (Herder-Korespondenz)</a>
						<br />
						William Cuthbertson spielt dazu Liszt/Wagner Isoldens Liebes-Tod und Liszt/Verdi Rigoletto.<br/> 
						Katholischen Gemeindezentrum, Kirchplatz 7,Waldkirch </div>
						</div>
					<div class="row rowBorder">	
     					<div class="col-md-12 box">  2012</div>
						</div>
					<div class="row rowBorder">	
     					<div class="col-md-2 boldTxt"> 
							Juli
						</div>
						<div class="col-md-8"> 
							Beethoven Sonate B-Dur Op.106, &quot;für das Hammerklavier&quot;
						<br/>
						Werke von Debussy,<br/>
						Balakirew, "Islamei".
						<br/>Waldkirch
						</div>
						</div>
					<div class="row rowBorder">	
     					<div class="col-md-2 boldTxt"> 
							Juli
						</div>
						<div class="col-md-8"> 
						Hudié Duo mit Sun Yiqi (Violine)
						<br/>
						Herbolzheim </div>
						</div>
					<div class="row rowBorder">	
     					<div class="col-md-2 boldTxt"> Oktober</div>
						<div class="col-md-8">
						<div class="boldTxt">
				Erröffnungs Konzert der Waldircher Kulturwochen
	</div>
					Hudié Duo mit Fiona Middleton (Violine).
						Werke von Brahms, Franck, Cuthbertson und Middleton.<br/>
						Waldkirch</div>
						</div>
					<div class="row rowBorder">	
     					<div class="col-md-2 boldTxt"> </div>
						<div class="col-md-8">
						<div class="boldTxt">Waldircher Kulturwochen</div>
						Gershwin  <?php linkedPhoto("Rhapsodie in Blue","Gershwin2.JPG","Concerts","concert_e.php","en");?> mit dem Waldkircher Blechbläserensemble. Waldkirch
						</div>
						<div class="col-md-2"><?php photoright("Neues%20Bild.jpg","Neues%20Bild_200.jpg","Concerts","Rhapsodie%20in%20Blue","de");?>
						</div>
						</div>

						<div class="row rowBorder">	
							<div class="col-md-2 boldTxt">	November</div>
							<div class="col-md-8">
								<div class="boldTxt">
									Tournée mit Fiona Middleton
								</div>
								Hier die  Uraufführung  der Winnie-the-Pooh Suite für solo violin (gewidmet an Sun Yiqi) von William Cuthbertson 
							<br/>
							Stonehouse, Manchester (Benefiz), Liverpool Cathedral, Watford, Wadhurst, UK.
							</div>
						<div class="col-md-2">
							<?php photoright("IMG_2402.JPG","Img_2402_200.jpg","konzerte",
						"Nov.26th%202012%20in%20St.%20James,%20Piccadilly,%20London,%20England,%20wo%20William%20spielte%20Beethovens%20Hammerklavier-Sonate.","concert.php","de");?>
							</div>
						<div class="row rowBorder">	
						<div class="col-md-2 boldTxt">November</div>
						<div class="col-md-8">
						<div class="boldTxt">	
							Beethoven &quot;Hammerklavier&quot; Sonate. 
						</div>
						St.James Piccadilly, London UK						</div>
						</div>
						<div class="row rowBorder">	
						<div class="col-md-12 box">2011 </div>
	</div>
						<div class="row rowBorder">	
						<div class="col-md-2 boldTxt">24.Juli
						<br/>24.September
						<br/>17.Oktober<br/>29.Oktober
						</div>
						<div class="col-md-8">
							<div class="boldTxt">
								<a href="doc/FlyerLiszt2011992_William.pdf">Liszt Konzerte</a>
							</div>
						<ul>
						<li>Robert Schumann, Fantasie C-Dur</li>
						<li>Franz Liszt, Sonate h–Moll</li>
						<li>Franz Liszt, Ungarische Rhapsodie Nr.4</li>
						<li>Franz Liszt, Liebesträume – Drei Notturnos: Nr.1 As-dur, Nr.2 E-dur, Nr.3 As-dur</li>
						<li>Franz Liszt,  Sonetto del Petrarca aus Annés de pelerinage, Deuxième Année - Italie</li>
						<li>Franz Liszt, Vallée d'Obermann aus Annés de pelerinage, Première Année - Suisse</li>
				</ul>
				</div>
						<div class="col-md-2">
						</div>


						</div>
						<div class="row rowBorder">	
     					<div class="col-md-12 box"> 2010</div>
						</div>
						<div class="row rowBorder">	
						<div class="col-md-2 boldTxt">1.März,<br/>11.April,<br/>11.Juli,<br/> 
						19.&nbsp;September<br/>
						8. Oktober</div>
						<div class="col-md-8">
						<div class="boldTxt">
							<a href="doc/FlyerChopin.pdf">Chopin Konzerte</a>
						</div>	
						Orgelstiftung, Elztalmuseum, Gemeindezentrum St. Margarethen, Waldkirch.
						<ul>
						<li>Die 4 Scherzi, die 4 Balladen</li>
						<li>Sämtliche Etuden</li>
						<li>Die Impromptus, die Preludes</li>
						<li>14 Walzer, die Barcarolle,die Fantasie, die Berceuse</li>
						<li>Die 3 Sonaten</li>
						<li>Ausgewählte Polonaisen,Mazurken und Nocturnes</li>
						
						</ul>
						</div>
						<div class="col-md-2">
					</div>
						
						</div>	
						
						<?php print foot();?>
                    </div>
                </div>
            </div>
        </div>        <!-- /#page-content-wrapper -->
    </div>    <!-- /#wrapper -->

	<?php  print endPage();?>
 </body>
</html>
