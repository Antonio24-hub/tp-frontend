CREATE DATABASE supermarche;
USE supermarche;


CREATE TABLE produit (
    id INT AUTO_INCREMENT PRIMARY KEY,
    designation VARCHAR(100)
    prix_unitaire DECIMAL(10,2),
    quantite_stock INT
);


CREATE TABLE caisse (
    id INT AUTO_INCREMENT PRIMARY KEY,
    numero INT
);


CREATE TABLE achat (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_produit INT,
    id_caisse INT,
    quantite INT,
    date_achat DATETIME,
    statut VARCHAR(20),


    FOREIGN KEY (id_produit) REFERENCES produit(id),
    FOREIGN KEY (id_caisse) REFERENCES caisse(id)
);


--INSERT
-- Insertion des produits
INSERT INTO produit (designation, prix_unitaire, quantite_stock) VALUES
('Pain', 500, 100),
('Biscuit', 300, 150),
('Lait', 1200, 80),
('Jus', 1000, 60),
('Sucre', 2500, 40);

-- Insertion des caisses
INSERT INTO caisse (numero) VALUES
(1),
(2);