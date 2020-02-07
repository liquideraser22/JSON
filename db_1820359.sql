CREATE DATABASE db_1820359;


CREATE TABLE `tbl_movies` (
	`mov_id` INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
	`mov_title` VARCHAR(100) NOT NULL DEFAULT '',
   	`mov_actor` VARCHAR(180) NOT NULL DEFAULT '',
	`mov_genre` VARCHAR(200) NOT NULL DEFAULT '',
	`mov_director` VARCHAR(180) NOT NULL DEFAULT '',
	PRIMARY KEY (`mov_id`)
)
COLLATE='latin1_swedish_ci'
ENGINE=MyISAM
AUTO_INCREMENT=10000
;

INSERT INTO tbl_movies(mov_title, mov_actor, mov_genre, mov_director) VALUES("Hunger Games", "Jennifer Lawrence", "Action/Fantasy", "Gary Ross");
INSERT INTO tbl_movies(mov_title, mov_actor, mov_genre, mov_director) VALUES("Twilight", "Kristen Stewart", "Drama", "Catherine Hardwicke");
INSERT INTO tbl_movies(mov_title, mov_actor, mov_genre, mov_director) VALUES("Spongebob", "Squarepants", " Cartoons", "Stephen Hillberg");
INSERT INTO tbl_movies(mov_title, mov_actor, mov_genre, mov_director) VALUES("Baywatch ", "Zac Efron", "Action Comedy", "Phum Vhipurit");
INSERT INTO tbl_movies(mov_title, mov_actor, mov_genre, mov_director) VALUES("The fast and the furious", "Vin Diesel", "Action", "Jeremy Lin");
INSERT INTO tbl_movies(mov_title, mov_actor, mov_genre, mov_director) VALUES("Charly and the chocolate factory ", "Johnie Depp", " Comedy", "Johnie Depp");
