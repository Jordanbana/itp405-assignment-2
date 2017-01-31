<!-- Second backend HW assignment for ITP 405 in PHP-->
<?php


//Assignment to make remaining code to make this work ------
require 'DvdQuery.php';
use Database\Query\DvdQuery;

// Query 1 (with orderByTitle)
$dvdQuery = new DvdQuery();
$dvdQuery->titleContains('a');
// $dvdQuery->orderByTitle();
$dvds = $dvdQuery->find();
var_dump($dvds);

// // Query 2 (without orderByTitle)
// $dvdQuery = new DvdQuery();
// $dvdQuery->titleContains('Die');
// // orderByTitle is not called here
// $dvds = $dvdQuery->find();
// var_dump($dvds);
// ---------------------------------------------------------

?>
