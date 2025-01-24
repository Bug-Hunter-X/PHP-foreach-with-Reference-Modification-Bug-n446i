# PHP foreach with Reference Modification Bug

This repository demonstrates a subtle bug in PHP related to the use of references in `foreach` loops.  Modifying array elements by reference within a `foreach` loop can lead to unexpected results if not handled carefully.

The issue arises because the reference to the element persists even after the loop completes.  This can cause unintended side effects if the modified element is later used outside of the loop.

The `bug.php` file contains the problematic code. The `bugSolution.php` provides a solution to this issue.

## How to Reproduce

1. Clone this repository.
2. Run the `bug.php` script using a PHP interpreter. Observe the unexpected output.
3. Run the `bugSolution.php` script. This shows a corrected approach.

## Solution

The solution involves avoiding references within the `foreach` loop and creating a copy of the element if modifications are necessary.