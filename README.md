## Fizz Buzz

### Structure

This is a simple composer project where I have configured all the directory structure in the `composer.json` file. There are two main directories: *app* & *tests* in the project along with some files like *.gitignore*, *composer.json*, *composer.lock*, *phpunit.xml* and *README.md*, each of these are described a bit in detail bellow.

1. **app:** There is only a single PHP class exist in the *app* directory where all the logic is implemented.
2. **tests:** All the unit test cases written in the **FizzBuzzTest.php** class which is inside this directory.
3. **.gitignore** This is simply a GIT ignore file where we keep the files not to be pushed into the remote repository.
4. **composer.json** As we know each of a composer project/library consist of a *composer.json* file where all the configuration are done.
5. **composer.lock** The point of the *composer.lock* file is to record the exact versions that are installed, so they can be re-installed.
6. **phpunit.xml** This is PHPUnit configuration file where we define all the things related to testing like coloring, stopping the normal execution after a test case fails and so many more.
7. **README.md** This is simple markdown file where all the documentation are there in the *README.md* file.

### Running The Project

This is a composer library where we can use it in another project as well as clone as a standalone project. After cloning the into local system, go to the project directory and run the command ```composer install``` or ```composer update``` to install or update the required packages. There is only one required package and that is *phpunit* which is used for unit testing.

After installing the dependencies, now we can run the unit test cases. Run the command ```php vendor/bin/phpunit``` inside the project directory to run the unit test cases.
