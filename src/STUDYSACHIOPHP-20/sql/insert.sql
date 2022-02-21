--DDL
--expenses_appという名前のDB作成、itemsテーブル作成
CREATE DATABASE expenses_app;
CREATE TABLE items(
	id INT AUTO_INCREMENT,
	category VARCHAR(100) NOT NULL,
	price INTEGER NOT NULL,
	note VARCHAR(999),
	PRIMARY KEY(id)
);