# Change-password-system-php
 
Department of Computer Science and Engineering


Design the Change Password Process:

Step 1: The user clicks on the "Change Password" link/button.
Step 2: The user is directed to a page with a form to input the current password, and new password, and confirm the new password.
Step 3: The user fills in the form and submits it.
Step 4: Server-side validation checks if the current password matches the user's actual password and if the new password meets the requirements (e.g., minimum length, special characters).
Step 5: If validation passes, the server updates the user's password in the database.
Step 6: The user receives a confirmation message.

 
PHP Code for Change Password Process:

To store the user Information need to Database. So I used MySql.

Languages: PHP, HTML5
Style Sheet Languages: CSS
Database: MySql

Create Database: 
CREATE DATABASE test_db;

-- Create Table
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--Set Primary key
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

Run Change-Password-System Project. Must check your Apache is on. When you successfully run the project you are redirected to the login page. You a new so first you need to Create an account. So click on it. Below
  

Name: Enter your full name.
User Name: Your Username.
Password: Your Password.
Re-Password: Re-enter your password.
Click the Sign Up Button. If you are done you get a successful message.

Then login the account.
 

User Name: Your entire username.
Password: Your entire password.
Click the Login button. You get The Homepage which is your profile page.
 
You can now get two functions in your profile. Logout and Change Password. If you click Logout this is exit the profile. And other is Change Password. 

 
Old Password: Enter your current password
New Password: Enter the new password
Confirm New Password: Enter the new password again.
Click the Change button. If it changes you get a change successfully message.



