<?php
/** 
 * determins the Mean, Median, Mode, and Standard Deviation of an array of values
 * 
 * @author Matthew Conk <mattconk@gmail.com> 
 * @version Oct 20, 2013
 * @package Puzzles
 */
require_once('../classes/formating_arrays.php');
require_once '../classes/formating_html.php';
$formating_html = new Formating_Html();
$formating_arrays = new Formating_Arrays();

$puzzle_name = 'mean-median-mode-sdev';

/**
 * Finds the mean of an array
 *  
 * @param array $numbers
 * @return double the mean of the array
 */
function mean($numbers)
{
	$count = count($numbers);
	return array_sum($numbers) / $count;
}

/**
 * Finds the Median of an array
 * 
 * @param array $numbers
 * @return int the median of the array
 */
function median($numbers)
{
	sort($numbers);
	$count = count($numbers)/2;
	return ($numbers[$count-1] + $numbers[$count]) / 2;
}

/**
 * Find the mode of an array
 * 
 * @param array $numbers
 * @return int the mode of the array
 */
function mode($numbers)
{
	$values = array_count_values($numbers);
	return array_search(max($values), $values);
}
	
/**
 * Finds the standard deviation of an array
 * 
 * @param array $numbers
 * @return double the standard deviation of the array
 */
function standard_deviation($numbers)
{
	$count = count($numbers);
	$mean = mean($numbers);

	$squares = array();

	for ($i=0; $i<$count; $i++)
	{
	$difference = $numbers[$i] - $mean;
	array_push($squares, pow($difference, 2));
	}

	return sqrt(array_sum($squares) / count($squares));
}

echo $formating_html->page_open($puzzle_name);
echo $formating_html->puzzle_image($puzzle_name);

    $numbers = $formating_arrays->create_array(1000, 1, 1000);
    echo $formating_arrays->display_array($numbers, 'Radom Numbers');
    echo '<h2>Mean = '.mean($numbers).'</h2>';
    echo '<h2>Median = '.median($numbers).'</h2>';
    echo '<h2>Mode = '.mode($numbers).'</h2>';
    echo '<h2>Standard Deviation = '.standard_deviation($numbers).'</h2>';
    
    echo '<br><script src="https://gist.github.com/mattconk/9786496.js"></script>';

echo '</body>';
	
