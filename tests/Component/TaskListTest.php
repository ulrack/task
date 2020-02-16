<?php
/**
 * Copyright (C) Jyxon, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Ulrack\Task\Tests\Component;

use PHPUnit\Framework\TestCase;
use Ulrack\Task\Component\TaskList;
use Ulrack\Task\Common\TaskInterface;

/**
 * @coversDefaultClass \Ulrack\Task\Component\TaskList
 */
class TaskListTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::addTask
     * @covers ::current
     * @covers ::key
     * @covers ::next
     * @covers ::rewind
     * @covers ::valid
     */
    public function testIterator(): void
    {
        $subject = new TaskList();

        $subject->addTask($this->createMock(TaskInterface::class), 'My task');

        foreach ($subject as $name => $percentage) {
            $this->assertEquals(0, $percentage);
            $this->assertEquals('My task', $name);
        }
    }
}
