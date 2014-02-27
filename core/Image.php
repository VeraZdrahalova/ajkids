<?php

require_once 'Image/Abstract.php';

class Image extends Image_Abstract
{
	protected $_dir;	
	protected $_maxWidth;
	protected $_maxHeight;
	protected $_prefix;
	
	protected $_id;
	protected $_name;
	
	function __construct($id = 0)
	{
		$this->_id = $id;
		
	}
		
/* ukázka deklarace pole f-cí array()
	$fruits = array (
			"fruits"  => array("a" => "orange", "b" => "banana", "c" => "apple"),
			"numbers" => array(1, 2, 3, 4, 5, 6),
			"holes"   => array("first", 5 => "second", "third")
	);
	var_dump($fruits);
		array (size=3)
			'fruits' =>
				array (size=3)
					'a' => string 'orange' (length=6)
					'b' => string 'banana' (length=6)
					'c' => string 'apple' (length=5)
			'numbers' =>
				array (size=6)
					0 => int 1
					1 => int 2
					2 => int 3
					3 => int 4
					4 => int 5
					5 => int 6
			'holes' =>
				array (size=3)
					0 => string 'first' (length=5)
					5 => string 'second' (length=6)
					6 => string 'third' (length=5)
*/
	
	/**
	 * @param file $image - $_FILES[NAZEV]['tmp_name']
	 * @param array $parameters - [
	 * 		0 => ['dir' => CESTA, 'size' => ['height' => VYSKA, 'width' => SIRKA], 'id' => JEDINECNY_NAZEV, 'prefix' => PREFIX]
	 * 		1 => ['dir' => CESTA, 'size' => ['height' => VYSKA, 'width' => SIRKA], 'id' => JEDINECNY_NAZEV, 'prefix' => PREFIX]
	 * ]
	 * @param int $size - velikost v bytech
	 */
	public function create($image, array $parameters = array(), $size = false)
	{
		$result = array();
		
		if ($size AND $size > 0) $this->_maxSize = $size * 1024;
		
		if(filesize($image) < $this->_maxSize) 			// int filesize ( string $filename )   - vrací v bytech velikost daného soub.,
{																			// - jen pro soub. do velikosti 2GB
			$velikost = getimagesize($image);
			$fileExtension = $this->_getFileExtension($velikost["mime"]);			
			if ($fileExtension == false) return false;
			
			if ($fileExtension != "swf")
			{
				$img = $this->_imageCreateFrom($image);
				if ($img == false) return false;
				
				$width = imagesx($img);
				$height = imagesy($img);
			}
			else 
			{
				$width = $velikost[0];
				$height = $velikost[1];
			}
			
		}
		else return false;
		
		$i = 0;		
		foreach ($parameters as $par)
		{
			if (isset($par["id"])) $this->_id = $par["id"];
			
			if (isset($par["size"]))
			{
				$this->_maxWidth = $par["size"]["width"];
				$this->_maxHeight = $par["size"]["height"];
			}
			
			if (isset($par["dir"])) $this->_dir = $par["dir"];
			
			if (isset($par["prefix"])) $this->_prefix = $par["prefix"];
			
			if (!$this->_name)
			{
				$dir = dir($this->_dir);	
				for($x = 0; $x < 99; $x++)
				{
					$dir->rewind();
					while($file = $dir->read()) 
					{
						$break = false;
						if ($file == "." OR $file == "..") continue;
						if (!eregi("^" . $this->_id, $file)) continue;				
					
		 				if ($file == $this->_id . "-" . $x . "." . $fileExtension OR ($file == $this->_id . "." . $fileExtension AND $x == 0))
		 				{
		 					$break = true;
		 					break;
		 				}
					}					
					
					if ($break == false AND $x == 0)
					{
						$this->_name = $this->_id . "." . $fileExtension;
						break;
					}
					elseif ($break == false)
					{
						$this->_name = $this->_id . "-" . $x . "." . $fileExtension;
						break;
					}
				}
				$dir->close();
			}
				
			$result[$i]["name"] = $this->_prefix . $this->_name;

			$path = $this->_dir . $this->_prefix . $this->_name;
			
			if ($width > $this->_maxWidth OR $height > $this->_maxHeight) 
			{
				$widthRatio = $this->_maxWidth / $width;
				$heightRatio = $this->_maxHeight / $height;
				$ratio = $widthRatio < $heightRatio ? $widthRatio : $heightRatio;
				
				$newWidth = $width * $ratio;
				$newHeight = $height * $ratio;
				
				/*if ($width >= $height AND ($width / $height) >= ($this->_maxWidth / $this->_maxHeight)) 
				{
					$newWidth 	= $this->_maxWidth;
					$percent 	= $newWidth / $width;
					$newHeight 	= round($height * $percent);
				}
				elseif ($height > $width OR ($width / $height) < ($this->_maxWidth / $this->_maxHeight)) 
				{
					$newHeight 	= $this->_maxHeight;
					$percent 	= $newHeight / $height;
					$newWidth 	= round($width * $percent);
				}*/
				
				if ($fileExtension != "swf")
				{
					if ($velikost["mime"] == "image/png")
					{
						$img2 = imagecreatetruecolor($newWidth, $newHeight);
						imagealphablending($img2, false);
						imagesavealpha($img2, true);
						$transparent = imagecolorallocatealpha($img2, 255, 255, 255, 127);
						imagefilledrectangle($img2, 0, 0, $newWidth, $newHeight, $transparent);
					}
					else $img2 = imagecreatetruecolor($newWidth, $newHeight);
					
					imagecopyresampled($img2, $img, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
				
					if($velikost["mime"] == "image/jpeg") 
					{
						$tmp_result = imagejpeg($img2, $path, 100);
					}
					elseif ($velikost["mime"] == "image/gif") 
					{
						$tmp_result = imagegif($img2, $path);	
					}
					elseif ($velikost["mime"] == "image/png") 
					{
						$tmp_result = imagepng($img2, $path);		
					}
					else 
					{
						return false;
					}
									
					imagedestroy($img2);
				}
				else 
				{
					$newWidth = $width;
					$newHeight = $height;
					
					$tmp_result = copy($image, $path);
				}
			}			
			else 
			{
				$newWidth = $width;
				$newHeight = $height;
				
				$tmp_result = copy($image, $path);	
			}
			
			$result[$i]["width"] = $newWidth;
			$result[$i]["height"] = $newHeight;
			$result[$i]["size"] = filesize($path);
				
			chmod ($path, 0644);

			$i++;
		}
		
		if ($img) imagedestroy($img);

		return $result;
	}
	
	public function delete($image, array $parameters = array())
	{
		foreach ($parameters as $par)
		{
			if (isset($par["dir"])) $this->_dir = $par["dir"];
			
			if (isset($par["prefix"])) $this->_prefix = $par["prefix"];

			unlink($this->_dir . $this->_prefix . $image);
		}
		
		return true;
	}
		
}