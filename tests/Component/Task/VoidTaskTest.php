<?php
/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Ulrack\Task\Tests\Component\Task;

use PHPUnit\Framework\TestCase;
use Ulrack\Task\Component\Task\VoidTask;

/**
 * @coversDefaultClass \Ulrack\Task\Component\Task\VoidTask
 */
class VoidTaskTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::execute
     */
    public function testExecute(): void
    {
        $subject = new VoidTask();
        $this->assertEquals(true, $subject->execute());
    }
}
