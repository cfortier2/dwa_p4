# dwa_p4

Chris Fortier

CSCI E-15 - Dynamic Web Applications Project 4/Final Project

# URL:
The live URL for the site is: `http://p4.fortier.io/`

# Description:
This project is a simple website for uploading and viewing real estate listings.

# Demo:
TODO:

# Details:
TODO:

# MySql Setup:
docker run --name p4_mysql -e MYSQL_ROOT_PASSWORD=my-secret-pw -d -v /var/lib/mysql:/var/lib/mysql -v /etc/my.cnf:/etc/my.cnf mysql:latest

MySql in a container on a small DigitalOcean droplet isn't the most efficient. Here are the settings I used to reduce its performance impact.
/etc/my.cnf settings:
innodb_buffer_pool_size=5M
innodb_log_buffer_size=256K
query_cache_size=0
max_connections=10
key_buffer_size=8
thread_cache_size=0
host_cache_size=0
innodb_ft_cache_size=1600000
innodb_ft_total_cache_size=32000000

# per thread or per operation settings
thread_stack=131072
sort_buffer_size=32K
read_buffer_size=8200
read_rnd_buffer_size=8200
max_heap_table_size=16K
tmp_table_size=1K
bulk_insert_buffer_size=0
join_buffer_size=128
net_buffer_length=1K
innodb_sort_buffer_size=64K

#settings that relate to the binary log (if enabled)
binlog_cache_size=4K
binlog_stmt_cache_size=4K

# Build and Deployment:
I used the same Docker/Jenkins workflow that I used for Project 3. Details are:
Of unique interest: I decided to build and deploy this project using Docker. As such, the Dockerfile is committed with this repo. I have also modified the configuration of my server to also run Jenkins to manage the build and deployment of the project. I am using nginx as a reverse proxy listening on port 80 to route traffic to the container.

##Process:
* Github webhook fires event to Jenkins server running in DigitalOcean for each commit to project.
* Jenkins run `docker build` command to build a new Docker image with this version of the application.
* Jenkins kills currently running version of the container and starts this version on port 84.
* Nginx is configured to route traffic to `p4.fortier.io` to `http://localhost:84`

# Plugins, Libraries, Packages, etc...
* Laravel
* Docker
* Jenkins
* nginx
