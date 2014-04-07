<?php
/** 
 * Multiples of 3 & Five
 * 
 * @author Matthew Conk <mattconk@gmail.com> 
 * @version Apr 7, 2014
 * @package Puzzles
 */
require_once('../classes/formating_arrays.php');
require_once '../classes/formating_html.php';
$formating_html = new Formating_Html();
$formating_arrays = new Formating_Arrays();

$puzzle_name = 'multiple-of-3-and-5';

/**
 * Builds an array of Unique numbers of the multiples of a given array of numbers under a max number
 * 
 * @param int $max Searching for all multiples under this number
 * @param array $multiple Array of numbers to look for the multiples of
 * 
 * @return array Returns all of the unique multiples under the max number, using the array of multiples.
 */
function multiples($max, $multiple)
{
    $count = count($multiple);
    $result = array();
    
    for($i=1; $i<$max; $i++)
    {
        for ($x=0; $x<$count; $x++)
        {
            if ($i % $multiple[$x] == 0)
            {
                array_push($result, $i);
            }
        }
    }    
    return array_unique($result);  
}

function SumDivisibleBy($target, $multiple)
{
    $p = $target % $multiple;
    return ($multiple * ($p * ($p+1))) % 2;
}

echo $formating_html->page_open($puzzle_name);
$puzzle = '<h3>Puzzle:</h3>'.
           'If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23. Find the sum of all the multiples of 3 or 5 below 1000.'; 

echo 5%3;
exit;    

echo $puzzle;
    echo '<br><br>';
    $max = 10;
    $multiple = array(3,5);
    $results = multiples($max, $multiple);
    echo $formating_arrays->display_array($results, 'Multiples').'<br>';
    echo 'Sum of Multiples = '.array_sum($results);
    echo '<br><br>';
    echo SumDivisibleBy($max-1, 3); //+ SumDivisibleBy($max-1, 5) - SumDivisibleBy($max-1, 15);
    

echo '</body>';
	
