CREATE TABLE IF NOT EXISTS users(
    `user_id` INT(11) NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(255) NOT NULL UNIQUE,
    `email` VARCHAR(255) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL,
    `reg_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`users_id`)
)

CREATE TABLE IF NOT EXISTS addresses(
    `address_id` INT(11) NOT NULL AUTO_INCREMENT,
    `street_name` VARCHAR(255) NOT NULL,
    `barangay` VARCHAR(255) NOT NULL,
    `city` VARCHAR(255) NOT NULL,
    `province` VARCHAR(255) NOT NULL,
    `postal_code` INT(11) NOT NULL,
    `users_id` INT(11) NOT NULL,
    PRIMARY KEY (`address_id`),
    FOREIGN KEY (`users_id`) REFERENCES users (`users_id`) ON DELETE CASCADE
)