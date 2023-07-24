#!bin/sh

clear
echo "
Bienvenido Usuario $USER
Ingrese Opcion

1 - ABM Usuario
2 - ABM Grupo
99 - Salir
"

read -p "Ingrese opcion : " op

case $op in
	1)
	 sh ABM_usuario.sh
	;;
	2)
	 sh ABM_grupo.sh
	;;
	99)	 
	clear         
	break
	;;
esac
