CREATE TABLE tb_usuarios (

    id                        INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    nombres                   VARCHAR (200) NULL,
    apellido_p                 VARCHAR (200) NULL,
    apellido_m                 VARCHAR (200) NULL,
    ci                        VARCHAR (20) NULL,
    fecha_nacimiento          VARCHAR (200) NULL,
    celular                   VARCHAR (200) NULL,
    foto_perfil               TEXT NULL,
    sexo                      VARCHAR (200) NULL,
    email                     VARCHAR (200) NULL,
    password                  VARCHAR (20) NULL,
    token                     VARCHAR (200) NULL,
    cargo                     VARCHAR (200) NULL,
    extra1                    VARCHAR (500) NULL,
    extra2                    VARCHAR (500) NULL,
    extra3                    VARCHAR (500) NULL,
    user_creacion             VARCHAR (500) NULL,
    user_actualizacion        VARCHAR (500) NULL,
    user_eliminacion          VARCHAR (500) NULL,
    fyh_creacion              DATETIME NULL,
    fyh_actualizacion         DATETIME NULL,
    fyh_eliminacion           DATETIME NULL,
    estado                    VARCHAR (255) NULL

);
INSERT INTO `tb_usuarios` (`id`, `nombres`, `apellido_p`, `apellido_m`, `ci`, `fecha_nacimiento`, `celular`, `foto_perfil`, `sexo`, `email`, `password`, `token`, `cargo`, `extra1`, `extra2`, `extra3`, `user_creacion`, `user_actualizacion`, `user_eliminacion`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES (NULL, 'john', 'rodriguez', 'gutierrez', '7379932', '27/07/1997', '68315548', 'john.jpg', 'masculino', 'john45460colmil@gmail.com', '123456', NULL, 'administrador', NULL, NULL, NULL, 'john rodriguez', NULL, NULL, '2020-08-30 16:13:05', NULL, NULL, '1');