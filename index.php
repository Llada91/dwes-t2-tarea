<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>index</title>
</head>

<body>

<?php
require_once "clases/Miembro.php";
require_once "clases/Alumno.php";
require_once "clases/Asignatura.php";
require_once "clases/Profesor.php";

// Crear asignaturas
$asignaturas = Asignatura::crearAsignaturasDeMuestra();

// Crear alumnos
$alumnos = Alumno::crearAlumnosDeMuestra($asignaturas);

// Crear profesores
$profesores = Profesor::crearProfesoresDeMuestra($asignaturas);
?>

<h2>Alumnos</h2>
<ul>
    <?php foreach ($alumnos as $alumno): ?>
        <li><?= $alumno ?></li>
    <?php endforeach; ?>
</ul>

<h2>Profesores</h2>
<ul>
    <?php foreach ($profesores as $profesor): ?>
        <li><?= $profesor ?></li>
    <?php endforeach; ?>
</ul>

<h2>Asignaturas</h2>
<ul>
    <?php foreach ($asignaturas as $asignatura): ?>
        <li><?= $asignatura ?></li>
    <?php endforeach; ?>
</ul>

<h2>Alumnos &lt;= 23</h2>
<?php
$alumnosMenores23 = array_filter($alumnos, function ($alumno) {
    return $alumno->edad <= 23;
});
?>
<ul>
    <?php foreach ($alumnosMenores23 as $alumno): ?>
        <li><?= $alumno ?></li>
    <?php endforeach; ?>
</ul>

<h2>Alumnos con al menos dos asignaturas</h2>
<?php
$alumnosDosAsignaturas = array_filter($alumnos, function ($alumno) {
    return count($alumno->asignaturas) >= 2;
});
?>
<ul>
    <?php foreach ($alumnosDosAsignaturas as $alumno): ?>
        <li><?= $alumno ?></li>
    <?php endforeach; ?>
</ul>

<h2>Asignaturas con algún alumno matriculado</h2>
<?php
$asignaturasConMatricula = array_filter($asignaturas, function ($asignatura) use ($alumnos) {

    foreach ($alumnos as $alumno) {
        foreach ($alumno->asignaturas as $asigAlumno) {
            if ($asigAlumno->id == $asignatura->id) {
                return true;
            }
        }
    }

    return false;
});
?>
<ul>
    <?php foreach ($asignaturasConMatricula as $asignatura): ?>
        <li><?= $asignatura ?></li>
    <?php endforeach; ?>
</ul>

</body>
</html>
