-- CREATE DATABASE team16
Use team16; 

-- (1) weathercondition - 날씨 상태 분류
CREATE TABLE weathercondition (
    condition_id INT AUTO_INCREMENT PRIMARY KEY,
    condition_name VARCHAR(50) NOT NULL,
    temp_range VARCHAR(50),
    precipitation_level VARCHAR(50),
    UNIQUE KEY unique_weather_combo (condition_name, temp_range, precipitation_level)
);

-- (2) admins - 관리자 정보 기록 
CREATE TABLE admins (
    admin_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password_hash VARCHAR(255) NOT NULL
);

-- (3) weather - 날씨 기록
CREATE TABLE weather (
    weather_id INT AUTO_INCREMENT PRIMARY KEY,
    record_date DATE UNIQUE NOT NULL,
    temp_max DECIMAL(5,2),
    temp_min DECIMAL(5,2),
    temp_avg DECIMAL(5,2),
    precipitation DECIMAL(5,2),
    snow DECIMAL(5,2),
    snow_depth DECIMAL(5,2),
    weather_condition_id INT NOT NULL,
    FOREIGN KEY (weather_condition_id) REFERENCES weathercondition(condition_id)
);

-- (4) data_logs - 데이터 관리 로그 기록
CREATE TABLE data_logs (
    log_id INT AUTO_INCREMENT PRIMARY KEY,
    admin_id INT NOT NULL,
    action_type VARCHAR(20) NOT NULL,
    target_table VARCHAR(50) NOT NULL,
    target_id BIGINT,
    action_timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (admin_id) REFERENCES admins(admin_id)
);