migrate:
	php artisan migrate:fresh --force --seed

install:
	composer install

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 app routes

lint-fix:
	composer exec --verbose phpcbf -- --standard=PSR12 app routes

test-coverage:
	composer exec --verbose phpunit tests -- --filter MessageTest --coverage-clover build/logs/clover.xml

test:
	php artisan test --filter MessageTest

build:
	npm ci && npm run build

setup:
	cp .env.example .env
	composer install
	php artisan key:generate
	npm install
	npm ci
	npm run build
