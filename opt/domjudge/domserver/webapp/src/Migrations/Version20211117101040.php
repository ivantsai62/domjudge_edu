<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211117101040 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE problem_group (id INT AUTO_INCREMENT NOT NULL, probid INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE submission ADD input LONGBLOB DEFAULT NULL COMMENT \'input data(DC2Type:blobtext)\', ADD submit_type INT DEFAULT 0 NOT NULL COMMENT \'If submission is run test form IDE \'');
        $this->addSql('ALTER TABLE problem ADD restriction_languages LONGTEXT DEFAULT \'NULL\' COMMENT \'JSON-encoded restrictions(DC2Type:json)\', ADD subtask INT DEFAULT NULL, ADD task_point LONGTEXT DEFAULT \'NULL\' COMMENT \'JSON-encoded restrictions(DC2Type:json)\', ADD problems_group LONGTEXT DEFAULT \'NULL\' COMMENT \'JSON-encoded restrictions(DC2Type:json)\'');
        $this->addSql('ALTER TABLE judging ADD task_result LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json)\'');
        $this->addSql('ALTER TABLE scorecache ADD all_task_point LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json)\'');
        $this->addSql('ALTER TABLE testcase ADD task INT DEFAULT NULL, CHANGE orig_input_filename orig_input_filename VARCHAR(255) DEFAULT NULL COMMENT \'Original basename of the input file.\'');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE problem_group');
        $this->addSql('ALTER TABLE judging DROP task_result');
        $this->addSql('ALTER TABLE problem DROP restriction_languages, DROP subtask, DROP task_point, DROP problems_group');
        $this->addSql('ALTER TABLE scorecache DROP all_task_point');
        $this->addSql('ALTER TABLE submission DROP input, DROP submit_type');
        $this->addSql('ALTER TABLE testcase DROP task, CHANGE orig_input_filename orig_input_filename VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci COMMENT \'Original basename of the input file.\'');
    }
}
