<?php
/**
 * Here is your custom functions.
 */

if (!function_exists('dumpx')) {
    /**
     * 封装 dump 函数，追加调用行号信息
     *
     * @param mixed ...$vars
     * @return mixed
     */
    function dumpx(mixed ...$vars): mixed
    {
        // 获取调用栈
        $backtrace = debug_backtrace();
        $caller = $backtrace[0]; // dumpx 的调用者信息
        $line = $caller['line']; // 调用行号
        $file = $caller['file']; // 获取文件名

        // 调用原 dump 函数
        $result = dump(...$vars);

        // 在最后输出行号信息
        echo "Called at $file on line $line:\n";

        return $result;
    }
}