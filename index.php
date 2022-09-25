<?php 
include("header.php"); 
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<link rel="stylesheet" href="./styleadmisiones.css" />
    <script src="./scriptadmisiones.js" defer></script>
    <link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/styleCarrera.css">
    

	<script src="js/jquery-3.1.0.min.js"></script>
	<script src="js/validacion.js"></script>
	<script src="js/validacionN.js"></script>
	<script src="js/main.js"></script>
	<div class="slideshow">
	
		<div class="left">
			<span class="fa fa-chevron-left"></span>
		</div>

		<div class="right">
			<span class="fa fa-chevron-right"></span>
		</div>

	</div>
                        
       
</body>

<form method="post" enctype="multipart/form-data" class="form">
    
    
      <h1 class="text-center">Admisiones 2023 <br> #SOMOSSOMASCOS</h1>
      <!-- Progress bar -->
      <div class="progressbar">
        <div class="progress" id="progress"></div>
        
        <div
          class="progress-step progress-step-active"
          data-title="Datos Aspirante"
        ></div>
        <div class="progress-step" data-title="Datos Padre"></div>
        <div class="progress-step" data-title="Datos Madre"></div>
        <div class="progress-step" data-title="Datos Encargado"></div>
        <div class="progress-step" data-title="Documentos solicitados"></div>
      </div>

      <!-- Steps -->
      
    <!-- Step Student -->
      <div class="form-step form-step-active">
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="nombreas" class="form-label">Nombre</label>
                <input type="text" required  class="form-control" id="nombreas" name="nomalumn"  onfocus="this.placeholder =''" onblur="this.placeholder=''" onkeypress="return soloLetras(event);" autofocus >
                <br>
            </div>
            <div class="col-md-6">
                <label for="apeas" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apeas" name="apealumn"  onkeypress="return soloLetras(event);" required autofocus>
                <br>
            </div>

            <div class="col-md-6">
                <label for="genas" class="form-label">Género</label>
                <input type="text" class="form-control" id="genas" name="genalumn"  onkeypress="return soloLetras(event);" required autofocus>
                <br>
            </div>
            <div class="col-md-6">
                <label for="dateas" class="form-label">Fecha de nacimiento</label>
                <input type="fecha" class="form-control" id="dateas" name="fechaalumn" placeholder="dd/mm/aaaa" onkeypress="return soloNumero(event);" required >
                <br>
            </div>

            <div class="col-md-6">
                <label for="edas" class="form-label">Edad</label>
                <input type="number" class="form-control" id="edas" name="edadalumn"  onkeypress="return soloNumero(event);" required autofocus>
                <br>
            </div>
            <div class="col-md-6">
                <label for="grade" class="form-label">Grado a aspirar</label>
                <input type="text" class="form-control" id="grade" name="gradoalumn" required>
                <br>
            </div>
            <div class="col-md-6">     
                <label for="archivo" class="form-label">Foto del Aspirante</label>
                <input type="file" id="ejemplo_archivo_1" name="fotoalumn" required>
            </div>
            <div class="col-md-6">
                <label for="vive" class="form-label">El aspirante vive con:</label>
                <input type="text" class="form-control" id="vive" name="vivealumn"  onkeypress="return soloLetras(event);" required autofocus >
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <a href="#" class="btn btn-next width-50 ml-auto col-md-6">Siguiente</a>
            </div>
        </div>
      </div>

<!-- Step Dad -->
      <div class="form-step">
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="nombreas" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombreas" name="nombrepa"  onkeypress="return soloLetras(event);" required autofocus>
                <br>
            </div>
            <div class="col-md-6">
                <label for="apeas" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apeas" name="apepa"  onkeypress="return soloLetras(event);" required autofocus>
                <br>
            </div>

            <div class="col-md-6">
                <label for="telda" class="form-label">Telefono</label>
                <input type="number" class="form-control" id="telda" name="telpa" onkeypress="return soloNumero(event);" required>
                <br>
            </div>
            <div class="col-md-6">
                <label for="relda" class="form-label">Religion</label>
                <input type="text" class="form-control" id="relda" name="relipa"  onkeypress="return soloLetras(event);" required autofocus>
                <br>
            </div>

            <div class="col-md-6">
                <label for="emda" class="form-label">Correo</label>
                <input type="email" class="form-control" id="emda" name="correopa" required>
                <br>
            </div>
            <div class="col-md-6">
                <label for="dpida" class="form-label">DPI</label>
                <input type="number" class="form-control" id="dpida" name="dpipa"  onkeypress="return soloNumeros(event);" required autofocus>
                <br>
            </div>

            <div class="col-md-6">
                <label for="proda" class="form-label">Profesión</label>
                <input type="text" class="form-control" id="proda" name="profepa"  onkeypress="return soloLetras(event);" required autofocus>
                <br>
            </div>
            <div class="col-md-6">
                <label for="dateda" class="form-label">Fecha de nacimiento</label>
                <input type="fecha" class="form-control" id="dateda" name="fechapa" placeholder="dd/mm/aaaa" required>
                <br>
            </div>
        </div>
        <div class="btns-group row mb-2">
            <div class="col-mb-6 col-md-6">
                <a href="#" class="btn btn-prev col-mr-5">Anterior</a>    
            </div>
            <div class="col-mb-6 col-md-6">
                <a href="#" class="btn btn-next col-mr-5">Siguiente</a>
            </div>
        </div>
      </div>

      <!-- Steps Mom -->
      <div class="form-step">
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="nombreas" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombreas" name="nombrema"  onkeypress="return soloLetras(event);" required autofocus>
                <br>
            </div>
            <div class="col-md-6">
                <label for="apeas" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apeas" name="apema"  onkeypress="return soloLetras(event);" required autofocus>
                <br>
            </div>

            <div class="col-md-6">
                <label for="telda" class="form-label">Telefono</label>
                <input type="number" class="form-control" id="telda" name="telma" onkeypress="return soloNumero(event);" required>
                <br>
            </div>
            <div class="col-md-6">
                <label for="relda" class="form-label">Religion</label>
                <input type="text" class="form-control" id="relda" name="relima"  onkeypress="return soloLetras(event);" required autofocus>
                <br>
            </div>

            <div class="col-md-6">
                <label for="emda" class="form-label">Correo</label>
                <input type="email" class="form-control" id="emda" name="correoma" required>
                <br>
            </div>
            <div class="col-md-6">
                <label for="dpida" class="form-label">DPI</label>
                <input type="number" class="form-control" id="dpida" name="dpima" onkeypress="return soloNumero(event);" required>
                <br>
            </div>

            <div class="col-md-6">
                <label for="proda" class="form-label">Profesión</label>
                <input type="text" class="form-control" id="proda" name="profema"  onkeypress="return soloLetras(event);" required autofocus>
                <br>
            </div>
            <div class="col-md-6">
                <label for="dateda" class="form-label">Fecha de nacimiento</label>
                <input type="fecha" class="form-control" id="dateda" name="fechama" placeholder="dd/mm/aaaa" required>
                <br>
            </div>
        </div>
        <div class="btns-group row mb-2">
            <div class="col-mb-6 col-md-6">
                <a href="#" class="btn btn-prev col-mr-5">Anterior</a>    
            </div>
            <div class="col-mb-6 col-md-6">
                <a href="#" class="btn btn-next col-mr-5">Siguiente</a>
            </div>
        </div>
      </div>

<!-- Step in charge -->
<div class="form-step">
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="nombreas" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombreas" name="nombreen"  onkeypress="return soloLetras(event);" required autofocus>
            <br>
        </div>
        <div class="col-md-6">
            <label for="apeas" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apeas" name="apeen"  onkeypress="return soloLetras(event);" required autofocus>
            <br>
        </div>

        <div class="col-md-6">
            <label for="telda" class="form-label">Telefono</label>
            <input type="number" class="form-control" id="telda" name="telen" onkeypress="return soloNumero(event);" required>
            <br>
        </div>
        <div class="col-md-6">
            <label for="relda" class="form-label">Religion</label>
            <input type="text" class="form-control" id="relda" name="relien"  onkeypress="return soloLetras(event);" required autofocus>
            <br>
        </div>

        <div class="col-md-6">
            <label for="emda" class="form-label">Correo</label>
            <input type="email" class="form-control" id="emda" name="correoen" required>
            <br>
        </div>
        <div class="col-md-6">
            <label for="dpida" class="form-label">DPI</label>
            <input type="number" class="form-control" id="dpida" name="dpien" onkeypress="return soloNumero(event);" required>
            <br>
        </div>

        <div class="col-md-6">
            <label for="proda" class="form-label">Profesión</label>
            <input type="text" class="form-control" id="proda" name="profeen"  onkeypress="return soloLetras(event);" required autofocus>
            <br>
        </div>
        <div class="col-md-6">
            <label for="dateda" class="form-label">Fecha de nacimiento</label>
            <input type="fecha" class="form-control" id="dateda" name="fechaen" placeholder="dd/mm/aaaa" required>
            <br>
        </div>
    </div>
    <div class="btns-group row mb-2">
        <div class="col-mb-6 col-md-6">
            <a href="#" class="btn btn-prev col-mr-5">Anterior</a>    
        </div>
        <div class="col-mb-6 col-md-6">
            <a href="#" class="btn btn-next col-mr-5">Siguiente</a>
        </div>
    </div>
  </div>

      <!-- Step Documents -->
      <div class="form-step">
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="docda" class="form-label">Copia DPI Padre (ambos lados)</label>
                <input type="file" class="form-control" id="docda" name="docupa" required>
                <br>
            </div>
            <div class="col-md-6">
                <label for="docmo" class="form-label">Copia DPI Madre (ambos lados)</label>
                <input type="file" class="form-control" id="docmo" name="documa" required>
                <br>
            </div>

            <div class="col-md-6">
                <label for="docen" class="form-label">Copia DPI Encargado (ambos lados)</label>
                <input type="file" class="form-control" id="docen" name="docuen" required>
                <br>
            </div>
            <div class="col-md-6">
                <label for="feas" class="form-label">Certificado de nacimiento reciente del aspirante</label>
                <input type="file" class="form-control" id="feas" name="docuas" required>
                <br>
            </div>
        </div>
        <div class="btns-group row mb-2">
            <div class="col-mb-6 col-md-6">
                <a href="#" class="btn btn-prev col-mr-5">Anterior</a>    
            </div>
            <div class="col-mb-6 col-md-6">
                <input type="submit" value="Registrar Alumno" name="enviar" class="btn btn-submit" />
            </div>
        </div>
      </div>
</form>      
      <!-- APPHAND -->
        <br>
<div class="slider-area">
        <div class="single-slider  slider-height2 d-flex align-items-center" data-background="assets/img/social/bg-new-app.png">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <center><img class="img-fluid" src="assets/img/social/apphand.png" alt=""></center>
                    </div>
                    <div class="col-md-4"><br>
                        <h3 style="color:white;" itemprop="headline"><strong>Descarga nuestra App</strong></h3><hr>
                        <p style="color:white;">En Radio Emiliani tenemos la mejor música elegida por los propios estudiantes del Instituto Emiliani Somascos. Gustos para todo público. Contamos con variedad de generos, noticias escolares, podcast y mucho más.</p> 
                        <a href="https://play.google.com/store/apps/details?id=radio.emiliani&hl=es" target="_blank"><img src="assets/img/social/google-play-en@2x.png" height="94" width="300" data-sizes="(max-width: 300px) 100vw, 300px" data-ll-status="loaded" sizes="(max-width: 300px) 100vw, 300px"></a><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
         

        
<?php include("footer.php"); ?>
    