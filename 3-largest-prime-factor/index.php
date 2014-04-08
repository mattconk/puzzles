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

$puzzle_name = '3-largest-prime-factor';

function primeFactor($n)
{
    if ($n == 1)
    {
        return 1;
    }
    else 
    {
        for ($i=2; $i<=$n/2; $i++)
        {
            if ($n % $i == 0 && isPrime($i) == TRUE)
            {
                echo $i.'<br>';
                $largest = $i;
            }
        }
        return $largest;
    }

}

/**
 * Determines if a number is a Prime
 * 
 * @param int $n The number to consider
 * @return boolean
 */
function isPrime($n)
{
    for ($i=2; $i*$i<=$n; $i++)
    {
        if ($n % $i == 0)
        {
            return FALSE;
        }
    }
    return TRUE;
}

echo $formating_html->page_open($puzzle_name);
$puzzle = '<h3>Puzzle:</h3><p>What is the largest prime factor of the number 600851475143 ?</p>'; 

    echo $puzzle;
    echo '<a href="http://projecteuler.net/problem=3" target="_blank">Puzzles Page</a>';
    echo '<br><hr>';


    
    $n = 13195;
//     $n = 600851475143;


//     for ($i=2; $i<=$n/2; $i++)
//     {
//         if($n % $i == 0)
//         {
//             echo $i.', ';
//         }
//     }
//     exit;
    
    echo 'The largest prime factor of '.$n.' is '.primeFactor($n);
    
    echo '<br>';

echo '</body>';
	
