start:
	docker-compose up -d

bash:
	docker-compose exec php bash

test:
	@echo "----------------------------------------------------------------"
	@echo "Remember to run this in the container accessed using 'make bash'"
	@echo "----------------------------------------------------------------"
	behat .
