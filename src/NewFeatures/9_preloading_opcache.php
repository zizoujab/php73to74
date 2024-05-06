<?php
$directory = new RecursiveDirectoryIterator(__DIR__ . '/../src');
$fullTree = new RecursiveIteratorIterator($directory);
$phpFiles = new RegexIterator($fullTree, '/.+((?<!Test)+\.php$)/i', RecursiveRegexIterator::GET_MATCH);

foreach ($phpFiles as $key => $file) {
    require_once($file[0]);
    // any file referenced by include, include_once, require, require_once, or opcache_compile_file()
    // will be parsed into persistent memory
}

// in php.ini add this line :
// opcache.preload=9_preloading_opcache.php
