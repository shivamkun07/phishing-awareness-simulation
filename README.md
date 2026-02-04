# Phishing Awareness Simulation

A web-based **Phishing Awareness Simulation Platform** built using **Laravel**, designed to demonstrate how phishing attacks work and to educate users on identifying such threats in a controlled and ethical environment.

---

# Project Overview

This project simulates a real-world phishing scenario where:
- Users receive a simulated phishing email
- A fake login page captures entered credentials
- The attempt is logged for awareness and analysis
- Users are redirected to the legitimate site after submission

⚠️ **Note:**  
This project is strictly for **educational and awareness purposes only**.

---

 # Features

- 🔐 Simulated phishing login page  
- 🗂️ Credential capture with timestamp & IP logging  
- 📊 Admin dashboard to view captured attempts  
- 📥 Export captured credentials as CSV  
- 🛠️ Campaign management (CRUD)  
- 📧 Email integration using Mailtrap / Gmail  
- 🔒 Secure environment variable handling  

---

## 🛠 Tech Stack


- **Backend:** Laravel (PHP)
- **Frontend:** Blade + Tailwind CSS
- **Database:** SQLite / MySQL
- **Email:** Mailtrap / SMTP
- **Version Control:** Git & GitHub

---

## 🚀 Deployment Guide


This section explains how to set up and run the Phishing Awareness Simulation project locally for educational and testing purposes.
### Prerequisites


Ensure the following are installed on your system:
-PHP 8.1+
-Composer
-Node.js & npm
-SQLite (or MySQL if configured)
-Git

---

## 🔄 Application Flow

1. User receives a simulated phishing email
2. Email contains a link to a fake login page
3. User enters credentials on the phishing page
4. Credentials are securely stored in the database (for awareness analysis)
5. User is redirected to the legitimate website
6. Admin can view captured attempts from the dashboard
7. Admin can export results as CSV for reporting

> ⚠️ This flow is implemented strictly for educational and awareness purposes.
