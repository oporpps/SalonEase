CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    date DATE NOT NULL,
    start_time TIME NOT NULL,
    finish_time TIME NOT NULL,
    nametc VARCHAR(50) NOT NULL,
    service VARCHAR(50) NOT NULL,
    status ENUM('pending', 'progress', 'finish') DEFAULT 'pending',
    price DECIMAL(10,2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=INNODB AUTO_INCREMENT=10000 DEFAULT CHARSET=utf8;


CREATE TABLE admin (
    admin_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE tc (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nametc VARCHAR(50) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE service (
    id INT AUTO_INCREMENT PRIMARY KEY,
    service VARCHAR(50) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE money (
    id INT AUTO_INCREMENT PRIMARY KEY,
    date DATE NOT NULL,
    start_time TIME NOT NULL,
    price DECIMAL(10,2) NOT NULL, 
    nametc VARCHAR(50) NOT NULL,
    service VARCHAR(50) NOT NULL,
    time VARCHAR(255) NOT NULL, 
    pay ENUM('notpay', 'pay') DEFAULT 'notpay'
) ENGINE=INNODB DEFAULT CHARSET=utf8;



