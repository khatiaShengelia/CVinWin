<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240123220432 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE curriculum_vitae ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE curriculum_vitae ADD CONSTRAINT FK_1FC99844A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_1FC99844A76ED395 ON curriculum_vitae (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE curriculum_vitae DROP FOREIGN KEY FK_1FC99844A76ED395');
        $this->addSql('DROP INDEX IDX_1FC99844A76ED395 ON curriculum_vitae');
        $this->addSql('ALTER TABLE curriculum_vitae DROP user_id');
    }
}
