<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211205074818 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE slider (id INT AUTO_INCREMENT NOT NULL, image_desktop_id INT NOT NULL, image_mobile_id INT NOT NULL, title VARCHAR(255) NOT NULL, link VARCHAR(255) DEFAULT NULL, active INT NOT NULL, INDEX IDX_CFC71007932C8238 (image_desktop_id), INDEX IDX_CFC710076084991F (image_mobile_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE slider ADD CONSTRAINT FK_CFC71007932C8238 FOREIGN KEY (image_desktop_id) REFERENCES images (id)');
        $this->addSql('ALTER TABLE slider ADD CONSTRAINT FK_CFC710076084991F FOREIGN KEY (image_mobile_id) REFERENCES images (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE slider');
    }
}
