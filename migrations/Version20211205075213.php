<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211205075213 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE slider DROP FOREIGN KEY FK_CFC710076084991F');
        $this->addSql('ALTER TABLE slider DROP FOREIGN KEY FK_CFC71007932C8238');
        $this->addSql('DROP INDEX IDX_CFC710076084991F ON slider');
        $this->addSql('DROP INDEX IDX_CFC71007932C8238 ON slider');
        $this->addSql('ALTER TABLE slider DROP image_desktop_id, DROP image_mobile_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE slider ADD image_desktop_id INT NOT NULL, ADD image_mobile_id INT NOT NULL');
        $this->addSql('ALTER TABLE slider ADD CONSTRAINT FK_CFC710076084991F FOREIGN KEY (image_mobile_id) REFERENCES images (id)');
        $this->addSql('ALTER TABLE slider ADD CONSTRAINT FK_CFC71007932C8238 FOREIGN KEY (image_desktop_id) REFERENCES images (id)');
        $this->addSql('CREATE INDEX IDX_CFC710076084991F ON slider (image_mobile_id)');
        $this->addSql('CREATE INDEX IDX_CFC71007932C8238 ON slider (image_desktop_id)');
    }
}
