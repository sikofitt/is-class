<?php

declare(strict_types=1);

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

namespace Sikofitt\Functions;

/**
 * Class IsClass.
 */
final class IsClass
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
    public static function isClass($class, bool $strict = false): bool
    {
        try {
            $reflection = new \ReflectionClass($class);
        } catch (\Exception $e) {
            return false;
        }

        if (false === $strict) {
            return $reflection->getName() !== \stdClass::class;
        }

        return !$reflection->isTrait() && !$reflection->isInterface() && $reflection->getName() !== \stdClass::class;
    }
}
