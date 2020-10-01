CREATE TABLE tb_presentacion (

    id_presentacion         INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    presentacion      VARCHAR (256) NULL,



    extra1                    VARCHAR (500) NULL,
    extra2                    VARCHAR (500) NULL,
    extra3                    VARCHAR (500) NULL,
    user_creacion             VARCHAR (500) NULL,
    user_actualizacion        VARCHAR (500) NULL,
    user_eliminacion          VARCHAR (500) NULL,
    fyh_creacion              DATETIME NULL,
    fyh_actualizacion         DATETIME NULL,
    fyh_eliminacion           DATETIME NULL,
    estado                    VARCHAR (10) NULL

);