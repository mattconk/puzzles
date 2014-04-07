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

$puzzle_name = '2-fibonacci-sequence';

function sequence($n)
{
    if ($n == 1 || $n == 2)
    {
        return 1;
    }
    else
    {
        return sequence($n - 1) + sequence($n - 2);
    }
}


echo $formating_html->page_open($puzzle_name);
$puzzle = '<h3>Puzzle:</h3><p>By considering the terms in the Fibonacci sequence whose values do not exceed four million, find the sum of the even-valued terms.</p>'; 

    echo $puzzle;
    echo '<a href="http://projecteuler.net/problem=2" target="_blank">Puzzles Page</a>';
    echo '<br><hr>';
    
    $i = 1;
    $result = $i;
    do 
    {
        echo $result.', ';
        $result = sequence($i);
        $i++;
        
    } while ($result < 4000000);
    

    
    echo '<br>';

echo '</body>';
	
