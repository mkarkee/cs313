--clean up
DROP TABLE IF EXISTS ride;
DROP TABLE IF EXISTS user_account;



--setup for useraccounts
CREATE TABLE user_account (
    id SERIAL PRIMARY KEY,
    firstName VARCHAR(256) NOT NULL,
    lastName VARCHAR(256) NOT NULL,
    address VARCHAR(256),
    username VARCHAR(256) NOT NULL UNIQUE,
    password VARCHAR(256) NOT NULL
);

---fake account insert
INSERT INTO user_account (
    firstname, lastname, address, username, password)
    VALUES (
        'Mike',
        'Jhonson',
        '123 Main st',
        'MJhon',
        '123Pass'
    );


--setup for ride
CREATE TABLE ride (
    id SERIAL PRIMARY KEY,
    user_id INT NOT NULL REFERENCES user_account(id),
    origin VARCHAR(256) NOT NULL,
    destination VARCHAR(256) NOT NULL,
    time VARCHAR(256),
    price FLOAT

);

--inserting a dummy ride
INSERT INTO ride (
    user_id, origin, destination, time, price )
    VALUES (
        1,
        'Main Street',
        'Walmart',
        '2:00PM',
        '10'
);