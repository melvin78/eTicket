# eTicket
This is a web project that mocks a real life system of a ticket booking system.
With the use of ajax requests to update seat availability and information depending on
the status of the seats. PHP has also been used to carry out all
database operations.here is an example. http://e-ticket.co.ke/buyTicket.php

The seat layout is made up of several checkboxes which are disbaled or enabled depending on the information relayed by the ajax response.
On the 'selectseat.php' page we use a simple function array.indexof() to compare json object derived from the 
database to the 40 seat numbers found in the layout. The json object queried from the database is an array of all seats that have been booked. If
you look at the ERD-Diagram.png you will see a database object in the form of a view called 'unavailable_seats'. We acquire data from the column 'seatscol'
from the view 'unavailable_seats'. The data is then converted into a json object as seen in the implementation of 'checkseat.php' and compared to each one of the seat.
The custom function can be seen on the 'check_seat.js' file.

For validity ,as soon as a seat is booked a database trigger 'AFTER_INSERT' found in the 'ticketdet' table is called. This trigger carries out two tasks:
 1.) It updates 'status ' column in the seats table to '1' where 'bus_id' is the index. (1 means seat is booked,0 means seat is unavailable).
 2.)  It generates a 6 digit randomm number using the mySql function 'RAND()'. This number is then used as a ticket number which should be a unique. 
 
 
 
