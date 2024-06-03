# neurodata-website

NeuroData - Brain Neuro Data Integration and Visualization

This repository contains a complete workflow for integrating and visualizing various types of brain neuro data such as scomics, MRI, ECG, Fish, and electrophysiology data. The website allows users to register, login, view, download, and manage datasets.

Directory Structure

neurodata
├── app
│   ├── Console
│   ├── Exceptions
│   ├── Http
│   │   ├── Controllers
│   │   │   ├── AdminController.php
│   │   │   ├── DatasetController.php
│   │   │   └── ...
│   │   ├── Middleware
│   │   ├── Requests
│   │   └── ...
│   ├── Models
│   │   ├── DataType.php
│   │   ├── Dataset.php
│   │   └── User.php
│   └── ...
├── bootstrap
├── config
├── database
│   ├── factories
│   ├── migrations
│   │   ├── 2021_01_01_000000_create_users_table.php
│   │   ├── 2021_01_01_000001_create_data_types_table.php
│   │   ├── 2021_01_01_000002_create_datasets_table.php
│   │   └── ...
│   ├── seeders
│   └── ...
├── public
│   ├── index.php
│   └── ...
├── resources
│   ├── js
│   ├── lang
│   ├── sass
│   ├── views
│   │   ├── auth
│   │   │   ├── login.blade.php
│   │   │   ├── register.blade.php
│   │   │   └── ...
│   │   ├── datasets
│   │   │   ├── index.blade.php
│   │   │   ├── show.blade.php
│   │   │   └── ...
│   │   ├── admin
│   │   │   ├── create.blade.php
│   │   │   └── ...
│   │   └── welcome.blade.php
├── routes
│   ├── web.php
│   └── ...
├── storage
│   ├── app
│   ├── framework
│   ├── logs
│   └── ...
├── tests
├── vendor
├── .env
├── .gitignore
├── artisan
├── composer.json
├── composer.lock
└── README.txt

Prerequisites

Ensure you have the following tools installed:

- PHP
- Composer
- MySQL
- Apache or Nginx

Setup

1. Clone the repository:

    git clone https://github.com/yourusername/neurodata.git
    cd neurodata

2. Configure environment variables:

    cp .env.example .env
    nano .env

    Adjust the database settings and other environment variables as needed.

3. Install dependencies:

    composer install
    npm install
    npm run dev

4. Generate application key:

    php artisan key:generate

5. Run database migrations and seeders:

    php artisan migrate --seed

6. Set storage link:

    php artisan storage:link

Usage

1. Start the development server:

    php artisan serve

    Alternatively, configure Apache or Nginx to serve the application.

2. Access the website in your browser at `http://localhost:8000`.

3. Register a new account or login with an existing account.

4. Browse datasets, view details, and download files.

5. (Admin) Upload new datasets from the admin panel.

Routes

- `/`: Home page
- `/login`: Login page
- `/register`: Registration page
- `/datasets`: List of datasets
- `/datasets/{id}`: Dataset details page
- `/datasets/{id}/download`: Download dataset file
- `/admin/datasets/create`: (Admin) Upload dataset

Troubleshooting

If you encounter any issues, check the logs in the `storage/logs` directory and refer to the Laravel documentation.

License

This project is licensed under the MIT License. See the LICENSE file for details.

Acknowledgements

This project uses several open-source packages and tools, including Laravel, Composer, and others. Special thanks to their developers for providing these resources to the community.
