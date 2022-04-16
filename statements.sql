CREATE DATABASE meerjaren;
USE meerjaren;

CREATE TABLE vakken(
    vak_code INT NOT NULL AUTO_INCREMENT,
    vak_naam VARCHAR(255) NOT null,
    PRIMARY KEY (vak_code)
);
CREATE TABLE gewenste(
    vak_code INT NOT NULL,
    uren VARCHAR(255) NOT null,
    FOREIGN KEY (vak_code) REFERENCES vakken(vak_code)
);
CREATE TABLE periode(
    periode INT NOT NULL,
    PRIMARY KEY (periode)
);

