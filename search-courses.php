<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use Alura\CourseFinder\Seeker;
	

$client = new Client(['base_uri' => 'https://www.alura.com.br/']);

$crawler = new Crawler();

$seeker = new Seeker($client, $crawler);
$courses = $seeker->search('/cursos-online-programacao/php');
var_dump($courses);
foreach ($courses as $course) {
    echo $course . PHP_EOL;
}
