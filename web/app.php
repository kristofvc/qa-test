<?php
use Symfony\Component\Debug\Debug;
use Symfony\Component\HttpFoundation\Request;

$env = getenv('SYMFONY_ENV') ?: 'prod';
$debug = getenv('SYMFONY_DEBUG') === '1' && $env !== 'prod';

$loader = require __DIR__ . '/../app/bootstrap.php.cache';

if ($debug) {
    Debug::enable();
}

require __DIR__ . '/../app/AppKernel.php';
require __DIR__ . '/../app/AppCache.php';
$kernel = new AppKernel($env, $debug);
$kernel->loadClassCache();
$kernel = new AppCache($kernel);

// When using the HttpCache, you need to call the method in your front controller instead of relying on the configuration parameter
Request::enableHttpMethodParameterOverride();
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);