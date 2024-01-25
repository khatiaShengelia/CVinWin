<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240125221734 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE section ADD curriculum_vitae_id INT NOT NULL');
        $this->addSql('ALTER TABLE section ADD CONSTRAINT FK_2D737AEF4AF29A35 FOREIGN KEY (curriculum_vitae_id) REFERENCES curriculum_vitae (id)');
        $this->addSql('CREATE INDEX IDX_2D737AEF4AF29A35 ON section (curriculum_vitae_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE section DROP FOREIGN KEY FK_2D737AEF4AF29A35');
        $this->addSql('DROP INDEX IDX_2D737AEF4AF29A35 ON section');
        $this->addSql('ALTER TABLE section DROP curriculum_vitae_id');
    }
}
