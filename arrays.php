<?php
// $estudiantes = array('Carlos','Jose','Maria','Luis');
$estudiantes = ['Carlos','Jose','Maria','Luis'];

echo "<pre>";
// var_dump($estudiantes);
print_r($estudiantes);
echo "</pre>";


echo $estudiantes[2];


$aprendiz = [
    'nombre' => 'jefferson',
    'apellido' => 'cadavid',
    'edad' => 18,
    'deudas' => '20.000.00'
];
echo "<pre>";
print_r($aprendiz);

echo"</pre>";


$tutor=[
    'nombre'=> 'jefferson alexis',
    'apellido'=>'cadavid bueno',
    'edad' =>18,
    'direccion'=>[
        'ciudad' =>'Bucaramanga',
        'barrio '=>'Gaitan',
        'nomeclatura'=>'cra 8 #13-52',
        'zipcode'=>666554

    ],
    'habilidades' =>[
        'git','html','css','js','php','python','slq'
    ]
];

echo "<pre>";
print_r($tutor);
echo"</pre>";


echo "<pre>";
print_r($tutor['direccion']['nomeclatura']);
echo"</pre>";

echo "<pre>";
print_r($tutor['habilidades'][4]);
echo"</pre>";

echo "<pre>";
print_r($tutor['habilidades'][3]='JavaScrip');
echo"</pre>";

$tutor['direccion'] ['departamento']= 'Santander';
unset($tutor['habilidades'][4]);
echo "<pre>";
print_r($tutor);
echo"</pre>";


echo count($tutor['habilidades']);