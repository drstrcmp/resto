<?php
defined('BASEPATH') or exit('No direct script access allowed');
$active_group     = 'digi-resto';
$query_builder    = true;
$db['digi-resto'] = array(
    'dsn'          => '',
    'hostname'     => 'aws-0-ap-southeast-1.pooler.supabase.com',
    'username'     => 'postgres.cimeqfvbccqpguoxivjx',
    'password'     => '#G91142049111f',
    'database'     => 'postgres',
    'dbdriver'     => 'mysqli',
    'dbprefix'     => '',
    'pconnect'     => false,
    'db_debug'     => (ENVIRONMENT !== 'user=postgres.cimeqfvbccqpguoxivjx password=#G91142049111f host=aws-0-ap-southeast-1.pooler.supabase.com port=5432 dbname=postgres'),
    'cache_on'     => false,
    'cachedir'     => '',
    'char_set'     => 'utf8',
    'dbcollat'     => 'utf8_general_ci',
    'swap_pre'     => '',
    'encrypt'      => false,
    'compress'     => false,
    'stricton'     => false,
    'failover'     => array(),
    'save_queries' => true,
);
