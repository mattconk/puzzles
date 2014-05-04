<?php 
/**
 * holds functions to handle some basic functions to deal with arrays.  
 *
 * @author Matthew Conk <mattconk@gmail.com>
 * @version Sep 22, 2013
 * @package Puzzles App
 */

class Formating_Arrays {
	
    /**
     * builds an array of X values of ints between Y & Z
     * 
     * @param int $quantity The number of values to create in the array
     * @param int $min The minimum value to use to generate random numbers
     * @param int $max The maximium value to use to generate random numbers
     * @return array of values created
     */
    public function create_array($quantity, $min=1, $max=100)
    {
        $new_array = array();
        
        for ($i=0; $i<$quantity; $i++)
        {
            $num = rand($min, $max);
            array_push($new_array, $num);
        }
        
        return $new_array;
    }
    
    /**
     * Implodes the array and displays it humanized
     *
     * @param array $numbers Array to be imploded and displayed
     * @param string $title Name to display when the array is displayed (User friendly)
     * @return string
     */
    function display_array($numbers, $title)
    {
        if (!is_array($numbers))
        {
            return 'Not an Array';
        }
        
        return $title.' = ( '.implode(', ',$numbers).' )';
    }
    
    /**
     * test function to ensure I have git and eclipse set up correctly.
     * 
     * @return boolean
     */
    function testing()
    {
    	//A basic function to make sure I git working correctly in linux
    	return FALSE;
    }
}

