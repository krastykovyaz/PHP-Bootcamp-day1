#!/usr/bin/php
<?php
    if ($argc < 3) {
        exit();
    }
    foreach ($argv as $value)
    {

        if ($value != $argv[0] || $value != $argv[1])
        {
            $res = explode(':', $value);
            if ($res[0] == $argv[1])
                $result = $res[1];
        }
    }
    if ($result != NULL)
        echo $result . PHP_EOL;
?>