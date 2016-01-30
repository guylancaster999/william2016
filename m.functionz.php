<?php
function fb_init()
{ return '<div id="fb-root"></div>
<script>
(function(d, s, id) 
{ 
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4";
	fjs.parentNode.insertBefore(js, fjs);
}
	(document, "script", "facebook-jssdk"));
</script>';
}
function google_init($lang="en")
{ 
	 return '<script src="https://apis.google.com/js/platform.js" async defer></script>';
}
function google_button()
{
return '<div class="g-plusone" data-size="small" data-annotation="inline" data-width="180" data-href="http://cuthbertson.de">
		</div>';
}
function fb_button()
{
	return '<div class="fb-share-button" data-href="http://cuthbertson.de" data-layout="button_count">
			</div>';	
}
function twitter_button($lan)
{
	$ret='<a href="https://twitter.com/share" class="twitter-share-button" ';
	switch ($lan)
	{
		Case "en":
		$ret.=" data-url='http://cuthbertson.de/index_e.php'>Tweet</a>";
		break;
		
		Case "de":
		$ret.=" data-url='http://cuthbertson.de'>Tweet</a>";
		break;
		
		default:
		$ret.=" data-url='http://cuthbertson.de/ch'>Tweet</a>";
	}
	$ret.='<script>!function(d,s,id)
	     {
			 var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?"http":"https";
			if(!d.getElementById(id))
			{
				js=d.createElement(s);
				js.id=id;
				js.src=p+"://platform.twitter.com/widgets.js";
				fjs.parentNode.insertBefore(js,fjs);
			}
		}
	
	(document, "script", "twitter-wjs");
	</script>';
	return $ret;
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
{
	$ctr=0;
for ($i=0;$i<=strlen($s);$i++)
	{$c=substr($s,$i,1);
	if (($c>="A" && $c<="Z")||($c>="a" && $c<="z"))
	   {$ctr++;}
	}
	return $ctr;
}
function greyout($f1,$f2)
{
return  $f1;
//eturn  ($f1==$f2 ? '<span class="gr">'.$f1.'</span>' : '<span class="notgr">'.$f1.'</span>' );
}
function head($lan="de",$scrnTtl,$url="",$mbl="N")
{
	$ret= '<!DOCTYPE html>';
    switch ($lan)
	{
	   case "de":
       $ret.='<html lang="de">';
	   break;
		case "ch":
		$ret.=' <html lang="zh">';
 	   break;
	   default:
		$ret.=' <html lang="en">';
	 }
	$ret.='<head>
  	<meta charset="utf-8"/> 
   	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
   	<meta name="viewport" content="width=device-width, initial-scale=1" />
   	<meta name="author" content="Guy Lancaster" />
   	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" /> 
   	<link rel="icon" href="favicon.ico" type="image/x-icon" />';
    if (strlen($url)>0)
	{
		if ($mbl=="Y") 
		{
			$ret.='<link rel="alternate" media="only screen and (max-width: 640px)" href="http://cuthbertson.de/m.'.$url.'" >';
		}
		else
		{
			$ret.='<link rel="canonical" href="http://cuthbertson.de/'.$url.'" >';
		}
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
	$ret.='<meta name="viewport" content="width=device-width, initial-scale=1">
		   <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
		   <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		   <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>';
	$ret.="<link href='http://fonts.googleapis.com/css?family=Old+Standard+TT:400,700' rel='stylesheet' type='text/css'>";
	$ret.='<link rel="stylesheet" href="css/m.css">';
    $ret.=fb_init();
    $ret.=google_init($lan);
    $ret.='</head>';
    return $ret;
	}
 
function topRight($e="index_e.php",$d="index.php",$c="index_ch.php")
{
	$ret ='<div class="row">
           <div class="col-sm-2">'.langs($e,$d,$c).'</div>';
	$ret.='<div class="col-sm-8 col-8 col-lg-8 col-md-8"><h1>William Cuthbertson</h1></div>';
    $ret.='<div class="col-sm-2 col-2 col-md-2 col-lg-2 tog" >'.toggle().'</div>
          </div>';
	$ret.="<a id='top'></a>";
   print $ret;
}

function on($t)
{	
	$qt	="'";
    $ret =' onmouseover="location.assign('.$qt.$t.$qt.'); " ';
 	return ($ret);
}
function langs($e,$d,$c)
{   
    $e='http://cuthbertson.de/'.$e;
	$d='http://cuthbertson.de/'.$d;
	$c='http://cuthbertson.de/'.$c;
	$ret="<div class='langswap'>";
	$ret.='<a href="'.$e.'" title="English" ';
	$ret.= on($e);
	$ret.='>';
	$ret.='<img src="img/english.gif" alt="English" 	height="26"/>';
	$ret.='</a>';	
	$ret.='<a href="'.$c.'" title="Chinese" ';
	$ret.= on($c);
	$ret.='>';
    $ret.='<img src="img/chinese.GIF" alt="Chinese" height="26"/>';
	$ret.='</a>';	
	$ret.='<a href="'.$d.'" title="German" ';
	$ret.= on($d);
	$ret.='>';
    $ret.='<img src="img/deutsch.gif" alt="Deutsch"    height="26"/>';
	$ret.='</a>';
	$ret.="</div>";
 return $ret;
}
function toggle()
{
	$ret='<a href="#menu-toggle" class="btn btn-default" id="menu-toggle" title="Toggle Menu">';
	$ret.='<img src="img/menu.jpg"  alt="Toggle menu"/>';
	$ret.='</a>';
	return $ret;	
}
function abutton($url,$ttl,$scrn)
{
	$tgt='http://cuthbertson.de/'.$url;
	$ret= '<li><a href="'.$tgt.'" title="'.$ttl.'" id="'.$ttl.'" ';
/*	
	if($ttl !=$scrn)
	{
		$ret.= on($tgt);
	}
*/
	$ret.= '>';
	$ret.= greyout($ttl,$scrn);
	$ret.= '</a></li>';
	return $ret;
}
function menu($lan,$scrn)
{
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
   break;
   
case 'de':
	$ret='<div data-role="navbar" data-grid="d">
    <ul>';
   $ret.=abutton('m.index.php','Homepage',$scrn);
   $ret.=abutton('m.program.php','Program',$scrn);
   $ret.=abutton('m.repertoire.php','Repertoire',$scrn);
   $ret.=abutton('m.teaching.php','Unterricht',$scrn);
   $ret.=abutton('m.kinder.php','Kinder',$scrn);
   $ret.='</UL
   </DIV>
   <div data-role="navbar" data-grid="d">
    <ul>';
      $ret.=abutton('m.meisterkurse.php','Meisterkurs',$scrn);
   $ret.=abutton('m.concert.php','Konzerte',$scrn);
   $ret.=abutton('m.video.php','Video',$scrn);
   $ret.=abutton('m.presse.php','Presse',$scrn);
   $ret.=abutton('m.foto.php','Fotografien',$scrn);
   $ret.='</UL>
   </DIV>
   <div data-role="navbar" data-grid="d">
    <ul>'; 
	$ret.=abutton('m.bilde.php','Skizzen',$scrn);
   $ret.=abutton('m.bio.php','Biographie',$scrn);
   $ret.=abutton('m.links.php','Links',$scrn);
   $ret.=abutton('m.kontakt.php','Kontakt',$scrn);
      $ret.='</UL>
   </DIV>';
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
   $ret ='<a href="m.foto_large.php';
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
	 $ret.= '<img src="img/'.$pic.'" alt="'.$ttl.'" align="right" />';
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
	 $ret.= '<img src="img/'.$pic.'" alt="'.$ttl.'" class="picturecenter" />';
     $ret.= '</a>';
	 print $ret; 
}
function  photorightnolink($pic,$ttl)
{
	 $ttl=respace($ttl);
     $ret.= '<a href="#" title="'.$ttl.'" >';
	 $ret.= '<img src="img/'.$pic.'" alt="'.$ttl.'" align="right"  class="picturerightfs" />';
     $ret.= '</a>';
	 print $ret; 
}
function  photonolink($pic,$ttl)
{
     $ttl=respace($ttl);
     $ret.='<a href="#" ';
	 $ret.=' title="'.$ttl.'" ';
     $ret.=' >';
	 $ret.= '<img src="img/'.$pic.'" alt="'.$ttl.'" class="piccenter" >';
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
  $ret.= '<img src="img/'.$pic_tn.'" align="right" class="picturerightfs" alt="'.$photoTtl.'" />';
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
  $ret.= '<img src="img/'.$pic_tn.'" align="right" class="pictureright" alt="'.$photoTtl.'" />';
  $ret.='</a>'; 
  print $ret; 
}
function foot()
{
	$qt="'";
	$ret='<br/><div class="row">
		<div class="col-md-5">&nbsp;</div>
		<div class="col-md-2">
			<a href="#top" title="top of page"><img src="img/top.jpeg" alt="top of page" class="uparrow"/></a>
		</div>
		<div class="col-md-5">
			&nbsp;
		</div>
	</div>
<br/>
<br/>
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