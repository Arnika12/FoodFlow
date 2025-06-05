# Online Food Order System for Restaurant

An efficient and user-friendly online food ordering system designed to enhance the dining experience for customers and streamline operations for restaurant admins.

## Copyright Notice

© 2024 Arnika Gunjal. All Rights Reserved.

This software and its documentation are proprietary and confidential. Unauthorized copying, distribution, or use of this software, via any medium, is strictly prohibited.

## Table of Contents

- [About](#about)
- [Features](#features)
- [Technology Stack](#technology-stack)
- [Screenshots](#screenshots)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
  - [Running the Application](#running-the-application)
  - [Access Instructions](#access-instructions)
- [File Structure](#file-structure)
- [Author](#author)

## About

This project provides a comprehensive solution for restaurants to manage their menu, handle orders, and receive customer feedback. It includes a robust admin panel for managing operations and a seamless user interface for customers.

**Key Highlights:**
- Fully responsive design for all devices
- Real-time order tracking
- Secure payment processing
- Comprehensive admin dashboard
- User-friendly interface
- Table reservation system
- Review and rating system

## Features

### Customer Features

- **User Registration and Login**: Secure account creation and access
- **Browse Menu Items**: Categorized list of food items with prices, descriptions, and images
- **Cart Management**: Add, adjust quantities, and remove items
- **Place Orders**: Multiple payment options available
- **Order Tracking**:
  - Real-time order status updates
  - Order history review
  - Order feedback system
- **Table Reservation**: Book tables with date, time, and guest count selection
- **Profile Settings**: Update personal information

### Admin Features

- **Dashboard Overview**: 
  - Total earnings tracking
  - Order management
  - Reservation overview
  - User statistics
- **Menu Management**: 
  - Add/update/delete menu items
  - Category management
  - Availability control
- **Order Management**: 
  - View and update orders
  - Status management
  - Payment tracking
- **Reservation Management**: 
  - Table booking management
  - Schedule viewing
- **User Management**: 
  - User account management
  - Access control
- **Review Management**: 
  - Customer feedback handling
  - Response management
- **Staff Management**: 
  - Staff account creation
  - Role assignment
  - Access control

## Technology Stack

- **Frontend**: 
  - HTML5
  - CSS3
  - JavaScript
  - Bootstrap 5
  - jQuery
  - Font Awesome
- **Backend**: 
  - PHP 7.4+
  - MySQL 5.7+
- **Server**: 
  - Apache 2.4+
- **Additional Libraries**:
  - AOS Library for animations
  - Bootstrap for UI components
  - jQuery for DOM manipulation

## Screenshots

The `UI-Screenshots` directory contains comprehensive screenshots of the system:

- Admin Dashboard
- User Interface
- Menu Management
- Order Management
- Reservation System
- User Profile
- Cart System

## Getting Started

### Prerequisites

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Apache 2.4 or higher
- Composer (optional)
- XAMPP/WAMP/MAMP (recommended)

### Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/arnikagunjal/online-food-ordering-system.git
   ```

2. **Database Setup:**
   - Import `restaurant.sql` to your MySQL database
   - Configure database connection in `db_connection.php`

3. **Server Configuration:**
   - Place the project in your web server's root directory
   - Ensure proper permissions are set

### Running The Application

1. Start your local server (XAMPP/WAMP/MAMP)
2. Navigate to: `http://localhost/online-food-ordering-system`

## Access Instructions

### Admin Access
- **URL**: `http://localhost/online-food-ordering-system/Admin`
- **Default Admin Credentials**:
  - Email: `admin@gmail.com`
  - Password: `admin2024`

### User Access
- **URL**: `http://localhost/online-food-ordering-system`
- **Registration**: Available for new users
- **Login**: Required for existing users

## File Structure

```
├── Admin/                 # Admin panel files
├── components/           # Reusable components
├── icons/               # System icons
├── images/              # Static images
├── uploads/             # User uploaded content
├── UI-Screenshots/      # System screenshots
├── *.php               # PHP files
├── *.css               # Stylesheet files
└── README.md           # Documentation
```

## Author

**Arnika Gunjal**
- Creator and Developer
- Contact: [Your Contact Information]
- GitHub: [Your GitHub Profile]

---

**Note**: This software is proprietary and confidential. Unauthorized copying, distribution, or use is strictly prohibited.
 


