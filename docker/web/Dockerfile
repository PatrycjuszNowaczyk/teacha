FROM nginx:alpine

# copy nginx configuration template to the container to be used by the entrypoint script to generate
# the nginx configuration file on container start up by envsubst command
COPY ./docker/web/default.conf.conf /etc/nginx/templates/