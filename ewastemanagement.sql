create table transport
( employee_id varchar(12) NOT NULL,
  order_id varchar(20) NOT NULL,
  source varchar(1000),
  destination varchar(1000),
  transport_id varchar(20),
  Constraint transport_pk PRIMARY KEY(employee_id)
  );