<?php

require_once '../dibi/dibi.php';


try {

    // connects to MySQL using DSN
    dibi::connect('driver=mysql&host=localhost&username=root&password=xxx&database=test&charset=utf8');


    // connects to MySQL / MySQLi
    dibi::connect(array(
        'driver'   => 'mysql',  // or 'mysqli'
        'host'     => 'localhost',
        'username' => 'root',
        'password' => 'xxx',
        'database' => 'dibi',
        'charset'  => 'utf8',
    ));


    // connects to ODBC
    dibi::connect(array(
        'driver'   => 'odbc',
        'username' => 'root',
        'password' => '***',
        'database' => 'Driver={Microsoft Access Driver (*.mdb)};Dbq=C:\\Database.mdb',
    ));


    // connects to SQlite
    dibi::connect(array(
        'driver'   => 'sqlite',
        'database' => 'mydb.sdb',
    ));


    // connects to PostgreSql
    dibi::connect(array(
        'driver'     => 'postgre',
        'string'     => 'host=localhost port=5432 dbname=mary',
        'persistent' => TRUE,
    ));


} catch (DibiException $e) {

    echo "DibiException: <pre>", $e;

}
