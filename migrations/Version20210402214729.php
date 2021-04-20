<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210402214729 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE agencies (id INT AUTO_INCREMENT NOT NULL, reference VARCHAR(45) NOT NULL, name VARCHAR(100) NOT NULL, date_create DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE agencies_account (agencies_id INT NOT NULL, account_id INT NOT NULL, INDEX IDX_B82F64C13E8E72F8 (agencies_id), INDEX IDX_B82F64C19B6B5FBA (account_id), PRIMARY KEY(agencies_id, account_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE agencies_account ADD CONSTRAINT FK_B82F64C13E8E72F8 FOREIGN KEY (agencies_id) REFERENCES agencies (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE agencies_account ADD CONSTRAINT FK_B82F64C19B6B5FBA FOREIGN KEY (account_id) REFERENCES account (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE agencies_account DROP FOREIGN KEY FK_B82F64C13E8E72F8');
        $this->addSql('DROP TABLE agencies');
        $this->addSql('DROP TABLE agencies_account');
    }
}
