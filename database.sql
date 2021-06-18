CREATE TABLE artist (
    artist_id SMALLINT(5) NOT NULL AUTO_INCREMENT,
    artist_name CHAR(128) NOT NULL,
    PRIMARY KEY(artist_id)
);
CREATE TABLE album (
    album_id int(4) NOT NULL AUTO_INCREMENT,
    album_name CHAR(128) NOT NULL,
    artist_id SMALLINT(5) NOT NULL,
    PRIMARY KEY(album_id),
    FOREIGN KEY (artist_id) REFERENCES artist(artist_id) ON UPDATE CASCADE ON DELETE RESTRICT
);
CREATE TABLE track (
    track_id SMALLINT(5) NOT NULL AUTO_INCREMENT,
    track_name CHAR(128) NOT NULL,
    artist_id SMALLINT(5) NOT NULL,
    album_id int(4) NOT NULL,
    time DECIMAL(5,2) NOT NULL,
    PRIMARY KEY (track_id),
    FOREIGN KEY (artist_id) REFERENCES artist(artist_id),
    FOREIGN KEY (album_id) REFERENCES album(album_id)
);
CREATE TABLE played (
    artist_id SMALLINT(5) NOT NULL,
    album_id int(4) NOT NULL,
    track_id SMALLINT(5) NOT NULL,
    played TIMESTAMP NOT NULL,
    FOREIGN KEY (artist_id) REFERENCES artist(artist_id) ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY (album_id) REFERENCES album(album_id) ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY (track_id) REFERENCES track(track_id) ON UPDATE CASCADE ON DELETE RESTRICT
);
CREATE TABLE tb_user (
	user_id INT(11) NOT NULL AUTO_INCREMENT,
	user_name VARCHAR(50) NOT NULL,
	user_password VARCHAR(256) NOT NULL,
	PRIMARY KEY(user_id),
	UNIQUE KEY(user_name)
	);
