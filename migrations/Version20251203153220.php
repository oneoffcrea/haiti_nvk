<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251203153220 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categories (id INT AUTO_INCREMENT NOT NULL, categories VARCHAR(255) NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE club (id INT AUTO_INCREMENT NOT NULL, infos VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, fondation VARCHAR(255) NOT NULL, statut VARCHAR(255) NOT NULL, couleurs VARCHAR(255) NOT NULL, stade VARCHAR(255) NOT NULL, championnat VARCHAR(255) NOT NULL, proprietaire VARCHAR(255) NOT NULL, president VARCHAR(255) NOT NULL, entraineur VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, website VARCHAR(255) NOT NULL, date_creation DATE NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE club_categories (club_id INT NOT NULL, categories_id INT NOT NULL, INDEX IDX_7335088561190A32 (club_id), INDEX IDX_73350885A21214B7 (categories_id), PRIMARY KEY (club_id, categories_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE sportif (id INT AUTO_INCREMENT NOT NULL, infos VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, naissance VARCHAR(255) NOT NULL, age INT NOT NULL, categorie_age VARCHAR(255) NOT NULL, taille INT NOT NULL, poste VARCHAR(255) NOT NULL, photo VARCHAR(255) NOT NULL, date_creation DATE NOT NULL, club_id INT DEFAULT NULL, INDEX IDX_D28C448D61190A32 (club_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE sportif_categories (sportif_id INT NOT NULL, categories_id INT NOT NULL, INDEX IDX_B6C5EB68FFB7083B (sportif_id), INDEX IDX_B6C5EB68A21214B7 (categories_id), PRIMARY KEY (sportif_id, categories_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, role VARCHAR(255) NOT NULL, date_creation DATE NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE club_categories ADD CONSTRAINT FK_7335088561190A32 FOREIGN KEY (club_id) REFERENCES club (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE club_categories ADD CONSTRAINT FK_73350885A21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sportif ADD CONSTRAINT FK_D28C448D61190A32 FOREIGN KEY (club_id) REFERENCES club (id)');
        $this->addSql('ALTER TABLE sportif_categories ADD CONSTRAINT FK_B6C5EB68FFB7083B FOREIGN KEY (sportif_id) REFERENCES sportif (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sportif_categories ADD CONSTRAINT FK_B6C5EB68A21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE club_categories DROP FOREIGN KEY FK_7335088561190A32');
        $this->addSql('ALTER TABLE club_categories DROP FOREIGN KEY FK_73350885A21214B7');
        $this->addSql('ALTER TABLE sportif DROP FOREIGN KEY FK_D28C448D61190A32');
        $this->addSql('ALTER TABLE sportif_categories DROP FOREIGN KEY FK_B6C5EB68FFB7083B');
        $this->addSql('ALTER TABLE sportif_categories DROP FOREIGN KEY FK_B6C5EB68A21214B7');
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE club');
        $this->addSql('DROP TABLE club_categories');
        $this->addSql('DROP TABLE sportif');
        $this->addSql('DROP TABLE sportif_categories');
        $this->addSql('DROP TABLE user');
    }
}
