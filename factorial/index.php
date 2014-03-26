<?php
/** 
 * returns the factorial of a number
 * 
 * @author Matthew Conk <mattconk@gmail.com> 
 * @version Nov 20, 2013
 * @package Puzzles
 */
require_once '../classes/formating_html.php';
$formating_html = new Formating_Html();

$puzzle_name = 'factorial';

/**
 * determins the factorial of a number
 * 
 * @param int $num number to get the factorial of
 * @return boolean|int FALSE if <= 0 | factorial
 */
function factorial($num)
{
    if ($num <= 0)
    {
        return FALSE;
    }
    
    $new = 1;
    do 
    {
        $new = $new * $num;
        $num--;
    } while ($num != 0);
    
    return $new;
}

echo $formating_html->page_open($puzzle_name);
echo $formating_html->puzzle_image($puzzle_name);

    for ($i=0; $i<11; $i++)
    {
        echo $i.'! = '.factorial($i).'<br>';
    }

echo '</body>';
	
