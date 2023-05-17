<?php
require_once "database.php";
$sql1="CREATE TABLE department(
    dept_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    dept_name VARCHAR(150) NOT NULL
)";
$conn->query($sql1);
$sql2="CREATE TABLE session(
    session_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    session_n VARCHAR(15) NOT NULL
)";
$conn->query($sql2);
$sql3="CREATE TABLE teacher(
    tch_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(20) NOT NULL UNIQUE,
    pass VARCHAR(20) NOT NULL,
    tch_name VARCHAR(200) NOT NULL,
    tch_mobile VARCHAR(15) DEFAULT 'NOT AVAILABLE',
    tch_email VARCHAR(50) DEFAULT 'NOT AVAILABLE',
    tch_address VARCHAR(50) DEFAULT 'NOT AVAILABLE',
    dept_id INT(6) UNSIGNED NOT NULL,
    FOREIGN KEY(dept_id) REFERENCES department(dept_id)
)";
$conn->query($sql3);

$sql4="CREATE TABLE student(
    std_id  VARCHAR(20) PRIMARY KEY,
    pass VARCHAR(20) NOT NULL,
    std_name VARCHAR(200) NOT NULL,
    std_mobile VARCHAR(15) DEFAULT 'NOT AVAILABLE',
    std_email VARCHAR(50) DEFAULT 'NOT AVAILABLE',
    std_address VARCHAR(50) DEFAULT 'NOT AVAILABLE',
    dept_id INT(6) UNSIGNED NOT NULL,
    session_id INT(6) UNSIGNED NOT NULL,
    FOREIGN KEY(dept_id) REFERENCES department(dept_id),
    FOREIGN KEY(session_id) REFERENCES session(session_id)
)";
$conn->query($sql4);

$sql5="CREATE TABLE course(
    course_id  VARCHAR(20) PRIMARY KEY,
    course_tittle VARCHAR(200) NOT NULL,
    course_credit DOUBLE NOT NULL,
    dept_id INT(6) UNSIGNED NOT NULL,
    FOREIGN KEY(dept_id) REFERENCES department(dept_id)
)";
$conn->query($sql5);

$sql6="CREATE TABLE course_offer(
    course_offer_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    semester VARCHAR(20) NOT NULL,
    course_id  VARCHAR(20) ,
    session_id INT(6) UNSIGNED,
    tch_id INT(6) UNSIGNED,
    FOREIGN KEY(course_id) REFERENCES course(course_id),
    FOREIGN KEY(session_id) REFERENCES session(session_id),
    FOREIGN KEY(tch_id) REFERENCES teacher(tch_id)
)";
$conn->query($sql6);
$sql7="CREATE TABLE course_reg(
    reg_status VARCHAR(20) NOT NULL DEFAULT 'PANDING',
    gpa DOUBLE,
    std_id  VARCHAR(20),
    course_offer_id INT(10) UNSIGNED,
    FOREIGN KEY(std_id) REFERENCES student(std_id),
    FOREIGN KEY(course_offer_id) REFERENCES course_offer(course_offer_id)
)";
$conn->query($sql7);

$sql8="CREATE TABLE employe(
    emly_id  VARCHAR(20) PRIMARY KEY,
    username VARCHAR(20) NOT NULL UNIQUE,
    pass VARCHAR(20) NOT NULL,
    emly_name VARCHAR(200) NOT NULL,
    emly_mobile VARCHAR(15) DEFAULT 'NOT AVAILABLE',
    emly_email VARCHAR(50) DEFAULT 'NOT AVAILABLE',
    emly_address VARCHAR(50) DEFAULT 'NOT AVAILABLE',
    emly_permission VARCHAR(50)
)";
$conn->query($sql8);

$sql9="CREATE TABLE notice(
    notice_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    notice_tittle VARCHAR(200) NOT NULL,
    notice_des VARCHAR(1000) ,
    pic_address VARCHAR(200)
)";
$conn->query($sql9);

    echo "hi";

?>