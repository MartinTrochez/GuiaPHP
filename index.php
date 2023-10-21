<?php
include('includes/conexion.php');
conectar();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Guia PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Guia PHP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <?php
            $sql = "SELECT * FROM ejercicios";
            $sql = mysqli_query($con, $sql);
            if (mysqli_num_rows($sql) != -1) {
                while ($r = mysqli_fetch_array($sql)) {
                    $nombre_archivo = $r['nombre_item'];
                    $nombre_minuscula = strtolower($nombre_archivo);
                    $nombre_sin_espacio = str_replace(' ', '', $nombre_minuscula);
                    ?>
                    <a class="nav-item nav-link"
                       href="index.php?pagina=<?php echo $r['archivo_item']; ?>"><?php echo $r['nombre_item']; ?></a>
                    <?php
                }
            }
            ?>
        </div>
        <a
    </div>
</nav>

<section class="d-flex justify-content-center">
    <p class="display-6">Ejercicios de PHP</p>
</section>


<?php
if (!empty($_GET['pagina'])) {
        include('modulos/' . $_GET['pagina'] . ".php");
}
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
