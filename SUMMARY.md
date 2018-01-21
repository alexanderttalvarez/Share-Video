# Video Share
Here you can find a small video importer in PHP. This importer takes data from two different sources and with different formats, and prepare them to be inserted in a database.

## Installation steps
For making everything easy to run, there's a docker-compose.yml file that will take care of everything.
1. Open your console in the root of the project.
2. Run the docker package with "docker-compose up -d"
3. Enter into the package. If you are on linux just write: docker exec -it package_name bash

## How to run the code
To run the code you only need to be inside the docker package and write: import source
Right now there are two existing sources:
1. Flub
2. Glorf

So for importing one of them you should write "import Flub".
It's also possible to require them both wirting "import Flub Glorf"

## How to run de tests
So far there's a single test running. This test makes sure that both GlorfImporter and FlubImporter are returning a well formed array to be inserted in the database.
To run the test, just write in the console: ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/FormatTest

## Former experience
It's my first time running tests outside a framework. I had the chance of writing them inside Laravel. I have so much to learn about this.

## What would you have done differently if you had had more time
1. Exceptions handling is a really necessary task.
2. Avoiding repetition of sources when writing the command.
3. Implementing more tests.