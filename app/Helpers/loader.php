<?php

$directoryFiles = scandir(__DIR__);
$files          = array_diff($directoryFiles, ['.', '..', 'loader.php']);

foreach ($files as $helperFile) {
    require_once __DIR__ . DIRECTORY_SEPARATOR . $helperFile;
}
