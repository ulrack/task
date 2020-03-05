<?php
/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Ulrack\Task\Component\Task;

use Ulrack\Task\Common\TaskInterface;

class VoidTask implements TaskInterface
{
    /**
     * Executes the task.
     *
     * @return bool
     */
    public function execute(): bool
    {
        return true;
    }
}
