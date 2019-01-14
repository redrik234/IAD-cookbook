set -e

echo "Stopping containers..."
docker stop cookbook-db cookbook-app cookbook-phpmyadmin

echo "Removing containers..."
docker rm cookbook-db cookbook-app cookbook-phpmyadmin

echo "Done."