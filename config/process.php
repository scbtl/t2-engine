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

use App\Log;
use App\Monitor;
use App\Request;
use T2\App;

global $argv;

return [
    'T2-Engine' => [
        'handler'     => App::class,
        'listen'      => 'http://0.0.0.0:8123',
        'count'       => 1,
        'user'        => '',
        'group'       => '',
        'reusePort'   => false,
        'eventLoop'   => '',
        'context'     => [],
        'constructor' => [
            'requestClass' => Request::class,
            'logger'       => Log::channel(),
            'appPath'      => app_path(),
            'publicPath'   => public_path()
        ]
    ],

    // File update detection and automatic reload
    'Monitor'   => [
        'enable'      => true,
        'handler'     => Monitor::class,
        'reloadable'  => false,
        'constructor' => [
            // Monitor these directories
            'monitorDir'        => array_merge([
                app_path(),
                config_path(),
                base_path() . '/.env',
            ]),

            // Files with these suffixes will be monitored
            'monitorExtensions' => [
                'php', 'html', 'htm', 'env'
            ],

            'options' => [
                'enable_file_monitor'   => !in_array('-d', $argv) && DIRECTORY_SEPARATOR === '/',
                'enable_memory_monitor' => DIRECTORY_SEPARATOR === '/',
            ]
        ]
    ]
];