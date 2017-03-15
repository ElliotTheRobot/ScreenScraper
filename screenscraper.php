<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('simple_html_dom.php');  

$html = new simple_html_dom();

$html->load_file('http://www.bbc.co.uk/news/england');

foreach($html->find('a') as $element) {

        echo $element->href . '<br>';

}

