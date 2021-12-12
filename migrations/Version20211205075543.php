<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211205075543 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE images ADD slider_desktop_id INT DEFAULT NULL, ADD image_mobile_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE images ADD CONSTRAINT FK_E01FBE6AED0CCA07 FOREIGN KEY (slider_desktop_id) REFERENCES slider (id)');
        $this->addSql('ALTER TABLE images ADD CONSTRAINT FK_E01FBE6A6084991F FOREIGN KEY (image_mobile_id) REFERENCES slider (id)');
        $this->addSql('CREATE INDEX IDX_E01FBE6AED0CCA07 ON images (slider_desktop_id)');
        $this->addSql('CREATE INDEX IDX_E01FBE6A6084991F ON images (image_mobile_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE images DROP FOREIGN KEY FK_E01FBE6AED0CCA07');
        $this->addSql('ALTER TABLE images DROP FOREIGN KEY FK_E01FBE6A6084991F');
        $this->addSql('DROP INDEX IDX_E01FBE6AED0CCA07 ON images');
        $this->addSql('DROP INDEX IDX_E01FBE6A6084991F ON images');
        $this->addSql('ALTER TABLE images DROP slider_desktop_id, DROP image_mobile_id');
    }
}
