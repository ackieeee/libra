api:
	docker-compose exec api bash
route:
	docker-compose exec api php artisan route:list
serve:
	docker-compose exec api php artisan serve --host 0.0.0.0