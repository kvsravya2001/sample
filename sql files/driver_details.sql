use test;
create table driver_details(
    driver_id varchar(50) NOT NULL,
    driver_name varchar(55) NOT NULL,
    Age varchar(50) NOT NULL,
    Years_of_Experience varchar(50) NOT NULL,
    Mobile_Number varchar(50) NOT NULL,
    vehicle_id varchar(50) NOT NULL,
    transfer_status varchar(10) NOT NULL,
    transfer_from varchar(10) NOT NULL,
    transfer_to varchar(10) NOT NULL,
    attendance_days int(10) NOT NULL,
    salary_expected bigint(100) NOT NULL,
    salary_received bigint(100) NOT NULL,
    PRIMARY KEY(driver_id),
    FOREIGN KEY(vehicle_id) REFERENCES vehicle_details(manufacture_id)
)