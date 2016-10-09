<?php

/**
 * is-class - Creates a missing is_class function
 * Copyleft (C) <2016>  <sikofitt>.
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

namespace Sikofitt\Functions;

/**
 * Class IsClass.
 */
class IsClass
{
    /**
   * @param mixed $class
   *  The class to be tested
   * @param bool $strict
   *  Whether we should return true for Interfaces and Traits
   *
   * @return bool
   *  True if this is a class
   */
  public static function isClass($class, $strict = false)
  {
      try {
          $reflection = new \ReflectionClass($class);
      } catch (\Exception $e) {
          return false;
      }
      if (true === $strict) {
          return !$reflection->isTrait() &&
      !$reflection->isInterface() &&
      !$reflection->isInstance(new \stdClass());
      } else {
          return !$reflection->isInstance(new \stdClass());
      }
  }
}
