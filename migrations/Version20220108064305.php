<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220108064305 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE images DROP FOREIGN KEY FK_E01FBE6A6084991F');
        $this->addSql('ALTER TABLE images DROP FOREIGN KEY FK_E01FBE6A932C8238');
        $this->addSql('DROP INDEX IDX_E01FBE6A932C8238 ON images');
        $this->addSql('DROP INDEX IDX_E01FBE6A6084991F ON images');
        $this->addSql('ALTER TABLE images ADD slider_id INT DEFAULT NULL, DROP image_desktop_id, DROP image_mobile_id');
        $this->addSql('ALTER TABLE images ADD CONSTRAINT FK_E01FBE6A2CCC9638 FOREIGN KEY (slider_id) REFERENCES slider (id)');
        $this->addSql('CREATE INDEX IDX_E01FBE6A2CCC9638 ON images (slider_id)');
        $this->addSql('ALTER TABLE slider ADD image_mobile INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE images DROP FOREIGN KEY FK_E01FBE6A2CCC9638');
        $this->addSql('DROP INDEX IDX_E01FBE6A2CCC9638 ON images');
        $this->addSql('ALTER TABLE images ADD image_mobile_id INT DEFAULT NULL, CHANGE slider_id image_desktop_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE images ADD CONSTRAINT FK_E01FBE6A6084991F FOREIGN KEY (image_mobile_id) REFERENCES slider (id)');
        $this->addSql('ALTER TABLE images ADD CONSTRAINT FK_E01FBE6A932C8238 FOREIGN KEY (image_desktop_id) REFERENCES slider (id)');
        $this->addSql('CREATE INDEX IDX_E01FBE6A932C8238 ON images (image_desktop_id)');
        $this->addSql('CREATE INDEX IDX_E01FBE6A6084991F ON images (image_mobile_id)');
        $this->addSql('ALTER TABLE slider DROP image_mobile');
    }
}
