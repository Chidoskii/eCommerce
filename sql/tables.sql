DROP TABLE IF EXISTS Orders;

DROP TABLE IF EXISTS Users;
CREATE TABLE Users (
  id int NOT NULL AUTO_INCREMENT,
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
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
  updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  PRIMARY KEY (id)
);

DROP TABLE IF EXISTS Vendors;
CREATE TABLE Vendors (
  id int NOT NULL AUTO_INCREMENT,
  vendor_name varchar(30) NOT NULL,
  email varchar(50) not null,
  phone varchar (20) default null,
  password varchar(60) not null,
  city varchar(30) DEFAULT NULL,
  state varchar(20) DEFAULT NULL,
  country varchar(30) DEFAULT NULL,
  zip int DEFAULT NULL,
  rating tinyint DEFAULT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
  updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  PRIMARY KEY (id)
);

DROP TABLE IF EXISTS Products;
CREATE TABLE Products (
  id int NOT NULL AUTO_INCREMENT,
  vID int NOT NULL,
  name varchar(100) not null,
  cid int not null,
  prod_desc tinytext default null,
  img TEXT DEFAULT NULL,
  price double DEFAULT NULL,
  rating tinyint DEFAULT NULL,
  Foreign Key (cid) references Categories(id),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
  updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  PRIMARY KEY (id)
);

CREATE TABLE Orders (
  id int NOT NULL AUTO_INCREMENT,
  pID int NOT NULL,
  uID int NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
  updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  Foreign Key (pID) references Products(pID),
  Foreign Key (uID) references Users(uID),
  PRIMARY KEY (id, uID)
);

CREATE TABLE orderContents (
  oID int NOT NULL AUTO_INCREMENT,
  pID int NOT NULL,
  vID int NOT NULL,
  quantity int NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
  updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  Foreign Key (oID) references Orders(id),
  Foreign Key (pID) references Products(id),
  Foreign Key (vID) references Vendors(id),
  PRIMARY KEY (oID, pID, vID)
);