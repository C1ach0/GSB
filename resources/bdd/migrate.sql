-- Ici vous pouvez retrouver tout le scripts qui modifie la base de donnée originel (gsb_restore.sql).
-- Des choix fait en fonction des besoins et restrictions imposées.

-- Modification de la colonne 'mdp' dans la table 'visiteur' pour utiliser VARCHAR(255)
ALTER TABLE visiteur MODIFY COLUMN mdp VARCHAR(60) NOT NULL;

-- Table des rôles
CREATE TABLE IF NOT EXISTS roles (
  id INT AUTO_INCREMENT NOT NULL,
  libelle VARCHAR(30) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB;

-- Table d'association entre visiteurs et rôles
CREATE TABLE IF NOT EXISTS visiteur_roles (
  visiteur_id CHAR(5) NOT NULL,
  role_id INT NOT NULL,
  PRIMARY KEY (visiteur_id, role_id),
  FOREIGN KEY (visiteur_id) REFERENCES visiteur(id) ON DELETE CASCADE,
  FOREIGN KEY (role_id) REFERENCES roles(id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- Exemple d'insertion de rôles
INSERT INTO roles (libelle) VALUES ('Directeur'), ('Comptable'), ('Visiteur');

-- Mise à jour pour attribuer le rôle 'Visiteur' par défaut à tous les visiteurs
INSERT INTO visiteur_roles (visiteur_id, role_id)
    SELECT id, (SELECT id FROM roles WHERE libelle = 'Visiteur')
    FROM visiteur
ON DUPLICATE KEY UPDATE role_id = role_id;