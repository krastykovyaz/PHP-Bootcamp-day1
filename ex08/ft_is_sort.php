#!/usr/bin/php
<?php
    function ft_is_sort($argv)
    {
        if (count($argv) == 1)
            return (TRUE);
        $str = $argv;
        sort($str);
        for ($a = 0; $a < count($str); $a++)
        {
            if (strcmp($str[$a], $argv[$a]))
                return (FALSE);
        }
        return (TRUE);
    }
?>