<?

abstract class Image_Abstract
{
	protected $_maxSize = 2048000;
	
	protected $_maxWitdh = null;
	
	protected $_maxHeight = null;
	
	protected function _imageCreateFrom ($image)
	{
		$img = getimagesize($image);
		
		if($img["mime"] == "image/jpeg") 
		{
			return imagecreatefromjpeg($image);
		}
		elseif ($img["mime"] == "image/gif") 
		{
			return imagecreatefromgif($image);		
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