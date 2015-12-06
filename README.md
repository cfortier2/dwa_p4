# dwa_p3

Chris Fortier

CSCI E-15 - Dynamic Web Applications Project 3

# URL:
The live URL for the site is: `http://p3.fortier.io/`

# Description:
This is project contains two tools that are helpful for developers:
* A lorem ipsum text generator
* A fake user generator

# Demo:
http://screencast.com/t/Swomvc6VfN

# Details:
The site presents a simple page with explanations of the two generators. Upon following the links you will be able to create lorem ipsum text or fake user data.

# Build and Deployment:
Of unique interest: I decided to build and deploy this project using Docker. As such, the Dockerfile is committed with this repo. I have also modified the configuration of my server to also run Jenkins to manage the build and deployment of the project. I am using nginx as a reverse proxy listening on port 80 to route traffic to the container.

##Process:
* Github webhook fires event to Jenkins server running in DigitalOcean for each commit to project.
* Jenkins run `docker build` command to build a new Docker image with this version of the application.
* Jenkins kills currently running version of the container and starts this version on port 83.
* Nginx is configured to route traffic to `p3.fortier.io` to `http://localhost:83`

# Plugins, Libraries, Packages, etc...
* Laravel
* fzaninotto/faker
* badcow/lorem-ipsum
* Docker
* Jenkins
* nginx
