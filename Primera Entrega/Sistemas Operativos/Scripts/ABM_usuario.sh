#!bin/bash

# usuarios

#listar_usuarios() {
#	clear
#	echo "---- Lista de Usuarios ----"
#	printf "%-20s %-10s $-10s\n" "Nombre de Usuario" "UID" "Directorio de Trabajo"
#	awk -F: '{printF "%-20s %-10s %-10s\n", $1, $3, $6}' /etc/passwd
#}

listar_usuarios() {
	clear
	echo "---- Lista de Usuarios ----"
	awk -F: '{print $1}' /etc/passwd
}

alta_usuario() {
	clear
	read -rp "Ingrese el nombre del nuevo usuario: " nuevo_usuario
	
	#verificamos si existe el usuario
	if id "$nuevo_usuario" &>/dev/null; then
		echo "El usuario $nuevo_usuario ya existe."
		break
	else
		sudo useradd "$nuevo_usuario"
		echo "El usuario $nuevo_usuario ha sido creado."

		read -rp "Ingrese el nombre del grupo para el usuario: " grupo

		#verificamos si existe el grupo
		if getent group "$grupo" &>/dev/null; then
			usermod -g "$grupo" "$nuevo_usuario"
			echo "Se ha modificado el usuario introduciendolo al grupo"
		else
			groupadd "$grupo"
			usermod -g "$grupo" "$nuevo_usuario"
			echo "Se ha creado el grupo e introducido el usuario al grupo"
		fi
			
	fi
}

baja_usuario() {
	clear
	read -rp "Ingrese el nombre de usuario que desea eliminar: " usuario
	
	#verificamos si existe
	if id "$usuario" &>/dev/nul; then
		sudo userdel "$usuario"
		echo "El usuario $usuario ha sido eliminado."
	else
		echo "El usuario $usuario no existe."
	fi
}

modificar_usuario() {
	clear
	read -rp "Ingrese el nombre del usuario a modificar :  " usuario

	#verificamos si existe
	if id "$usuario" &>/dev/null; then
		read -rp "Ingrese el nuevo nombre de usuario: " nuevo_nombre

			if id "$nuevo_nombre" &>/dev/null;then
				echo "El nombre de usuario $nuevo_nombre ya existe."
			else
				echo "El nombre de usuario $nuevo_nombre no existe, se permite su uso."
				sudo usermod -l "$nuevo_nombre" "$usuario"
				echo "El usuario $usuario ha sido modificado a $nuevo_nombre."
			fi
	else
		echo "El usuario $usuario no existe."
	fi
}

echo "
Bienvenido Usuario $USER al ABM de usuarios.

Usted tiene las siguientes opciones:

1- Altas
2- Bajas
3- Modificacion
4- Listado
99- Volver
"

read -rp "Ingrese opcion : " op

case $op in
	1)	# alta usuario
	clear
	alta_usuario
	read -p "<INTRO>"
	 sh ABM_usuario.sh
	;;
	2)	# baja usuario
	clear
	baja_usuario
	 sh ABM_usuario.sh
	;;
	3)	# modificar usuario
	 clear
	modificar_usuario
	 sh ABM_usuario.sh
	;;
	4)	# listar usuarios
	clear
	listar_usuarios
	 sh ABM_usuario.sh
	;;
	99)
	clear
	sh Inicio.sh
	break
	;;
	*)
	echo "Error"
	;;
    esac
