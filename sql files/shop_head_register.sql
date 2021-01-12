use test;
create table shop_head_register(
    email varchar(50) NOT NULL,
    main_password varchar(50) NOT NULL,
    confirm_password varchar(50) NOT NULL,
    PRIMARY KEY(email)
)