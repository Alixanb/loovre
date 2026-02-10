# Loovre

A web application showcasing the best travel options available.

## Features

-   **Dynamic Content**: Pages are served via PHP, utilizing Twig for templating.
-   **Multilingual Support**: Content available in French and English.
-   **Interactive Elements**: Includes a contact form and interactive menu.
-   **Dockerized**: Easily deployable with Docker and Docker Compose.

## Prerequisites

Ensure you have the following installed on your system:

-   [Docker](https://docs.docker.com/get-docker/)
-   [Docker Compose](https://docs.docker.com/compose/install/)

## Getting Started

### 1. Clone the Repository

```bash
git clone <repository_url>
cd <repository_directory>
```

### 2. Start the Application

Run the following command to build and start the container:

```bash
docker-compose up --build -d
```

This will:
-   Build the Docker image using PHP 8.0 and Apache.
-   Start the application on port **8080**.
-   Mount the current directory to `/var/www/html` for live updates during development.

### 3. Access the Application

Open your web browser and navigate to:

[http://localhost:8080](http://localhost:8080)

## Project Structure

-   `Dockerfile`: Defines the application environment (PHP 8.0 with Apache and mod_rewrite).
-   `docker-compose.yml`: Orchestrater for the application service.
-   `include/`: Helper PHP scripts and data arrays.
-   `templates/`: Twig templates for the frontend.
-   `css/` & `images/`: Static assets.
-   `*.php`: Entry points for different pages (e.g., `index.php`, `afrique.php`).

## Maintenance

To stop the containers:

```bash
docker-compose down
```

To view logs:

```bash
docker-compose logs -f
```
