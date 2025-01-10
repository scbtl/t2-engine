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

namespace app\middleware;

use t2\Http\Response;
use t2\Http\Request;
use t2\MiddlewareInterface;

class StaticFile implements MiddlewareInterface
{
    /**
     * @param Request $request
     * @param callable $handler
     * @return Response
     */
    public function process(Request $request, callable $handler): Response
    {
        // Access to files beginning with. Is prohibited
        if (str_contains($request->path(), '/.')) {
            return response('<h1>403 forbidden</h1>', 403);
        }
        $response = $handler($request);
        // Add cross domain HTTP header
        $response->withHeaders([
            'Access-Control-Allow-Origin'      => '*',
            'Access-Control-Allow-Credentials' => 'true',
        ]);
        return $response;
    }
}