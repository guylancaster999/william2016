<?php 
require "funcz/functionz.php";
print head("de","homepage");
?>
<body>	
            <?php/* print  menu("de","Homepage");*/ ?>
			<?php topBit("index_e.php","index.php","index_ch.php","Homepage");?>
                <?php photocenter("frontpagephoto.jpg", "William%20Cuthbertson%20am%20Klavier%201.3.2010%20-%20Photo%20by%20Hans%20Jürgen%20Kugler%201.3.2010");?>
               <table >
     			<tr>
					<td>
	    	           	<ul>
                			<li>Am 25 Oktober 2015, findet  in Waldkirch<a href="concert_e.php">  ein Konzert</a> mit William Cuthbertson statt. 
				            Zu hören sind Werken von Skrjabin und Rachmaninow.</li>
                	   </ul>
                	</td>
                </tr>
                <tr>
                	<td>
                		<ul>
                		   <li>Vom 31.August – 5.September findet  in Waldkirch <a href="masterclasses_e.php">der  16. Internationalen Meisterkurs für Klavier</a> statt, den William Cuthbertson in diesem Jahr geben wird. </li>
                		</ul>
					</td>
                </tr>
                </table>
                <?php print foot(); ?>
</body>
</html>