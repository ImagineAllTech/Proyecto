#!bin/bash

# grupos


listar_grupos() {
	clear
	echo "---- Lista de Grupos ----"
	awk -F: '{print $1}' /etc/group

}

alta_grupo(){
	clear
	read -rp "Ingrese el nombre del nuevo grupo: " nuevo_grupo

	#verificamos si existe el grupo
	if getent group "$nuevo_grupo" &>/dev/null; then
		echo "El grupo ya existe."
	else
		groupadd "$nuevo_grupo"
		echo "Se ha creado el nuevo grupo"
	fi

}

baja_grupo(){
	clear
	read -rp "Ingrese el nombre del grupo a eliminar: " grupo

	#verificamos si existe el grupo
 	if getent group "$grupo" &>/dev/null; then
		sudo groupdel "$grupo"
		echo "El grupo se ha eliminado."
	else
		echo "El grupo no existe."
	fi

}


modificar_grupo() {
	clear
	read -rp "Ingrese el nombre del grupo a modificar: " grupo

	#verificamos si existe el grupo
 	if getent group "$grupo" &>/dev/null; then
		read -rp "Ingrese el nuevo GID de $grupo: " gid
		sudo groupmod -g "$gid" "$grupo"
		read -rp "Ingrese el nuevo nombre a $grupo: " nuevo_nombre_grupo
		sudo groupmod -n "$nuevo_nombre_grupo" "$grupo"
		echo "Se ha cambiado el nombre del grupo $grupo al nombre $nuevo_nombre_grupo con el nuevo GID de $gid."
	else
		echo "El grupo no existe."
	fi

}


echo "
Bienvenido Usuario $USER al ABM de grupos.

Usted tiene las siguientes opciones 

1- Altas
2- Bajas
3- Modificaciones
4- Listado
99- Volver
"

read -p "Ingrese opcion : " op

case $op in
	1)	# crear grupo
	clear
	alta_grupo
	sh ABM_grupo.sh
	;;
	2)	# borrar grupo
	clear
	baja_grupo
	sh ABM_grupo.sh
	;;
	3)	# modificar grupo
	clear
	modificar_grupo
	sh ABM_grupo.sh
	;;
	4)	# listar grupos
	clear
	listar_grupos
	sh ABM_grupo.sh
	;;
	99)	# volver
	clear
	sh Inicio.sh
	;;
esac
