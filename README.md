# Château de Sweets

A dynamic showcase and landing page web application for Château de Sweets, built with the Laravel framework and Blade templating engine.

## About the Project

This application is designed for product and brand presentation, corporate information, and customer communication workflows.

* **Home:** Features a responsive product carousel and business introduction.
* **About Us:** A presentation page highlighting the brand's history and culinary philosophy.
* **Contact & Feedback Form:** A feedback submission form with post-submission redirect and status handling.
* **Modular Views:** A centralized `layout` architecture ensuring visual and structural consistency across all pages.

## Tech Stack

* **Backend:** PHP / Laravel
* **Frontend:** Blade Templating Engine, HTML5, CSS3, JavaScript (Bootstrap Carousel)
* **Database:** MySQL / SQLite

## Project Structure

```text
├── app/Http/Controllers/
│   ├── HomeController.php      # Home view handling
│   ├── AboutController.php     # About page flow
│   └── ContactController.php   # Contact form & submission routing
├── resources/views/
│   ├── layouts/layout.blade.php
│   ├── Home.blade.php
│   ├── About.blade.php
│   ├── Contact.blade.php
│   └── Sent.blade.php
└── routes/web.php              # Web route definitions
