<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210206140847 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE arbitre (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, password VARCHAR(255) DEFAULT NULL, dni VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE jugador (id INT AUTO_INCREMENT NOT NULL, elo INT DEFAULT NULL, nom VARCHAR(255) DEFAULT NULL, pais VARCHAR(255) DEFAULT NULL, equip VARCHAR(255) DEFAULT NULL, data_naixament DATE DEFAULT NULL, codi_fide INT DEFAULT NULL, fide_id INT DEFAULT NULL, act_punts DOUBLE PRECISION DEFAULT NULL, en_torneig TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE partida (id INT AUTO_INCREMENT NOT NULL, id_jugador INT DEFAULT NULL, color_peces VARCHAR(255) DEFAULT NULL, id_vs_jugador INT DEFAULT NULL, punts DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ronda (id INT AUTO_INCREMENT NOT NULL, partides LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', data DATETIME DEFAULT NULL, num_rondes INT DEFAULT NULL, participants LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE taula (id INT AUTO_INCREMENT NOT NULL, jugador_n_id INT DEFAULT NULL, jugador_b_id INT DEFAULT NULL, punt_n DOUBLE PRECISION DEFAULT NULL, punt_b DOUBLE PRECISION DEFAULT NULL, UNIQUE INDEX UNIQ_E82DFEAAD9E9CCD6 (jugador_n_id), UNIQUE INDEX UNIQ_E82DFEAA933F736E (jugador_b_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE torneig (id INT AUTO_INCREMENT NOT NULL, arbitre_id INT DEFAULT NULL, jugadors_id INT DEFAULT NULL, propietari_id INT DEFAULT NULL, rondes LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', data DATE DEFAULT NULL, the_participants LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', nom VARCHAR(255) DEFAULT NULL, num_rondes INT DEFAULT NULL, status VARCHAR(255) DEFAULT NULL, jugador_pfinal LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', INDEX IDX_DF78888943A5F0 (arbitre_id), INDEX IDX_DF7888881C0842 (jugadors_id), INDEX IDX_DF78888A7EC64E8 (propietari_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, nom VARCHAR(255) DEFAULT NULL, dni VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE taula ADD CONSTRAINT FK_E82DFEAAD9E9CCD6 FOREIGN KEY (jugador_n_id) REFERENCES jugador (id)');
        $this->addSql('ALTER TABLE taula ADD CONSTRAINT FK_E82DFEAA933F736E FOREIGN KEY (jugador_b_id) REFERENCES jugador (id)');
        $this->addSql('ALTER TABLE torneig ADD CONSTRAINT FK_DF78888943A5F0 FOREIGN KEY (arbitre_id) REFERENCES arbitre (id)');
        $this->addSql('ALTER TABLE torneig ADD CONSTRAINT FK_DF7888881C0842 FOREIGN KEY (jugadors_id) REFERENCES jugador (id)');
        $this->addSql('ALTER TABLE torneig ADD CONSTRAINT FK_DF78888A7EC64E8 FOREIGN KEY (propietari_id) REFERENCES user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE torneig DROP FOREIGN KEY FK_DF78888943A5F0');
        $this->addSql('ALTER TABLE taula DROP FOREIGN KEY FK_E82DFEAAD9E9CCD6');
        $this->addSql('ALTER TABLE taula DROP FOREIGN KEY FK_E82DFEAA933F736E');
        $this->addSql('ALTER TABLE torneig DROP FOREIGN KEY FK_DF7888881C0842');
        $this->addSql('ALTER TABLE torneig DROP FOREIGN KEY FK_DF78888A7EC64E8');
        $this->addSql('DROP TABLE arbitre');
        $this->addSql('DROP TABLE jugador');
        $this->addSql('DROP TABLE partida');
        $this->addSql('DROP TABLE ronda');
        $this->addSql('DROP TABLE taula');
        $this->addSql('DROP TABLE torneig');
        $this->addSql('DROP TABLE user');
    }
}
