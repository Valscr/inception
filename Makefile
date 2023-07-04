# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Makefile                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: sahafid <sahafid@student.42.fr>            +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2023/01/01 14:18:11 by sahafid           #+#    #+#              #
#    Updated: 2023/01/07 01:59:32 by sahafid          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #



all : 	
	@sudo mkdir -p /home/vescaffr/data/wp
	@sudo mkdir -p /home/vescaffr/data/db
	@docker-compose -f ./srcs/docker-compose.yml up --build -d	


up : 
	@docker-compose -f ./srcs/docker-compose.yml up --build -d

down : 
	@docker-compose -f ./srcs/docker-compose.yml down

stop : 
	@docker-compose -f ./srcs/docker-compose.yml stop

start : 
	@docker-compose -f ./srcs/docker-compose.yml start

status :
	@echo "*** IMAGES ***\n"
	@docker images
	@echo "\n*** CONTAINERS ***\n"
	@docker ps -a
	@echo "\n*** NETWORKS ***\n"
	@docker network ls
	@echo "\n*** VOLUMES ***\n"
	@docker volume ls
	@echo	
	
clean : 
	@docker-compose -f ./srcs/docker-compose.yml stop
	@docker-compose -f ./srcs/docker-compose.yml down
	@docker system prune -af 2>/dev/null
	@docker volume rm mariadb 2>/dev/null
	@docker volume rm wordpress 2>/dev/null
	@docker network prune -f 2>/dev/null
	@sudo rm -r /home/vescaffr/data/wp 2>/dev/null
	@sudo rm -r /home/vescaffr/data/db 2>/dev/null
