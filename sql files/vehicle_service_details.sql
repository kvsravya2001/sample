use test;
create table driver_details(
    Truck_Id varchar(50) NOT NULL,
    Truck_Model varchar(55) NOT NULL,
    Driver_Id varchar(50) NOT NULL,
    Inspection_Result varchar(50) NOT NULL,
    Mintainance_Result varchar(50) NOT NULL,
    Service_Type varchar(50) NOT NULL,
    FOREIGN KEY(Driver_Id) REFERENCES driver_details(driver_id),
    FOREIGN KEY(Truck_Id) REFERENCES vehicle_details(manufacture_id)
)