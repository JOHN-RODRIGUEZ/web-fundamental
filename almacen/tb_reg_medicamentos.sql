CREATE TABLE tb_reg_medicamentos (

    id_medicamento            INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    codigo                    VARCHAR (256) NULL,
    nombre_comercial          VARCHAR (256) NULL,
    nombre_generico           VARCHAR (256) NULL,
    laboratorio               VARCHAR (256) NULL,
    presentacion              VARCHAR (256) NULL,
    cantidad_cajas            VARCHAR (256) NULL,
    cantidad_unidades         VARCHAR (256) NULL,
    cantidad_total                 VARCHAR (256) NULL,

    precio_real_caja          VARCHAR (256) NULL,
    precio_real_unitario      VARCHAR (256) NULL,
    precio_real_total          VARCHAR (256) NULL,

    precio_venta_caja         VARCHAR (256) NULL,
    precio_venta_unitario     VARCHAR (256) NULL,
    precio_venta_total        VARCHAR (256) NULL,

    accion_para_que_sirve     VARCHAR (256) NULL,
    fecha_entrega_medicamento VARCHAR (256) NULL,
    fecha_vencimineto         VARCHAR (256) NULL,
    stock_maximo_cajas        VARCHAR (256) NULL,
    stock_maximo_unidades     VARCHAR (256) NULL,
    stock_minimo_cajas        VARCHAR (256) NULL,
    stock_minimo_unidades     VARCHAR (256) NULL,



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