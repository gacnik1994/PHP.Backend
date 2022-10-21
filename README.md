[![Open in Visual Studio Code](https://classroom.github.com/assets/open-in-vscode-f059dc9a6f8d3a56e377f745f24479a46679e63a5d9fe6f495e02850cd0d8118.svg)](https://classroom.github.com/online_ide?assignment_repo_id=6863437&assignment_repo_type=AssignmentRepo)

Izdelal:Aleš Gačnik

Za uporabo je potrebno narediti  MySql bazo sp2:

CREATE DATABASE sp2;

Znotraj baze je potrebno narediti tabeli:

artikli: ki samo beleži katere artikle imamo in koliko.

CREATE TABLE artikli(
    Artikel_Id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Naziv longtext NOT NULL,
    Kolicina int(11) NOT NULL,
    Cena decimal(10,2) NOT NULL,
    slika longtext NOT NULL
);

uporabniki: tabela beleži uporabnike ki se vpišejo na spletno stran.
CREATE TABLE uporabnik(
    user_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    users_uid tinytext NOT NULL,
    users_pwd longtext NOT NULL,
    users_email tinytext NOT NULL
);

Nato vstavimo naslednje podatke v tabelo artikli:

INSERT INTO artikli(Naziv, Kolicina, Cena, slika)
VALUES ('Cube', 0, 5, 'Slike/cube.jpg'),
('Espeon', 2, 9, 'Slike/espeon.jpg'),
('Mega Absol', 1, 15, 'Slike/Mabsol.jpg'),
('Ninetales', 2, 15, 'Slike/ninetales.jpg'),
('Nintendo Switch, Pro Controller sotajo', 20, 2, 'Slike/ProHolder.jpg'),
('Sceptile', 3, 12, 'Slike/sceptile.jpg');
