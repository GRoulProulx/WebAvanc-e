CREATE TABLE Cars (
    CarID INT PRIMARY KEY,
    Model VARCHAR(25) NOT NULL,
    Year INT NOT NULL,
    LicensePlate VARCHAR(25) UNIQUE NOT NULL
);

CREATE TABLE LocationPlace (
    id INT PRIMARY KEY,
    TypeName VARCHAR(25) NOT NULL,
);

CREATE TABLE Renter (
    LocationID INT PRIMARY KEY,
    Name VARCHAR(25) NOT NULL,
    Address VARCHAR(25) NOT NULL,
    City VARCHAR(25) NOT NULL,
    ZipCode VARCHAR(25) NOT NULL,
    LocationTypeID INT,
    FOREIGN KEY (LocationTypeID) REFERENCES LocationTypes(LocationTypeID)
);

CREATE TABLE CarLocations (
    CarLocationID INT PRIMARY KEY,
    CarID INT,
    LocationID INT,
    EntryDate DATE,
    ExitDate DATE,
    FOREIGN KEY (CarID) REFERENCES Cars(CarID),
    FOREIGN KEY (LocationID) REFERENCES Locations(LocationID),
);






/* INSERTS */

INSERT INTO cars (carid, model, year, licenseplate) VALUES
(1, 'Toyota Camry', 2022, 'ABC123'),
(2, 'Honda Civic', 2021, 'XYZ789'),
(3, 'Ford F-150', 2023, 'DEF456'),
(4, 'Tesla Model 3', 2022, 'GHI789');


INSERT INTO locationplace (id, typename) VALUES
(1, 'Dealership'),
(2, 'Service space'),
(3, 'Parking'),
(4, 'Rental');


INSERT INTO carlocations (carLocationid, carid, locationid, entrydate, exitdate) VALUES
(1, 1, 1, '2020-01-21', '2020-02-21'),
(2, 2, 2, '2020-01-21', '2021-04-21'),
(3, 3, 3, '2022-01-21', '2022-02-21'),
(4, 4, 4, '2023-01-21', '2023-02-21');


INSERT INTO renter (id, name, address, city, zipcode, locationTypeid) VALUES
(1, 'Maxime Senne', '123 St-laurent', 'Montreal', '62701', 1),
(2, 'Tom Boyd', '456 Oak Ave', 'Hull',  '62702', 2),
(3, 'Johnny Hashtag', '789 Elm St', 'Trois-Riviere', '62703', 3),
(4, 'Fabio controni', '101 Des Pins', 'Quebec', '62704', 4);