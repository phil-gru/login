# login
SQL:    CREATE TABLE users(
        `id` INT NOT NULL AUTO_INCREMENT,
        `email` VARCHAR(255) NOT NULL,
        `username` VARCHAR(255),
        `created_at` TIMESTAMP,
        PRIMARY KEY(`id`),
        UNIQUE INDEX(`email`)
        );
