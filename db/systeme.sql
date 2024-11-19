CREATE SCHEMA IF NOT EXISTS `systeme` DEFAULT CHARACTER SET utf8 ;
USE `systeme`;

-- --------------------------------------------------
-- Table `systeme`.`restaurant`
-- --------------------------------------------------
CREATE TABLE IF NOT EXISTS `systeme`.`restaurant` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `nom` VARCHAR(60) NOT NULL,
    `adresse` VARCHAR(60) NOT NULL,
    `telephone` VARCHAR(15),
    `courriel` VARCHAR(60),
    `heures_ouverture` VARCHAR(60),
    PRIMARY KEY (`id`)
);

INSERT INTO `systeme`.`restaurant` (`nom`, `adresse`, `telephone`, `courriel`, `heures_ouverture`) VALUES ('Porc Poulet', '906, rue Valade, Mont-Laurier', '555-654-7774', 'info@porcpoulet.com', '14h-21h');
INSERT INTO `systeme`.`restaurant` (`nom`, `adresse`, `telephone`, `courriel`, `heures_ouverture`) VALUES ('Scala 40', '75, rue Maisie, Val-David', '555-889-4567', 'info@scalavingt.com', '10h-23h');
INSERT INTO `systeme`.`restaurant` (`nom`, `adresse`, `telephone`, `courriel`, `heures_ouverture`) VALUES ('Jardin du nord', '56, 9e avenue, Terrebonne', '555-712-5589', 'info@jardindunord.ca', '11h-22h');
INSERT INTO `systeme`.`restaurant` (`nom`, `adresse`, `telephone`, `courriel`, `heures_ouverture`) VALUES ('Du Bon Manger', '122, rue Grande-Côte, Boisbriand', '555-436-4723', 'info@bonmanger.com', '11h-23h');
INSERT INTO `systeme`.`restaurant` (`nom`, `adresse`, `telephone`, `courriel`, `heures_ouverture`) VALUES ('Chez Vanessa', '1547, rue Cavendish, Laval', '555-989-5441', 'info@chezvanessa.ca', '15h-22h');
INSERT INTO `systeme`.`restaurant` (`nom`, `adresse`, `telephone`, `courriel`, `heures_ouverture`) VALUES ('Complètement Fondue', '2575, rue du Moineau, Sainte-Thérèse', '555-444-4419', 'info@completementfondue.ca', '13h-22h');

-- --------------------------------------------------
-- Table `systeme`.`table`
-- --------------------------------------------------
CREATE TABLE IF NOT EXISTS `systeme`.`table` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `restaurant_id` INT,
    `capacite` INT NOT NULL,
    `emplacement` VARCHAR(45),
    PRIMARY KEY (`id`),
    FOREIGN KEY (`restaurant_id`) REFERENCES `systeme`.`restaurant`(`id`)
);

-- --------------------------------------------------
-- Table `systeme`.`horaire`
-- --------------------------------------------------
CREATE TABLE IF NOT EXISTS `systeme`.`horaire` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `restaurant_id` INT, 
    `table_id` INT,
    `plage_horaire` VARCHAR(10),
    PRIMARY KEY (`id`),
    FOREIGN KEY (`restaurant_id`) REFERENCES `systeme`.`restaurant`(`id`),
    FOREIGN KEY (`table_id`) REFERENCES `systeme`.`table`(`id`)
);

-- --------------------------------------------------
-- Table `systeme`.`client`
-- --------------------------------------------------
CREATE TABLE IF NOT EXISTS `systeme`.`client` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `nom` VARCHAR(60) NOT NULL,
    `telephone` VARCHAR(15) NOT NULL,
    `courriel` VARCHAR(60),
    PRIMARY KEY (`id`)
);

-- --------------------------------------------------
-- Table `systeme`.`reservation`
-- --------------------------------------------------
CREATE TABLE IF NOT EXISTS `systeme`.`reservation` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `client_id` INT NOT NULL, 
    `restaurant_id` INT NOT NULL,
    `table_id` INT,
    `date_reservation` DATE NOT NULL,
    `heure_reservation` TIME NOT NULL,
    `nombre_personnes` INT NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`client_id`) REFERENCES `systeme`.`client`(`id`),
    FOREIGN KEY (`restaurant_id`) REFERENCES `systeme`.`restaurant`(`id`),
    FOREIGN KEY (`table_id`) REFERENCES `systeme`.`table`(`id`)
);


