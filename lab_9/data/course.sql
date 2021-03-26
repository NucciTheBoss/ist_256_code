/* Group 1 Enrollment Database */
-- Initialize database
DROP DATABASE IF EXISTS enrollment;
CREATE DATABASE enrollment;

-- Use new database
USE enrollment;

-- Create tables
DROP TABLE IF EXISTS COLLEGE;
CREATE TABLE COLLEGE (
    CollegeName VARCHAR(128)    NOT NULL    PRIMARY KEY,
    Building    VARCHAR(128)    NOT NULL
);

DROP TABLE IF EXISTS STUDENT;
CREATE TABLE STUDENT (
    StudentID   int             NOT NULL    PRIMARY KEY AUTO_INCREMENT,
    Name        VARCHAR(128)    NOT NULL,
    Email       VARCHAR(64)     NULL        UNIQUE,
    College     VARCHAR(128)    NOT NULL,

    -- Define constraints
    CONSTRAINT      foreign key (College)
                       references COLLEGE(CollegeName)
                            ON UPDATE CASCADE
                            ON DELETE NO ACTION
);

DROP TABLE IF EXISTS COURSES;
CREATE TABLE COURSES (
    CourseID    int             NOT NULL    PRIMARY KEY AUTO_INCREMENT,
    CourseName  VARCHAR(64)     NOT NULL    UNIQUE,
    Instructor  VARCHAR(128)    NOT NULL,
    College     VARCHAR(128)    NOT NULL,

    -- Define constraints
    CONSTRAINT      foreign key (College)
                       references COLLEGE(CollegeName)
                            ON UPDATE CASCADE
                            ON DELETE NO ACTION
);

-- Populate tables
INSERT INTO COLLEGE (CollegeName, Building) VALUES ('College of IST', 'Westgate');
INSERT INTO COLLEGE (CollegeName, Building) VALUES ('College of Engineering', 'Hammond');
INSERT INTO COLLEGE (CollegeName, Building) VALUES ('Eberly College of Science', 'Osmond');

INSERT INTO STUDENT (Name, Email, College) VALUES ('Taryn Campion', 'tac5596@psu.edu', 'College of IST');
INSERT INTO STUDENT (Name, Email, College) VALUES ('Jason Nucciarone', 'jcn23@psu.edu', 'College of IST');
INSERT INTO STUDENT (Name, Email, College) VALUES ('Damian Pfaff', 'drp5387@psu.edu', 'College of IST');
INSERT INTO STUDENT (Name, Email, College) VALUES ('Nadya Sudarma', 'nqs5482@psu.edu', 'College of IST');
INSERT INTO STUDENT (Name, Email, College) VALUES ('Varalika Ananth', 'vka5076@psu.edu', 'College of IST');

INSERT INTO COURSES (CourseName, Instructor, College) VALUES ('HCDD113', 'Stephen Haynes', 'College of IST');
INSERT INTO COURSES (CourseName, Instructor, College) VALUES ('IST256', 'Joseph Meyer', 'College of IST');
INSERT INTO COURSES (CourseName, Instructor, College) VALUES ('DS220', 'Xiang Zhang', 'Eberly College of Science');
INSERT INTO COURSES (CourseName, Instructor, College) VALUES ('HCDD264', 'Stephen Haynes', 'College of IST');
INSERT INTO COURSES (CourseName, Instructor, College) VALUES ('CMPEN270', 'Ben Oren', 'College of Engineering');
