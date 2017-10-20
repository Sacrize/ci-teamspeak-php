<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$host = 'ts3.domena.pl';
$sport = 9987; // server port
$port = 10011; // query port
$user = 'serverquery'; // query user
$pass = '123456789'; // query password

$config['ts_connection_string'] = "serverquery://$user:$pass@$host:$port/?nickname=$user&server_port=$sport";