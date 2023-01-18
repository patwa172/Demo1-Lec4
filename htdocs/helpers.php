<?php

// riff off https://www.php.net/manual/en/function.var-dump.php#51119
function vd($dump_this)
{
    echo "<code>";
    var_dump($dump_this);
    echo "</code>";
    echo "<br>";
    return null;
}
