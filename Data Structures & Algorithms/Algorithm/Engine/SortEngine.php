<?php

namespace Algorithm\Engine;

class SortEngine
{
	/**
	 * Bubble sort
	 * 
	 * @param mix $data Either be an array or a string
	 * @param bool $ascending 
	 * @return the sorted data
	 * @throws \Exception
	 */
	public static function bubble($data, $ascending = true)
	{
		$count = self::_count($data);
		
		for ($i=0; $i<$count; $i++) {
			for ($j=1; $j<$count-$i; $j++) {
				if ($ascending) {
					if ($data[$j-1] > $data[$j]) {
						$tmp 		= $data[$j];
						$data[$j] 	= $data[$j-1];
						$data[$j-1] = $tmp;
					}					
				} else {
					if ($data[$j-1] < $data[$j]) {
						$tmp 		= $data[$j];
						$data[$j] 	= $data[$j-1];
						$data[$j-1] = $tmp;
					}
				}
			}
		}
		
		return $data;
	}
	
	/**
	 * Selection sort
	 * 
	 * @param mix $data Either be an array or a string
	 * @param bool $ascending
	 * @return the sorted data
	 * @throws \Exception
	 */
	public static function selection($data, $ascending = true)
	{
		$count = self::_count($data);
		
		for ($i=0; $i<$count; $i++) {
			$min = $i;
			for ($j=$i+1; $j<$count; $j++) {
				if ($data[$j] < $data[$min]) {
					$min = $j;
				}
			}
			if ($min != $i) {
				$tmp 		= $data[$i];
				$data[$i] 	= $data[$min];
				$data[$min] = $tmp;
			}
		}
		
		if (!$ascending) {
			if (is_array($data))  $data = array_reverse($data);
			if (is_string($data)) $data = strrev($data);
		}
		
		return $data;
	}
	
	/**
	 * Count length or elements of a given data
	 * 
	 * @param mix $data
	 * @return int
	 * @throws \Exception
	 */
	protected static function _count($data)
	{
		if (!is_array($data) && !is_string($data)) {
			throw new \Exception('The passed data must be an array or a string');
		}
		
		if (is_string($data)) {
			$count = strlen($data);
		} else {
			$count = count($data);
		}
		
		return $count;
	}
	
}
