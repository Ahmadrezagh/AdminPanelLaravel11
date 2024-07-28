Certainly! Below is an updated README file with two installation methods: one without Docker and one with Docker.

---

# Laravel Admin Panel

This is a Laravel-based Admin Panel designed to streamline and simplify administrative tasks. The panel comes with essential features like authentication, access control, dynamic settings, and a versatile categories system. The project is dockerized for easy deployment and requires minimal setup.

## Features

1. **Login and Register**: Secure authentication system allowing admins and users to log in and register.
2. **Access Control List (ACL)**: Fine-grained access control to manage permissions for different user roles.
3. **Admins and Users Management**: Efficient management of both admins and users, with options to add, edit, and delete users.
4. **Dynamic Setting**: Configuration settings that can be adjusted dynamically through the admin interface.
5. **Basic Categories Feature**: A flexible categories system that can be applied to various features such as products or blogs.
6. **Dockerized Deployment**: Easy setup and deployment using Docker. Simply run `docker compose up -d` to start the project.
7. **Reusable Components**: Pre-built components like form inputs and modals to accelerate the development of the admin panel.

## Getting Started

### Prerequisites

- PHP 8.0 or higher
- Composer
- MySQL or another database supported by Laravel

### Installation

#### Method 1: Without Docker

1. **Clone the repository:**

   ```bash
   git clone https://github.com/Ahmadrezagh/AdminPanelLaravel11.git
   cd AdminPanelLaravel11
   ```

2. **Copy the example environment file and set your environment variables:**

   ```bash
   cp .env.example .env
   ```

3. **Install dependencies:**

   ```bash
   composer install
   ```

4. **Generate the application key:**

   ```bash
   php artisan key:generate
   ```

5. **Run the migrations and seeders to set up the database:**

   ```bash
   php artisan reset
   ```

6. **Serve the application:**

   ```bash
   php artisan serve
   ```

7. **Access the application:**

   Open your browser and navigate to `http://localhost:8000` (or your configured domain).

#### Method 2: With Docker

1. **Clone the repository:**

   ```bash
   git clone https://github.com/Ahmadrezagh/AdminPanelLaravel11.git
   cd AdminPanelLaravel11
   ```

2. **Copy the Docker environment file and set your environment variables:**

   ```bash
   cp .env.docker .env
   ```

3. **Customize the `larave.conf` file as needed:**

   Edit the `larave.conf` file in the project root to suit your server configuration.

4. **Build and run the Docker containers:**

   ```bash
   docker compose up -d
   ```

5. **Run the migrations and seeders to set up the database:**

   ```bash
   docker compose exec app php artisan reset
   ```

6. **Generate the application key:**

   ```bash
   docker compose exec app php artisan key:generate
   ```

7. **Access the application:**

   Open your browser and navigate to `http://localhost` (or your configured domain).

## Usage

### Authentication

- **Register** a new user or **login** with existing credentials.
- The default admin account can be set up via the seeders or manually through the database.

### Access Control List (ACL)

- Manage roles and permissions through the admin interface.
- Assign roles to users to control access to various parts of the admin panel.

### Admins and Users Management

- Add, edit, or delete users.
- Assign roles and manage user information.

### Dynamic Settings

- Modify settings dynamically through the admin panel to affect application behavior without changing code.

### Categories

- Create and manage categories.
- Apply categories to different features like products or blogs.

### Development Components

- Utilize pre-built components like form inputs and modals to speed up the development process.

## Customization

### Laravel Configuration

To customize the Laravel application, edit the files in the `config` directory. Common customizations include:

- Database settings (`config/database.php`)
- Mail settings (`config/mail.php`)
- Session settings (`config/session.php`)

### Docker Configuration

To customize the Docker environment, edit the `docker-compose.yml` file and the `Dockerfile` as needed.

## Contributing

Contributions are welcome! Please fork this repository and submit a pull request with your changes.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contact

If you have any questions or need further assistance, please contact [ahmadreza.web@gmail.com](ahmadreza.web@gmail.com).

---

Feel free to further modify this README file to better suit your project specifics and preferences.
