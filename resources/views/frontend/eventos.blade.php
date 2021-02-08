<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/mijares.css') }}">
	<title>Eventos</title>
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
	


<div class="content">
        <div class="row" id = "row_event">
            <div class="col_left">
                <h2>MAESTRÍA EN GERENCIA DEL TURISMO SOSTENIBLE</h2>
                <p>El Programa de Postrado Maestría en Gerencia del Turismo Sostenible es una oportunidad de formación
                    y actualización profesional para el desarrollo del turismo en el Siglo XXI. El Programa está
                    integrado por las siguientes unidades curriculares: Legislación Turística, Patrimonio Natural y
                    Cultural, Mercadeo Turístico Sostenible, Promoción del Turismo Sostenible, Formulación y Evaluación
                    de Proyectos de Turismo Sostenible, Comercialización y Venta de Productos Turísticos Sostenibles,
                    Legislación ambiental, Educación Ambiental, Economía Ambiental, Planificación del Desarrollo
                    Turístico Sostenible, Turismo Sostenible y participación comunitaria. Las líneas de investigación
                    y generación de conocimiento de este programa son: Turismo y Medioambiente; Planificación del
                    Desarrollo Turístico Sostenible; Patrimonio Cultural; Calidad y Certificación de la Sostenibilidad
                    Turística; Gestión de los Recursos Humanos en Empresas Turísticas. Requisitos Académicos: Título
                    Universitario de Pregrado Localidad: Isla de Margarita</p>

                <p>Los Interesados deben enviar sus datos a :</p>

                <p>Dr. Rafael Torrealba (ULAC) No. Teléf. 0414-4650138 . Correo: raftor535@hotmail.com</p>
                <p>Tamara Malaver (Centro Augusto Mijares) No. Télef. 0426-5864477.</p>
                <p>Correo: tamaramalaver@gmail.com; centroaugustomijares@gmail.com</p>

                <p>Programa de Postgrado aprobado por el Consejo Nacional de Universidades (CNU): Resolución 063,
                    Publicada en Gaceta Oficial No.38.651 del 23 03 2007</p>

                <p>Se reciben preinscripciones hasta el 15/04/2016</p>

                <p>Saludos, gracias por difundir esta oferta académica y contribuir así con el desarrollo humano de
                    nuestra gente.</p>
            </div>
            <div class="col_right" id = "img_rt">
                <img id = "event_img" src="{{ asset('frontend/images/evento.png') }}" alt=""/>
            </div>
        </div>
    </div>
    <br>
    <br>


    @include('footer.footer')

</div>



	

</body>
</html>




				
