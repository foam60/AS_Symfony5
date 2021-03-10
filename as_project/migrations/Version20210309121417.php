<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210309121417 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE classe (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE document (id INT AUTO_INCREMENT NOT NULL, document_categorie_id INT DEFAULT NULL, evenement_id_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, lien VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, date_ajout VARCHAR(255) NOT NULL, INDEX IDX_D8698A761110C65C (document_categorie_id), INDEX IDX_D8698A76ECEE32AF (evenement_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE document_categorie (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE eleve (id INT AUTO_INCREMENT NOT NULL, categorie_id_id INT DEFAULT NULL, classe_id_id INT DEFAULT NULL, date_naissance VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, genre VARCHAR(1) NOT NULL, date_creation VARCHAR(255) NOT NULL, date_maj VARCHAR(255) DEFAULT NULL, archivee SMALLINT DEFAULT NULL, INDEX IDX_ECA105F78A3C7387 (categorie_id_id), INDEX IDX_ECA105F73633CA6F (classe_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evenement (id INT AUTO_INCREMENT NOT NULL, sport_id_id INT DEFAULT NULL, type_id_id INT DEFAULT NULL, categorie_id_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, date_debut VARCHAR(255) NOT NULL, nombre_places INT NOT NULL, image VARCHAR(255) NOT NULL, vignette VARCHAR(255) NOT NULL, duree INT NOT NULL, date_fin VARCHAR(255) NOT NULL, INDEX IDX_B26681ECB38FF4E (sport_id_id), INDEX IDX_B26681E714819A0 (type_id_id), INDEX IDX_B26681E8A3C7387 (categorie_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sport (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, eleve_id_id INT DEFAULT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_1D1C63B3E7927C74 (email), INDEX IDX_1D1C63B3602483BE (eleve_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE document ADD CONSTRAINT FK_D8698A761110C65C FOREIGN KEY (document_categorie_id) REFERENCES document_categorie (id)');
        $this->addSql('ALTER TABLE document ADD CONSTRAINT FK_D8698A76ECEE32AF FOREIGN KEY (evenement_id_id) REFERENCES evenement (id)');
        $this->addSql('ALTER TABLE eleve ADD CONSTRAINT FK_ECA105F78A3C7387 FOREIGN KEY (categorie_id_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE eleve ADD CONSTRAINT FK_ECA105F73633CA6F FOREIGN KEY (classe_id_id) REFERENCES classe (id)');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681ECB38FF4E FOREIGN KEY (sport_id_id) REFERENCES sport (id)');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681E714819A0 FOREIGN KEY (type_id_id) REFERENCES type (id)');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681E8A3C7387 FOREIGN KEY (categorie_id_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B3602483BE FOREIGN KEY (eleve_id_id) REFERENCES eleve (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE eleve DROP FOREIGN KEY FK_ECA105F78A3C7387');
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681E8A3C7387');
        $this->addSql('ALTER TABLE eleve DROP FOREIGN KEY FK_ECA105F73633CA6F');
        $this->addSql('ALTER TABLE document DROP FOREIGN KEY FK_D8698A761110C65C');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B3602483BE');
        $this->addSql('ALTER TABLE document DROP FOREIGN KEY FK_D8698A76ECEE32AF');
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681ECB38FF4E');
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681E714819A0');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE classe');
        $this->addSql('DROP TABLE document');
        $this->addSql('DROP TABLE document_categorie');
        $this->addSql('DROP TABLE eleve');
        $this->addSql('DROP TABLE evenement');
        $this->addSql('DROP TABLE sport');
        $this->addSql('DROP TABLE type');
        $this->addSql('DROP TABLE utilisateur');
    }
}
