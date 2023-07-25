# WP Posh

This documentation covers the implementation of custom form alteration on a WordPress website. The form has been enhanced with jQuery scripts to provide improved functionality and a better user experience.

> **Important**: You can preview the theme on the live staging instance of the website at [https://staging8.asemhamdi.com/](https://staging8.asemhamdi.com/)

## Requirements

- WordPress (latest version)
- PHP (version 8.2)
- MySQL (latest version)

## Technology Stack

- WordPress: Our chosen Content Management System.
- Elementor: A WordPress page builder plugin used to create the page.
- jQuery: A fast, small, and feature-rich JavaScript library used for this form customization.
- Custom Css: To Customize the form and Several other elements.

## Features

1. **Field Placeholder Modification**: The form placeholders have been modified using a jQuery script. This moves the asterisk to the beginning of the placeholder, and capitalizes the first letters of words for a more professional and readable look.

2. **Label Text Modification**: The label text associated with a form input field can be easily modified using jQuery, providing flexibility in displaying the information the way you need.

3. **Bullet Point Removal**: Any bullet points that were previously appearing for error messages are now removed using a CSS rule for a cleaner and uncluttered interface.

## Installation

1. Install the "All in One WP Migration" plugin from your WordPress dashboard.

2. Navigate to "All in One WP Migration" in the WordPress dashboard, and select the "Import" option.

3. Select the provided file with the `.wpress` extension.

4. Wait for the import process to complete. Your website should now have the new modifications applied.

> **Note:** The `.wpress` file contains the customizations detailed in this document. It includes the necessary files and settings for the changes to take effect.

## Usage

- The jQuery script provided in the custom.js file is used to perform the customization of the form fields. It is triggered when the specific form fields are detected in the page.-
- The interval function checks every 100ms to see if the form fields exist on the page yet. Once they are detected, it modifies the placeholders, label texts, and removes the bullet points as required.

## Screenshots

- Desktop View:

  ![Desktop View](./screenshots/desktop.png)

- Mobile View:

  ![Mobile View](./screenshots/mobile.png)
