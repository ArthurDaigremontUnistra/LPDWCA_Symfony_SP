<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220703173326 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE moyen_de_paiement (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(50) NOT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE transaction ADD moyen_de_paiement_id INT NOT NULL, CHANGE type_id type_id INT DEFAULT NULL, CHANGE user_id user_id INT DEFAULT NULL, CHANGE category_id category_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D142E853FD FOREIGN KEY (moyen_de_paiement_id) REFERENCES moyen_de_paiement (id)');
        $this->addSql('CREATE INDEX IDX_723705D142E853FD ON transaction (moyen_de_paiement_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE transaction DROP FOREIGN KEY FK_723705D142E853FD');
        $this->addSql('DROP TABLE moyen_de_paiement');
        $this->addSql('DROP INDEX IDX_723705D142E853FD ON transaction');
        $this->addSql('ALTER TABLE transaction DROP moyen_de_paiement_id, CHANGE type_id type_id INT NOT NULL, CHANGE user_id user_id INT NOT NULL, CHANGE category_id category_id INT NOT NULL');
    }
}
