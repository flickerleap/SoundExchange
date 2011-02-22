<?php
/**
 * SoundExchangePhp demo
 */
$basedir = dirname(__DIR__);
require_once $basedir.'/SoundExchangePhp/SoundExchange.php';


$file1 = $basedir."audio/audio-1.mp3";
$file2 = $basedir."audio/audio-2.mp3";
$outputFile = $basedir."audio/output.mp3";

$response = SoundExchange::concatenate( array($file1, $file2), $outputFile );
echo $response;


?>