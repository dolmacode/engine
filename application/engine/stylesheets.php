<?php
    $dir = scandir('./application/assets/css/system', 1);
    unset($dir[count($dir)-1]);
    unset($dir[count($dir)-1]);
    return $dir;