<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;port=5432;dbname=test',
    'username' => 'postgres',
    'password' => '1234',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
