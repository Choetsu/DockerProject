CREATE TABLE utilisateur (
    id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    prenom VARCHAR(250) NOT NULL,
    nom VARCHAR(250) NOT NULL,
    email VARCHAR(250) NOT NULL,
    passwrd VARCHAR(250) NOT NULL
);

INSERT INTO utilisateur (prenom, nom, email, passwrd) 
    VALUES 
        ('moi', 'moi', 'moi@gmail.com', '12345'),
        ('toi', 'toi', 'toi@gmail.com', '1234'),
        ('lui', 'lui', 'lui@gmail.com', '123');