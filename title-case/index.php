<?php
/** 
 * convert a lowercase string to title case
 * 
 * @author Matthew Conk <mattconk@gmail.com> 
 * @version Aug 12, 2013
 * @package Puzzles
 */
require_once('../classes/formating_arrays.php');
require_once '../classes/formating_html.php';
$formating_html = new Formating_Html();
$formating_arrays = new Formating_Arrays();

$puzzle_name = 'title-case';

/**
 * converts a string to title case
 * 
 * @param string $string The string to be converted.
 * @return string
 */
function title_case($string)
{
    $words = explode(" ", $string);
    
    $count = count($words);
    $result = '';
    
    for ($i=0; $i<$count; $i++)
    {
        $s = strtolower($words[$i]);
        $s = substr_replace($s, strtoupper(substr($s, 0, 1)), 0, 1);
        $result .= "$s ";
    }
    
    return trim($result);
}


echo $formating_html->page_open($puzzle_name);
echo $formating_html->puzzle_image($puzzle_name);

    $string = 'you are given a constant with a lowercase-only sentence. transform the sentence so that the first character of each word is in upper case. ';
    echo $string.'<br>';
    echo title_case($string);

echo '</body>';
	
