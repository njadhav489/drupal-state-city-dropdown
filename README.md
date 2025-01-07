# Drupal State City Dropdown

## Description
This module allows you to display a dynamic state-city dropdown. Based on the selected state, the corresponding cities are shown in a dropdown. Currently, it contains a mapping of Indian states and cities in the code. This module is primarily designed to be used with the **Webform module**, where cities are dynamically populated based on the selected state. 

You can customize the state and city lists according to your needs. If you're not using the Webform module, you can skip adding states and cities in the admin panel.

## Features
- Displays state and city dropdowns.
- Dynamically populates cities based on the selected state.
- Pre-configured with Indian states and cities.
- Easily customizable to add more states and cities.
- Can be used with Webform to validate data in the admin panel.

## Installation
1. Download the module folder and place it in the root directory under `modules/custom`.
2. The final path should be: modules/custom/statecity_webform



## Usage

### Webform Configuration:
1. Create two **Webform options**:
- One for **State**.
- One for **City**.
- Paste the provided state and city data into these options.

2. In **Webform**:
- Create a **State dropdown** and assign it the class `nj-state-dropdown`.
- Create a **City dropdown** and assign it the class `nj-city-dropdown`.

### Non-Webform Use:
If you're not using the Webform module, you can skip the creation of the state and city options in the admin panel. You can customize the module to handle state and city selection in your preferred way.

## Dependencies
- **Drupal Webform module** (only if you are using it).

## License
This module is **free to use**, but please give credit to the author.

## Author Information
- **Author**: [Nilesh Jadhav](https://github.com/njadhav489)

## Version
- 1.0.0 (Initial Release)

## Customization
Feel free to modify the state and city lists in the code to match your requirements. You can also expand the list to include states and cities from other countries.

---

**Note**: If you encounter any issues or have suggestions for improvements, feel free to open an issue on the [GitHub Repository](https://github.com/njadhav489/statecity_webform).

