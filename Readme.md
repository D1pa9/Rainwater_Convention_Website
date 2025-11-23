# Assignment1_Rainwater Convention Website

This is a 4-page Rainwater Convention website (Home, FAQs, Register, Admin) built with HTML/CSS/JS (Tailwind CDN + AOS) and PHP + MySQL (XAMPP). The site includes registration form with validation and an admin portal (Requires username and password for login) to view/delete participants.

## Tools & Frameworks
- Windows 10 (local dev)
- XAMPP (Apache, MySQL, PHP)
- Visual Studio Code (editor)
- Tailwind CSS (via CDN)
- JavaScript
- Html
- AOS (Animate on Scroll) via CDN
- MySQL (database)
- Figma for UI/UX prototype (Link in figma_link.txt)


## How to Run
1. Install XAMPP (To run the website locally)
2. Copy project folder to `C:\xampp\htdocs\`
3. Start Apache & MySQL by opening xampp 
   (see the port no in xampp (my port no is 3307) and specify the same on the respective files like db_connect.php)
4. open http://localhost/phpmyadmin in browser
5. Create database `rainwater.db` and table `participants`
6. Open browser and see your project by providing URL of project with localhost: 
    `http://localhost/Asssignment1_RainwaterWebsite/index.php`


## Pages
- Home: `index.php`
- <img width="1366" height="768" alt="Homepage1" src="https://github.com/user-attachments/assets/331a18ba-0e3b-4b1f-be7f-952e8c91f96f" />
- FAQ: `faq.php`
- Registration: `register.php`
- Admin Portal: `admin.php`


## For Admin Portal Login :
   Username : admin
   Password : Rainwater2025!
 
After a Participent register in the registation page 
The details of every participent signed up :
Fullname,Email,Organization,Phone 
## Above mentioned field information will be appear on the admin portal for the admin to view and delete

## How to Run This Project in VS Code
1. Open Project in VS Code

Launch VS Code.

Go to File → Open Folder → select C:\xampp\htdocs\Assignment1_RainwaterWebsite.

You can now edit all HTML, CSS, JS, and PHP files in VS Code.

2. Start XAMPP

Open XAMPP Control Panel.

Start Apache (web server) and MySQL (database).

3.  Preview the Site

You cannot run PHP directly in VS Code like HTML. You need to use the local server URL:

Open browser:

http://localhost/Assignment1_RainwaterWebsite/index.php


Every change you make in VS Code can be saved, then refreshed in the browser to see it live.

