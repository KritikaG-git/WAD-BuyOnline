# 🛒 BuyOnline — Web-Based Online Shopping System  
### COS80021 – Web Application Development

This project was developed as part of a university assignment to demonstrate proficiency in web development using AJAX technologies, PHP, XML, and XSLT. The goal was to create a simplified online shopping platform that supports customer registration, product listing by managers, item purchases, and inventory management.

> **Note:** This project was implemented and deployed on a university server via WinSCP and the Mercury (Linux) server environment.

---

## 🧰 Tech Stack

- **Frontend:** HTML, CSS, JavaScript, AJAX (XMLHttpRequest)
- **Backend:** PHP
- **Data Storage:** XML files (`customer.xml`, `goods.xml`, `manager.txt`)
- **Other:** XSLT, XPath, DOM

---

## 📂 File Structure
'''
/Project2/ (under www/htdocs)
│
├── buyonline.htm # Main site map
├── register.htm # Customer registration
├── login.htm # Customer login
├── buying.htm # Item catalog & cart
├── mlogin.htm # Manager login
├── listing.htm # Manager adds products
│
├── js/ # JavaScript files
├── php/ # PHP backend scripts
├── xsl/ # XSLT stylesheets
│
/data/ (under www)
│
├── customer.xml # Stores registered customer data
├── goods.xml # Stores inventory & item transactions
├── manager.txt # Manager ID & password list
'''

---

## ✅ Features

### 👤 Customer
- Secure registration with input validation and email uniqueness check.
- Login with stored credentials from `customer.xml`.
- Live product catalog that updates every 10 seconds.
- Add/remove items to a shopping cart.
- Confirm or cancel purchases, with all inventory data updated accordingly.

### 🛍️ Store Manager
- Login via `manager.txt` credentials.
- Add new products with auto-generated item numbers.
- View and process sold items (resetting sold quantity, removing out-of-stock items).

---

## 🚀 How to Use

1. Visit the url: https://mercury.swin.edu.au/cos80021/s104361002/Project1/
   (Only limited time access was provided by the University)
2. Choose either:
   - **Customer Registration/Login** to browse and shop.
   - **Manager Login** to add or manage items.
3. Use the intuitive buttons and forms to interact with the system.

---

## 📑 Notes

- All communications between client and server are handled using **XMLHttpRequest** (AJAX).
- XML documents are dynamically read/written using PHP.
- The project is **session-aware** and tracks logged-in user types (customer or manager).
