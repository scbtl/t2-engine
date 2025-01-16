<?php
/**
 * This file is part of t2.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author    Tony<lucky@t2engine.cn>
 * @copyright Tony<lucky@t2engine.cn>
 * @link      http://www.t2engine.cn/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

use App\Env;

return [
    // 默认数据库
    'default'     => Env::get('DB_TYPE', 'mysql'),
    // 各种数据库配置
    'connections' => [
        'mysql' => [
            'driver'      => 'mysql',
            'host'        => Env::get('DB_HOST', '127.0.0.1'),
            'port'        => Env::get('DB_PORT', 3306),
            'database'    => Env::get('DB_NAME', 't2_engine'),
            'username'    => Env::get('DB_USER', 'root'),
            'password'    => Env::get('DB_PASS', '123456'),
            'unix_socket' => '',
            'charset'     => Env::get('DB_CHARSET', 'utf8'),
            'collation'   => 'utf8_unicode_ci',
            'prefix'      => '',
            'strict'      => true,
            'engine'      => null,
        ],

        'sqlite' => [
            'driver'   => 'sqlite',
            'database' => '',
            'prefix'   => '',
        ],

        'pgsql' => [
            'driver'   => 'pgsql',
            'host'     => '127.0.0.1',
            'port'     => 5432,
            'database' => 't2_engine',
            'username' => 'username',
            'password' => '',
            'charset'  => 'utf8',
            'prefix'   => '',
            'schema'   => 'public',
            'sslmode'  => 'prefer',
        ],

        'sqlsrv' => [
            'driver'   => 'sqlsrv',
            'host'     => 'localhost',
            'port'     => 1433,
            'database' => 't2_engine',
            'username' => 'username',
            'password' => '',
            'charset'  => 'utf8',
            'prefix'   => '',
        ],
    ],
];