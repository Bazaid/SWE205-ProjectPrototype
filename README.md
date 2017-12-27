# SWE205-ProjectPrototype
SWE205 ProjectPrototype

To run the Prototype do the following steps :
1 - edit .env file to match your settings
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=<DB_NAME>
  DB_USERNAME=<DB_USERNAME>
  DB_PASSWORD=<DB_PASSWORD>

2 - run migration from artisan to  install the following tables
  user table
  car table

 3- and you are done just goto http://localhost register new user and edit the role value in db  from
  0 to 1 to make the user an administrator


  --- Note:
  incase any files are missing or mismatch in the version get latest version from bitbucket repo
  https://bitbucket.org/bazaid/swe205-projectprototype
  ^ the version in bitbucket uses docker 
