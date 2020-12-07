USE dzlgt6jdd573rkdc;

CREATE TABLE usersreviews
(book varchar(100) NOT NULL,
review varchar(255) NOT NULL);

INSERT INTO usersreviews(book, review)
VALUES('1984', 'This is a fantastic book. I love it.');

SELECT *
FROM usersreviews;