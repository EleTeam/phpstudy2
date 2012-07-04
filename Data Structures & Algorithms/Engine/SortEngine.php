<?php

namespace Algorithm\Engine;

class SortEngine
{
	/**
	 * Bubble sort
	 * 
	 * @param mix $data Must be an array or a string
	 * @param bool $ascending 
	 * @return the sorted data
	 * @throws \Exception
	 */
	public static function bubble($data, $ascending = true)
	{
		if (!is_array($data) && !is_string($data)) {
			throw new \Exception('The passed data must be an array or a string');	
		}
		
		if (is_string($data)) {
			$count = strlen($data);	
		} else {
			$count = count($data);			
		}
		
		for ($i=0; $i<$count; $i++) {
			for ($j=1; $j<$count-$i; $j++) {
				if ($ascending) {
					if ($data[$j-1] > $data[$j]) {
						$tmp 		 = $data[$j];
						$data[$j] 	 = $data[$j-1];
						$data[$j-1] = $tmp;
					}					
				} else {
					if ($data[$j-1] < $data[$j]) {
						$tmp 		 = $data[$j];
						$data[$j] 	 = $data[$j-1];
						$data[$j-1] = $tmp;
					}
				}
			}
		}
		
		return $data;
	}
	
	
}
