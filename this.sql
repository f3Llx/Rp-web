CREATE DATABASE RoleplayZone;
CREATE TABLE RP_user (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username varchar(20) NOT NULL,
    usernameU varchar(20) NOT NULL,
    character1 varchar(20) NOT NULL,
    character2 varchar(20) NOT NULL,
    character3 varchar(20) NOT NULL,
    character3_img_url varchar(500) DEFAULT 'img/phoenix.png',
    character2_img_url varchar(500) DEFAULT 'img/phoenix.png',
    character1_img_url varchar(500) DEFAULT 'img/phoenix.png',
    email varchar(20) NOT NULL,
    password varchar(500) NOT NULL,
    username_color varchar(200) DEFAULT '#ffffff',
    usernameU_img_url varchar(500) DEFAULT 'img/phoenix.png'
    

);

CREATE TABLE RP_chat (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    background_img_url varchar(500) DEFAULT 'img/background.png',
    ChatName varchar(40) NOT NULL,
    ChatDescription varchar(255) NOT NULL,
);
CREATE TABLE RP_messages (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    userid int NOT NULL,
    chatid int NOT NULL,
    msg varchar(250) NOT NULL,
    msg_date DATE NOT NULL,
    FOREIGN KEY (userid) REFERENCES RP_user(id),
    FOREIGN KEY (chatid) REFERENCES RP_chat(id)
);
CREATE TABLE Allowed_USERS (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    userid int NOT NULL,
    chatid int NOT NULL,
    Allowed_USERS_id int not null

    FOREIGN KEY (userid) REFERENCES RP_user(id),
    FOREIGN KEY (chatid) REFERENCES RP_chat(id)
);