CREATE DATABASE Ecole;
use ecole;
CREATE TABLE if not exists ecole.EducationLevel(
	educationLevelId INT NOT NULL AUTO_INCREMENT,
    educationLevel VARCHAR(20) NOT NULL,
    CONSTRAINT PRIMARY KEY (educationLevelId)
);

CREATE TABLE ecole.Student(
	studentId INT NOT NULL AUTO_INCREMENT,
    studentName VARCHAR(20) NOT NULL,
    studentEmail VARCHAR(30) NOT NULL,
    studentPhone VARCHAR(20),
    studentEducationLevelId INT NOT NULL,
    CONSTRAINT PRIMARY KEY (studentId),
    CONSTRAINT fk_student_educationLevel FOREIGN KEY (studentEducationLevelId) 
    REFERENCES ecole.EducationLevel(educationLevelId) 
);

CREATE TABLE ecole.Course(
	courseId INT NOT NULL AUTO_INCREMENT,
    courseName VARCHAR(20) NOT NULL,
    courseDescription TEXT,
    CONSTRAINT PRIMARY KEY (courseId)
);

CREATE TABLE ecole.studentCourse(
	studentId INT NOT NULL,
    courseId INT NOT NULL,
    CONSTRAINT PRIMARY KEY(studentId, courseId),
	CONSTRAINT fk_sc_student FOREIGN KEY(studentId) REFERENCES ecole.Student(studentId),
    CONSTRAINT fk_sc_course FOREIGN KEY(courseId) REFERENCES ecole.Course(courseId)
);

