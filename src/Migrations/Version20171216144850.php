<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171216144850 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649CC7C9A99');
        $this->addSql('DROP INDEX IDX_8D93D649CC7C9A99 ON user');
        $this->addSql('ALTER TABLE user CHANGE email email VARCHAR(255) NOT NULL, CHANGE fk_group_id fkgroup_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6497A330516 FOREIGN KEY (fkgroup_id) REFERENCES groupe (id)');
        $this->addSql('CREATE INDEX IDX_8D93D6497A330516 ON user (fkgroup_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6497A330516');
        $this->addSql('DROP INDEX IDX_8D93D6497A330516 ON user');
        $this->addSql('ALTER TABLE user CHANGE email email VARCHAR(180) DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE fkgroup_id fk_group_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649CC7C9A99 FOREIGN KEY (fk_group_id) REFERENCES groupe (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649CC7C9A99 ON user (fk_group_id)');
    }
}
