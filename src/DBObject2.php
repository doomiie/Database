<?php

/**
 * 
 * DBObject for Database handling
 * 
 * @see       https://github.com/doomiie/gps/

 *
 *
 * @author    Jerzy Zientkowski <jerzy@zientkowski.pl>
 * @copyright 2020 - 2022 Jerzy Zientkowski
 

 * @license   FIXME need to have a licence
 * @note      This program is distributed in the hope that it will be useful - WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE.
 * No usrało mi się
 */

namespace Database;

class DBObject2 extends DBObjectFunctions
{
    public function print()
    {
        printf("<hr> PRINT for object: %s<br>\n", get_class($this));
        foreach ((array)$this as $key => $val) {
            if (is_object($val)) continue;
            if(is_array($val)) {printf("FIELD: %s, VALUE: [%s]<br>\n",  $key, json_encode($val)); }
            else
            printf("FIELD: %s, VALUE: [%s]<br>\n",  $key, $val);

        }
        echo "<br>\n";
        return;
        //error_log(var_dump(get_object_vars($this)));

        return (array) $this;
    }
}
