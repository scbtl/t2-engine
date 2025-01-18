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
use App\Request;

return [
    'debug'             => Env::get('APP_DEBUG', true),
    'error_reporting'   => E_ALL,
    'default_timezone'  => 'Asia/Shanghai',
    'request_class'     => Request::class,
    'public_path'       => base_path() . DIRECTORY_SEPARATOR . 'public',
    'runtime_path'      => base_path(false) . DIRECTORY_SEPARATOR . 'runtime',
    'controller_suffix' => 'Controller',
    'controller_reuse'  => false,
    // 域名绑定（自动多应用模式有效）
    'domain_bind'       => [],
];