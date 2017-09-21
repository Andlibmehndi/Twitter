<?php 

require('Functions.php');
$function = new Functionality();

if(isset($_REQUEST['download-csv'])){
     $f = fopen('php://memory', 'w');
    $screen_name = $_REQUEST['username'];
    $tweets = $function->generatePDFTweet($screen_name);
    $delimiter=",";
    fputcsv($f, array("id", "createdAt"), $delimiter);
    foreach ($tweets as $tweet) {
        fputcsv($f, $tweet, $delimiter);
    }
    fseek($f, 0);
    header('Content-Type:application/csv');
    header("Content-Disposition:attachment;filename=".$screen_name.".csv");
    fpassthru($f);

}
?>
