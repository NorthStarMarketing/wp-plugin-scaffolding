# WP Plugin Scaffolding

A quick starting platform for new WordPress plugins that includes unit testing with PHPunit using Docker.

## Get Started
1. Update your namespace in:
   - [composer.js](composer.js)
   - [core/Core.php](core/Core.php)
   - [plugin-file.php](plugin-file.php)
2. Update the main plugin file name and update reference in [tests/bootstrap.php](tests/bootstrap.php#L32)
3. Set up and initialize containers
```bash
# Start the containers
./dev start
```
4. Load localhost:8000 in a browser and install WordPress
5. Install the WordPress testing environment
```bash
# Install the wordpress test environment
./dev install-tests
```
6. Run the tests to make sure PHPUnit is working properly
```bash
# Run tests
./dev test
```

## FAQ
- Running WP-CLI commands
```bash
./dev wp [options] [commands]
```
