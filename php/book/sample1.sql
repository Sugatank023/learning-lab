DROP DATABASE IF EXISTS school;
CREAT DATABASE school;
USE school;
CREATE TABLE student(
    id      INT PRIMARY KEY,
    name    VARCHAR(128),
    grade   INT
);

INSERT INTO student(id, name,grade) VALUE(1001, '山田太郎',1);
INSERT INTO student(id, name,grade) VALUE(1002, '児玉雄太',1);
INSERT INTO student(id, name,grade) VALUE(1003, '太田隆',2);
INSERT INTO student(id, name,grade) VALUE(1004, '佐藤元',2);
INSERT INTO student(id, name,grade) VALUE(1005, '林敦子',3);
INSERT INTO student(id, name,grade) VALUE(1006, '市村次郎',3);


SELECT * FROM school.student;
