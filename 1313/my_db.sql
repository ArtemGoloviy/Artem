CREATE TABLE `map` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255)
);

CREATE TABLE `mode` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `count_players` int,
  `Features_of_the_mode` varchar(255)
);

CREATE TABLE `player` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `rocket_pass` int,
  `nickname` varchar(255),
  `rank_title` varchar(255),
  `count_of_cars` int,
  `player_banner_title` varchar(255)
);

CREATE TABLE `game_search` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `player_id` int,
  `map_id` int,
  `car_id` int,
  `mode_id` int
);

CREATE TABLE `car` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `antenna` varchar(255),
  `goal_explosion` varchar(255),
  `body_title` varchar(255),
  `wheels_title` varchar(255),
  `picture_title` varchar(255)
);

CREATE TABLE `account` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `id_player` int,
  `steam_guard` varchar(255),
  `name` varchar(255),
  `age` int,
  `login` varchar(255),
  `password` varchar(255)
);

ALTER TABLE `game_search` ADD FOREIGN KEY (`player_id`) REFERENCES `player` (`id`);

ALTER TABLE `game_search` ADD FOREIGN KEY (`map_id`) REFERENCES `map` (`id`);

ALTER TABLE `game_search` ADD FOREIGN KEY (`car_id`) REFERENCES `car` (`id`);

ALTER TABLE `game_search` ADD FOREIGN KEY (`mode_id`) REFERENCES `mode` (`id`);

ALTER TABLE `account` ADD FOREIGN KEY (`id_player`) REFERENCES `player` (`id`);
