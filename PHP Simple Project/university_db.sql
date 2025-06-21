CREATE DATABASE University;
create TABLE registration(

    Id int AUTO_INCREMENT PRIMARY KEY,
    Name varchar(20),
    Username varchar(20) UNIQUE,
    Password varchar(20),
    Personal_Address varchar(50),
    Sex varchar(8),
    City varchar(15),
    Course varchar(30),
    District varchar(20),
    State varchar(20)
    
);
