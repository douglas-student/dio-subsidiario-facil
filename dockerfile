FROM nginx
COPY nginx.conf /etc/nginx/nginx.conf
COPY index.php /usr/share/nginx/html/index.php
