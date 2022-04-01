Challenge-dt

Cada Challenge esta realizado en una rama diferente
la rama mastes esta unida todo el Challenge

# Challenge Back-end

Comandos en Dockrer

docker-compose up -d
docker-compose ps

Para realizar migraciones y seeder
docker-compose exec php php /var/www/html/artisan migrate
docker-compose exec php php /var/www/html/artisan db:seed --class=PersonaSeeder
docker-compose exec php php /var/www/html/artisan db:seed --class=VueloSeeder

Acceder: 
http://localhost:8000/api/personas
http://localhost:8000/api/persona/1 Para hacer un Edit
http://localhost:8000/api/vuelos
http://localhost:8000/api/vuelo/4 Para hacer un Edit

Vue js v2

cd Front-end
npm i
npm run dev

Acceder: http://localhost:3000/

