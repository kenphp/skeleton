<?php

if (!isset($argv[1])) {
    echo 'KenPHP command line helper'.PHP_EOL.PHP_EOL;
    echo 'OPTIONS:'.PHP_EOL;
    echo "view:clear\t\t";
    echo 'Clear view cache'.PHP_EOL;
} else {
    if ($argv[1] == 'view:clear') {
        viewClear();
        echo 'View cleared!'.PHP_EOL;
    }
}

function viewClear()
{
    rrmdir(__DIR__.DIRECTORY_SEPARATOR.'runtime/views/');
}

function rrmdir($dir)
{
    if (is_dir($dir)) {
        $objects = scandir($dir);
        foreach ($objects as $object) {
            if ($object != '.' && $object != '..') {
                if (filetype($dir.'/'.$object) == 'dir') {
                    rrmdir($dir.'/'.$object);
                } else {
                    unlink($dir.'/'.$object);
                }
            }
        }
        reset($objects);
        rmdir($dir);
    }
}
