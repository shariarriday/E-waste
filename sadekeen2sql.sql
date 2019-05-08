
CREATE SEQUENCE BUSINESS_SEQ
INCREMENT BY 10
START WITH 1000000
MAXVALUE 999999999
CACHE 100
NOCYCLE
NOORDER;


CREATE OR REPLACE TRIGGER BUSINESS_INSERT
  BEFORE INSERT ON BUSINESS
  FOR EACH ROW
BEGIN
  SELECT BUSINESS_SEQ.nextval
  INTO :new.PROVIDER_ID
  FROM dual;
END;


CREATE SEQUENCE ORDER_SEQ
INCREMENT BY 2
START WITH 100000
MAXVALUE 99999999
CACHE 100
NOCYCLE
NOORDER;


CREATE OR REPLACE TRIGGER ORDER_INSERT
  BEFORE INSERT ON ORDER_PROVIDER
  FOR EACH ROW
BEGIN
  SELECT ORDER_SEQ.nextval
  INTO :new.ORDER_ID
  FROM dual;
END;


CREATE SEQUENCE MANUFACTURER_SEQ
INCREMENT BY 1
START WITH 1000
MAXVALUE 999999
CACHE 100
NOCYCLE
NOORDER;


CREATE OR REPLACE TRIGGER MANUFACTURER_INSERT
  BEFORE INSERT ON MANUFACTURER
  FOR EACH ROW
BEGIN
  SELECT MANUFACTURER_SEQ.nextval
  INTO :new.PROVIDER_ID
  FROM dual;
END;


CREATE SEQUENCE MANUFACTURER_SEQ
INCREMENT BY 1
START WITH 1000
MAXVALUE 999999
CACHE 100
NOCYCLE
NOORDER;


CREATE OR REPLACE TRIGGER MANUFACTURER_INSERT
  BEFORE INSERT ON MANUFACTURER
  FOR EACH ROW
BEGIN
  SELECT MANUFACTURER_SEQ.nextval
  INTO :new.PROVIDER_ID
  FROM dual;
END;


CREATE SEQUENCE PERSONAL_SEQ
INCREMENT BY 3
START WITH 10001
MAXVALUE 999999
CACHE 100
NOCYCLE
NOORDER;


CREATE OR REPLACE TRIGGER PERSONAL_INSERT
  BEFORE INSERT ON PERSONAL
  FOR EACH ROW
BEGIN
  SELECT 
  PERSONAL_SEQ.nextval
  INTO :new.BUYER_ID
  FROM dual;
END;

CREATE SEQUENCE Processor_SEQ
INCREMENT BY 3
START WITH 10001
MAXVALUE 999999
CACHE 100
NOCYCLE
NOORDER;


CREATE OR REPLACE TRIGGER Processor_INSERT
  BEFORE INSERT ON processor
  FOR EACH ROW
BEGIN
  SELECT 
  Processor_SEQ.nextval
  INTO :new.processor_ID
  FROM dual;
END;





CREATE SEQUENCE STATION_ID_SEQ
INCREMENT BY 10
START WITH 1
MAXVALUE 1000000
CACHE 100
NOCYCLE;

CREATE OR REPLACE TRIGGER DUMP_ON_INSERT
  BEFORE INSERT ON DUMP
  FOR EACH ROW
BEGIN
  SELECT STATION_ID_SEQ.nextval
  INTO :new.STATION_ID
  FROM dual;
END;


CREATE SEQUENCE RAW_MATERIAL_SEQ
INCREMENT BY 10
START WITH 30
MAXVALUE 1000000
CACHE 100
NOCYCLE;

CREATE OR REPLACE TRIGGER RAW_MATERIAL_INSERT
  BEFORE INSERT ON RAW_MATERIAL
  FOR EACH ROW
BEGIN
  SELECT RAW_MATERIAL_SEQ.nextval
  INTO :new.LOT_ID
  FROM dual;
END;


CREATE SEQUENCE SELL_ORDER_SEQ
INCREMENT BY 1
START WITH 40
MAXVALUE 1000000
CACHE 100
NOCYCLE;

CREATE OR REPLACE TRIGGER SELL_ORDER_INSERT
  BEFORE INSERT ON SELL_ORDER
  FOR EACH ROW
BEGIN
  SELECT SELL_ORDER_SEQ.nextval
  INTO :new.SELLER_ID
  FROM dual;
END;



INSERT INTO BUSSINESS_PROVIDES VALUES('1000000','101ABC');
INSERT INTO BUSSINESS_PROVIDES VALUES('1000010','102ABC');
INSERT INTO BUSSINESS_PROVIDES VALUES('1000020','103ABC');
INSERT INTO BUSSINESS_PROVIDES VALUES('1000030','104ABC');
INSERT INTO BUSSINESS_PROVIDES VALUES('1000040','105ABC');
INSERT INTO BUSSINESS_PROVIDES VALUES('1000050','106ABC');
INSERT INTO BUSSINESS_PROVIDES VALUES('1000060','107ABC');
INSERT INTO BUSSINESS_PROVIDES VALUES('1000070','108ABC');
INSERT INTO BUSSINESS_PROVIDES VALUES('1000080','109ABC');
INSERT INTO BUSSINESS_PROVIDES VALUES('1000090','110ABC');



INSERT INTO MANUFACTURER VALUES('1000000','ZAK','ZEXBAY','GULISTAN','ALIEXPRESS','UGANDA');
INSERT INTO BUSSINESS_PROVIDES VALUES('1000010','100002');
INSERT INTO BUSSINESS_PROVIDES VALUES('1000020','100004');
INSERT INTO BUSSINESS_PROVIDES VALUES('1000030','100006');
INSERT INTO BUSSINESS_PROVIDES VALUES('1000040','100008');
INSERT INTO BUSSINESS_PROVIDES VALUES('1000050','100010');




INSERT INTO PERSONAL VALUES('','20','BKASH','ZUB@KYO.COM','017688987','10000');
INSERT INTO PERSONAL VALUES('','20','CASH','ZUB1@KYO.COM','017688981','20000');
INSERT INTO PERSONAL VALUES('','20','BKASH','ZUB2@KYO.COM','017688982','30000');
INSERT INTO PERSONAL VALUES('','20','CASH','ZUB3@KYO.COM','017688983','40000');
INSERT INTO PERSONAL VALUES('','20','CASH','ZUB4@KYO.COM','017688984','50000');
INSERT INTO PERSONAL VALUES('','20','CASH','ZUB5@KYO.COM','017688985','60000');
INSERT INTO PERSONAL VALUES('','20','CASH','ZUB6@KYO.COM','017688986','70000');
INSERT INTO PERSONAL VALUES('','20','BKASH','ZUB7@KYO.COM','017688977','80000');
INSERT INTO PERSONAL VALUES('','20','BKASH','ZUB8@KYO.COM','017688988','90000');
INSERT INTO PERSONAL VALUES('','20','BKASH','ZUB9@KYO.COM','017688989','110000');


INSERT INTO RAW_MATERIAL VALUES('',15,12,11,12,13,13,13,13);
INSERT INTO RAW_MATERIAL VALUES('',15,13,15,12,83,13,12,11);
INSERT INTO RAW_MATERIAL VALUES('',15,12,21,29,13,83,63,14);
INSERT INTO RAW_MATERIAL VALUES('',15,32,11,12,13,13,33,13);
INSERT INTO RAW_MATERIAL VALUES('',85,52,11,12,43,23,13,13);
INSERT INTO RAW_MATERIAL VALUES('',95,62,11,52,13,13,93,13);
INSERT INTO RAW_MATERIAL VALUES('',75,32,11,82,13,13,13,13);
INSERT INTO RAW_MATERIAL VALUES('',17,62,11,12,13,13,83,13);
INSERT INTO RAW_MATERIAL VALUES('',55,72,41,12,83,13,63,73);
INSERT INTO RAW_MATERIAL VALUES('',25,32,14,52,46,33,93,22);




INSERT INTO RAW_MATERIAL_SELLING VALUES('30','');
INSERT INTO RAW_MATERIAL_SELLING VALUES('40','');
INSERT INTO RAW_MATERIAL_SELLING VALUES('50','');
INSERT INTO RAW_MATERIAL_SELLING VALUES('60','');
INSERT INTO RAW_MATERIAL_SELLING VALUES('70','');
INSERT INTO RAW_MATERIAL_SELLING VALUES('80','');
INSERT INTO RAW_MATERIAL_SELLING VALUES('90','');
INSERT INTO RAW_MATERIAL_SELLING VALUES('100','');
INSERT INTO RAW_MATERIAL_SELLING VALUES('110','');
INSERT INTO RAW_MATERIAL_SELLING VALUES('120','');

INSERT INTO SELL_ORDER VALUES('',500,'LALBAG');
INSERT INTO SELL_ORDER VALUES('',200,'LALBAG1');
INSERT INTO SELL_ORDER VALUES('',500,'LALBAG2');
INSERT INTO SELL_ORDER VALUES('',900,'LALBAG4');
INSERT INTO SELL_ORDER VALUES('',800,'LALBAG5');
INSERT INTO SELL_ORDER VALUES('',600,'LALBAG7');
INSERT INTO SELL_ORDER VALUES('',700,'LALBAG8');
INSERT INTO SELL_ORDER VALUES('',300,'LALBAG9');
INSERT INTO SELL_ORDER VALUES('',500,'LALBAG00');
INSERT INTO SELL_ORDER VALUES('',900,'LALBAG00');



INSERT INTO RAW_MATERIAL_SELLING VALUES('30','40');
INSERT INTO RAW_MATERIAL_SELLING VALUES('40','41');
INSERT INTO RAW_MATERIAL_SELLING VALUES('50','42');
INSERT INTO RAW_MATERIAL_SELLING VALUES('60','43');
INSERT INTO RAW_MATERIAL_SELLING VALUES('70','44');
INSERT INTO RAW_MATERIAL_SELLING VALUES('80','45');
INSERT INTO RAW_MATERIAL_SELLING VALUES('90','46');
INSERT INTO RAW_MATERIAL_SELLING VALUES('100','47');
INSERT INTO RAW_MATERIAL_SELLING VALUES('110','48');
INSERT INTO RAW_MATERIAL_SELLING VALUES('120','49');

1.
CREATE OR REPLACE VIEW RAW_MAT_BY_RECYCLER
AS 
SELECT * FROM RAW_MATERIAL;

2.
CREATE OR REPLACE VIEW FIXED_PRODUCTS
AS
SELECT * FROM PRODUCT 
WHERE
REFURBISHER JOIN MAKES USING (INVENTORY_ID)
JOIN PRODUCT USING (PRODUCT_ID)
WHERE REPAIR=UPPRER('REPAIRABLE');// REPAIR IS REPAIR STATUS

3.
--> Show total money earned by recycler. (view)

CREATE OR REPLACE VIEW EARNED_RECYLER
AS
SELECT 



4.Show total money earned by recycler. (view)
5.Show total money earned by refurbisher. (view)
6.Show sale orders and buyer info for the recycler. (view)
7.Add an insert for repair_cost of all the items taken from inventory.
8.Add an insert for adding products with sequence for primary key.
9.Add an insert for adding raw materials with sequence for primary key.
10.Add sequence to processor ID generation.For reference check Riday_project_sql.
11.Add trigger for updating profit for recycler when item is sold.
12.Add trigger for updating profit for refurbisher when item is sold.



