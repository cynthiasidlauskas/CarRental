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
![Entity Relationship Diagram for a Car Rental database.](https://photos.app.goo.gl/wB3c1QGqg6vB2XCQ6)

# The Application
The application is very simple. It simply allows us to see what the revenues are for any branches we select. 

## Home.php
![Before selections are made](https://drive.google.com/file/d/1oSKtamNJUGrbWDrydOO01PNNb6xTQhPc/view?usp=sharing)
![After selections are made](https://drive.google.com/file/d/1C5ZzF_6GMx48lUMC69VCdnkPzBFYPob5/view?usp=sharing)
![Quick look at the code](https://drive.google.com/file/d/1FBUB8JvkJSxt1N5qFjBvG05U-L_Far-w/view?usp=sharing)

## Details.php
![All branch selections are now shown](https://drive.google.com/file/d/15yYsDc_s9vRuKcU2lj0Q_fbSZH_zmUl-/view?usp=sharing)
![Quick look at the code](https://drive.google.com/file/d/1bPMFaNoC_hHvf_yj_I6h8tlp3zCqEK-p/view?usp=sharing)

# Video Demo
[Click here to see video demo](https://drive.google.com/file/d/1koc1Up4iNxryvPISiJ39ByST-LQb5JPK/view?usp=sharing)




