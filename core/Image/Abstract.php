<?

abstract class Image_Abstract
{
	protected $_maxSize = 2048000;
	
	protected $_maxWitdh = null;
	
	protected $_maxHeight = null;
	
	protected function _imageCreateFrom ($image)
	{
		$img = getimagesize($image);						 //	var_dump(getimagesize($src-image));						
																 //	array (size=7)		
		if($img["mime"] == "image/jpeg")							 //	0 => int 350		- šířka
		{															 //	1 => int 200		- výška
			return imagecreatefromjpeg($image);						 //	2 => int 2			- typ obrázku (jedna z konstant IMAGETYPE_XXX)
		}															 //	3 => string 'width="350" height="200"' (length=24)
		elseif ($img["mime"] == "image/gif")						 //	'bits' => int 8 		= počet bitů pro každou barvu
		{															 //	'channels' => int 3		- 3 pro RGB obrázky a 4 pro CMYK
			return imagecreatefromgif($image);						 //	'mime' => string 'image/jpeg' (length=10)		
		}
		elseif ($img["mime"] == "image/png") 
		{
			return imagecreatefrompng($image);		
		}
		else
		{
			return false;
		}
	}
	
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