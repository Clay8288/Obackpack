<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210809093650 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE weather (id INT AUTO_INCREMENT NOT NULL, content LONGTEXT NOT NULL, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE weather_country ADD CONSTRAINT FK_F74C2A2D8CE675E FOREIGN KEY (weather_id) REFERENCES weather (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE weather_country ADD CONSTRAINT FK_F74C2A2DF92F3E70 FOREIGN KEY (country_id) REFERENCES country (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE weather_country DROP FOREIGN KEY FK_F74C2A2D8CE675E');
        $this->addSql('DROP TABLE weather');
        $this->addSql('ALTER TABLE weather_country DROP FOREIGN KEY FK_F74C2A2DF92F3E70');
    }
}
