# Prompts die ik heb gebruikt

Ik bouw een simpele photo gallery in PHP met MySQL en PDO.

Ik wil een upload systeem waar een gebruiker:
- een titel invoert
- een afbeelding uploadt
- de afbeelding wordt opgeslagen in een /uploads map
- de bestandsnaam wordt opgeslagen in de database

Dit is mijn database tabel:

CREATE TABLE photos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    filename VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

Genereer:
1. HTML upload formulier
2. PHP upload handler met validatie
3. PDO insert query

Leg kort uit waar elk bestand moet staan.
