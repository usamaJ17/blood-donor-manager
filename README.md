## Blood Donation Manager
A laravel based web portal for managing a Blood Donation Organization 

## Navigate To:
* [Description](#description)
* [Installation](#installation)
* [Guidelines](#guidelines)
* [Questions](#questions)

## Description 

This application has a public landing page built with tailwind CSS; this displays your general information, an Image carousel, and a contact form. Users can also register as a donor by completing the form provided on the donor page.

Then we have a separate management part built with Laravel. Users can log in with their credentials. We have three roles, Admin, Blood Manager, and Documentation. 

The blood manager can search for a donor based on blood group and update only the last call and remarks field. In contrast, documentation is allowed to abb new donors or cases. Admin can edit any donor, any case, create a new user and check reports; reports are generated automatically.


## Installation

### Before attempting to use this project, make sure to have these programs installed on your computer:  
* VS Code  
* GitBash  
* composer 

### Steps to initialize the project:  
1. **Copy Link:** https://github.com/usamaJ17/blood-donor-manager.git
1. **Clone:** Within GitBash, use the command "git clone https://github.com/usamaJ17/blood-donor-manager.git"
### After Clone
1. **Database:** Create your database.
1. **Env:** Add a .env file and configure it accordingly.
1. **Tables:** To ceate database tables run migrations by :
```bash
  php artisan migrate
```
4. **Vendors:** install vendors by :

```bash
  composer install
```
5. **Run:** run your app :
```bash
  php artisan serve
```

## Guidelines

* **Points to consider**
    * This app can be used by any organization or society that works to connect donors to people. 
    * While working for a blood donation organization, I found it challenging to manage and search through our data on excel, so I decided to create this app.
    * It increases our efficiency; we have to keep records of our donors, cases and reports, which were not centralized; due to this, we need help using our data. With this web app, we can easily keep a record of our progress and make use of our data efficiently
    * While creating this project, I learned much about Laravel framework structure and Tailwind CSS, one of the best CSS framework.
    * This project is simple and minimal and can be easily modified and moulded according to the situation.

* **Licenses:** [MIT](https://choosealicense.com/licenses/mit/)


## Questions

Have any questions about this project? Reach out!   
Email: usamajalal17@gmail.com
