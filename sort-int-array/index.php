<?php
/** 
 * sort an array from smallest value to largest
 * 
 * @author Matthew Conk <mattconk@gmail.com> 
 * @version Sep 22, 2013
 * @package Puzzle App
 *
 */
require_once('../classes/formating_arrays.php');
require_once '../classes/formating_html.php';
$formating_html = new Formating_Html();
$formating_arrays = new Formating_Arrays();

$puzzle_name = 'sort-int-array';

function sort_array($unsorted_array)
{
    $count = count($unsorted_array);
    $sorted_array = array();
    for ($i=0; $i<$count; $i++)
    {
        array_push($sorted_array, min($unsorted_array));
        unset($unsorted_array[array_search(min($unsorted_array), $unsorted_array)]);
    }
    
    return $sorted_array;
}

echo $formating_html->page_open($puzzle_name);
echo $formating_html->puzzle_image($puzzle_name);

    $unsorted_array = $formating_arrays->create_array(25, 1, 1000);
    echo $formating_arrays->display_array($unsorted_array, 'Unsorted Array');
    echo '<br>';
    echo $formating_arrays->display_array(sort_array($unsorted_array), 'Sorted Array');

echo '</body>';
	
