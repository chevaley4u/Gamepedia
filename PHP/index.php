<?php
declare(strict_types=1);
namespace Mygamepedia;

session_start();
require 'vendor/autoload.php';

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Illuminate\Database\Capsule\Manager as DB;
use \Slim\Container;
use \Slim\App;

use Mygamepedia\controllers\TD1;
use Mygamepedia\controllers\TD2;

$db = new DB();
$db->addConnection(parse_ini_file('src/conf/conf.ini'));
$db->setAsGlobal();
$db->bootEloquent();


//TD1::q1();
//TD1::q2();
//TD1::q3();
//TD1::q4();
//TD1::q5();



TD2::q1();
TD2::q2();

