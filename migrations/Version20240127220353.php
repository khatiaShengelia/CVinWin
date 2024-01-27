<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240127220353 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE section_field ADD section_id INT NOT NULL');
        $this->addSql('ALTER TABLE section_field ADD CONSTRAINT FK_CCA2223CD823E37A FOREIGN KEY (section_id) REFERENCES section (id)');
        $this->addSql('CREATE INDEX IDX_CCA2223CD823E37A ON section_field (section_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE section_field DROP FOREIGN KEY FK_CCA2223CD823E37A');
        $this->addSql('DROP INDEX IDX_CCA2223CD823E37A ON section_field');
        $this->addSql('ALTER TABLE section_field DROP section_id');
    }
}
