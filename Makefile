.PHONY: laravel-up
laravel-up:
	docker compose -f ./laravel-queue-demo/docker-compose.yml up -d --build

.PHONY: laravel-down
laravel-down:
	docker compose -f ./laravel-queue-demo/docker-compose.yml down

.PHONY: laravel-down-clean
laravel-down-clean:
	docker compose -f ./laravel-queue-demo/docker-compose.yml down -v

.PHONY: laravel-logs
laravel-logs:
	docker compose -f ./laravel-queue-demo/docker-compose.yml logs -f
