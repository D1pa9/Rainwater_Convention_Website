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
  
   <img width="600" height="768" alt="Homepage1" src="https://github.com/user-attachments/assets/331a18ba-0e3b-4b1f-be7f-952e8c91f96f" />

   <img width="600" height="677" alt="Homepage2" src="https://github.com/user-attachments/assets/0f84a696-b6f1-486b-8ed0-69fbe0d89505" />

   <img width="600" height="685" alt="Homepage3" src="https://github.com/user-attachments/assets/7072787a-882d-430b-843c-881f9a196a2c" />

- FAQ: `faq.php`

  <img width="600" height="650" alt="FAQ" src="https://github.com/user-attachments/assets/543a1977-1cb2-47ea-9f31-624b55700172" />

- Admin Portal: `admin.php`
  
  <img width="600" height="656" alt="AdminPage" src="https://github.com/user-attachments/assets/92646c06-fb21-4bc8-a44a-f6a306608f27" />

- Registration: `register.php`
 
  <img width="600" height="650" alt="Registration" src="https://github.com/user-attachments/assets/cdb30b61-79e5-4dbc-8327-4cef570ed568" />

## For Admin Portal Login :
   Username : admin
   Password : Rainwater2025!
   
 <img width="400" height="637" alt="SignUpData" src="https://github.com/user-attachments/assets/b3560b79-21f1-4c80-a174-a78de1858123" />

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

Links:
Figma Link :https://www.figma.com/proto/yy1kchMMSRfFNXwexdCy1u/Rainwater-Convention-Website-Final-Prototype?node-id=0-1&t=pQnKsU8xISP7KRpN-1
Live preview Link : https://rainwater2025.rf.gd/
