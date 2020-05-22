CREATE DATABASE holdidayhouses;

CREATE TABLE users(
    userID int AUTO_INCREMENT PRIMARY KEY,
    username varChar(50) NOT NULL,
    email varChar (50) NOT NULL,
    password varChar (100) NOT NULL,
    firstname varChar(50) NOT NULL,
    lastname varChar(50) NOT NULL,
    created_at datetime DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE chatmessages(
    chatMessageID int AUTO_INCREMENT PRIMARY KEY,
    userSendID int NOT NULL,
    userRecieveID int NOT NULL,
    message varChar (500) NOT NULL,
    sendAt datetime DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (userSendID) REFERENCES users(userID),
    FOREIGN KEY (userRecieveID) REFERENCES users(userID)
    
);

CREATE TABLE followers(
    userFollowerID int NOT NULL,
    userFolloweeID int NOT NULL,
    FOREIGN KEY (userFolloweeID) REFERENCES users(userID),
    FOREIGN KEY (userFollowerID) REFERENCES users(userID),
    PRIMARY KEY(userFollowerID, userFolloweeID)

);

CREATE TABLE houseAdress(
    adressID int AUTO_INCREMENT PRIMARY KEY,
    houseID int NOT NULL,
    streetname varChar(50) NOT NULL,
    streetnumber varChar(6) NOT NULL,
    zipcode int NOT NULL,
    city varChar(40) NOT NULL,
    lon varChar(25) NOT NULL,
    lat varChar(25) NOT NULL
);

CREATE TABLE facilities(
    facilityID int AUTO_INCREMENT PRIMARY KEY,
    houseID int NOT NULL,
    pool boolean DEFAULT false,
    poolSize int DEFAULT NULL,
    bedrooms int DEFAULT 1,
    bathrooms int DEFAULT 1,
    pets boolean DEFAULT false
);

CREATE TABLE housetype(
    houseTypeID int AUTO_INCREMENT PRIMARY KEY,
    houseType varChar(25) NOT NULL
);

CREATE TABLE houses (
    houseID int AUTO_INCREMENT PRIMARY KEY,
    userID int NOT NULL,
    houseTypeID int NOT NULL,
    title varChar(30) NOT NULL,
    description varChar(500) NOT NULL,
    aera int NOT NULL,
    facilityID int NOT NULL,
    adressID int NOT NULL,
    FOREIGN KEY (userID) REFERENCES users(userID),
    FOREIGN KEY (houseTypeID) REFERENCES housetype(houseTypeID),
    FOREIGN KEY (facilityID) REFERENCES facilities(facilityID),
    FOREIGN KEY (adressID) REFERENCES houseAdress(adressID)
);

CREATE TABLE images(
    imageName varChar(25) NOT NULL,
    houseID int NOT NULL,
    FOREIGN KEY (houseID) REFERENCES houses(houseID)
);

CREATE TABLE likes(
    houseID int NOT NULL,
    userID int NOT NULL,
    FOREIGN KEY (houseID) REFERENCES houses(houseID),
    FOREIGN KEY (userID) REFERENCES houses(userID),
    PRIMARY KEY(userID, houseID)
);

CREATE TABLE bookings(
    bookingID int AUTO_INCREMENT PRIMARY KEY,
    fromDate datetime NOT NULL,
    toDate datetime NOT NULL,
    peopleCount int NOT NULL,
    houseID int NOT NULL,
    userIDbooking int NOT NULL,
    FOREIGN KEY (houseID) REFERENCES houses(houseID),
    FOREIGN KEY (userIDbooking) REFERENCES houses(userID)
);

CREATE TABLE payments(
    paymentID int AUTO_INCREMENT PRIMARY KEY,
    bookingID int NOT NULL,
    userIDbooking int NOT NULL,
    date datetime DEFAULT CURRENT_TIMESTAMP,
    cardnumber varChar(50) NOT NULL,
    cardDate char(5) NOT NULL,
    ccv char(3) NOT NULL
);