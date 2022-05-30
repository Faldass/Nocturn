DROP DATABASE nocturn;
CREATE DATABASE nocturn;
USE nocturn;
CREATE TABLE roles(
id_role INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
name_role VARCHAR(20) NOT NULL UNIQUE
);
CREATE TABLE users(
id_user INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
name_user VARCHAR(50) NOT NULL,
surname_user VARCHAR(50) NOT NULL,
mail_user VARCHAR(50) NOT NULL UNIQUE,
psswd_user VARCHAR(100) NOT NULL,
phone_user VARCHAR(20) UNIQUE,
age_user DATE,
register_user DATE,
id_role INTEGER,
FOREIGN KEY(id_role) REFERENCES roles(id_role)
);
CREATE TABLE spots(
id_spot INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
num_spot VARCHAR(10),
address_spot VARCHAR(75) NOT NULL,
postCode_spot VARCHAR(25),
town_spot VARCHAR(50) NOT NULL
);
CREATE TABLE events(
id_event INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
name_event VARCHAR(50) NOT NULL,
desc_event TEXT,
prix_event DECIMAL(3,2) NOT NULL,
dateDeb_event DATE,
rs_event VARCHAR(75) NOT NULL,
img_event VARCHAR(50),
id_spot INTEGER,
FOREIGN KEY(id_spot) REFERENCES spots(id_spot)
);
CREATE TABLE participer(
id_user INTEGER,
id_event INTEGER,
PRIMARY KEY (id_user, id_event),
FOREIGN KEY(id_user) references users(id_user),
FOREIGN KEY(id_event) references events(id_event)
);
CREATE TABLE missions(
id_mission INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
nom_mission VARCHAR(50) NOT NULL
);
CREATE TABLE team(
id_team INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
name_team VARCHAR(75) NOT NULL,
fb_team VARCHAR(75),
insta_team VARCHAR(75),
sc_team VARCHAR(75),
photo_membre VARCHAR(50) NOT NULL,
id_mission INTEGER,
FOREIGN KEY(id_mission) REFERENCES missions(id_mission)
);