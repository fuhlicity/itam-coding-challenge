<?php
function browseDirectories($path) {
    $directories = [];

    $files = scandir($path);

    foreach ($files as $file) {
        $filePath = $path . DIRECTORY_SEPARATOR . $file;
        if (is_dir($filePath) && $file !== '.' && $file !== '..') { //skips files that are not a directory, parent directory, and current directory
            $directories[] = $filePath;
            $directories = array_merge($directories, browseDirectories($filePath));
        }
    }

    return $directories;
}

// Usage example
$directory = "/dashboard";
$directoriesList = browseDirectories($directory);

echo "Directories under '$directory':";
foreach ($directoriesList as $dir) {
    echo $dir . "<br>";
}