![alt text](https://raw.githubusercontent.com/Nadaft/contactme/master/preview.png)

# ContactMe

[![Latest Stable Version](https://poser.pugx.org/nadaft/contactme/v/stable)](https://packagist.org/packages/nadaft/contactme)
[![Total Downloads](https://poser.pugx.org/nadaft/contactme/downloads)](https://packagist.org/packages/nadaft/contactme)
[![License](https://poser.pugx.org/nadaft/contactme/license)](https://packagist.org/packages/nadaft/contactme)

A Laravel Package to create Contact Us Form Easily

## Features
- Send Email
- Save Message to Database

Tested on Laravel 5.7

## Installation Steps

### 1. Require the Package

Run the following command: 

```bash
composer require nadaft/contactme
```

### 2. Run Migration

Run the following command: 

```bash
php artisan migrate
```

### 3. Edit `.env` File

Add variable MAIL_CONTACTME_TO to `.env` and then define the email to receive email

For example

```bash
MAIL_CONTACTME_TO="hello@example.com"
```
***Finally*** you can access your contact page by access `http://your-site.com/contact` to show the result


## Customize Your Form

If you want to create your own contact us page, you must following below instruction :

- Form action = `{{ route('contactme.submit') }}`
- Name field = input `name="name"`
- Email field = input `name="email"`
- Message field = textarea `name="message"`

> Don't forget to add `{{ csrf_field() }}`
 
 You can create the contact page with your own Route and/or Controller
