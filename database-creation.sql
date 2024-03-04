-- Designated sql code to create exactly the same database structure as PhoenIntel.
-- use this code (for example in phpmyadmin, in the "sql" section) to create exactly the same database structure.

CREATE TABLE liens (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titre VARCHAR(255),
  url VARCHAR(255)
);

ALTER TABLE liens ADD COLUMN description TEXT;

ALTER TABLE liens MODIFY url VARCHAR(2048);

ALTER TABLE liens ADD timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP;

SELECT * FROM liens ORDER BY timestamp DESC;

ALTER TABLE liens ADD date TIMESTAMP DEFAULT CURRENT_TIMESTAMP;

INSERT INTO `liens` (`id`, `titre`, `url`, `description`, `timestamp`, `date`) VALUES (NULL, 'Link title will appear here', 'https://www.phoen.org', 'Link description will appear here', '2000-01-01 00:00:00', '2000-01-01 00:00:00')

CREATE TABLE partners (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titre VARCHAR(255),
  url VARCHAR(255)
);

ALTER TABLE partners ADD COLUMN description TEXT;

ALTER TABLE partners MODIFY url VARCHAR(2048);

ALTER TABLE partners ADD timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP;

SELECT * FROM partners ORDER BY timestamp DESC;

ALTER TABLE partners ADD date TIMESTAMP DEFAULT CURRENT_TIMESTAMP;

INSERT INTO `partners` (`id`, `titre`, `url`, `description`, `timestamp`, `date`) VALUES (NULL, 'Partner name will appear here', 'https://www.phoen.org', 'Partner description will appear here', '2000-01-01 00:00:00', '2000-01-01 00:00:00')

CREATE TABLE identifiants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    identifiant VARCHAR(100),
    nom_complet VARCHAR(255),
    raccourci_nom VARCHAR(10),
    code_pays VARCHAR(2),
    niveau INT,
    numero_membre INT,
    date_adhesion DATE,
    statut_temporaire VARCHAR(1),
    code_pin INT
);

INSERT INTO `identifiants` (`id`, `identifiant`, `nom_complet`, `raccourci_nom`, `code_pays`, `niveau`, `numero_membre`, `date_adhesion`, `statut_temporaire`, `code_pin`) VALUES (NULL, 'exampleid', 'example', 'EXAMPLE', 'AA', '0', '0', '2000-01-01', '0', '0000')