version: "3.7"

services:
	mysql:
		image:mysql:8.0.25
		container_name: parking_mysql
		environment:
		MYSQL_DATABASE: parking
		MYSQL_ROOT_PASSWORD: kjsdofiys9d8fw3j.-
		MYSQL_USER: application_user
		MYQSL_PASSWORD: l3kjhj324undn
	command:["--default-authentification-plugin=mysql_native_password"]
	ports:
		- 3382:3306
	volumes:
		- parking_mysql:/data/mysql
	networks:
		- parking_projet