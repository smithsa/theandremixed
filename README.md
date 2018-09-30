# theandremixed

A 2 player turn based question game inspired from {The And} project. Players are given questions based on the type of relationship with one another. Currently deployed on Heroku. See [Usage](#usage) section for demo or see project link.

## Installation

1. Configure database by providing values in *theandremixed/api/api.php* on line 1179

	*request schema and data*

	```
		$api = new MySQL_CRUD_API(array(
			'hostname'=> getenv('DB_HOSTNAME'),
			'username'=> getenv('DB_USERNAME'),
			'password'=> getenv('DB_PASSWORD'),
			'database'=> getenv('DB_DATABASENAME'),
			'charset'=>'utf8'
		));
		$api->executeCommand();
	```

2. Clone the repository
	```
	git clone git@github.com:smithsa/theandremixed.git
	```

3. Move the contents of the folder *theandremixed* to a server

## Usage
<img src="https://user-images.githubusercontent.com/1827606/46258770-95f78d00-c495-11e8-80b8-7916ee763758.gif" alt="the and remix usage walkthrough" width="60%">

## Built With
*	SQL
*	[FullPage 2.7.6](https://github.com/alvarotrigo/fullPage.js)
*	[jquery.flip.min.js](https://github.com/nnattawat/flip)
*	[jQuery.BgSwitcher](https://github.com/rewish/jquery-bgswitcher)

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

MIT © [Sade Smith](https://sadesmith.com)
