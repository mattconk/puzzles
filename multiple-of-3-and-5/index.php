<?php
/** 
 * Sum of Multiples of 3 and 5 between 0 and 1000
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
 * gets the sum of all multiples of a given number between 0 and a given number
 * 
 * @param int $target The number to find the sum of all multiples too
 * @param int $multiple The multiple
 * 
 * @return int The sum of all of the multiples between 0 and $target
 */
function math($target, $multiple)
{
    $p = floor(($target-1) / $multiple);
    return floor($multiple * ($p * ($p+1)) / 2);
}

/**
 * Takes an array of multiples, determines the sum of all the multiples from 0 to a Max number, and removes the duplicates
 * 
 * In order to not report duplicates we have to add all of determin the sum of multiples for each item in the array add
 *      each one together, then substract the sum of multiples of the product of the array.
 * 
 * @param int $target The number to find the sum of all multiples too (0 to Max)
 * @param array $multiple Array of multiples to use
 * 
 * @return int The sum of all of the multiples between 0 and $target
 */
function multiples($target, $multiple)
{
    $count = count($multiple);
    $result = 0;
    
    for ($i=0; $i<$count; $i++)
    {
        $result += math($target, $multiple[$i]);
    }     
    
    $result -= math($target, array_product($multiple));
    return $result;
}


echo $formating_html->page_open($puzzle_name);
$puzzle = '<h3>Puzzle:</h3><p>If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23. Find the sum of all the multiples of 3 or 5 below 1000.</p>'; 

    echo $puzzle;
    echo '<a href="http://projecteuler.net/problem=1" target="_blank">Puzzles Page</a>';
    echo '<br><hr>';
    
    $max = 1000;
    $multiple = array(3,5);
    echo 'Sum of all multiples of '.implode(', ',$multiple).' below '.$max.' is '.multiples($max, $multiple);

    echo '<br>';
    echo '<br><script src="https://gist.github.com/mattconk/10031113.js"></script>';

echo '</body>';
	
