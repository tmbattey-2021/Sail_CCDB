APP_NAME=CCDB
APP_ENV=local
APP_KEY=base64:dpxfevuSkSolkOadTfLOtJvvs6lytuN5B//PxliS1DA=
APP_DEBUG=true
APP_URL=http://localhost

DOCKER_NAME=ccdb
DOCKER_USER=1000

LOG_CHANNEL=stack
# LOG_SLACK_WEBHOOK_URL=

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=ccdb
DB_USERNAME=ccdb
DB_PASSWORD=password

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=redis
REDIS_PASSWORD=beans
REDIS_PORT=6379
REDIS_PREFIX=ccdb

MAIL_MAILER=log
# MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

SCOUT_DRIVER=meilisearch
MEILISEARCH_HOST=http://meilisearch:7700
