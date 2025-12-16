<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251215160536 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE club_categories ADD CONSTRAINT FK_7335088561190A32 FOREIGN KEY (club_id) REFERENCES club (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE club_categories ADD CONSTRAINT FK_73350885A21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sportif ADD CONSTRAINT FK_D28C448D61190A32 FOREIGN KEY (club_id) REFERENCES club (id)');
        $this->addSql('ALTER TABLE sportif_categories ADD CONSTRAINT FK_B6C5EB68FFB7083B FOREIGN KEY (sportif_id) REFERENCES sportif (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sportif_categories ADD CONSTRAINT FK_B6C5EB68A21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user ADD prenom VARCHAR(255) NOT NULL, ADD nom VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE club_categories DROP FOREIGN KEY FK_7335088561190A32');
        $this->addSql('ALTER TABLE club_categories DROP FOREIGN KEY FK_73350885A21214B7');
        $this->addSql('ALTER TABLE sportif DROP FOREIGN KEY FK_D28C448D61190A32');
        $this->addSql('ALTER TABLE sportif_categories DROP FOREIGN KEY FK_B6C5EB68FFB7083B');
        $this->addSql('ALTER TABLE sportif_categories DROP FOREIGN KEY FK_B6C5EB68A21214B7');
        $this->addSql('ALTER TABLE user DROP prenom, DROP nom');
    }
}
