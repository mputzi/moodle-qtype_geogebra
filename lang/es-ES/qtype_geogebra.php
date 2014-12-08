<?php

/**
 * Strings for component 'qtype_geogebra'
 *
 * @package        qtype
 * @subpackage     geogebra
 * @author         Christoph Stadlbauer <christoph.stadlbauer@geogebra.org>
 * @copyright  (c) International GeoGebra Institute 2014
 * @license        http://www.geogebra.org/license
 */
$string['pluginname'] = 'GeoGebra';
$string['pluginname_link'] = 'question/type/geogebra';$string['addconstraints'] = 'Añadir restricciones (condiciones) a las variables.';
$string['addmorevarblanks'] = 'Espacios para {no} más variable(s)';
$string['answerinvalid'] = 'La cadena de caracteres de la respuesta no es válida. Esto no debiera ocurrir.';
$string['answermissing'] = 'No hay resultados. Probablemente JavaScript no se encuentra activado en tu navegador (o ha ocurrido otro error desconocido).';
$string['answervar'] = 'Variables para la calificación automática';
$string['answervar_help'] = 'Para la calificación automática, escribe un nombre para una variable lógica de GeoGebra que tomará el valor "true" si el estudiante resuelve la pregunta (en parte). Se sumarán todas las notas de todas las variables lógicas. La pregunta se considerará resuelta con cualquier combinación que supere el 100%, pero debe haber al menos una combinación que sume exactamente 100%. Para la calificación manual, dejar en blanco.';
$string['constraints'] = 'Restricciones (condiciones)';
$string['constraints_help'] = '¿Hay condiciones para las variables, tales como a < b, que no pueden declararse usando las opciones del deslizador? Deben separase por comas. Se aceptan relaciones como: <, <=, >, >=. Si necesitas una igualdad debes usar la misma variable al crear la construcción de GeoGebra. No se admiten rangos dinámicos como, por ejemplo, parámetros para el máximo o mínimo de un deslizador.';
$string['constraintswrongortoohard'] = '{$a->inequalities} son erróneas o muy difíciles de cumplir, se intentó (por fuerza bruta) {$a->tries} veces en {$a->time} segundos. Quizá empleemos un método mejor en el futuro...';
$string['feedback'] = 'Comentario de respuesta cuando la variable resulte cierta';
$string['feedback_help'] = 'El comentario de respuesta es tomado automáticamente del subtítulo de la varialbe en el archivo GeoGebra.';
$string['geogebraapplet'] = 'Applet de GeoGebra';
$string['getvars'] = 'Obtener variables de asignación aleatoria desde el applet';
$string['ggbfilemissing'] = 'Falta la cadena de caracteres en base64 en la respuesta. Probablemente JavaScript no se encuentra activado en tu navegador (o ha ocurrido otro error desconocido).';
$string['ggbturl'] = 'URL o ID de la hoja de trabajo en GeoGebraTube';
$string['ggbturl_help'] = 'Puedes usar el botón de compartir en GeoGebraTube, y copiar y pegar el enlace, o usar el repositorio de GeoGebraTube. El applet y los parámetros están guardados en la base de datos, el applet no se recargará desde GeoGebraTube salvo requerimiento expreso. También permite proporcionar el ID o el acceso compartido del applet.';
$string['ggbxmlmissing'] = 'Falta la cadena de caracteres del XML en la respuesta. Probablemente JavaScript no se encuentra activado en tu navegador (o ha ocurrido otro error desconocido).';
$string['invalidinequality'] = '{$a} no es válido';
$string['israndomized'] = '¿Hay variables de asignación aleatoria?';
$string['loadapplet'] = '(Re)cargar y mostrar el applet';
$string['loadapplet_help'] = '(Re)cargar el applet de GeoGebraTube y guardar la nueva versión desde GeoGebraTube en la base de datos.';
$string['mineqmax'] = 'No están indicados correctamente el mínimo y el máximo del intervalo para el valor aleatorio de la variable {$a}; tal vez no se especificaron en el deslizador o el objeto no sea un deslizador. Probablemente necesitarás corregir esto en tu archivo GeoGebra.';
$string['minplusstepgtmax'] = 'El mínimo más el incremento es mayor que el máximo para la variable {$a}; probablemente necesitarás corregir esto en tu archivo GeoGebra.';
$string['noappletloaded'] = '¡Ninguna Applet cargada! Comprueba si la URL es correcta y si ves un applet después de elegir un enlace o (re)cargar el applet';
$string['nofractionsumeq1'] = 'Al menos una combinación de notas debe sumar 100';
$string['pluginname_help'] = 'Preguntas que el estudiante puede resolver usando GeoGebra';
$string['pluginnameadding'] = 'Añadir una pregunta de GeoGebra';
$string['pluginnameediting'] = 'Editar una pregunta de GeoGebra';
$string['pluginnamesummary'] = 'Una versión de las preguntas calculadas que usa GeoGebra para mostrar la pregunta y comprobar la respuesta cuando se realiza el cuestionario.';
$string['randomizedbutnovars'] = 'Has elegido que la pregunta sea aleatoria, pero no has indicado ninguna variable válida para ser aleatoria.';
$string['randomizedvar'] = 'Variables de asignación aleatoria';
$string['randomizedvar_help'] = 'Las variables aleatorias se separan por comas. Usa las opciones del deslizador de GeoGebra para fijar su mínimo, su máximo e su incremento. Estas variables se pueden emplear también en el texto de la pregunta, encerrándolas entre llaves como en: {a}';
$string['stepzero'] = 'Incremento 0 para la variable {$a}; o no se especificó en el deslizador o el objeto no es un deslizador. Probablemente necesitarás corregir esto en tu archivo GeoGebra.';
$string['valuecheckedfor'] = 'Objetos lógicos de GeoGebra utilizados para comprobar la corrección.';
$string['variablenamewrong'] = 'No se encuentra una variable con ese nombre en el archivo de GeoGebra.';
$string['variableno'] = 'Variable {$a}';
$string['variables'] = 'Variables';
$string['willbereadfromfile'] = 'Se leerá desde GeoGebra... (ver el botón de ayuda)';