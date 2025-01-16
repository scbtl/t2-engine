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

use T2\Session\FileSessionHandler;
use T2\Session\RedisSessionHandler;
use T2\Session\RedisClusterSessionHandler;

return [

    'type' => 'file', // or redis or redis_cluster

    'handler' => FileSessionHandler::class,

    'config' => [
        'file'          => [
            'save_path' => runtime_path() . '/sessions',
        ],
        'redis'         => [
            'host'     => '127.0.0.1',
            'port'     => 6379,
            'auth'     => '',
            'timeout'  => 2,
            'database' => '',
            'prefix'   => 'redis_session_',
        ],
        'redis_cluster' => [
            'host'    => ['127.0.0.1:7000', '127.0.0.1:7001', '127.0.0.1:7001'],
            'timeout' => 2,
            'auth'    => '',
            'prefix'  => 'redis_session_',
        ]
    ],

    'session_name' => 'PHPSID',

    'auto_update_timestamp' => false,

    'lifetime' => 7 * 24 * 60 * 60,

    'cookie_lifetime' => 365 * 24 * 60 * 60,

    'cookie_path' => '/',

    'domain' => '',

    'http_only' => true,

    'secure' => false,

    'same_site' => '',

    'gc_probability' => [1, 1000],

];