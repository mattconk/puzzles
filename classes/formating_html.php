<?php 
/**
 * holds functions to handle some basic html formating 
 *
 * @author Matthew Conk <mattconk@gmail.com>
 * @version Sep 22, 2013
 * @package Puzzles App
 */

class Formating_Html {
    
    /**
     * outputs an src tag to display the image
     * 
     * @param string $name the name of the puzzle
     * @return string
     */
    public function puzzle_image($name)
    {
        return '<img src="puzzle_'.$name.'.jpg"  height="400" width="400"><br><br>';
    }
    
    /**
     * output an open body tag, title, and a link to the home page
     * 
     * @return string
     */
    public function page_open($name)
    {
        $html = '<body style="width: 90%; margin: 50px auto;">
                    <h1 style="text-align: center;">'.$this->title($name).'</h1>
                    <a href="../">Home</a><br><br>';
        return $html;
    }
    
    /**
     * removes characters from a string to make it more human readable
     * 
     * @param string $name the string to convert
     * @return string
     */
    public function title($name)
    {
        $name = str_replace(array('.', '/'), '', $name);
    	$name =  ucwords(str_replace('-', ' ', $name));
        return $name;
    }
}