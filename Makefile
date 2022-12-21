install:
	composer install
brain-games:
	php bin/brain-games.php
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
