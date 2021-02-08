<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="{{ asset('frontend/js/font.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/mijares.css') }}">
	<title>Centro Augusto Mijares</title>
</head>
<body>
<div id="wrapper" class="eventos">
<div class="container">
	<div class="nav">
	    <div class="toggleArea">
        
         <label for="toggle" class="check_button">
         <i class="fas fa-bars"></i>
         </label>
     
       </div>
       <input type="checkbox" id="toggle">
		@include('nav.navbar')
	</div>







<div class="content" id = "content_cam">
        <div class="row"  id = "row_cam">
            <div class="col_left" id = "centro_augusto_mijares_head_lt">
                <h1 class = "col_head1">MISIÓN</h1>
                <p>
                    El CENTRO AUGUSTO MIJARES es una asociación civil sin fines de lucro que contribuye con el desarrollo
                    humano, mediante la generación y difusión de información, la formación extraescolar, promoviendo
                    educación de calidad, asistencia técnica para mejorar el desempeño de organizaciones y el impulso de
                    iniciativas de responsabilidad social y voluntariado, con el propósito de lograr la formación de
                    capital social y el desarrollo sustentable de la comunidad.
                </p>
            </div>
            <div class="col_right" id = "centro_augusto_mijares_head_rt">
                <h1 class = "col_head1" >VISIÓN</h1>
                <p>
                    El CENTRO AUGUSTO MIJARES aspira ser reconocido, a nivel nacional, como una organización de
                    excelencia, comprometida con el desarrollo sustentable de la comunidad.
                </p>
            </div>
        </div>
        <div class="logo_center">
            <img src="{{ asset('frontend/images/logo.png') }}" class = "img_logo_center" alt="">
            <h2>VALORES</h2>
            <p>
                Dentro de nuestro pensamiento estratégico, los Valores son el verdadero poder: nos ayudan a aclarar
                nuestra Misión como organización y como personas; purifican e inspiran nuestra Visión y nos
                impulsan en cada actividad del desempeño organizacional.
            </p>
            <p>
                Inspirados en el pensamiento del Profesor Augusto Mijares, asumimos como nuestros los ideales de
                Justicia, el Bien, la Belleza y la Verdad; y los valores de RESPONSABILIDAD SOCIAL, SOLIDARIDAD,
                CONSTANCIA, CORRESPONSABILIDAD, LIBERTAD, Y FRATERNIDAD.
            </p>
        </div>
        <br>
        <div class="row">
            <div class="col_video">
                <h3>RESPONSABILIDAD SOCIAL</h3>
                <p>
                    Estimulamos una actitud madura, consciente y sensible a los problemas de nuestra sociedad, a la vez que
                    adoptamos hábitos, formulamos estrategias y desarrollamos procesos que nos ayudan a minimizar los
                    impactos negativos que podamos generar en el medio ambiente y en la sociedad.
                </p>
            </div>
            <div class="col_video">
                <h3>LIBERTAD</h3>
                <p>
                    La asumimos como la capacidad de elegir responsablemente la dirección de nuestras vidas.
                    Implica el conocer y diferenciar entre el bien y el mal y proceder de acuerdo a nuestra
                    conciencia, creencias y aspiraciones.
                </p>
            </div>
            <div class="col_video">
                <h3>FRATERNIDAD</h3>
                <p>
                    Promovemos la unión, tolerancia y respeto a las diferencias entre los miembros que conforman una
                    sociedad, conviviendo y actuando unidos en pos del bien común, y compartiendo sus experiencias de
                    vida.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col_video">
                <h3>CORRESPONSABILIDAD</h3>
                <p>
                    Participamos conjuntamente con empresas, instituciones, organizaciones e individuos para impulsar
                    iniciativas en pro del desarrollo humano y del desarrollo sustentable de la comunidad.
                </p>
            </div>
            <div class="col_video">
                <h3>CONSTANCIA</h3>
                <p>
                    Tenemos perseverancia y hacemos esfuerzo constante para alcanzar nuestros objetivos y metas.
                    Comenzamos una y otra vez para corregir errores y superar obstáculos. Se asume lo dicho por Simón
                    Bolívar en el Manifiesto de Cartagena: “(…) el valor, la habilidad y la constancia corrigen la mala
                    fortuna” - Citado por Augusto Mijares en la obra El Libertador.
                </p>
            </div>
            <div class="col_video">
                <h3>SOLIDARIDAD</h3>
                <p>
                    Actuamos desinteresadamente y con plena de alegría en favor de otras personas, teniendo en cuenta
                    la utilidad y la necesidad del aporte para estas personas.
                </p>
            </div>
        </div>
    </div>
    <br>
    <br>







@include('footer.footer')


	
</div>
</div>
</body>
</html>