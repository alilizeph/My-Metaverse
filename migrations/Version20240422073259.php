<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240422073259 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE comments (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, video_game_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, content VARCHAR(1255) NOT NULL, grade INT NOT NULL, post_date DATETIME NOT NULL, INDEX IDX_5F9E962AA76ED395 (user_id), INDEX IDX_5F9E962A16230A8 (video_game_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gender (id INT AUTO_INCREMENT NOT NULL, gender_name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE likes (id INT AUTO_INCREMENT NOT NULL, nb_likes INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE likes_user (likes_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_17BC4AF82F23775F (likes_id), INDEX IDX_17BC4AF8A76ED395 (user_id), PRIMARY KEY(likes_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE platform (id INT AUTO_INCREMENT NOT NULL, platform_name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, surname VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, gender VARCHAR(255) NOT NULL, birthday DATETIME NOT NULL, nb_likes INT NOT NULL, nb_comments INT NOT NULL, avatar_new_file_name VARCHAR(255) DEFAULT NULL, avatar_file_size INT DEFAULT NULL, presentation VARCHAR(1555) NOT NULL, is_admin TINYINT(1) DEFAULT 0 NOT NULL, is_regestered TINYINT(1) DEFAULT 0 NOT NULL, UNIQUE INDEX UNIQ_IDENTIFIER_USERNAME (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE video_game (id INT AUTO_INCREMENT NOT NULL, platform_id INT DEFAULT NULL, likes_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(1255) NOT NULL, advice VARCHAR(1255) NOT NULL, img_box_file_name VARCHAR(255) DEFAULT NULL, img_box_size INT DEFAULT NULL, img_theme_file_name VARCHAR(255) DEFAULT NULL, img_theme_size INT DEFAULT NULL, grade INT NOT NULL, release_date DATETIME NOT NULL, disponibility TINYINT(1) NOT NULL, average_price DOUBLE PRECISION NOT NULL, link VARCHAR(500) NOT NULL, average_users_grade INT NOT NULL, INDEX IDX_24BC6C50FFE6496F (platform_id), UNIQUE INDEX UNIQ_24BC6C502F23775F (likes_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE video_game_gender (video_game_id INT NOT NULL, gender_id INT NOT NULL, INDEX IDX_98F0162B16230A8 (video_game_id), INDEX IDX_98F0162B708A0E0 (gender_id), PRIMARY KEY(video_game_id, gender_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE comments ADD CONSTRAINT FK_5F9E962AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE comments ADD CONSTRAINT FK_5F9E962A16230A8 FOREIGN KEY (video_game_id) REFERENCES video_game (id)');
        $this->addSql('ALTER TABLE likes_user ADD CONSTRAINT FK_17BC4AF82F23775F FOREIGN KEY (likes_id) REFERENCES likes (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE likes_user ADD CONSTRAINT FK_17BC4AF8A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE video_game ADD CONSTRAINT FK_24BC6C50FFE6496F FOREIGN KEY (platform_id) REFERENCES platform (id)');
        $this->addSql('ALTER TABLE video_game ADD CONSTRAINT FK_24BC6C502F23775F FOREIGN KEY (likes_id) REFERENCES likes (id)');
        $this->addSql('ALTER TABLE video_game_gender ADD CONSTRAINT FK_98F0162B16230A8 FOREIGN KEY (video_game_id) REFERENCES video_game (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE video_game_gender ADD CONSTRAINT FK_98F0162B708A0E0 FOREIGN KEY (gender_id) REFERENCES gender (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comments DROP FOREIGN KEY FK_5F9E962AA76ED395');
        $this->addSql('ALTER TABLE comments DROP FOREIGN KEY FK_5F9E962A16230A8');
        $this->addSql('ALTER TABLE likes_user DROP FOREIGN KEY FK_17BC4AF82F23775F');
        $this->addSql('ALTER TABLE likes_user DROP FOREIGN KEY FK_17BC4AF8A76ED395');
        $this->addSql('ALTER TABLE video_game DROP FOREIGN KEY FK_24BC6C50FFE6496F');
        $this->addSql('ALTER TABLE video_game DROP FOREIGN KEY FK_24BC6C502F23775F');
        $this->addSql('ALTER TABLE video_game_gender DROP FOREIGN KEY FK_98F0162B16230A8');
        $this->addSql('ALTER TABLE video_game_gender DROP FOREIGN KEY FK_98F0162B708A0E0');
        $this->addSql('DROP TABLE comments');
        $this->addSql('DROP TABLE gender');
        $this->addSql('DROP TABLE likes');
        $this->addSql('DROP TABLE likes_user');
        $this->addSql('DROP TABLE platform');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE video_game');
        $this->addSql('DROP TABLE video_game_gender');
    }
}
