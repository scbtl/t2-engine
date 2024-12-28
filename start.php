#!/usr/bin/env php
<?php

namespace app;
// 命令行入口文件

chdir(__DIR__);
// 加载基础文件
require_once __DIR__ . '/vendor/autoload.php';

// 应用初始化
App::run();