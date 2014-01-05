<?php
class RF_Slugifier{
	
	private $_title;
	
	public static function slugFromTitle($text){
		return str_replace(array("'","\""," - ","/"," "),array("-","","-","-","-"),$text);
	}
}