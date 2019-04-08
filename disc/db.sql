CREATE TABLE notificacao (
    id int NOT NULL AUTO_INCREMENT,
    user int,
    mensagem varchar(255),
    foto varchar(255),
    link varchar(255),
    public int,
    curtidas int,
    PRIMARY KEY(id)
)