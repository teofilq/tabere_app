CREATE TABLE users (
    user_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(60),
    last_name VARCHAR(60),
    username VARCHAR(60),
    role ENUM('limited', 'volunteer', 'admin') NOT NULL DEFAULT 'limited',
    password VARCHAR(255),
    email VARCHAR(60) NOT NULL,
    email_verified BOOLEAN NOT NULL DEFAULT FALSE,
    phone VARCHAR(60),
    phone_verified BOOLEAN NOT NULL DEFAULT FALSE,
    address VARCHAR(255),
    birth_date DATE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    image_path VARCHAR(255),
    additional_info TEXT
);

CREATE TABLE volunteer_profiles (
    volunteer_profile_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    status ENUM('pending', 'accepted', 'rejected') NOT NULL DEFAULT 'pending',
    experience TEXT,
    motivation TEXT,
    education VARCHAR(255),
    medical_issues TEXT,
    languages_spoken VARCHAR(255),
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

CREATE TABLE camps (
    camp_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    camp_name VARCHAR(255),
    location VARCHAR(255),
    description TEXT,
    created_date DATE,
    start_date DATE,
    end_date DATE,
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

CREATE TABLE camp_registrations (
    registration_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    camp_id INT NOT NULL,
    user_id INT NOT NULL,
    registration_status ENUM('pending', 'accepted', 'rejected') NOT NULL DEFAULT 'pending',
    registration_date DATETIME,
    FOREIGN KEY (camp_id) REFERENCES camps(camp_id),
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

CREATE TABLE sessions (
    session_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    session_token VARCHAR(255) NOT NULL,
    start_timestamp TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    end_timestamp TIMESTAMP,
    user_ip VARCHAR(60),
    user_agent VARCHAR(500),
    referer VARCHAR(500),
    description VARCHAR(500),
    secure_session BOOLEAN,
    closure_reason VARCHAR(255),
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

CREATE TABLE chat_messages (
    message_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    registration_id INT NOT NULL,
    message TEXT NOT NULL,
    timestamp DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (registration_id) REFERENCES camp_registrations(registration_id)
);