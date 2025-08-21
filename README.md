
# Capstone MVC Framework

A full-featured PHP MVC framework with authentication and database management, built from scratch following best practices.

## Features

- **Clean MVC Architecture** with proper separation of concerns
- **Dynamic Routing System** with custom route handling
- **PDO Database Connection** with prepared statements
- **Secure Authentication System** using PHP sessions
- **Responsive User Interface** with clean CSS styling
- **User Management** with complete CRUD operations
- **Session Management** with login/logout functionality

## Requirements

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Apache Web Server (with mod_rewrite enabled)
- Composer (optional)

## Installation

### 1. Clone the Repository

\`\`\`bash
git clone https://github.com/SalahAli2023/capstone4-mvc.git
cd capstone4-mvc
git checkout capstone4-mvc-ch4
\`\`\`

### 2. Database Setup

\`\`\`bash
mysql -u root -p < database.sql
\`\`\`

Or import the \`database.sql\` file manually through phpMyAdmin.

### 3. Configuration

Update the database credentials in \`config/database.php\`:

\`\`\`php
private \$host = 'localhost';
private \$db_name = 'capstone4_mvc';
private \$username = 'root';
private \$password = '';
\`\`\`

### 4. Server Configuration

Ensure Apache allows \`.htaccess\` overrides:

\`\`\`apache
<Directory \"/path/to/capstone4-mvc/public\">
    Options Indexes FollowSymLinks
    AllowOverride All
    Require all granted
</Directory>
\`\`\`

##  Project Structure

\`\`\`
capstone4-mvc/
├── app/
│   ├── controllers/     # Application Controllers
│   │   ├── AuthController.php
│   │   └── UserController.php
│   ├── models/         # Data Models
│   │   └── User.php
│   ├── views/          # View Templates
│   │   ├── auth/
│   │   │   └── login.php
│   │   └── users/
│   │       └── index.php
│   └── core/           # Core Framework
│       ├── Router.php
│       └── Controller.php
├── public/
│   ├── assets/
│   │   └── css/
│   │       └── style.css
│   ├── index.php       # Application Entry Point
│   └── .htaccess       # URL Rewriting
├── config/
│   └── database.php    # Database Configuration
├── vendor/             # Third-party Libraries
└── database.sql        # Database Schema
\`\`\`

##  Usage

### Access the Application

1. Open your browser and navigate to: \`http://localhost/capstone4-mvc/public/\`
2. Login with default credentials:
   - **Email:** salah@gmail.com 
   - **Password:** 12

### Available Routes

- \`GET /\` - Login page
- \`POST /login\` - Process login form
- \`GET /logout\` - Logout user
- \`GET /users\` - Users list (requires authentication)

### Adding New Routes

1. Register the route in \`public/index.php\`:

\`\`\`php
\$router->addRoute('/new-route', 'NewController', 'methodName');
\`\`\`

2. Create the controller in \`app/controllers/NewController.php\`:

\`\`\`php
class NewController extends Controller {
    public function methodName() {
        // Controller logic
        \$this->view('new/view');
    }
}
\`\`\`

3. Create the view template in \`app/views/new/view.php\`

##  User Management

The application includes complete user management with:
- User authentication (login/logout)
- Protected route handling
- User listing and data display
- Session-based security


##  Troubleshooting

### 404 Not Found Error
- Ensure \`mod_rewrite\` is enabled in Apache
- Verify \`AllowOverride All\` is set in Apache configuration

### Internal Server Error
- Check error logs in \`logs/error.log\`
- Verify file and folder permissions

### Database Connection Issues
- Verify credentials in \`config/database.php\`
- Ensure database schema is imported correctly

## Future Enhancements

- [ ] Role-based Access Control
- [ ] Enhanced Authentication (Remember me, Password reset)
- [ ] RESTful API Support
- [ ] Bootstrap Integration for UI
- [ ] User Registration System
- [ ] Email Verification
- [ ] File Upload Handling
- [ ] Pagination System
- [ ] Search Functionality

## Contributing

1. Fork the Project
2. Create your Feature Branch: \`git checkout -b feature/AmazingFeature\`
3. Commit your Changes: \`git commit -m 'Add AmazingFeature'\`
4. Push to the Branch: \`git push origin feature/AmazingFeature\`
5. Open a Pull Request

## Contact

- **Email:** salahalhimyai2023@gmail.com
- **GitHub:** [SalahAli2023](https://github.com/SalahAli2023)
---

**Note:** This project is part of the capstone series, current branch: \`capstone4-mvc-ch4\`

##  Version History

- **v1.0.0** (Current)
  - Initial MVC structure
  - Basic authentication system
  - User management
  - Database integration

##  Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

##  Performance Notes

- Uses PHP native sessions for authentication
- Implements PDO for secure database operations
- Minimal external dependencies
- Lightweight and fast routing system
