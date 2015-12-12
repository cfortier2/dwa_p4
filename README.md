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
docker run --name P4_MYSQL -e MYSQL_ROOT_PASSWORD=my-secret-pw -d mysql:latest -v /var/lib/mysql:/var/lib/mysql

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
