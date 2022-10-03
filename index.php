<?php
require_once __DIR__ ."/vendor/autoload.php";

$errorHandler = new Whoops\Run;
$errorHandler->pushHandler(new Whoops\Handler\PrettyPageHandler);
$errorHandler->register();

use Tecnm\ResponseClass\JsonResponse;

$student =array(
    'name' => 'Jhon Doe',
    'course' => 'Software Engineering',
    'level' => '200',
    'collections' => ['books'=> "UML", 'music'=> 'Arias', "novel"=>'Mushoku Tensei']
    
    );
new JsonResponse('exception', '', $student);




?>