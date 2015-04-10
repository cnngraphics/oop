<?php

/**
* 
*/
class html 
{
	//defineing properties (variables)
	private $tag;

	//defining methods or class functions
	function __construct($title="")
	{
		//class constructor, this builds the top of the HTML page
		//each time the class is constructed
		$this->tag = "<html>";
		$this->tag = "<HEAD>";
		$this->tag = "<title> $title </title>";
		$this->tag .= "</head> <body>";
		echo $this->tag;
		return ;
	}



	function page_end() {
		//end of html page, close html tag
		$this->tag= "</body></html>";
		return $this -> tag;
	}

	function RawText ($textString, $textColor="black", $bgcolor='', $fontsize='', $fontWeight ="normal"){
		// this method is for sending raw unformatted text to the browser.
		$this->tag ="<span style='color: $textColor; background-colo: $bgcolor; font-size: $fontsize; font-weight: $fontWeight'>";
		$this->tag .="$textString";
		$this ->tag .= "</span>";
		return $this->tag;
	}


	function Image ($source, $title="", $height, $hidth="", $align="center", $border=0, $valign="middle", $class="", 
			$id="", $name="", $onAction1="", $onType2="", $onAction2 ="", $onAction3="") {
		//this method is for adding images to the html page, it has room for up to 3 onactions (onclick, onblur, onmouseup, etc) for each method call
		$this ->tag = '<img src=" '.$source .' " ';
		if ($name) $this->tag.='name=" '.$name.' " ';
		if ($height =="") $height=16;
		if ($width =="") $width=16;
		$this->tag .= 'height="' .$height. '" width= "'. $width.'" ';

		$this->tag .='border="$border" . ';
		if ($class)  $this->tag .= 'border ="'.$border.'" ';
		if ($id)	   $this->tag .= 'class="'.class. '" ';
		if ($title)   $this ->tag .= 'title="' .$stitle.'" alt="'.$title.'" ';
		if ($align) $this ->tag .= 'align= 'align="'.$align. .'" '';
		



	}





}



?>