# Gutenberg Block Pattern Module

A lightweight, theme-includable module for registering custom block patterns in WordPress programmatically using PHP.

This module provides a clean and structured way to add complex, pre-designed block layouts to the block editor, making them easily accessible to content creators. It is designed to be included directly within a WordPress theme and is not a plugin.

## Features

* **Programmatic Registration:** Patterns are registered via PHP, ensuring they are tied to the theme and can't be modified or deleted by users from the UI.
* **Clean Separation:** Pattern markup (HTML/block comments) is kept in separate files from the registration logic, making maintenance easy.
* **Custom Categories:** Includes registration for custom pattern categories to group your theme-specific patterns.
* **Professional & Lightweight:** Built with WordPress best practices, prefixed functions, and no unnecessary bloat.

## Requirements

* WordPress 5.5 or newer (for `register_block_pattern`).
* A WordPress theme.

## 🚀 Installation & Usage

1.  **Download:** Download the `gutenberg-block-pattern-module` folder.
2.  **Include in Theme:** Place the entire `gutenberg-block-pattern-module` folder into your theme's directory (e.g., `/wp-content/themes/your-theme/gutenberg-block-pattern-module`).
3.  **Load the Module:** Open your theme's `functions.php` file and add the following line of PHP to include the module's main loader file:

    ```php
    // Load the custom block pattern module.
    require_once get_template_directory() . '/gutenberg-block-pattern-module/block-pattern-module.php';
    ```

4.  **Done:** That's it! Go to the WordPress editor, open the block inserter (`+` icon), and navigate to the 'Patterns' tab. You will see a new category named "Hussainas Patterns" containing the "Team Member Section" pattern.


## Text Domain

The text domain `hussainas` is used for all translatable strings.
