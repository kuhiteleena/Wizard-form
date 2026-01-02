# 🧙‍♂️ Multi Step Wizard Form

A responsive multi step wizard form built using HTML, CSS, JavaScript, Bootstrap, and PHP.  
The form collects user registration details, personal information, and payment data in a step by step flow with validation.

---

## 🚀 Features

- Multi step form navigation (Next / Previous)
- Client side validation using HTML5 and JavaScript
- Responsive and modern UI design
- Password confirmation validation
- Payment details section with card support visuals
- PHP backend integration for form submission
- Clean and well structured code

---

## 🛠️ Technologies Used

- HTML5  
- CSS3  
- JavaScript (Vanilla JS)  
- Bootstrap 5  
- PHP  

---

## 📂 Project Structure

```
/wizard-form
│── index.html # Main multi step form
│── style.css # Styling and responsive layout
│── style.js # Step navigation and validation logic
│── submit.php # Handles form submission
│── db.php # Database connection 

```

---

## 🧩 Form Steps

### Step 1: Account Creation
- First Name
- Last Name
- Email
- Password with validation
- Confirm Password

### Step 2: Personal Details
- Address
- City
- State
- ZIP / Postal Code

### Step 3: Payment Details
- Card Number
- Name on Card
- Expiry Date
- CVV

---

## ✅ Validation

- Required field checks
- Email format validation
- Password strength validation
- Password match confirmation
- Numeric validation for card fields

---

## ▶️ How to Run the Project

1. Download or clone the repository  
2. Place the project folder inside your local server directory (e.g. `htdocs` for XAMPP)
3. Start Apache server
4. Open browser and visit:
http://localhost/wizard-form/index.html
5. Fill the form and submit

---

## 🔐 Backend

- Form data is submitted using POST method
- `submit.php` handles the form submission
- `db.php` can be configured to store data in a database

---

## 📌 Use Cases

- User Registration
- Checkout Forms
- Onboarding Wizards
- Subscription Forms

