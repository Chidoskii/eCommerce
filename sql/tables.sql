DROP TABLE IF EXISTS Orders;

DROP TABLE IF EXISTS Users;
CREATE TABLE Users (
  uID int NOT NULL AUTO_INCREMENT,
  gender char(1) default null,
  first_name varchar(30) NOT NULL,
  last_name varchar(40) NOT NULL,
  dob date default null,
  email varchar(50) not null,
  phone varchar (20) default null,
  password varchar(60) not null,
  city varchar(30) DEFAULT NULL,
  state varchar(20) DEFAULT NULL,
  country varchar(30) DEFAULT NULL,
  zip int DEFAULT NULL,
  PRIMARY KEY (uID)
);

DROP TABLE IF EXISTS Vendors;
CREATE TABLE Vendors (
  vID int NOT NULL AUTO_INCREMENT,
  vendor_name varchar(30) NOT NULL,
  email varchar(50) not null,
  phone varchar (20) default null,
  password varchar(60) not null,
  city varchar(30) DEFAULT NULL,
  state varchar(20) DEFAULT NULL,
  country varchar(30) DEFAULT NULL,
  zip int DEFAULT NULL,
  rating tinyint DEFAULT NULL,
  PRIMARY KEY (vID)
);

DROP TABLE IF EXISTS Products;
CREATE TABLE Products (
  pID int NOT NULL AUTO_INCREMENT,
  vID int NOT NULL,
  category varchar(50) not null,
  prod_desc tinytext default null,
  img TEXT DEFAULT NULL,
  price int DEFAULT NULL,
  rating tinyint DEFAULT NULL,
  PRIMARY KEY (pID)
);

CREATE TABLE Orders (
  oID int NOT NULL AUTO_INCREMENT,
  pID int NOT NULL,
  vID int NOT NULL,
  uID int NOT NULL,
  city varchar(30) DEFAULT NULL,
  state varchar(20) DEFAULT NULL,
  country varchar(30) DEFAULT NULL,
  zip int DEFAULT NULL,
  total int NOT NULL,
  Foreign Key (pID) references Products(pID),
  Foreign Key (vID) references Vendors(vID),
  Foreign Key (uID) references Users(uID),
  PRIMARY KEY (oID, uID)
);