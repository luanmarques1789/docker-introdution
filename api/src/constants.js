require('dotenv').config({ path: __dirname + '/config.env' });

const MYSQL_USER = process.env.MYSQL_USER;
const MYSQL_USER_PASSWORD = process.env.MYSQL_USER_PASSWORD;
const DB_NAME = process.env.DB_NAME;
const DB_HOST = process.env.DB_HOST;
const NODE_PORT = process.env.NODE_PORT;

module.exports = {
	MYSQL_USER,
	MYSQL_USER_PASSWORD,
	DB_NAME,
	DB_HOST,
	NODE_PORT,
};
