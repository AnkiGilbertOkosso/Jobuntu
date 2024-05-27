# Jobuntu - Job Board Application

Welcome to Jobuntu, a job board application designed as a graduation project. This repository is organized into two main directories: `frontend` and `full-project`. The `frontend` directory contains the initial HTML and Tailwind CSS code, while the `full-project` directory contains the Laravel-based backend that integrates the frontend code using Blade templates.

## Table of Contents

- [Overview](#overview)
- [Directory Structure](#directory-structure)
- [Frontend](#frontend)
- [Full Project (Backend)](#full-project-backend)
- [Setup and Installation](#setup-and-installation)
  - [Frontend](#frontend-setup)
  - [Backend](#backend-setup)
- [Usage](#usage)
- [Authors](#authors)

## Overview

Jobuntu is a web application that facilitates job postings and job searches. It provides a platform where employers can post job vacancies and job seekers can browse and apply for jobs. The application is divided into a frontend, built with HTML and Tailwind CSS, and a backend, built with Laravel. The frontend code is converted to Blade templates in the backend for dynamic rendering and ease of development.

## Directory Structure

```plaintext
jobuntu/
├── frontend/
├── full-project/
│   ├── app/
│   ├── bootstrap/
│   ├── config/
│   ├── database/
│   ├── public/
│   ├── resources/
│   │   ├── views/
│   │   │   └── ...
│   │   └── ...
│   ├── routes/
│   ├── storage/
│   ├── tests/
│   └── ...
└── README.md
```

## Frontend

The `frontend` directory contains the initial design and layout of the Jobuntu application. It includes:

- **HTML files**: The main structure and layout of the web pages.
- **Tailwind CSS**: For styling the web pages.
- **Assets**: Images, fonts, and other static resources.

## Full Project (Backend)

The `full-project` directory is a Laravel application that serves as the backend for Jobuntu. It includes:

- **Blade templates**: Converted from the HTML files in the `frontend` directory for dynamic content rendering.
- **Routes and Controllers**: For handling HTTP requests and business logic.
- **Models and Migrations**: For database interactions and schema management.

## Setup and Installation

To get started with Jobuntu, follow the steps below:

### Frontend Setup

1. **Navigate to the `frontend` directory**:
   ```bash
   cd frontend
   ```

2. **Install dependencies** (if any, like npm packages for Tailwind CSS):
   ```bash
   npm install
   ```

3. **Run Tailwind CSS**:
   ```bash
   npx tailwindcss -i ./src/input.css -o ./src/output.css --watch
   ```

### Backend Setup

1. **Navigate to the `full-project` directory**:
   ```bash
   cd full-project
   ```

2. **Install Composer dependencies**:
   ```bash
   composer install
   ```

3. **Copy the `.env.example` file to `.env` and configure your environment variables**:
   ```bash
   cp .env.example .env
   ```

4. **Generate the application key**:
   ```bash
   php artisan key:generate
   ```

5. **Run database migrations**:
   ```bash
   php artisan migrate
   ```

6. **Serve the application**:
   ```bash
   php artisan serve
   ```

## Usage

Once the setup is complete, you can access the application by navigating to `http://localhost:8000` in your web browser. The frontend should be integrated with the backend, and you can start using Jobuntu to post and browse job listings.

## Authors

- **Anki Gilbert Okosso** - Backend Developer - [GitHub Profile](https://github.com/AnkiGilbertOkosso)
- **Favour Momodu** - Frontend Developer - [GitHub Profile](https://github.com/Clara4555)