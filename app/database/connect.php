<?php

function connect(){
	return new PDO("mysql:host=us-cdbr-east-06.cleardb.net;dbname=heroku_f9d2e4c439dd89e",'be61257cc04332','d70b6cde',[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]);
}
