<?php declare(strict_types=1);

/*
 * Copyright (c) 2020  https://rewiv.com sikofitt@gmail.com
 *
 * This Source Code Form is subject to the
 * terms of the Mozilla Public License, v. 2.0.
 *
 * If a copy of the MPL was not distributed with this file,
 * You can obtain one at https://mozilla.org/MPL/2.0/.
 *
 */

use Sikofitt\Functions\IsClass;
 
if (!function_exists('is_class')) {
    /**
    * @param mixed $variable
    *    The variable in question.
    * @param bool $strict
    *    if strict is true, don't count
    *    Interfaces and Traits as classes.
    * @return bool
    *    True if $variable is a class
    */
    function is_class($variable, $strict = false)
    {
        return IsClass::isClass($variable, $strict);
    }
}
