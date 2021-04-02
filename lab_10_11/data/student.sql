/* Group 1 Lab 10 and 11 Database */
-- Create new database if it doesn't exist
DROP DATABASE IF EXISTS STUDENT;
CREATE DATABASE STUDENT;
USE STUDENT;

-- Create department table
DROP TABLE IF EXISTS DEPARTMENT;
CREATE TABLE DEPARTMENT (
    DepartmentName  VARCHAR(128)    PRIMARY KEY
);

-- Create academicyear table
DROP TABLE IF EXISTS ACADEMICYEAR;
CREATE TABLE ACADEMICYEAR (
    AcademicYear    VARCHAR(32)     PRIMARY KEY
);

-- Create new students table
DROP TABLE IF EXISTS STUDENTS;
CREATE TABLE STUDENTS (
    StudentID       INTEGER         PRIMARY KEY AUTO_INCREMENT NOT NULL,
    FirstName       VARCHAR(128)    NOT NULL,
    LastName        VARCHAR(128)    NOT NULL,
    Email           VARCHAR(128)    NOT NULL UNIQUE,
    Department      VARCHAR(128)    NOT NULL,
    AcademicYear    VARCHAR(32)     NOT NULL,

    -- Define foreign keys
    CONSTRAINT      FOREIGN KEY (Department)
                      REFERENCES DEPARTMENT(DepartmentName)
                        ON UPDATE CASCADE
                        ON DELETE NO ACTION,

    CONSTRAINT      FOREIGN KEY (AcademicYear)
                      REFERENCES ACADEMICYEAR(AcademicYear)
                        ON UPDATE CASCADE
                        ON DELETE NO ACTION
);

-- Populate department table with set values
INSERT INTO DEPARTMENT (DepartmentName) VALUE ('Agricultural Sciences');
INSERT INTO DEPARTMENT (DepartmentName) VALUE ('Arts and Architecture');
INSERT INTO DEPARTMENT (DepartmentName) VALUE ('Smeal College of Business');
INSERT INTO DEPARTMENT (DepartmentName) VALUE ('Donald P. Bellisario College of Communications');
INSERT INTO DEPARTMENT (DepartmentName) VALUE ('Earth and Mineral Sciences');
INSERT INTO DEPARTMENT (DepartmentName) VALUE ('Education');
INSERT INTO DEPARTMENT (DepartmentName) VALUE ('Engineering');
INSERT INTO DEPARTMENT (DepartmentName) VALUE ('Health and Human Development');
INSERT INTO DEPARTMENT (DepartmentName) VALUE ('Information Sciences and Technology');
INSERT INTO DEPARTMENT (DepartmentName) VALUE ('School of International Affairs');
INSERT INTO DEPARTMENT (DepartmentName) VALUE ('Dickinson Law');
INSERT INTO DEPARTMENT (DepartmentName) VALUE ('Penn State Law');
INSERT INTO DEPARTMENT (DepartmentName) VALUE ('Liberal Arts');
INSERT INTO DEPARTMENT (DepartmentName) VALUE ('Medicine');
INSERT INTO DEPARTMENT (DepartmentName) VALUE ('Nursing');
INSERT INTO DEPARTMENT (DepartmentName) VALUE ('Eberly College of Science');
INSERT INTO DEPARTMENT (DepartmentName) VALUE ('Schreyer Honors College');
INSERT INTO DEPARTMENT (DepartmentName) VALUE ('Division of Undergraduate Studies');

-- Populate academicyear table with set values
INSERT INTO ACADEMICYEAR (AcademicYear) VALUE ('Freshman');
INSERT INTO ACADEMICYEAR (AcademicYear) VALUE ('Sophomore');
INSERT INTO ACADEMICYEAR (AcademicYear) VALUE ('Junior');
INSERT INTO ACADEMICYEAR (AcademicYear) VALUE ('Senior');
INSERT INTO ACADEMICYEAR (AcademicYear) VALUE ('Graduate');
INSERT INTO ACADEMICYEAR (AcademicYear) VALUE ('PhD');

-- Populate student table with initial values
INSERT INTO STUDENTS (FirstName, LastName, Email, Department, AcademicYear) VALUES
    ('Taryn', 'Campion', 'tac5596@psu.edu', 'Information Sciences and Technology', 'Junior');
INSERT INTO STUDENTS (FirstName, LastName, Email, Department, AcademicYear) VALUES
    ('Jason', 'Nucciarone', 'jcn23@psu.edu', 'Information Sciences and Technology', 'Junior');
INSERT INTO STUDENTS (FirstName, LastName, Email, Department, AcademicYear) VALUES
    ('Damian', 'Pfaff', 'drp5387@psu.edu', 'Information Sciences and Technology', 'Junior');
INSERT INTO STUDENTS (FirstName, LastName, Email, Department, AcademicYear) VALUES
    ('Varalika', 'Ananth', 'vka5076@psu.edu', 'Information Sciences and Technology', 'Sophomore');
INSERT INTO STUDENTS (FirstName, LastName, Email, Department, AcademicYear) VALUES
    ('Nadya', 'Sudarma', 'nqs5482@psu.edu', 'Information Sciences and Technology', 'Sophomore');
