<?php

/**
 * is-class - Creates a missing is_class function
 * Copyleft (C) <2016>  <sikofitt>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

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
    return \Sikofitt\Functions\IsClass::isClass($variable, $strict);
}
