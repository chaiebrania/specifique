<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200320105436 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE instrument_specifique ADD poste_id INT NOT NULL');
        $this->addSql('ALTER TABLE instrument_specifique ADD CONSTRAINT FK_A6CB206AA0905086 FOREIGN KEY (poste_id) REFERENCES poste (id)');
        $this->addSql('CREATE INDEX IDX_A6CB206AA0905086 ON instrument_specifique (poste_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE instrument_specifique DROP FOREIGN KEY FK_A6CB206AA0905086');
        $this->addSql('DROP INDEX IDX_A6CB206AA0905086 ON instrument_specifique');
        $this->addSql('ALTER TABLE instrument_specifique DROP poste_id');
    }
}
