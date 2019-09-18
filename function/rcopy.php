<?php

function copyr($source, $dest)
{
    // Check for symlinks
    if (is_link($source)) {
        return symlink(readlink($source), $dest);
    }
    
    // Simple copy for a file
    if (is_file($source)) {
        return copy($source, $dest);
        echo "........../".$source." copied<br>";
    }

    // Make destination directory
    if (!is_dir($dest)) {
        mkdir($dest);
        echo "........../".$dest." created<br>";
    }

    // Loop through the folder
    $dir = dir($source);
    while (false !== $entry = $dir->read()) {
        // Skip pointers
        if ($entry == '.' || $entry == '..') {
            continue;
        }

        // Deep copy directories
        copyr("$source/$entry", "$dest/$entry");
        
        echo "........../".$dest."/".$entry." copied<br>";
    }

    // Clean up
    $dir->close();
    return true;
}
?>