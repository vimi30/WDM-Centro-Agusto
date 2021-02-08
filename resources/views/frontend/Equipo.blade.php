<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="{{ asset('frontend/js/font.js') }}"></script>
    @yield('scripts')
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/mijares.css') }}">
	<title>@yield('title') Equipo</title>
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
	    <div class="logo_center">
	        <img src="{{ asset('frontend/images/logo.png') }}" alt=""/>
	        <h2 class = "head_equip">SOMOS UN EQUIPO INTERDISCIPLINARIO</h2>
            
	    </div>
		<div class="row">
            <div class="equipo-col">
                <br>
                <img src="{{ asset('frontend/images/foto1.png')}}" alt=""/>
                <h3>ALEX RODRÍGUEZ D.</h3>
                <p>Lic. en Administración, Magister en Turismo, Mención Mercadeo Turístico; Experiencia como docente
                    universitario y promotor de emprendedores.</p>
                <p>Teléf.: 0416-5971407</p>
                <p>E-mail: arcaro0460@hotmail.com</p>
            </div>
            <div class="equipo-col">
                <br>
                <img src="{{ asset('frontend/images/foto2.png')}}" alt=""/>
                <h3>GISELA QUINTERO B.</h3>
                <p>Psicólogo amplia experiencia en desarrollo organizacional, gestión y desarrollo de talento humano en
                    instituciones públicas y empresas privadas.</p>
                <p>Teléf.: 0416-8969824</p>
                <p>E-mail: gigiqb@gmail.com</p>
            </div>
            <div class="equipo-col">
                <br>
                <img src="{{ asset('frontend/images/foto3.png')}}" alt=""/>
                <h3>JUDITH P. ALVARADO J.</h3>
                <p>Maestra, Actriz, Directora, Autora de Textos Teatrales, Maestra de Actuación, Teatrista.</p>
                <p>Teléf.: 0416-1949369</p>
                <p>E-mail: juditha.alvarado@gmail.com</p>
            </div>
        </div>
        <div class="row">
            <div class="equipo-col">
                <br>
                <img src="{{ asset('frontend/images/foto4.png')}}" alt=""/>
                <h3>MARÍA AUGUSTA BERROTERÁN</h3>
                <p>Lic. en Hotelería, Magister en Gerencia Ambiental, experiencia en hotelería, turismo y educación
                    ambiental.</p>
                <p>Teléf.: 0416-4957513</p>
                <p>E-mail: mariaberroteranmaluenga@gmail.com</p>
            </div>
            <div class="equipo-col">
                <br>
                <img src="{{ asset('frontend/images/foto5.png')}}" alt=""/>
                <h3>TAMARA MALAVER</h3>
                <p>Lic. en Relaciones Industriales, Magister en Gerencia de Empresas, Egresada del V Programa PNUD de
                    Formación en Responsabilidad Social Empresarial; experiencia en desarrollo organizacional, gestión
                    humana, docencia y promoción de proyectos comunitarias.</p>
                <p>Teléf.: 0426-5864477</p>
                <p>E-mail: tamaramalaver@gmail.com</p>
            </div>
            <div class="equipo-col">
                <br>
                <img src="{{ asset('frontend/images/foto6.png')}}" alt=""/>
                <h3>TERESITA GONZÁLEZ</h3>
                <p>Lic. en Sociología, Magister en Educación, amplia experiencia en educación de nivel medio y
                    universitaria, promotora de la estrategia pedagógica: Filosofía para Niños</p>
                <p>Teléf.: 0412-0960917</p>
                <p>E-mail: teresitadelacruz@gmail.com</p>
            </div>
        </div>
    </div>
    <br>
    <br>
    @include('footer.footer')
</div>
</body>
</html>