# BCMath: bcmath made easy
Convenience wrapper for the php bcmath extension.

---

- [Installation](#installation)
- [Requirements](#requirements)
- [Quick Start](#quick-start)
- [Available Methods](#available-methods)
- [Run Tests](#run-tests)
- [Contribute](#contribute)

---

### Installation

To install BCMath, run:

    $ composer require edwardbrosens/bcmath

### Requirements

BCMath works with at least PHP 5.6 and HHVM.

### Quick Start

```php
require __DIR__ . '/vendor/autoload.php';

use \BCMath/BCMath;

// Add two arbitrary precision numbers
$a = BCMath::add(1, 2); // ($a = 3)
$b = BCMath::sub(2, 1); // ($b = 1)

```

### Available Methods
```php
BCMath::add($left_operand, $right_operand, $scale = null) // Add two arbitrary precision numbers
BCMath::sub($left_operand, $right_operand, $scale = null) // Subtract two arbitrary precision numbers
BCMath::mul($left_operand, $right_operand, $scale = null) // Multiply two arbitrary precision numbers
BCMath::div($left_operand, $right_operand, $scale = null) // Divide two arbitrary precision numbers```
```

### Run Tests

To run tests:

    $ git clone https://github.com/edwardbrosens/BCMath.git
    $ composer install
    $ ./vendor/bin/phpunit

### Contribute
1. Fork the repository on GitHub in order to make changes.
1. Write one or more tests for the new feature you're implementing or a fix for the bug you found.
1. Send a pull request to get your branch merged.