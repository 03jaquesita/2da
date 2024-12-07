<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/problemaStem.css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
    <section class="wrapper">
        <header>
            <h1 class="logo">Uso de la Ciencia, Tecnología, Ingeniería y Matemáticas para resolver problemas</h1>
        </header>
        <section id="contenedor">
            <section class="problema">
                <h2>Problema: potencial de una central hidroelectrica</h2>
                <p>Descripción:</p>
                <p>
               Calcula la potencia real de una central hidroelectrica (en CV y en KW)
               si el salto de agua es de 15m, la turbina que emplea es Kapan de rendimiento 94% y el caudal es de 19 m3/s
                </p>
            </section>
            <section class="esquemaProblema">
                <h2>Esquema</h2>
                <center>
                    <img class="imgProblema" src="images/1.jpeg" alt="Esquema del problema">
                </center>
            </section>
            <section class="formulas">
                <h2>Fórmulas</h2>
                <p> Q=K*t*S*r en Kcal </p>
               <p> Convertir en kcal</p>
            </section>
            <section class="datos">
            <p>Q=Energia generada, K=coeficiente de radiacion</p>
            <p>Tiempo, en minutos</p>
            <p>Area, cm2</p>
            <p>rendimiento</p>
            </section>
            <section class="calculos">
                <h2>Solución</h2>
                <form method="POST" action="">
                    <button type="submit" name="calcular">Calcular</button>
                </form>
            </section>
           
                function calcular () {
                    <?php
                // Datos iniciales
                $densidad = 1000; // kg/m³
                $gravedad = 9.81; // m/s²
                $caudal = 19; // m³/s
                $altura = 15; // m
                $rendimiento = 0.94; // 94%

                // Cálculo de la potencia bruta (en Watts)
                $potencia_bruta = $densidad * $gravedad * $caudal * $altura;

                // Cálculo de la potencia real (en Watts)
                $potencia_real = $potencia_bruta * $rendimiento;

                // Conversiones
                $potencia_real_kw = $potencia_real / 1000; // Conversión a kilovatios
                $potencia_real_cv = $potencia_real / 735.5; // Conversión a caballos de vapor

                // Mostrar resultados
                echo "Potencia real en kW: " . number_format($potencia_real_kw, 2) . " kW\n";
                echo "Potencia real en CV: " . number_format($potencia_real_cv, 2) . " CV\n";
                ?>

        </section>
                <section class="resultado">
                <h2>Resultado:</h2>
                <div id="resultadoA"></div>
                <?php
                print"<h1> resultado: = ".calcular ()"unidades</h1>"
                ?>
        </section>
        <footer class="pie">
            Creative Commons versión 3.0 SciSoft 2024
    </footer>
    </section>
</body>
</html>
