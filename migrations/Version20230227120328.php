<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230227120328 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bond (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, symbol VARCHAR(20) NOT NULL, interest_desc VARCHAR(500) NOT NULL, price INT NOT NULL, selling_price DOUBLE PRECISION NOT NULL, swap_price INT NOT NULL, cycles INT NOT NULL, cycle_length INT NOT NULL, interest_first_period_rate DOUBLE PRECISION NOT NULL, interest VARCHAR(255) NOT NULL, margin DOUBLE PRECISION NOT NULL, link VARCHAR(255) NOT NULL, interest_paid_period VARCHAR(20) NOT NULL, capitalized TINYINT(1) NOT NULL, capitalization_period VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE bond');
    }
}
