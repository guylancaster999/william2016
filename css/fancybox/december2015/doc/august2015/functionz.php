<?php
function fb_init()
{ return '<div id="fb-root"></div>
<script>(function(d, s, id) 
{ var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, "script", "facebook-jssdk"));</script>';
}
function fb_button()
{
	return '<div class="fb-share-button" data-href="http://cuthbertson.de" data-layout="button_count">
	        </div>';	
}
function count_digits($s)
{$ctr=0;
for ($i=0;$i<=strlen($s);$i++)
	{$c=substr($s,$i,1);
	if ($c>="0" && $c<="9")
	 {$ctr++;}
	}
	return $ctr;
}

function count_letters($s)
{$ctr=0;
for ($i=0;$i<=strlen($s);$i++)
	{$c=substr($s,$i,1);
	if (($c>="A" && $c<="Z")||($c>="a" && $c<="z"))
	   {$ctr++;}
	}
	return $ctr;
}

function greyout($f1,$f2)
{$ret=  ($f1==$f2 ? '<span class="gr">'.$f1.'</span>' : $f1 );
return $ret;}

function head($lan="de",$scrn)
{
	$ret= '<!DOCTYPE html>';
    switch ($lan)
	{
	   case "de":
    $ret.='<html lang="de">
	<head>
  	<meta charset="utf-8"/> 
   	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
   	<meta name="viewport" content="width=device-width, initial-scale=1" />
   	<meta name="author" content="Guy Lancaster" />
   	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" /> 
   	<link rel="icon" href="favicon.ico" type="image/x-icon" /> ';
    $ret.='<title>William Cuthbertson klassischer Pianist - '.$scrn.'</title>';
    $ret.='<meta name="keywords" content="Piano, Klavier, Chopin, Beethoven, William, Cuthbertson, Waldkirch, Konzerte,'.$scrn.' " />';
	$ret.='<meta name="description" content="William Cuthbertson - Pianist, Komponist, Lehrer, Composer, Teacher,'.$scrn.' " />';
		break;
	
	case "ch":

$ret.=' <html lang="zh">
 <head>
  <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Guy Lancaster" />
   <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" /> 
   <link rel="icon" href="favicon.ico" type="image/x-icon" /> ';
    $ret.='<title>William Cuthbertson Classical Pianist - '.$scrn.'</title>';
	$ret.='<meta name="keywords" content=" 肖邦，贝多芬,   钢琴,  作曲家,  教师, Piano, Klavier, Chopin, Beethoven, William, Cuthbertson, Waldkirch, Konzerte,'.$scrn.' " />';
	$ret.='<meta name="description" content="William Cuthbertson - Classical Pianist, Composer, Teacher,'.$scrn.' " />';
 	break;
	
	default:
	$ret.='<html lang="en">
    <head>
   <meta charset="utf-8"/>
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1" /> 
   <meta name="author" content="Guy Lancaster" />
   <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" /> 
   <link rel="icon" href="favicon.ico" type="image/x-icon" /> ';
  $ret.='<title>William Cuthbertson - Classical Pianist - '.$scrn.'</title>';   
  $ret.='<meta name="keywords" content="Piano, Chopin, Beethoven, William, Cuthbertson, Waldkirch, Concerts,'.$scrn.' " />';    
  $ret.='<meta name="description" content="William Cuthbertson - Pianist, Accompanyist, Composer, Teacher,'.$scrn.' " />';    
    }
	$ret.="<link href='http://fonts.googleapis.com/css?family=Old+Standard+TT:400,700' rel='stylesheet' type='text/css'>";
	$ret.=' <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">';
    $ret.='<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>';
	$ret.='<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="css/sidebar.css"/>';
   $ret.=fb_init();
   $ret.='</head>';
  return $ret;
	}
 
function topRight($e="index_e.php",$d="index.php",$c="index_ch.php")
{
	$ret ='<div class="row">
           <div class="col-sm-2">
		    <div class="dropdown langswap">'.langs($e,$d,$c).'</div>';
	$ret.='</div>';		
	$ret.='<div class="col-sm-8 col-8 col-lg-8 col-md-8"><h1>William Cuthbertson</h1></div>';
    $ret.='<div class="col-sm-2 col-2 col-md-2 col-lg-2 tog" >'.toggle().'</div>
          </div>';
	$ret.="<a id='top'></a>";
   print $ret;
}

function langs($e,$d,$c)
{
	$ret='<a href="http://cuthbertson.de/'.$e.'" title="English"><img src="img/english.gif" alt="English"   height="22"/></a><a href="http://cuthbertson.de/'.$c.'" title="Chinese"><img src="img/chinese.GIF" alt="Chinese"   height="22"/></a><a href="http://cuthbertson.de/'.$d.'" title="German"><img src="img/deutsch.gif" alt="Deutsch"  height="22"/></a>';
 return $ret;
}
function toggle()
{
	$ret='<a href="#menu-toggle" class="btn btn-default" id="menu-toggle" title="Toggle Menu">';
	$ret.='<img src="img/menu.jpg"  alt="Toggle menu"/>';
	$ret.='</a>';
	return $ret;	
}

function menu($lan,$scrn)
{
	$ret='<ul class="sidebar-nav">';
	
switch ($lan)
{case 'ch':
    $ret.='<li><a href="http://cuthbertson.de/index_ch.php" title="设为首页">'.greyout('设为首页',$scrn).'</a></li>';
     $ret.='<li><a href="http://cuthbertson.de/program_ch.php" title="节目">'.greyout('节目',$scrn).'</a></li>
     <li><a href="http://cuthbertson.de/repertoire_ch.php" title="剧目">'.greyout('剧目',$scrn).'</a></li>
    <li><a href="http://cuthbertson.de/teaching_ch.php" title="钢琴课程，辅导和伴奏">'.greyout('钢琴课程',$scrn).'</a></li>
    <li><a href="http://cuthbertson.de/masterclasses_ch.php" title="大师班">'.greyout('大师班',$scrn).'</a></li>
     <li><a href="http://cuthbertson.de/concert_ch.php" title="音乐会">'.greyout('音乐会',$scrn).' </a></li>
    <li><a href="http://cuthbertson.de/video_ch.php" title="视频">'.greyout('视频',$scrn).'</a></li>
    <li><a href="http://cuthbertson.de/presse_ch.php" title="媒体评价">'.greyout('媒体评价',$scrn).'</a></li>
    <li><a href="http://cuthbertson.de/foto_ch.php" title="照片">'.greyout('照片',$scrn).'</a></li>
    <li><a href="http://cuthbertson.de/bilde_ch.php" title="速写">'.greyout('速写',$scrn).'</a></li>
   <li><a href="http://cuthbertson.de/bio_ch.php" title="生平经历">'.greyout('生平经历',$scrn).' </a></li>
    <li><a href="http://cuthbertson.de/links_ch.php" title="链接">'.greyout('链接',$scrn).'</a></li>
    <li><a href="http://cuthbertson.de/kontakt_ch.php" title="联系">'.greyout('联系',$scrn).'</a></li> '; 
   break;

case 'de':
     $ret.='<li><a href="http://cuthbertson.de/index.php" title="Homepage">'.greyout('Homepage',$scrn).'</a></li>';
     $ret.='<li><a href="http://cuthbertson.de/program.php" title="Program">'.greyout('Program',$scrn).'</a></li>
   <li><a href="http://cuthbertson.de/repertoire.php" title="Repertoire">'.greyout('Repertoire',$scrn).'</a></li>
   <li><a href="http://cuthbertson.de/teaching.php" title="Klavierunterricht, Coaching  und Begleitung">'.greyout('Unterricht',$scrn).'</a></li>
   <li><a href="http://cuthbertson.de/kinder.php"   title="Klavierunterricht f&uuml; Kinder">'.greyout('Kinder',$scrn).'</a></li>
   <li><a href="http://cuthbertson.de/meisterkurse.php" title="Meisterkurse">'.greyout('Meisterkurs',$scrn).'</a></li>
   <li><a href="http://cuthbertson.de/concert.php" title="Konzerte">'.greyout('Konzerte',$scrn).'</a></li>
   <li><a href="http://cuthbertson.de/video.php" title="Youtube Video">'.greyout('Video',$scrn).'</a></li>
   <li><a href="http://cuthbertson.de/presse.php" title="Presse">'.greyout('Presse',$scrn).'</a></li>
   <li><a href="http://cuthbertson.de/foto.php" title="Fotografien">'.greyout('Fotografien',$scrn).'</a></li>
   <li><a href="http://cuthbertson.de/bilde.php" title="Skizzen">'.greyout('Skizzen',$scrn).'</a></li>
   <li><a href="http://cuthbertson.de/bio.php" title="Biographie">'.greyout('Biographie',$scrn).' </a></li>
  <li><a href="http://cuthbertson.de/links.php" title="Links">'.greyout('Links',$scrn).'</a></li>
    <li><a href="http://cuthbertson.de/kontakt.php" title="Kontakt">'.greyout('Kontakt',$scrn).'</a></li> '; 
     break;
	
case 'en':
  $ret.='<li><a href="http://cuthbertson.de/index_e.php" title="Homepage">'.greyout('Homepage',$scrn).'</a></li>';
     $ret.='<li><a href="http://cuthbertson.de/program_e.php" title="Program">'.greyout('Programme',$scrn).'</a></li>
   <li><a href="http://cuthbertson.de/repertoire_e.php" title="Repertoire">'.greyout('Repertoire',$scrn).'</a></li>
   <li><a href="http://cuthbertson.de/teaching_e.php" title="teaching, coaching &amp; accompanying">'.greyout('Teaching',$scrn).'</a></li>
   <li><a href="http://cuthbertson.de/masterclasses_e.php" title="Master Class">'.greyout('Master Class',$scrn).'</a></li>
   <li><a href="http://cuthbertson.de/concert_e.php" title="Concerts">'.greyout('Concerts',$scrn).' </a></li>
   <li><a href="http://cuthbertson.de/video_e.php" title="Video">'.greyout('Video',$scrn).'</a></li>
   <li><a href="http://cuthbertson.de/presse_e.php" title="Press Reviews">'.greyout('Press',$scrn).'</a></li>
    <li><a href="http://cuthbertson.de/foto_e.php" title="Photographs">'.greyout('Photographs',$scrn).'</a></li>
   <li><a href="http://cuthbertson.de/bilde_e.php" title="Sketches">'.greyout('Sketches',$scrn).'</a></li>
    <li><a href="http://cuthbertson.de/bio_e.php" title="Musical Biography">'.greyout('Biography',$scrn).' </a></li>
    <li><a href="http://cuthbertson.de/links_e.php" title="links">'.greyout('Links',$scrn).'</a></li>
   <li><a href="http://cuthbertson.de/kontakt_e.php" title="Contact Details">'.greyout('Contact',$scrn).'</a></li>';
}
$ret.="</ul>";
return $ret;
}
function  linkedPhoto($txt,$pic,$album,$fromUrl,$lan)
{
   $ret ='<a href="foto_large.php';
   $ret.='?lan='.$lan;
   $ret.='&amp;album='.$album;
   $ret.='&amp;photoTtl='.$txt;
   $ret.='&amp;fromUrl='.$fromUrl;
   $ret.='&amp;photoFile='.$pic;
   $ret.='">';
   $ret.= $txt;
   $ret.='</a>';
  print $ret; 
}

function exp_title($ttl,$lan="en")
{
	$ret=' title="'.$ttl.' - ';
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
function  photo($pic,$pic_tn,$album,$photoTtl,$fromUrl,$lan,$cls="")
{
   $photoTtl=respace($photoTtl);
   $ret ='<a href="foto_large.php';
   $ret.='?lan='.$lan;
   $ret.='&amp;album='.$album;
   $ret.='&amp;photoTtl='.$photoTtl;
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
     $ttl=respace($ttl);
     $ret.= '<a href="'.$url.'" ';
	 $ret.=' title="'.$ttl.'" ';
     $ret.='>';
	 $ret.= '<img src="img/'.$pic.'" alt="'.$ttl.'" class="img-responsive img-rounded pictureright" />';
     $ret.= '</a>';
	 print $ret; 
}
function respace($c)
{
	return str_replace("%20", " ",$c);
}

function  photocenter($pic,$ttl)
{
	 $ttl=respace($ttl);
     $ret.= '<a href="#" title="'.$ttl.'" >';
	 $ret.= '<img src="img/'.$pic.'" alt="'.$ttl.'" class="img-responsive img-rounded picturecenter" />';
     $ret.= '</a>';
	 print $ret; 
}
function  photorightnolink($pic,$ttl)
{
	 $ttl=respace($ttl);
     $ret.= '<a href="#" title="'.$ttl.'" >';
	 $ret.= '<img src="img/'.$pic.'" alt="'.$ttl.'" class="img-responsive img-rounded picturerightfs" />';
     $ret.= '</a>';
	 print $ret; 
}
function  photonolink($pic,$ttl)
{
     $ttl=respace($ttl);
     $ret.='<a href="#" ';
	 $ret.=' title="'.$ttl.'" ';
     $ret.=' >';
	 $ret.= '<img src="img/'.$pic.'" alt="'.$ttl.'" class="img-responsive img-rounded piccenter" >';
     $ret.= '</a>';
	 print $ret; 
}
function  photorightfs($pic,$pic_tn,$album, $photoTtl, $fromUrl, $lan)
{ 
  $photoTtl=respace($photoTtl);
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
$photoTtl=respace($photoTtl);
     $ret ='<a href="foto_large.php';
  $ret.='?lan='.$lan;
  $ret.='&amp;album='.$album;
  $ret.='&amp;photoTtl='.$photoTtl;
  $ret.='&amp;fromUrl='.$fromUrl;
  $ret.='&amp;photoFile='.$pic;
  $ret.='" ';
  $ret.=exp_title($photoTtl,$lan);
  $ret.= '>';  
  $ret.= '<img src="img/'.$pic_tn.'" class="img-responsive img-rounded pictureright" alt="'.$photoTtl.'" />';
  $ret.='</a>'; 
  print $ret; 
}
function foot()
{$qt="'";
$ret='<br class="brclear"/>'.fb_button().'<div class="top"><a href="#top" title="top of page"> <img src="img/top.jpeg" alt="top of page" class="uparrow"/></a></div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
   <script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['.$qt.'_setAccount'.$qt.','.$qt.'UA-3773540-43'.$qt.']);
  _gaq.push(['.$qt.'_trackPageview'.$qt.']);
  (function() {
    var ga = document.createElement('.$qt.'script'.$qt.'); ga.type = '.$qt.'text/javascript'.$qt.'; 
	ga.async = true;
    ga.src = ('.$qt.'https:'.$qt.' == document.location.protocol ? '.$qt.'https://ssl'.$qt.' : '.$qt.'http://www'.$qt.') + '.$qt.'.google-analytics.com/ga.js'.$qt.';
   var s = document.getElementsByTagName('.$qt.'script'.$qt.')[0]; s.parentNode.insertBefore(ga, s);
  })();
  
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    }); 
 
</script>';
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


?>