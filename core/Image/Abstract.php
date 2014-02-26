<?php

abstract class Image_Abstract
{
	protected $_maxSize = 2048000;
	
	protected $_maxWitdh = null;
	
	protected $_maxHeight = null;
	
	protected function _imageCreateFrom ($image)
	{
		$img = getimagesize($image);						 //	var_dump(getimagesize($src-image   ));						
																 //	array (size=7)		
		if($img["mime"] == "image/jpeg")							 //	0 => int 350		- šířka
		{															 //	1 => int 200		- výška
			return imagecreatefromjpeg($image);						 //	2 => int 2			- typ obrázku (jedna z konstant IMAGETYPE_XXX)
		}															 //	3 => string 'width="350" height="200"' (length=24)
		elseif ($img["mime"] == "image/gif")						 //	'bits' => int 8 		= počet bitů pro každou barvu
		{															 //	'channels' => int 3		- 3 pro RGB obrázky a 4 pro CMYK
			return imagecreatefromgif($image);						 //	'mime' => string 'image/jpeg' (length=10)		
		}
		elseif ($img["mime"] == "image/png") 				//print_r(get_defined_constants());    
		{													// - vypíše všechny konstanty definované v php (je jich opravdu mnoho)	
			return imagecreatefrompng($image);				//And then look for constants prefixed with IMAGETYPE_.	
		}													//On my PHP 5.3 installation I got these values:			
		else
		{
			return false;
		}
	}
																				/*	[IMAGETYPE_GIF] => 1
																					[IMAGETYPE_JPEG] => 2
																					[IMAGETYPE_PNG] => 3
																					[IMAGETYPE_SWF] => 4
																					[IMAGETYPE_PSD] => 5
																					[IMAGETYPE_BMP] => 6
																					[IMAGETYPE_TIFF_II] => 7
																					[IMAGETYPE_TIFF_MM] => 8
																					[IMAGETYPE_JPC] => 9
																					[IMAGETYPE_JP2] => 10
																					[IMAGETYPE_JPX] => 11
																					[IMAGETYPE_JB2] => 12
																					[IMAGETYPE_SWC] => 13
																					[IMAGETYPE_IFF] => 14
																					[IMAGETYPE_WBMP] => 15
																					[IMAGETYPE_JPEG2000] => 9
																					[IMAGETYPE_XBM] => 16
																					[IMAGETYPE_ICO] => 17
																					[IMAGETYPE_UNKNOWN] => 0
																					[IMAGETYPE_COUNT] => 18 */	
	protected function _getFileExtension ($mime_type)
	{
		if($mime_type == "image/jpeg") 
		{
			return "jpg";
		}
		elseif ($mime_type == "image/gif") 
		{
			return "gif";
		}
		elseif ($mime_type == "image/png") 
		{
			return "png";
		}
		elseif ($mime_type == "application/x-shockwave-flash") 
		{
			return "swf";
		}
		else 
		{
			return false;
		}
	}
}