#!/bin/bash
# set -euxo pipefail
set -euo pipefail

IMAGE_NAME=$(uuidgen | tr "[:upper:]" "[:lower:]")
REPO_NAME=ttl.sh/${IMAGE_NAME}:24h

echo "Repo is ${REPO_NAME} ..."
echo ""

docker build -t ttl.sh/${IMAGE_NAME}:24h .
docker push ttl.sh/${IMAGE_NAME}:24h

echo ""; echo "";
echo "Image is at ${REPO_NAME}"
