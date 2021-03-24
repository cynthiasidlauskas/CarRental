# Car Rental Database with Simple Application

We've created an in-depth car rental database that stores a variety of information. A very simple PHP application is connected to our database and displays the car rental company's branch revenues.  

# Business Rules
 - A customer can have zero or many reservations.
 - A reservation can be booked by only one customer. 
 - A vehicle can have zero or may reservations.
 - A reservation includes only one vehicle.
 - A rental can have one or many reservations.
 - A reservation contains only one rental. 
 - A branch can provide many vehicles.
 - A vehicle can be reserved from one branch.
 - A vehicle can be dropped off at any branch. 
 - An employee can only be assigned to one branch.
 - A branch can have many employees. 
 - A manager can manage one branch.
 - A branch has only one manager.
 - An Employee can handle zero or many reservations.
 - A reservation is processed by only one employee. 
 - An insurance is provided to zero or many rentals. 
 - A rental can have zero or one insurance.
 -  A reservation can have many addon products. 
 - An addon product can be in many reservations. 
 - A payment belongs to one reservation.
 -  A Vehicle can be of any type (Sedan, SUV, Van etc.). 
 - A rental can have many inspections. 
 - There are Multiple branches of the rental company. 
 -  Customers can make reservations in advanced or on the same day.  
 - A customer must be registered to make a reservation. 
 - Vehicles can be returned to either the same or different branch. 
 - Vehicles should be checked/inspected before and after rental. 
 - Any damages that are made are to be charged to the customer’s card if they have no insurance.  
 - Customer must have insurance or add insurance policy at the checkout desk.

# ERD  
![Entity Relationship Diagram for a Car Rental database.](https://user-images.githubusercontent.com/30435993/112345369-f779ca80-8c92-11eb-815d-d5e460ae5241.jpg)  



# The Application
The application is very simple. It simply allows us to see what the revenues are for any branches we select. 

## Home.php
This is an image showing how the application looks before any selections are made. 
It also features a clear button to clear selections.  


![](https://user-images.githubusercontent.com/30435993/112345523-1d06d400-8c93-11eb-866f-de3e375964d4.jpg)  


Now, the user has selected the branches they would like to view the revenues for. The user simply needs to click the Submit button to proceed.   

![](https://user-images.githubusercontent.com/30435993/112345552-255f0f00-8c93-11eb-9e0d-25658ef85f60.jpg)  


Now, let's take a deeper look at the code.  
 - Line 54 is using JavaScript to incorporate a ‘Select All’ button
 - Line 68 tells the information where to go after the Submit button is pressed
 - Checkboxes are defined under the name ‘branch[]’
 
![](https://user-images.githubusercontent.com/30435993/112345612-3019a400-8c93-11eb-85ea-b62353c9c108.png)  



## Details.php
All the branch revenues are now shown. 
![](https://user-images.githubusercontent.com/30435993/112345645-3871df00-8c93-11eb-89e8-20f31d5d0609.jpg)  



Now, let's take a deeper look at the code. 
- Line 83 – Gathers the POST information from home.php and puts it into an array
- Line 85 – Separates contents of the array with  ‘ ,  ‘  between 
- Line 87 – The database query is defined
- Line 92- Each Branch selection from home.php is put into the Where In statement 
- Line 97- Connects to the database with error handling
- Line 101- Put the results from the database query into a table
- Line 113- JavaScript that makes the ‘Restart’ button go back to home.php


![](https://user-images.githubusercontent.com/30435993/112345679-3f98ed00-8c93-11eb-9d52-eaaea69548c0.png)


# Video Demo
[Click here to see video demo](https://drive.google.com/file/d/1koc1Up4iNxryvPISiJ39ByST-LQb5JPK/view?usp=sharing)




