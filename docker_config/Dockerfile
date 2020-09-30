# pull official base image
FROM node:13.12.0-alpine

# set working directory
WORKDIR /home/node/app

# add `/app/node_modules/.bin` to $PATH
ENV PATH /app/node_modules/.bin:$PATH

# install app dependencies
COPY ./frontend/plantapp/package.json ./
RUN npm install -g react-scripts
RUN npm install

COPY ./frontend/plantapp/ ./

CMD ["npm", "start"]