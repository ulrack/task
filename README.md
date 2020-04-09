# DEPRECATION NOTICE: this package has been moved and improved at [grizz-it/task](https://github.com/grizz-it/task)

[![Build Status](https://travis-ci.com/ulrack/task.svg?branch=master)](https://travis-ci.com/ulrack/task)

# Ulrack Task

An implementation to provide an iterable task processor.

## Installation

To install the package run the following command:

```
composer require ulrack/task
```

## Usage

### Task

A task is an object which contains logic to execute a task.
This object can then be added to a task list for execution.
A task must implement the [TaskInterface](src/Common/TaskInterface.php).

### TaskList

A task list is a simple iterable object which contains a set of tasks.
After the tasks have been added, the object can be iterated to execute the tasks.

Create a new task list by simply instantiating it.
```php
<?php

use Ulrack\Task\Component\TaskList;

$taskList = new TaskList();
```

Then a task can be added by calling the addTask method.

```php
<?php

use Ulrack\Task\Common\TaskInterface;

/** @var TaskInterface $task */
$taskList->addTask($task, 'My task');
```

To execute all tasks after they have been added to the list, iterate over it in a foreach loop.

The loop returns the current task name as the key and the percentage of tasks completed in the value node.

```php
<?php

foreach($taskList as $name => $percentage)
{
    echo sprintf(
        'Currently executing task: %s (%d%%)).',
        $name,
        $percentage
    );
}
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## MIT License

Copyright (c) GrizzIT

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
