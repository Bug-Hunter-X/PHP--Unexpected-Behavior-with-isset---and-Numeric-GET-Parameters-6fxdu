This corrected code explicitly checks if `$_GET['id']` is a non-negative integer using `is_numeric()` and compares it against 0 using strict comparison (`===`).  This prevents the string "0" from being treated as falsy and avoids the unexpected behavior.

```php
<?php
  if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] >= 0) {
    $id = (int)$_GET['id']; // Type casting for safety
    // ... your code to handle the ID ...
    echo "ID is: " . $id;
  } else {
    echo "Invalid or missing ID.";
  }
?>
```