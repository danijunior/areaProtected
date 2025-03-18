install:
	composer install

dump-autoload:
	composer dump-autoload

php-stan:
	vendor/bin/phpstan analyse src --level max

php-unit:
	 vendor/bin/phpunit src/tests