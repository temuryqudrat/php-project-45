install:
	php C:\xampp\php\composer.phar install

brain-games:
	"C:/xampp/php/php.exe" bin/brain-games

validate:
	"C:/xampp/php/php.exe" "C:/xampp/php/composer.phar" validate

lint:
	"C:/xampp/php/php.exe" vendor/bin/phpcs --standard=PSR12 src bin

brain-even:
	"C:/xampp/php/php.exe" bin/brain-even