# PHP: isset() and Numeric GET Parameters

This repository demonstrates a common, yet subtle, bug in PHP related to the `isset()` function and the handling of numeric GET parameters. The issue arises from PHP's loose type system and how it handles type juggling in conditional statements.

The `bug.php` file contains the buggy code, while `bugSolution.php` provides a corrected version that avoids the unexpected behavior.

**The Problem:**

The `isset()` function only checks if a variable is defined and is not NULL. It doesn't explicitly verify its data type. When `$_GET['id']` is set to "0", `isset($_GET['id'])` evaluates to `true`. However, "0" is considered falsy in a boolean context, resulting in the `if` condition failing. This is often an unintended consequence when working with numeric IDs.

**The Solution:**

The solution involves explicitly checking the type and value of `$_GET['id']` to ensure it's a non-negative integer before using it in the conditional statement.