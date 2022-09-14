const express = require('express');
const mysql = require('mysql2');
const {
	MYSQL_USER_PASSWORD,
	MYSQL_USER,
	DB_HOST,
	DB_NAME,
	NODE_PORT,
} = require('./constants');

const app = express();

const conn = mysql.createConnection({
	host: DB_HOST,
	user: MYSQL_USER,
	password: MYSQL_USER_PASSWORD,
	database: DB_NAME,
});

conn.connect();

app.get('/products', function (req, res) {
	conn.query('SELECT * FROM products', function (err, rows) {
		if (err) throw err;

		res.send(rows.map((row) => ({ name: row.name, price: row.price })));
	});
});

const port = NODE_PORT;
app.listen(port, () => {
	console.log(`Server is running on http://localhost:${port}`);
});
