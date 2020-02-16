<?php
/**
 * Copyright (C) Jyxon, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Ulrack\Task\Common;

use Traversable;
use Ulrack\Task\Common\TaskInterface;

interface TaskListInterface extends Traversable
{
    /**
     * Adds a task to the task list.
     *
     * @param TaskInterface $task
     * @param string $name
     *
     * @return void
     */
    public function addTask(TaskInterface $task, string $name): void;
}
