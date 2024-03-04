# Phoen Intelligence Website Database Management

## Introduction

Welcome to the Phoen Intelligence Database Management repository! Here, you'll find all the tools and scripts needed to manage the databases that power the Phoen Intelligence website.

![TermsLens logo](https://raw.githubusercontent.com/phoenorg/databases/main/databases.png)

### Table of contents

- [Database Structure](https://github.com/phoenorg/databases/blob/main/README.md#database-structure)
- [Repository Structure](https://github.com/phoenorg/databases/blob/main/README.md#repository-structure)
- [Getting Started](https://github.com/phoenorg/databases/blob/main/README.md#getting-started)
- [Contact Us](https://github.com/phoenorg/databases/blob/main/README.md#contact-us)
- [Contribution](https://github.com/phoenorg/databases/blob/main/README.md#Contribution)
- [License](https://github.com/phoenorg/databases/blob/main/README.md#license)

## Database Structure

Our database architecture consists of three primary tables, each serving a specific purpose:

1. **Links**: This table stores data related to news articles showcased on the homepage of our website. It includes fields for article titles, URLs, publication dates, and more.

2. **Identifiers**: The Identifiers table manages internal IDs used by Phoen Intelligence for various purposes, in the backend operations.

3. **Partners**: In the Partners table, there is a list of partner that collaborate with us. These partners are featured in the dedicated "Partners" section of our website, promoting mutual support and networking.

## Repository Structure

Here's a breakdown of the files and directories you'll find in this repository:

- **database-creation.sql**: This SQL script contains the commands necessary to set up a database environment identical to the one used by Phoen Intelligence. It includes table creation statements and initial data population.

- **index.php**: The `index.php` file serves as the homepage of our website. It dynamically fetches and displays news articles from the `Links` table.

- **partnerships.php**: Within `partnerships.php`, you'll find the code responsible for rendering the "Partners" section of our site. It retrieves partner data from the `Partners` table and displays it accordingly. The code in this script means that data older than 8 weeks (56 days) is no longer displayed. To do this, the script checks the database timestamp for the date a row was added and determines how long it has been there.

- **popups.css**: This CSS file contains styles specific to the pop-up elements used on both the homepage and the "Partners" section of our website. It ensures a visually appealing and consistent user experience.

Additionally, we've organized a directory named "management" to facilitate internal database management tasks. Here's what you'll find inside:

- **management/memberadd**: This directory contains scripts for adding new identifiers to the `Identifiers` table.

- **management/memberlist**: Here, you'll find tools for viewing and managing the existing identifiers stored in the `Identifiers` table.

- **management/news**: Within this directory, you'll discover functionalities for adding and managing news articles in the `Links` table.

- **management/partneradd**: Finally, the `partneradd` directory hosts scripts for adding new partners to the `Partners` table.

## Getting Started

To set up the database management system locally and integrate it with your website, follow these steps:

1. Execute the `database-creation.sql` script to create the necessary database schema and tables. For example, on your mysql database, you can run it in the "sql" section.
2. Place the PHP files (`index.php`, `partnerships.php`) in your web server's directory, ensuring proper configuration.
3. Customize the CSS styles in `popups.css` to match your website's design preferences.
4. Utilize the files within the `management` directory as needed to manage database entries efficiently.

## Contact Us

If you have any inquiries, encounter legal issues, copyright concerns, content removal requests, attribution requests, integration requests, or any questions whatsoever, please don't hesitate to reach out to us via our contact page. We're dedicated to providing prompt and helpful assistance to all inquiries.

## Contribution

We welcome contributions to improve the functionality and efficiency of the database management system. If you have suggestions for enhancements or would like to report issues, feel free to open an issue or submit a pull request.

## License

Unless otherwise stated, the code for this project is licensed under the [Creative Commons Attribution-NonCommercial-ShareAlike 
4.0 International License](https://creativecommons.org/licenses/by-nc-sa/4.0/).
