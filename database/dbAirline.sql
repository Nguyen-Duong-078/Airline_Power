-- Tạo bảng Users
CREATE TABLE Users (
    User_ID INT PRIMARY KEY,
    Username VARCHAR(255),
    Password VARCHAR(255),
    Email VARCHAR(255),
    FullName VARCHAR(255)
);

-- Tạo bảng Flights
CREATE TABLE Flights (
    Flight_ID INT PRIMARY KEY,
    Flight_Number VARCHAR(255),
    Start_City VARCHAR(255),
    Arrival_City VARCHAR(255),
    Departure_Time DATETIME,
    Arrival_Time DATETIME,
    Price DECIMAL(10, 2)
);

-- Tạo bảng Bookings
CREATE TABLE Bookings (
    Booking_ID INT PRIMARY KEY,
    User_ID INT,
    Flight_ID INT,
    Seat_Number VARCHAR(10),
    Booking_Date DATETIME,
    Total_Price DECIMAL(10, 2),
    FOREIGN KEY (User_ID) REFERENCES Users(User_ID),
    FOREIGN KEY (Flight_ID) REFERENCES Flights(Flight_ID)
);

-- Tạo bảng Payments
CREATE TABLE Payments (
    Payment_ID INT PRIMARY KEY,
    Booking_ID INT,
    Payment_Amount DECIMAL(10, 2),
    Payment_Date DATETIME,
    Payment_Method VARCHAR(50),
    FOREIGN KEY (Booking_ID) REFERENCES Bookings(Booking_ID)
);

-- Tạo bảng Seats
CREATE TABLE Seats (
    Seat_ID INT PRIMARY KEY,
    Flight_ID INT,
    Seat_Number VARCHAR(10),
    IsAvailable BOOLEAN,
    FOREIGN KEY (Flight_ID) REFERENCES Flights(Flight_ID)
);
