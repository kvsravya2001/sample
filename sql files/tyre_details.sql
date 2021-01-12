use test;
create table tyre_details(
    tyre_id varchar(55) NOT NULL,
    tyre_status varchar(50) NOT NULL,
    odometer int(50)  NOT NULL,
    distance int(50)  NOT NULL,
    cost int(50)  NOT NULL,
    PRIMARY KEY(tyre_id)
)