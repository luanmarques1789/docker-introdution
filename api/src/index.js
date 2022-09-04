const express = require('express');
const mysql = require('mysql2');

const app = express();

const conn = mysql.createConnection({
	host: 'docker-introduction-mysql',
	user: 'root',
	password: 'root',
	database: 'api',
});

conn.connect();

app.get('/products', function (req, res) {
	conn.query('SELECT * FROM products', function (err, rows) {
		if (err) throw err;

		res.send(rows.map((row) => ({ name: row.name, price: row.price })));
	});
});

const port = 5030;
app.listen(port, '0.0.0.0', () => {
	console.log(`Server is running on port ${port}`);
});
