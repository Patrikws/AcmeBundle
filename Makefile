
bash:
	cd laradock && \
	docker-compose exec  --workdir=/var/www workspace bash

cl:
	bin/console cache:clear

eval:
	eval "$$(ssh-agent -s)"


sshadd:
	ssh-add ~/.ssh/id_rsa

ssh: eval sshadd
# t:
# 	../../../vendor/bin/ecs check src
# 	../../../vendor/bin/psalm	
ps:
	vendor/bin/psalm --show-info=true custom/plugins/$(plname)/src/*

ps2:
	vendor/bin/psalm --init custom/plugins/$(plname)
# make ps plname=CogiSurvey

psi:
	vendor/bin/psalm --show-info=true	

ecs:
	vendor/bin/ecs check custom/plugins/$(plname)/src

# make ecs plname=SwagPlatformDemoData

t: ecs ps	

chown:
	chown -R laradock:laradock .

fix:
	vendor/bin/ecs check custom/plugins/$(plname)/src --fix
	chown -R laradock:laradock .