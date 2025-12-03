<?php

#Array de tipo escalera
$estudiantes=["Deimond","Nurys","Jairo","Sneider"];


#Array de tipo asociativo
$tutor=[
    "nombre"=>"Juan",
    "apellido"=>"Lazaro",
    "edad"=>23
];

#Array de multiples dimensiones
$tutor_2=[
    "nombre"=>"Deimond",
    "apellido"=>"Lazaro",
    "edad"=>3,
    "cursos"=>["PHP","PYTHON","CSS"]
];

echo count($tutor_2, COUNT_RECURSIVE);