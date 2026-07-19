# PHP Core Concepts Reference

A structured playground and codebase documenting the core concepts of PHP (version 8+), covering variables, data types, control flow structures, and best practices.

## 📂 Repository Structure

```text
corePHP/
├── lesson1/                       # Basic syntax, types, and terminal tools
│   ├── 01_variables_constants.php # Variables, basic types, const vs define
│   ├── 02_strings.php             # Single vs double quotes syntax behavior
│   ├── 03_operators.php           # Comparison, Null Coalescing, and Spaceship operators
│   └── 04_debugging.php           # Array debug output using print_r and var_dump
├── lesson2/                       # Control flow and iteration
│   ├── 01_if_else_ternary.php     # If/else, Ternary, Elvis operator, and Early Return pattern
│   ├── 02_switch_vs_match.php     # Switch vs PHP 8 Match expression comparison
│   └── 03_foreach_loop.php        # Indexed/Associative arrays and reference loop warnings
└── README.md                      # Reference documentation
```

---

## 📖 Lessons Overview

### 📂 Lesson 1: Basics & Core Syntax

This lesson introduces fundamental concepts, data structures, and terminal inspection tools in PHP.

1. **Variables & Constants (`01_variables_constants.php`)**
   - Declaring typed variables (`string`, `int`, `float`).
   - Declaring constants using `const` (compile-time) and `define` (runtime).
   - Strict typing enforcement (`declare(strict_types=1);`).

2. **Strings (`02_strings.php`)**
   - **Single Quotes (`'`)**: Outputs contents literally, skipping variable interpolation and escape sequences. More lightweight.
   - **Double Quotes (`"`)**: Parses variables and handles escape sequences (e.g., `\n`).

3. **Key Operators (`03_operators.php`)**
   - **Loose (`==`) vs. Strict (`===`) Comparison**: Type coercion behavior in loose matching.
   - **Null Coalescing Operator (`??`)**: Sets fallback values for nullable types.
   - **Spaceship Operator (`<=>`)**: Performs three-way comparisons returning `-1`, `0`, or `1`.

4. **Terminal Debugging (`04_debugging.php`)**
   - **`print_r()`**: Standard human-readable array/object output.
   - **`var_dump()`**: In-depth terminal inspection including type details and string lengths.

---

### 📂 Lesson 2: Control Flow & Iteration

This lesson focuses on logical structures, conditions, and array loops.

1. **If/Else & Ternary (`01_if_else_ternary.php`)**
   - Standard control structures (`if`, `else`).
   - Ternary operator shorthands for clean inline conditionals.
   - **Elvis Operator (`?:`)**: Shorthand ternary checking for truthy values (unlike `??`, which only checks for `null`).
   - **Early Return Pattern**: Best practice to validate preconditions and terminate execution early to avoid deep nesting.

2. **Switch vs. Match (`02_switch_vs_match.php`)**
   - **`switch`**: Traditional structure with fall-through logic requiring explicit `break` statements.
   - **`match`**: Modern PHP 8+ expression featuring strict comparison (`===`), direct value return, and no fall-through bugs.

3. **Foreach Loop (`03_foreach_loop.php`)**
   - Iterating over **Indexed Arrays** (sequential index-based).
   - Iterating over **Associative Arrays** (key-value maps) utilizing keys and values.
   - **Reference Iteration Warning**: Proper usage of reference pointers (`&$value`) and the necessity of unsetting them (`unset($value)`) to prevent array pollution.

---

## 🚀 How to Run

To execute any script in the CLI, navigate to the respective directory and use the PHP interpreter:

```bash
# Navigate to a lesson directory
cd lesson1

# Run a specific script
php 01_variables_constants.php
```
