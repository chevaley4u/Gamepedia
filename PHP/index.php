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
use Mygamepedia\controllers\TD3;

$db = new DB();
$db->addConnection(parse_ini_file('src/conf/conf.ini'));
$db->setAsGlobal();
$db->bootEloquent();


//TD1::q1();
//TD1::q2();
//TD1::q3();
//TD1::q4();
//TD1::q5();

//TD2::q1();
//TD2::q2();
//TD2::q3();
//TD2::q4();
//TD2::q5();
//TD2::q6();
//TD2::q7();
//TD2::q8();
//TD2::q9();

TD3::p1();

