FROM node:18.6.0-slim
# Environment variables
ENV NODE_ENV development
# Create app directory
WORKDIR /home/node/app
COPY package*.json ./
RUN npm install
COPY . .
CMD npm run dev

