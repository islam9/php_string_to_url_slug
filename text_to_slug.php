<?php
class StrTextSlug {

	function stringToSlug( $str , $maxLength = 1000 , $rc = '-'){

	 	$str = strtolower(trim($str));
	 	$str = preg_replace('/-+/', $rc , $str);
	 	$str = preg_replace("/[\s-]+/", $rc , $str);
	 	$str = preg_replace("/\s/", "-", $str);
	 	$special_chars = array("?","%", "." , "[", "]", "/", "\\", "=", "<", ">", ":", ";", ",", "'", "\"", "&", "$", "#", "*", "(", ")", "|", "~", "`", "!", "{", "}","+");
	 	$str = str_replace($special_chars, '', $str);
	 	
	 	$str = trim(preg_replace("/[\/_|+ -]+/", $rc, $str));
		$str = trim(substr($str, 0, $maxLength));

	 	return $str;

	}

}

