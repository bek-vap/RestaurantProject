# 🍽 RestaurantProject — PHP MVC Food Ordering

A simple restaurant ordering app built **from scratch in plain PHP** with an MVC
structure. It has two sides: **customers** browse the menu by category and place orders,
and the **kitchen (Oshpaz)** sees incoming orders in real time and marks them as done.
Orders are stored in **MySQL** using prepared statements.

> The interface is in **Uzbek** (`Oshpaz` = chef / kitchen).

---

## ✨ Features

### Customer side (`/user`)
- **Browse the menu** by category: meals, fast food, desserts, drinks.
- **Place an order** for a dish with a name.
- **PRG pattern** (Post → Redirect → Get) so refreshing the page never double-submits
  an order.
- **Guest sessions** — each visitor gets a unique guest id automatically.

### Kitchen side (`/oshpaz`)
- **Live order queue** — all orders, newest first.
- **Mark as done** — completing an order removes it from the queue.

---

## 🛠 Tech Stack

| Layer     | Technology |
|-----------|-----------|
| Language  | PHP 8 (no framework) |
| Database  | MySQL via `mysqli` with **prepared statements** |
| Pattern   | MVC (Model – View – Controller) |
| Routing   | Single front controller (`public/index.php`), clean URLs |
| Sessions  | PHP sessions (guest identity) |

---

## 🧭 How it works

`public/index.php` is the **front controller**. It starts a session (assigning a guest
id if needed) and routes clean URLs to the matching controller:

```
/  or  /user     → userIndex()    customer menu & ordering
/oshpaz          → oshpazIndex()  kitchen order queue
anything else    → 404
```

- **Models** (`Dish`, `Order`) hold the data logic. `Order` uses **prepared statements**
  (`bind_param`) for every write — safe against SQL injection.
- **Views** in `app/views/` render the HTML with a shared layout header.
- The dish menu is defined in `Dish.php`; customer orders are persisted to the MySQL
  `orders` table.

---

## 📁 Project Structure

```
.
├── public/
│   ├── index.php               # Front controller / router
│   └── style.css
├── app/
│   ├── db.php                  # MySQL connection
│   ├── controllers/
│   │   ├── UserController.php   # Menu browsing + placing orders
│   │   └── OshpazController.php # Kitchen order queue
│   ├── models/
│   │   ├── Dish.php            # Menu catalog by category
│   │   └── Order.php           # Order CRUD (prepared statements)
│   └── views/
│       └── layouts/            # header + user/ and oshpaz/ pages
└── mysql.sql                    # Database schema
```

---

## 🚀 Getting Started

### Prerequisites
- PHP 8.x
- MySQL

### Setup

```bash
# 1. Clone
git clone https://github.com/bek-vap/RestaurantProject.git
cd RestaurantProject

# 2. Create the database and table
mysql -u root -p < mysql.sql

# 3. Configure the DB connection
#    Edit app/db.php with your MySQL host / user / password
#    (see "Configuration" below)

# 4. Start the dev server from public/
php -S localhost:8000 -t public
```

Then open:
- Customer menu → **http://localhost:8000/user**
- Kitchen queue → **http://localhost:8000/oshpaz**

### Configuration

Database credentials live in `app/db.php`. For anything beyond local testing, move them
into environment variables instead of hard-coding them:

```php
$mysql = new mysqli(
    getenv('DB_HOST') ?: 'localhost',
    getenv('DB_USER') ?: 'root',
    getenv('DB_PASS') ?: '',
    getenv('DB_NAME') ?: 'mvc_food'
);
```

---

## 📝 Notes

- Built to practise **MVC in raw PHP** with a real database: front-controller routing,
  separation of models/views/controllers, prepared statements, and the PRG pattern.
- Demonstrates a two-role workflow (customer ↔ kitchen) around a shared order queue.
