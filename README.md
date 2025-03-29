### Tests and linter status:
[![Run linter and tests](https://github.com/Ludmila398/andersen-php-tech-task/actions/workflows/tests.yml/badge.svg)](https://github.com/Ludmila398/andersen-php-tech-task/actions/workflows/tests.yml)

# Andersen PHP Technical Task

### Project Description
A simple Laravel 8 project allowing users to submit messages through a form. All submitted messages are stored in the database and displayed on the page. 5 sample messages are pre-generated using a factory and seeder for demonstration.

---

### Requirements

- PHP >= 8.3
- MySQL
- Composer
- Make
---

### Installation and Setup

1. Clone the repo and enter the project folder:

```bash
git clone git@github.com:Ludmila398/andersen-php-tech-task.git

cd andersen-php-tech-task
```

2.Install dependencies using Composer. Ensure that make is installed and available on your system. The make setup command will use Composer to install dependencies and prepare the project:

```bash
make setup
```

3. Create a MySQL database and configure the database settings in `.env`:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

4. Run migrations and start the local server:

```bash
make migrate
make serve
```

The project is now available at `http://127.0.0.1:8000`
5 demo messages are automatically seeded into the database.
---

### Project Structure

- `routes/web.php` - application routes
- `app/Http/Controllers/MessageController.php` - message controller
- `app/Models/Message.php` - message model
- `resources/views/messages/index.blade.php` - page with the form and messages display
- `database/migrations/` - database migrations

---

### Validation Rules

- `name` - required field, data type: string, maximum field length:255
- `email` - required field, valid email, maximum field length:255
- `message` - required field, data type: string, maximum field length:1000

### Testing and Linting

To run linter and tests locally:

```bash
make lint
make test
```

---

### Author

- [Liudmila Gubanova](https://github.com/Ludmila398)
