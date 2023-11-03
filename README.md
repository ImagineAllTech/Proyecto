# Proyecto
Historial de versiones de los entregables del proyecto.


# Informacion sobre el proyecto

### Categorias:
* 12/13 años
* 14/15 años
* 16/17 años
* Mayores

### Cinturones
* AKA(Rojo)
* AO(Azul)

### Llamado de Kata
* El runner recolecta la info de cada competidor y se lo dice al administrativo
* El administrativo debera ingresar el kata 

## Grupos y cant de competidores
* 3/2 competidores
	* Mismo Cinturon
	* Un solo kata
	* El puntaje determina el orden de los puestos
* 4 competidores
	* Sorteo
	* 2 AKA y 2 AO
	* Ganadores pasan a final
	* Perdedores quedan en 3er lugar(ambos)
* 5 competidores
	* 2 grupos mediante sortep
	* 3 AKA y 2 AO
	* Ganadores pasan a final
	* Menor puntuaje en 2 comp disputa el 3er puesto con el ultimo en el de 3 comp
	* El segundo del grupo 3 queda 3ro por walk-over
* 6/10 competidores
	* Mismo procedimiento que antes
	* El sgundo de un grupo compite con el tercero de otro y viceversa para definir los dos 3ros puestos
* +10 competidores
	* Dos grupos
	* Los mejores 4 de cada grupo pasan a segunda ronda
	* Se formas dos grupos de 4 en segunda ronda
	* El 2do Kata determina la clasificar de los 6 comps(3xGrupo)
	* Tercero ronda por medallas normal
	* Kata distinto por ronda
	* Creo que son 4 katas

## Panel Jueces
5 o 7 jueces, depende la cantidad de jueces disponibles
##### Evaluacion de jueces
* Juez 1 (Juez con mayor experiencia)
* Puntaje sera de 5.0 a 10.0, incremento de 0.1
	* 5.0 Puntuacion mas baja
	* 10.0 Puntuacion Perfecta
* Descalificacion
	* Razones: Kata equivocado, interrumpir, no saludar, etc
	* Se elimina el puntaje mas alto y el mas bajo

## Procedimiento y Ejecucion de los encuentros
* Dos pantallas simultaneas
	* En una se encuentra el panel de control donde el administrativo ingresara informacion
	* En la otra mostrara determinada informacion enviada antes
* Al comienzo de cada categoria:
	* Se debe ingresar los nombres de los competidores
	* Despues se debe realizar el sorteo teniendo en cuenta la cantidad de competidores y otros criterios mencionados mas adelantes

## Informacion de las pantallas
* Comienzo de cada categoria
	* Titulo y logo
	* Palabra Kata
	* Categoria y genero
* Luego de esta
	* Categoria y genero
	* Cinturones y nombres

## Llamado a competidores
* Pantalla:
	* Categoria, genero, round y grupo/pool
	* Cuadro con color de cinturon(Luego debera aparecer el puntaje excepto en finales)
	* Nombre y apellido
	* Kata elegido
	* Logo CUK
* Programa
	* Debera guardar el puntaje de cada competidor en cada ronda 	  en la base de datos para determinar la siguiente ronda
	* Lugo de la competencia se mostrara una pantalla que contenga(Posiciones, competidores y puntaje enlistados de mayor a menor)
	* Para +10comps quienes pasen deberan ser sorteados nuevamente para que no se enfrente en el orden que clasificaron.

## Caso de excepcion - Finales por medalla
* Cuando el AKA finaliza la ejecucion no se debera mostrar la puntuacion en pantalla
* El juez 1 se acerca a los competidores, anuncia el ganador y en ese momento se mostrara los resultados finales

## Votacion de los jueces del panel
* En caso de que algun dato no se envie, el admin se encarga de ponerlo manualmente
* El admin debera loguear cada tablet al sistema, con usuarios denomiinados entre juez 1 al juez 5(Opcion hasta Juez7)
* Pantalla Jueces:
	* Categoria
	* Usuario del juez(EJ: Juez 1)
	* Kata que se esta realizando
	* Input donde este el puntaje en forma lista o scroll
	* Boton de Enviar y resetear
* Cuando se envie un voto debe aparecer un UI Popup
	 * El popup se cerrara cuando todos los votos fueron enviados correctamente a la base de datos
* Si falla algo el admin podra hacer el valor manualmente
* Cuando se envien todos los puntajes se mostrara la pantalla mencionada en otro punto anteriormente
* Cuando el competidor se retire, los jueces tendran habilitado el boton de Reset para el siguiente competidor


## Sembrado y sorteo
* El num 1 y 2 del ranking o campeonato anterior deben estar en semi llaves(pool) distintos(uno con AKA y el otro con AO) esto para evitar que se eliminen entre ellos en las primeras rondas
* Se debe evitar que competidores pertenecientes a la misma escuela/federacion no queden en el mismo pool, en caso de ser pocos competidores esto no es posible 