<?php
function count_letters($s)
{
	$s=strtoupper($s);
	$ret = 0;
	for($i=0;$i<strlen($s);$i++)
	{
		$c = substr($s,$i,1);
		$ret+=($c>="A" && $c<="Z" ? 1 : 0);
	}
	return $ret;
}
function count_digits($s)
{	
	$ret = 0;
	for($i=0; $i<strlen($s); $i++)
	{
		$c=substr($s,$i,1);
		$ret+=($c>="0" && $c<="9" ? 1 : 0);
	}
	return $ret;
}
function topRight()
{
 	$ret ='<div class="row">
		<div class="col-sm-1 col-1 col-md-1 col-lg-1 ">
			<a href="#menu-toggle" class="btn btn-default" id="menu-toggle" title="Hide/Show menu">Menu</a>
 		</div> 
	  <div class="col-11 col-sm-11 col-md-11 col-lg-11">
			<h1>William Cuthbertson</h1>
		 </div>
		<a id="top"></a>
		</div>';
     print $ret;
}
function addSp($x)
 {
	return str_replace ("%20"," ",$x); 
 }
 function removeSp($x)
 {
	return str_replace (" ","%20",$x);
 }
 function greyout($f1,$f2)
{
	return  ($f1==$f2 ? '<span class="gr">'.$f1.'</span>' : '<span class="notgr">'.$f1.'</span>' );
}
function abutton($url,$ttl,$scrn)
{
	$tgt='http://cuthbertson.de/'.$url;
	$ret= '<a href="'.$tgt.'" title="'.$ttl.'" id="'.$ttl.'" ';
	$ret.= '>';
	$ret.= greyout($ttl,$scrn);
	$ret.= '</a><br/>';
	return $ret;
}
function menu($lan="de",$scrn="",$pgen="index_e.php",$pgde="index.php",$pgch="index_ch.php")
{
	$ret="<BR/><br/>";
	switch ($lan)
	{case 'ch':
  $ret.=abutton('index_ch.php','设为首页',$scrn);
  $ret.=abutton('program_ch.php','节目',$scrn);
  $ret.=abutton('repertoire_ch.php','剧目',$scrn);
  $ret.=abutton('teaching_ch.php','钢琴课程',$scrn);
  $ret.=abutton('masterclasses_ch.php','大师班',$scrn);
  $ret.=abutton('concert_ch.php','音乐会',$scrn);
  $ret.=abutton('video_ch.php','视频',$scrn);
  $ret.=abutton('presse_ch.php','媒体评价',$scrn);
  $ret.=abutton('foto_ch.php','照片',$scrn);
  $ret.=abutton('bilde_ch.php','速写',$scrn);
  $ret.=abutton('bio_ch.php','生平经历',$scrn);
  $ret.=abutton('links_ch.php','链接',$scrn);
  $ret.=abutton('kontakt_ch.php','联系',$scrn);
  $ret.=abutton($pgen,'English',"English");
  $ret.=abutton($pgde,'Deutsch',"Deutsch");
  break;
case 'de':
   $ret.=abutton('index.php','Homepage',$scrn);
   $ret.=abutton('program.php','Program',$scrn);
   $ret.=abutton('repertoire.php','Repertoire',$scrn);
   $ret.=abutton('teaching.php','Unterricht',$scrn);
   $ret.=abutton('kinder.php','Kinder',$scrn);
   $ret.=abutton('meisterkurse.php','Meisterkurs',$scrn);
   $ret.=abutton('concert.php','Konzerte',$scrn);
   $ret.=abutton('video.php','Video',$scrn);
   $ret.=abutton('presse.php','Presse',$scrn);
   $ret.=abutton('foto.php','Fotografien',$scrn);
   $ret.=abutton('bilde.php','Skizzen',$scrn);
   $ret.=abutton('bio.php','Biographie',$scrn);
   $ret.=abutton('links.php','Links',$scrn);
   $ret.=abutton('kontakt.php','Kontakt',$scrn);
   $ret.=abutton($pgen,'English',"English");
   $ret.=abutton($pgch,'中文',"Chinese");
   break;

case 'en':
  $ret.=abutton('index_e.php','Homepage',$scrn);
  $ret.=abutton('program_e.php','Programme',$scrn);
  $ret.=abutton('repertoire_e.php','Repertoire',$scrn);
  $ret.=abutton('teaching_e.php','Teaching',$scrn);
  $ret.=abutton('masterclasses_e.php','Masterclass',$scrn);
  $ret.=abutton('concert_e.php','Concerts',$scrn);
  $ret.=abutton('video_e.php','Video',$scrn);
  $ret.=abutton('presse_e.php','Press',$scrn);
  $ret.=abutton('foto_e.php','Photographs',$scrn);
  $ret.=abutton('bilde_e.php','Sketches',$scrn);
  $ret.=abutton('bio_e.php','Biography',$scrn);
  $ret.=abutton('links_e.php','Links',$scrn);
  $ret.=abutton('kontakt_e.php','Contact',$scrn);
  $ret.=abutton($pgde,'Deutsch',"Deutsch");
  $ret.=abutton($pgch,'中文',"Chinese");
 }
$ret.='<br/>';
$ret.="<div class='searchText'>";
 
switch($lan)
{
	case "de":$ret.="Suche";
	break;
	case "en":$ret.="Search";
	break;
	default:$ret.="搜";
}
$ret.='</div>';
$ret.="<form action='search.php' method='post'>
<input type='hidden' name='lan' id='lan' value='".$lan."'/>
<input type='text' id='s' name='s' size='10' class='searchbox'  required /></form>
<br/>";
print $ret;
	return;
}
function head($lan="de",$scrnTtl="",$url="")
{
$ret= '<!DOCTYPE html>';
   switch ($lan)
	{
	   case "de":
       $ret.='<html lang="de">';
	   break;
		case "ch":
		$ret.='<html lang="zh">';
 	   break;
	   default:
		$ret.='<html lang="en">';
	 }
$ret.='<head>';
$ret.='<meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1"/>
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   <link href="css/simple-sidebar.css" rel="stylesheet"/>';
 
	$ret.='<meta name="author" content="Guy Lancaster" />
   	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
   	<link rel="icon" href="favicon.ico" type="image/x-icon" />
   <link rel="stylesheet" href="css/simple-sidebar.css"/>';
 
 if (strlen($url)>0)
	{
		$ret.='<link rel="alternate" media="only screen and (max-width: 640px)" href="http://cuthbertson.de/m.'.$url.'" />';
	}
	switch ($lan)
	{
	   case "de":
		$ret.='<title>William Cuthbertson klassischer Pianist - '.$scrn.'</title>';
		$ret.='<meta name="keywords" content="Piano, Klavier, Chopin, Beethoven, William, Cuthbertson, Waldkirch, Konzerte,'.$scrn.' " />';
		$ret.='<meta name="description" content="William Cuthbertson - Pianist, Komponist, Lehrer, Composer, Teacher,'.$scrn.' " />';
		break;
		case "ch":
		$ret.='<title>William Cuthbertson Classical Pianist - '.$scrn.'</title>';
		$ret.='<meta name="keywords" content=" 肖邦，贝多芬,   钢琴,  作曲家,  教师, Piano, Klavier, Chopin, Beethoven, William, Cuthbertson, Waldkirch, Konzerte,'.$scrn.' " />';
		$ret.='<meta name="description" content="William Cuthbertson - Classical Pianist, Composer, Teacher,'.$scrn.' " />';
		break;
		default:
		$ret.='<title>William Cuthbertson - Classical Pianist - '.$scrn.'</title>';
		$ret.='<meta name="keywords" content="Piano, Chopin, Beethoven, William, Cuthbertson, Waldkirch, Concerts,'.$scrn.' " />';
		$ret.='<meta name="description" content="William Cuthbertson - Pianist, Accompanyist, Composer, Teacher,'.$scrn.' " />';
    }
	$ret.="<link href='http://fonts.googleapis.com/css?family=Old+Standard+TT:400,700' rel='stylesheet' type='text/css'/>";
	$ret.="<script> 
			$(document).ready(function(){
				$('#topButton').animate({left: '550px'},'slow');
			})
		</script> ";
	$ret.='</head>';
    return  $ret;
 }	 
function  linkedPhoto($txt,$pic,$album,$fromUrl,$lan)
{
   $ret ='<a href="foto_large.php';
   $ret.='?lan='.$lan;
   $ret.='&amp;album='.$album;
   $ret.='&amp;photoTtl='.removeSp($txt);
   $ret.='&amp;fromUrl='.$fromUrl;
   $ret.='&amp;photoFile='.$pic;
   $ret.='">';
   $ret.= $txt;
   $ret.='</a>';
  print $ret;
}
function exp_title($ttl,$lan="en")
{
	$ret=' title="'.removeSp($ttl).' - ';
    switch ($lan)
   	{
		case "de":
     	$ret.='Klicken für Bild in voller Größe zu sehen';
   		break;

		case "ch":
     	$ret.='点击查看原图';
   		break;
		default:
     	$ret.='Click to see full size';
	}
   	$ret.='" ';
	return $ret;
}
 function displayPic($i,$fromUrl,$lan)
{
	$gpics		= $_SESSION["gpics"];
	$x 			= json_decode($gpics,true);
	$sz			= count($x["gallery"]);
	$y 			= $x["gallery"][$i];
	$picSmall	= $y["picSmall"];
	$picLarge	= $y["picLarge"];
	$picTtl		= $y["picTtl"];
	$grpTtl		= $y["grpTtl"];
	$photoTtl	= removeSp($photoTtl);
    $ret		 ='<a href="fotoLarge.php';
    $ret		.='?lan='.$lan;
    $ret.='&amp;album='.$grpTtl;
    $ret.='&amp;photoPtr='.$i ;
   $ret.='&amp;fromUrl='.$fromUrl;
   $ret.='" ';
   $ret.=exp_title($picTtl,$lan);
   $ret.='>';
   $ret.= '<img src="img/'.$picSmall.'" alt="'.$picTtl.'" class="img-responsive img-rounded" />';
   $ret.='</a>';
  print $ret;
}
function  photo($pic,$pic_tn,$album,$photoTtl,$fromUrl,$lan,$cls="")
{
   $photoTtl = removeSp($photoTtl);
   $ret ='<a href="foto_large.php';
   $ret.='?lan='.$lan;
   $ret.='&amp;album='.$album;
   $ret.='&amp;photoTtl='. $photoTtl;
   $ret.='&amp;fromUrl='.$fromUrl;
   $ret.='&amp;photoFile='.$pic;
   $ret.='" ';
   $ret.=exp_title($photoTtl,$lan);
   $ret.='>';
   $ret.= '<img src="img/'.$pic_tn.'" alt="'.$photoTtl.'" class="img-responsive  img-rounded '.$cls.'">';
   $ret.='</a>';
  print $ret;
}
function  photorightlinked($pic,$ttl,$url)
{
     $ttl=removeSp($ttl);
     $ret.= '<a href="'.$url.'" ';
	 $ret.=' title="'.$ttl.'" ';
     $ret.='>';
	 $ret.= '<img src="img/'.$pic.'" alt="'.$ttl.'" class="img-responsive img-rounded picturerightfs" />';
     $ret.= '</a>';
	 print $ret;
}

function  photocenter($pic,$ttl)
{
	 $ttl=removeSp($ttl);
     $ret.= '<a href="#" title="'.$ttl.'" >';
	 $ret.= '<img src="img/'.$pic.'" alt="'.$ttl.'" class="img-responsive img-rounded picturecenter" />';
     $ret.= '</a>';
	 print $ret;
}
function  photorightnolink($pic,$ttl)
{
	 $ttl=removeSp($ttl);
     $ret.= '<a href="#" title="'.$ttl.'" >';
	 $ret.= '<img src="img/'.$pic.'" alt="'.$ttl.'" class="picturerightfs img-responsive img-rounded " />';
     $ret.= '</a>';
	 print $ret;
}
function  photonolink($pic,$ttl)
{
     $ttl=removeSp($ttl);
     $ret.='<a href="#" ';
	 $ret.=' title="'.$ttl.'" ';
     $ret.=' >';
	 $ret.= '<img src="img/'.$pic.'" alt="'.$ttl.'" class="img-responsive img-rounded piccenter" >';
     $ret.= '</a>';
	 print $ret;
}
function  photorightfs($pic,$pic_tn,$album, $photoTtl, $fromUrl, $lan)
{
  $photoTtl=removeSp($photoTtl);
   $ret ='<a href="foto_large.php';
  $ret.='?lan='.$lan;
  $ret.='&amp;album='.$album;
  $ret.='&amp;photoTtl='.$photoTtl;
  $ret.='&amp;fromUrl='.$fromUrl;
  $ret.='&amp;photoFile='.$pic;
  $ret.='" ';
  $ret.=exp_title($photoTtl,$lan);
  $ret.= '>';
  $ret.= '<img src="img/'.$pic_tn.'" class="img-responsive img-rounded picturerightfs" alt="'.$photoTtl.'" />';
  $ret.='</a>';
  print $ret;
}
function  photoright($pic,$pic_tn,$album, $photoTtl, $fromUrl, $lan)
{
	$photoTtl=removeSp($photoTtl);
    $ret ='<a href="foto_large.php';
	$ret.='?lan='.$lan;
	$ret.='&amp;album='.$album;
	$ret.='&amp;photoTtl='.$photoTtl;
	$ret.='&amp;fromUrl='.$fromUrl;
	$ret.='&amp;photoFile='.$pic;
	$ret.='" ';
  $ret.=exp_title($photoTtl,$lan);
  $ret.= '>';
  $ret.= '<img src="img/'.$pic_tn.'" class="img-responsive img-rounded picturerightfs" alt="'.$photoTtl.'" />';
  $ret.='</a>';
  print $ret;
}
function foot()
{
	$ret='<br class="brclear"/>
	<div id="topButton" style="position:absolute;">
		<a href="#top" title="top of page">
			<img src="img/top.jpeg" alt="top of page" />
		</a>
	</div>
<br/>';
return $ret;
}
 
function blank_line()
{
	print '<div class="row">
                <div class="col-sm-12">
              	   &nbsp;
                </div>
           </div>';
}
function endPage()
{
$ret='<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>';
	$qt="'";
	$ret.='<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['.$qt.'_setAccount'.$qt.','.$qt.'UA-3773540-43'.$qt.']);
  _gaq.push(['.$qt.'_trackPageview'.$qt.']);
  (function() {
    var ga = document.createElement('.$qt.'script'.$qt.'); ga.type = '.$qt.'text/javascript'.$qt.';
	ga.async = true;
    ga.src = ('.$qt.'https:'.$qt.' == document.location.protocol ? '.$qt.'https://ssl'.$qt.' : '.$qt.'http://www'.$qt.') + '.$qt.'.google-analytics.com/ga.js'.$qt.';
   var s = document.getElementsByTagName('.$qt.'script'.$qt.')[0]; s.parentNode.insertBefore(ga, s);
  })();
 </script>';
 
 return $ret;
return;
}