<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240123221527 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE curriculum_vitae ADD profile_id INT NOT NULL');
        $this->addSql('ALTER TABLE curriculum_vitae ADD CONSTRAINT FK_1FC99844CCFA12B8 FOREIGN KEY (profile_id) REFERENCES profile (id)');
        $this->addSql('CREATE INDEX IDX_1FC99844CCFA12B8 ON curriculum_vitae (profile_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE curriculum_vitae DROP FOREIGN KEY FK_1FC99844CCFA12B8');
        $this->addSql('DROP INDEX IDX_1FC99844CCFA12B8 ON curriculum_vitae');
        $this->addSql('ALTER TABLE curriculum_vitae DROP profile_id');
    }
}
