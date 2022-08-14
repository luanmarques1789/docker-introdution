#!/usr/bin/bash

script="api/db/script.sql"
docker-compose up -d &&
  docker exec -i mysql-container mysql -uroot -proot <$script &&
  docker-compose logs -f --no-log-prefix api
