<?php
	$source_image = imagecreatefromjpeg("img/Alban6.JPG");
	if ($source_image ==false)
	{   
		print "Source image didnt load";
	}
	else
	{
		$source_imagex = imagesx($source_image);
		if ($source_imagex ==false)
		{
			print "imagesx failed<br/>";
		}
		$source_imagey = imagesy($source_image);
		if ($source_imagey==false)
		{
			print "imagesy   failed<br/>";
		}
		 
		$dest_imagex = 300;
		$dest_imagey = $source_imagey * $dest_imagex/$source_imagex;
		$dest_image = imagecreatetruecolor($dest_imagex, $dest_imagey);
		imagecopyresampled($dest_image, $source_image, 0, 0, 0, 0, $dest_imagex, 
 		      $dest_imagey, $source_imagex, $source_imagey);
		imagejpeg($dest_image,'http//www.chorltonlittlegems.co.uk/ed/img/Alban-new.jpg',80);
	}
?>

