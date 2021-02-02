# Budget Data API (PHP)
A PHP implementation of the Budget Data API

## Development

To bring up a local copy of this for development purposes:

1. Copy the `local.env.dist` file to `local.env` and provide values.
2. Start Docker on your computer (e.g. Docker Desktop).
3. Bring up the various docker containers: `docker-composer up -d`
4. Log into phpMyAdmin at <http://localhost:8080/>
   - The username is "root"
   - The password is the MYSQL_ROOT_PASSWORD value defined in the
     docker-composer.yml file
5. Create a new user and corresponding table, matching the username
   you provided in the `local.env` file.
   - Click "User accounts" in the top menu.
   - Click "Add new user".
   - Enter the name and password you provided in your `local.env` file.
   - Check the "Create database with same name and grant all privileges"
     option.
   - Click "Go" (bottom right).
6. Run the database migrations
   - Run `docker-compose exec php bash` (or, if on Windows,
     `winpty docker-compose exec php bash`)
   - Run `./yii migrate` and answer "Yes" at the prompt(s)
7. Go to <http://localhost:8000> to view the running website.
   - To view the CRUD pages for accounts (for example), go to
     <http://localhost:8000/index.php?r=account>
