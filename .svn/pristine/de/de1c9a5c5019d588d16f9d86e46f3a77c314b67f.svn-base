#!/usr/bin/env php
<?php
// creation_Database.php for  in /home/selatn_r/code_camp/web_technologies/abdulm_e
//
// Made by SELATNI Ryad
// Login   <selatn_r@etna-alternance.net>
//
// Started on  Tue Dec  6 11:20:04 2016 SELATNI Ryad
// Last update Fri Dec 16 09:30:45 2016 MATLOOB Nauman
//

$login = 'root';
$pass = '123';
$adress = 'localhost';

$pdo = new PDO("mysql:host=$adress", $login, $pass);
database($pdo);

function	database($pdo)
{
  try
    {
      $sql = "CREATE DATABASE IF NOT EXISTS gestion_EPI CHARACTER SET utf8 COLLATE utf8_general_ci;";
      $pdo->exec($sql);
      $sql = "USE gestion_EPI;";
      $pdo->exec($sql);
    }
  catch(PDOException $e)
    {
      echo "Connection failed: " . $e->getMessage()."";
    }
}

$sql =
"CREATE TABLE IF NOT EXISTS Roles (
ID INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(30),
description VARCHAR(255)
)ENGINE = InnoDB DEFAULT CHARSET=utf8;";
$pdo->exec($sql);

$sql =
"CREATE TABLE IF NOT EXISTS Users (
ID INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
logi_n VARCHAR(15),
pass_word VARCHAR(130),
first_name VARCHAR(30),
second_name VARCHAR(30),
date_birthday DATE,
address VARCHAR (255),
Code_postale INT(5),
Ville VARCHAR(50),
date_registration DATE,
date_last_connection DATE,
Role INT UNSIGNED,
FOREIGN KEY (Role) REFERENCES Roles(ID)
)ENGINE = InnoDB DEFAULT CHARSET=utf8;";
$pdo->exec($sql);

$sql =
"CREATE TABLE IF NOT EXISTS Equipments (
ID VARCHAR(20) PRIMARY KEY,
tool VARCHAR(40),
type VARCHAR(20)
)ENGINE = InnoDB DEFAULT CHARSET=utf8;";
$pdo->exec($sql);

$sql =
"CREATE TABLE IF NOT EXISTS Lot (
ID INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(40),
Description VARCHAR(255)
)ENGINE = InnoDB DEFAULT CHARSET=utf8;";
$pdo->exec($sql);

$sql =
"CREATE TABLE IF NOT EXISTS Lot_Equipments (
ID_Equipment VARCHAR(20),
ID_Lot INT UNSIGNED,
FOREIGN KEY (ID_Equipment) REFERENCES Equipments(ID),
FOREIGN KEY (ID_Lot) REFERENCES Lot(ID)
)ENGINE = InnoDB DEFAULT CHARSET=utf8;";
$pdo->exec($sql);

$sql =
"CREATE TABLE IF NOT EXISTS Details (
ID INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
ID_Equipment VARCHAR(20),
photo VARCHAR(20),
model VARCHAR(40),
maker VARCHAR(40),
serial_maker VARCHAR(50),
Signe_distanctif VARCHAR(50),
Color VARCHAR(50),
Longuer VARCHAR(50),
buy_date DATE,
date_of_manufacture DATE,
date_end DATE,
frequency_of_control VARCHAR(255),
date_commissioning DATE,
FOREIGN KEY (ID_Equipment) REFERENCES Equipments(ID)
)ENGINE = InnoDB DEFAULT CHARSET=utf8;";
$pdo->exec($sql);

$sql =
"CREATE TABLE IF NOT EXISTS Proprietaire_Equipment (
ID_User INT UNSIGNED,
ID_Equipment VARCHAR(20),
FOREIGN KEY (ID_User)
REFERENCES Users(ID),
FOREIGN KEY (ID_Equipment)
REFERENCES Equipments(ID)
)ENGINE = InnoDB DEFAULT CHARSET=utf8;";
$pdo->exec($sql);

$sql = "CREATE TABLE IF NOT EXISTS Etat_Corde (
ID INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
Signe_dusuers VARCHAR(50),
brulures VARCHAR(50),
coupures VARCHAR(50),
zone VARCHAR(50),
etat VARCHAR(50)
)ENGINE = InnoDB DEFAULT CHARSET=utf8;";
$pdo->exec($sql);

$sql = "CREATE TABLE IF NOT EXISTS Etat_harnais (
ID INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
Etat_sangles VARCHAR(50),
Etat_coutuers VARCHAR(50),
Etat_boucles VARCHAR(50),
Etat_points_encordement VARCHAR(50),
Etat_element_conforts VARCHAR(50)
)ENGINE = InnoDB DEFAULT CHARSET=utf8;";
$pdo->exec($sql);

$sql = "CREATE TABLE IF NOT EXISTS Etat_Autre (
ID INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
Etat_1 VARCHAR(50),
Etat_2 VARCHAR(50)
)ENGINE = InnoDB DEFAULT CHARSET=utf8;";
$pdo->exec($sql);

$sql =
"CREATE TABLE IF NOT EXISTS Controle (
ID INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
ID_Equipment VARCHAR(20),
controller_name VARCHAR(40),
date_control DATE,
Remarque_controle VARCHAR(255),
Date_next_controle DATE,
Etat_name VARCHAR(50),
ID_Etat_Corde INT UNSIGNED,
ID_Etat_harnais INT UNSIGNED,
ID_Etat_autre INT UNSIGNED,
FOREIGN KEY (ID_Equipment)
REFERENCES Equipments(ID),
FOREIGN KEY (ID_Etat_Corde)
REFERENCES Etat_Corde(ID),
FOREIGN KEY (ID_Etat_harnais)
REFERENCES Etat_harnais(ID),
FOREIGN KEY (ID_Etat_autre)
REFERENCES Etat_Autre(ID)
)ENGINE = InnoDB DEFAULT CHARSET=utf8;";
$pdo->exec($sql);

$sql ='INSERT INTO Roles (name,description)
VALUE ("admin","il pourrait accer a toutes les pages et a le droit superieur"),
("Controleur","il pourrait accer aux equiments afin de les verfier anisi quil pourrait envoyer des alerts"),
("Proprietaire","il pourrais avoir des alerts et accer a ses Equipments");';
$pdo->exec($sql);

$sql='INSERT INTO Users (logi_n,pass_word,first_name,second_name,date_birthday,address,Code_postale,Ville,date_registration,date_last_connection,Role)
VALUE ("Admin",MD5("etna2021"),"Admin","etna","1996-08-24","12 rue de paris","75015","Paris",NOW(),NOW(),1),
("Controleur",MD5("etna2021"),"Controleur","etna","1992-12-01","55 rue de france","75010","Paris",NOW(),NOW(),2),
("Proprietaire1",MD5("etna2021"),"Proprietaire1","etna","1988-02-22","55 rue de quatre chemin","75001","Paris",NOW(),NOW(),3),
("Proprietaire2",MD5("etna2021"),"Proprietaire2","etna","1988-02-22","55 rue de quatre chemin","75001","Paris",NOW(),NOW(),3),
("Proprietaire3",MD5("etna2021"),"Proprietaire3","etna","1988-05-26","55 rue de quatre chemin","75001","Paris",NOW(),NOW(),3),
("Proprietaire4",MD5("etna2021"),"Proprietaire4","etna","1988-08-05","55 rue de quatre chemin","75001","Paris",NOW(),NOW(),3),
("Proprietaire5",MD5("etna2021"),"Proprietaire5","etna","1988-11-07","55 rue de quatre chemin","75001","Paris",NOW(),NOW(),3);';
$pdo->exec($sql);

$sql = 'INSERT INTO Equipments (ID,tool,type)
VALUE ("008B875421369","CORDE","A"),("011B197668654","CORDE","B"),("172B123456789","CORDE","C"),
("954B781542963","EQUIPMENTS METALIQUES","ASSUREUR"),("849B458768591","Equipments METALIQUES","CONNECTEUR"),("785B541286957","Equipments METALIQUES","BLOQUER"),("555B458745120","Equipments METALIQUES","POULIE"),
("200B223498742","CASQUE","A"),("548B541245121","CASQUE","B"),("895B167689454","CASQUE","C"),
("398B467694321","EXPRESSE ET ANNEAU","A"),("378B917587451","EXPRESSE ET ANNEAU","B"),("888B617689784","EXPRESSE ET ANNEAU","C"),
("001B098474321","HERNAIS","A"),("021B209051137","HERNAIS","B"),("021B209056637","HERNAIS","C"),
("021B209486637","EQUIPMENTS DIVERS","CRAMPONS"),("078B426286571","EQUIPMENTS DIVERS","PIOLET"),("077B436719352","EQUIPMENTS DIVERS","COINCEUR"),("094B497616434","EQUIPMENTS DIVERS","PITON"),("081B649713358","EQUIPMENTS DIVERS","BROHE");';
$pdo->exec($sql);

$sql = 'INSERT INTO Lot (name,Description)
VALUE ("EQUIPMENTS METALIQUES","Pas description"),("CASQUE","Pas description"),
("EXPRESSE ET ANNEAU","Pas description"),("HERNAIS","Pas description"),("EQUIPMENTS DIVERS","Pas description");';
$pdo->exec($sql);

$sql = 'INSERT INTO Lot_Equipments (ID_Equipment,ID_Lot)
VALUE ("954B781542963",1),("849B458768591",1),("555B458745120",1),("785B541286957",1),
("200B223498742",2),("548B541245121",2),("895B167689454",2),
("378B917587451",3),("888B617689784",3),("398B467694321",3),
("021B209056637",4),("001B098474321",4),("021B209051137",4),
("094B497616434",5),("021B209486637",5),("078B426286571",5),("081B649713358",5),("077B436719352",5);';
$pdo->exec($sql);

$sql = 'INSERT INTO Details (ID_Equipment,model,maker,serial_maker,Signe_distanctif,color,Longuer,buy_date,date_of_manufacture,date_end,frequency_of_control,date_commissioning)
VALUE ("008B875421369","2007","BEAL","3145668741","il n\'y a pas de signe","blanche","100m",NOW(),"2007-01-20","2016-12-25",NOW(),NOW()),
("011B197668654","2007","BEAL","3256897401","il n\'y a pas de signe","blue","150m",NOW(),"2007-01-20","2017-12-20",NOW(),NOW()),
("172B123456789","2007","BEAL","3145668741","il n\'y a pas de signe","noir","300m",NOW(),"2007-01-20","2017-12-28",NOW(),NOW()),
("954B781542963","2002","BEAL","7896351245","il n\'y a pas de signe","Pas de couleur","Pas de Longueur",NOW(),"2002-11-01","2016-12-19","2 mois",NOW()),
("849B458768591","2002","BEAL","3035897542","il n\'y a pas de signe","Pas de couleur","Pas de Longueur",NOW(),"2002-11-01","2017-01-02","1 mois",NOW()),
("785B541286957","2002","BEAL","5949138645","il n\'y a pas de signe","Pas de couleur","Pas de Longueur",NOW(),"2002-11-01","2017-11-02","20 jours",NOW()),
("555B458745120","2002","BEAL","7845995124","il n\'y a pas de signe","Pas de couleur","Pas de Longueur",NOW(),"2002-11-01","2017-11-02","25 jours",NOW()),
("200B223498742","2009","BEAL","2145788956","il n\'y a pas de signe","Pas de couleur","Pas de Longueur",NOW(),"2009-01-22","2017-01-21","3 mois",NOW()),
("548B541245121","2009","BEAL","5753595415","il n\'y a pas de signe","Pas de couleur","Pas de Longueur",NOW(),"2009-01-22","2017-01-21","6 mois",NOW()),
("895B167689454","2009","BEAL","4689751223","il n\'y a pas de signe","Pas de couleur","Pas de Longueur",NOW(),"2009-01-22","2017-01-21","6 mois",NOW()),
("398B467694321","2010","BEAL","1937467931","il n\'y a pas de signe","Pas de couleur","Pas de Longueur",NOW(),"2010-05-18","2017-05-19","6 mois",NOW()),
("378B917587451","2010","BEAL","4978653245","il n\'y a pas de signe","Pas de couleur","Pas de Longueur",NOW(),"2010-05-18","2017-05-19","6 mois",NOW()),
("888B617689784","2010","BEAL","7964139268","il n\'y a pas de signe","Pas de couleur","Pas de Longueur",NOW(),"2010-05-18","2017-05-19","6 mois",NOW()),
("001B098474321","2012","BEAL","1589668741","il n\'y a pas de signe","Pas de couleur","Pas de Longueur",NOW(),"2012-11-01","2017-01-22","6 mois",NOW()),
("021B209051137","2012","BEAL","7979658421","il n\'y a pas de signe","Pas de couleur","Pas de Longueur",NOW(),"2012-11-01","2017-01-22","6 mois",NOW()),
("021B209056637","2005","BEAL","1232568978","il n\'y a pas de signe","Pas de couleur","Pas de Longueur",NOW(),"2005-11-01","2017-11-02","6 mois",NOW()),
("021B209486637","2012","BEAL","7777785456","il n\'y a pas de signe","Pas de couleur","Pas de Longueur",NOW(),"2012-11-01","2017-01-22","6 mois",NOW()),
("078B426286571","2009","BEAL","4857123256","il n\'y a pas de signe","Pas de couleur","Pas de Longueur",NOW(),"2009-10-11","2017-10-13","6 mois",NOW()),
("077B436719352","2016","BEAL","1014475869","il n\'y a pas de signe","Pas de couleur","Pas de Longueur",NOW(),"2016-12-22","2017-12-23","6 mois",NOW()),
("094B497616434","2015","BEAL","7692314568","il n\'y a pas de signe","Pas de couleur","Pas de Longueur",NOW(),"2015-01-01","2017-01-02","6 mois",NOW()),
("081B649713358","2012","BEAL","1236985745","il n\'y a pas de signe","Pas de couleur","Pas de Longueur",NOW(),"2012-06-11","2017-08-14","6 mois",NOW());';
$pdo->exec($sql);

$sql = 'INSERT INTO Proprietaire_Equipment (ID_User,ID_Equipment)
VALUE (3,"008B875421369"),(3,"011B197668654"),(3,"172B123456789"),(3,"954B781542963"),(3,"849B458768591"),
(6,"785B541286957"),(6,"785B541286957"),(6,"555B458745120"),(6,"200B223498742"),(6,"548B541245121"),
(4,"895B167689454"),(4,"398B467694321"),(4,"378B917587451"),(4,"888B617689784"),(4,"001B098474321"),
(5,"021B209051137"),(5,"021B209056637"),(5,"021B209486637"),(7,"078B426286571"),(7,"077B436719352"),
(7,"094B497616434"),(7,"081B649713358");';
$pdo->exec($sql);
