CREATE TABLE cars (
    carid INT PRIMARY KEY,
    Model VARCHAR(25) NOT NULL,
    year INT NOT NULL,
    LicensePlate VARCHAR(25) UNIQUE NOT NULL
);

CREATE TABLE locationplace (
    id INT PRIMARY KEY,
    typeName VARCHAR(25) NOT NULL,
);

CREATE TABLE renter (
    locationid INT PRIMARY KEY,
    Name VARCHAR(25) NOT NULL,
    Address VARCHAR(25) NOT NULL,
    city VARCHAR(25) NOT NULL,
    zipcode VARCHAR(25) NOT NULL,
    locationTypeid INT,
    FOREIGN KEY (locationtypeid) REFERENCES locationtype(locationtypeid)
);

CREATE TABLE carlocations (
    carlocationid INT PRIMARY KEY,
    carid INT,
    locationid INT,
    entryedate DATE,
    exitdate DATE,
    FOREIGN KEY (carid) REFERENCES cars(carid),
    FOREIGN KEY (locationid) REFERENCES locations(locationid),
);

CREATE TABLE privilege (
    id INT AUTO_INCREMENT PRIMARY KEY,
    privilege VARCHAR(50) NOT NULL
);

CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    privilege_id INT NOT NULL,
    CONSTRAINT fk_privilege_id FOREIGN KEY (privilege_id) REFERENCES privilege(id),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE logs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255),
    ip_address VARCHAR(45),
    page VARCHAR(255),
    visited_at DATETIME DEFAULT CURRENT_TIMESTAMP
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


INSERT INTO carlocations (carlocationid, carid, locationid, entrydate, exitdate) VALUES
(1, 1, 1, '2020-01-21', '2020-02-21'),
(2, 2, 2, '2020-01-21', '2021-04-21'),
(3, 3, 3, '2022-01-21', '2022-02-21'),
(4, 4, 4, '2023-01-21', '2023-02-21');


INSERT INTO renter (id, name, address, city, zipcode, locationTypeid) VALUES
(1, 'Maxime Senne', '123 St-laurent', 'Montreal', '62701', 1),
(2, 'Tom Boyd', '456 Oak Ave', 'Hull',  '62702', 2),
(3, 'Johnny Hashtag', '789 Elm St', 'Trois-Riviere', '62703', 3),
(4, 'Fabio controni', '101 Des Pins', 'Quebec', '62704', 4);



INSERT INTO privilege (privilege) VALUES ('Admin');
INSERT INTO privilege (privilege) VALUES ('Manager');
INSERT INTO privilege (privilege) VALUES ('Employee');