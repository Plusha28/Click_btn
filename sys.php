<?php
	public static function valid($val, $type, $preg = '')
	{
		switch($type)
		{
			case 'other':
				if(!preg_match($preg, $val))
					return true;
	
				return false;
		}
	
		return true;
	}
?>