Create TABLE BASICUSER
(
BasicUserID integer(10) NOT NULL AUTO_INCREMENT,
BasicUserName varchar(25),
BasicUserEmail varchar(100),
BasicUserPassword varchar(30),
PRIMARY KEY (BasicUserID)
);


Create TABLE VENDERUSER
(
VenderUserID integer(10) NOT NULL AUTO_INCREMENT,
VenderUserName varchar(100),
VenderUserEmail varchar(100),
VenderUserPassword varchar(100),
PRIMARY KEY (VenderUserID)
);

Create TABLE FESTIVALADMIN
(
FestivalAdminID integer(10) NOT NULL AUTO_INCREMENT,
FestivalAdminName varchar(25),
FestivalAdminEmail varchar(100),
FestivalAdminPassword varchar(100),
PRIMARY KEY (FestivalAdminID)
);





Create TABLE FESTIVAL
(
FestivalID integer(10) NOT NULL AUTO_INCREMENT,
FestivalName varchar(25),
FestivalDate date,
PRIMARY KEY (FestivalID)
);

Create TABLE ARTIST
(
ArtistID integer(10) NOT NULL AUTO_INCREMENT,
ArtistIDName varchar(25),
FestivalID integer(10) NOT NULL,
PRIMARY KEY (ArtistID),
Foreign KEY (FestivalID) REFERENCES FESTIVAL (FestivalID)
);

Create TABLE VENDER
(
VenderID integer(10) NOT NULL AUTO_INCREMENT,
AuthorName varchar(25),
ArticleDate date,
ArticleText varchar(1000),
FestivalID integer(10),
PRIMARY KEY (VenderID),
Foreign KEY (FestivalID) REFERENCES FESTIVAL (FestivalID)
);