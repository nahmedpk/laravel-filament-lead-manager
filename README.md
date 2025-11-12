# Laravel Filament Plugin + Lead Manager

A fully functional Laravel 10 project with **Filament admin panel**, **Plugin Manager**, and **Lead Manager plugin**.
This project demonstrates a **plugin-based architecture**, ready for client demos or Upwork showcase.

---

## Features

- **Plugin Manager**
  - CRUD for plugins  
  - Enable/disable plugins  
  - Modular, scalable system  

- **Lead Manager**
  - CRUD for leads  
  - Status badges (New, Contacted, Closed)  
  - Filters, search, and sortable columns  
  - Fully integrated with Filament admin panel  

- **Admin Panel**
  - Filament 3.x  
  - Role-based admin access (single admin for now)  

---

## Requirements

- PHP >= 8.2  
- MySQL or MariaDB  
- Composer  
- Node.js + npm (for compiling frontend assets if needed)  
- Laravel 10  

---

## Setup Instructions

### 1. Clone or download the repository

```bash
git clone https://github.com/yourusername/laravel-filament-plugin-system.git
cd laravel-filament-plugin-system
```

Or unzip the downloaded ZIP file.

---

### 2. Install dependencies

```bash
composer install
npm install
npm run dev   # optional, only if you have custom JS/CSS
```

---

### 3. Environment Configuration

- Copy the example `.env` file:

```bash
cp .env.example .env
```

- Update `.env` with your **MySQL credentials**:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=filament_plugins
DB_USERNAME=root
DB_PASSWORD=your_mysql_password
```

- Generate the application key:

```bash
php artisan key:generate
```

---

### 4. Database Migration

- Run migrations to create tables for plugins, leads, and admin:

```bash
php artisan migrate
```

- Optional: Seed a default admin user (if you have a seeder):

```bash
php artisan db:seed
```

**Default admin credentials (example):**

```
Email: admin@example.com
Password: password123
```

---

### 5. Run the Application

```bash
php artisan serve
```

Visit in your browser:

```
http://localhost:8000/admin
```

- Login with your admin credentials  
- Access:
  - **Plugin Manager** → Manage plugins  
  - **Lead Manager** → Manage leads  

---

### 6. Optional Cleanup & Cache Clear

```bash
php artisan config:clear
php artisan cache:clear
php artisan view:clear
```

---

### 7. Folder Structure Highlights

```
app/
 └── Filament/
      └── Resources/
           ├── PluginResource.php
           ├── PluginResource/Pages/ (CRUD Pages)
           ├── LeadResource.php
           └── LeadResource/Pages/ (CRUD Pages)
app/
 └── Plugins/
      └── LeadManager/
           └── Models/Lead.php
```

---

### 8. Optional Enhancements

- Add **dashboard widgets** for total leads, new leads, etc.  
- Add **email notifications** for new leads.  
- Implement **roles and permissions** if multiple admins needed.  
- Add **plugin activation/deactivation logic** for system extensibility.  

---

### 9. How to Contribute

- Fork the repo  
- Make changes in a new branch  
- Submit a pull request  

---

### 10. Support

For setup issues or questions, please reach out on **Upwork messages** or via your email.