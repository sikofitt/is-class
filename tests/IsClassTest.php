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

namespace Sikofitt\Tests;

use PHPUnit\Framework\TestCase;

class IsClassTest extends TestCase
{
    private $testClass;
    private $stdClass;

    public function setUp(): void
    {
        $this->testClass = new \ArrayObject();
        $this->stdClass = new \stdClass();

        parent::setUp();
    }

    public function testClassFailure(): void
    {
        $this->assertFalse(is_class($this->stdClass));
        $this->assertFalse(is_class('\ArrayAccess', true));
        $this->assertFalse(is_class('test'));
    }

    public function testClassSuccess(): void
    {
        $class = new class () extends \stdClass {
        };
        $this->assertTrue(is_class($class));
        $this->assertTrue(is_class($this->testClass));
        $this->assertTrue(is_class('\ArrayAccess'));
    }
}
