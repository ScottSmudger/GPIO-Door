-- By Jazmine Hughes
-- Group Project Design/Implemention (Group 11)

-- CREATE USER TABLE 
CREATE TABLE USERS
(USER_ID CHAR(7) PRIMARY KEY, 
FIRST_NAME VARCHAR(25), 
LAST_NAME VARCHAR(25), 
HOUSE_NO_NAME VARCHAR(25), 
STREET VARCHAR(25), 
TOWN_CITY VARCHAR(25), 
POSTCODE CHAR(7));

-- CREATE DEVICES TABLE
CREATE TABLE DEVICES 
(STATE_ID CHAR(7) PRIMARY KEY,
USER_ID CHAR(7) REFERENCES USERS (USER_ID),
STATE BOOLEAN,
DATE_TIME DATE, 
APPLIANCE VARCHAR(25));

-- CREATE GUARDIAN_CONTACT_DETAILS TABLE
CREATE TABLE GUARDIAN_CONTACT_DETAILS
(CONTACT_ID CHAR(7) PRIMARY KEY,
USER_ID CHAR(7) REFERENCES USERS (USER_ID),
FIRST_NAME VARCHAR(25), 
LAST_NAME VARCHAR(25),
EMAIL VARCHAR(25),
PHONE CHAR(12));

-- CREATE LOGON_DETAILS TABLE
CREATE TABLE LOGON_DETAILS
(LOGON_ID CHAR(7) PRIMARY KEY, 
USER_ID CHAR(7) REFERENCES USERS (USER_ID),
USERNAME VARCHAR(15),
PASSWORD VARCHAR(15));
