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
├── lesson3/                       # Arrays and array processing
│   ├── 01_multi_arrays.php        # Associative and multidimensional arrays
│   ├── 02_array_functions.php     # Transforming and filtering arrays (array_map, array_filter)
│   └── 03_array_utilities.php     # Core array utilities (in_array, keys, merge, destructuring)
├── lesson4/                       # Functions and variable scopes
│   ├── 01_type_hinting.php        # Strict typing, parameter type hints, and return type declarations
│   ├── 02_scope_references.php    # Global scope variable access and pass-by-reference (&)
│   └── 03_closures_arrow.php      # Anonymous closures vs implicit arrow functions
├── lesson5/                       # HTTP operations and form handling
│   ├── 01_get_post.php            # HTTP request methods (GET vs POST payloads)
│   ├── 02_validate_sanitize.php   # User input sanitization (trim, htmlspecialchars) and server-side validation
│   └── 03_file_upload.php         # File upload processing and target destination handling
├── lesson6/                       # State management and session security
│   ├── 01_cookie.php              # Setting, reading, and executing client-side cookies for persistence
│   ├── 02_login.php               # User login form handling and session initialization
│   ├── 03_dashboard.php           # Session-based authorization and access control dashboard
│   └── 04_logout.php              # Session destruction and client redirection
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
   - Iterating over **Indexed Arrays** (index-based).
   - Iterating over **Associative Arrays** (key-value maps) utilizing keys and values.
   - **Reference Iteration Warning**: Proper usage of reference pointers (`&$value`) and the necessity of unsetting them (`unset($value)`) to prevent array pollution.

---

### 📂 Lesson 3: Arrays & Array Manipulation

This lesson covers advanced array structures, sorting, filtering, and modern array manipulation techniques.

1. **Associative & Multidimensional Arrays (`01_multi_arrays.php`)**
   - Structuring nested associative arrays to represent complex relational datasets.
   - Traversing and displaying multidimensional structures selectively based on array attributes.

2. **Array Map & Filter (`02_array_functions.php`)**
   - **`array_filter()`**: Filtering array elements conditionally using closures and arrow functions.
   - **`array_map()`**: Transforming elements within an array structure.
   - **`array_column()`**: Extracting values from a specific column in a multidimensional array.

3. **Array Utilities (`03_array_utilities.php`)**
   - **`in_array()`**: Validating if a value exists within an array.
   - **`array_key_exists()`**: Verifying if a key exists in an associative array (contrasted with `isset()`).
   - **Spread Operator (`...`)**: Merging arrays efficiently.
   - **Array Destructuring**: Unpacking array elements into distinct variables.

---

### 📂 Lesson 4: Functions & Variable Scopes

This lesson explains type system enforcement, scoping boundaries, and anonymous function types.

1. **Type Hinting (`01_type_hinting.php`)**
   - Enforcing strong typing with `declare(strict_types=1);`.
   - Declaring parameter types and nullable types (`?type`).
   - Defining return types and Union Types (e.g., `float|int`).
   - Declaring `void` return types for functions that do not yield values.

2. **Variable Scope & References (`02_scope_references.php`)**
   - Accessing outer scope variables inside functions using the `global` keyword.
   - Modifying variables in-place within the caller's scope using Pass-by-Reference (`&$variable`).

3. **Closures & Arrow Functions (`03_closures_arrow.php`)**
   - **Closures**: Classic anonymous functions capturing outer scope variables explicitly using the `use` keyword.
   - **Arrow Functions**: Concise function syntax introduced in PHP 7.4 that automatically captures outer scope variables by value.

---

### 📂 Lesson 5: HTTP Operations & Form Handling

This lesson addresses standard web protocols, form processing, security, and uploads.

1. **GET & POST Methods (`01_get_post.php`)**
   - Inspecting client requests with `$_SERVER['REQUEST_METHOD']`.
   - Extracting URL parameters via `$_GET` and form payloads via `$_POST`.
   - Implementing simple responsive layouts using Tailwind CSS.

2. **Data Sanitization & Validation (`02_validate_sanitize.php`)**
   - **Sanitization**: Cleaning inputs to prevent injection and trimming whitespace (`trim()`, `htmlspecialchars()`).
   - **Validation**: Enforcing business rules (e.g., minimum character length, valid value sets).
   - Displaying localized validation errors and success status messages.

3. **File Uploads (`03_file_upload.php`)**
   - Handling multi-part data submissions with `$_FILES` metadata.
   - Dynamic directory creation and security adjustments.
   - Relocating temporary files to safe directory locations via `move_uploaded_file()`.

---

### 📂 Lesson 6: State Management & Session Security

This lesson explores persistent client-side data and secure session workflows.

1. **Cookies (`01_cookie.php`)**
   - Setting client-side cookies with `setcookie()` containing expiry dates and paths.
   - Retrieving values via the `$_COOKIE` superglobal to persist settings like layout themes.

2. **Authentication Flow (`02_login.php`, `03_dashboard.php`, `04_logout.php`)**
   - **Session Initialization**: Managing persistent session lifecycles using `session_start()`.
   - **Login Handlers (`02_login.php`)**: Validating client credentials and storing authentication states in `$_SESSION`.
   - **Authorized Dashboard (`03_dashboard.php`)**: Restricting dashboard access using session checks.
   - **Logout Routine (`04_logout.php`)**: Releasing session variables (`session_unset()`) and destroying active sessions on the server (`session_destroy()`).

---

## 🚀 How to Run

To execute any script in the CLI, navigate to the respective directory and use the PHP interpreter:

```bash
# Navigate to a lesson directory
cd lesson1

# Run a specific script
php 01_variables_constants.php
```

To test the web-based scripts in **Lesson 5** and **Lesson 6**, start the built-in PHP development server in the lesson directory:

```bash
# Navigate to the web lesson directory
cd lesson5

# Start local server
php -S localhost:5000

# Open in browser: http://localhost:5000/01_get_post.php
```
