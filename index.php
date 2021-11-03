<?php include("db.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>empleados</title>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>

<body>
    <div class="container p-4">

    <div class="col-md-10">
        <div class="card card-body">
        <form action="save.php" method="POST">
  
    <legend>CREAR EMPLEADO</legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Nombre completo *</label>
      <input type="text" name="nombre" id="disabledTextInput" class="form-control" placeholder="Escribe tu nombre completo...">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Correo Electonico *</label>
      <input type="text" name="email" id="disabledTextInput" class="form-control" placeholder="Escribe tu correo Electronico...">
    </div>

    <div class="form-check">
  <label class="form-check-label" for="flexRadioDefault3">Sexo</label></br>    
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Femenino
  </label>
</div>
<div class="form-check">

  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Masculino
  </label>
</div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Área</label>
      <select id="disabledSelect" class="form-select">
        <option>Ventas</option>
        <option>Calidad</option>
        <option>Producción</option>
      </select>
    </div>
    <div class="input-group">
  <span class="input-group-text">Descripción</span>
  <textarea class="form-control" aria-label="With textarea"></textarea>
</div>
    <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" >
        <label class="form-check-label" for="disabledFieldsetCheck">
         Deseo recibir Boletin informativo
        </label>
      </div>
    

    <h6>Rol*</h6>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" >
        <label class="form-check-label" for="disabledFieldsetCheck">
        Profesional de proyectos-Desarrollador
        </label>
      </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" >
        <label class="form-check-label" for="disabledFieldsetCheck">
         Gerente estratégico
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck">
        <label class="form-check-label" for="disabledFieldsetCheck">
         Auxiliar administrativo
        </label>
      </div>
     
      </div>
    
    <button type="submit" name"guardar" class="btn btn-primary">Guardar</button>
    </div>
    </div>
    </div>
  
 
</form>

        </div>
    

    <div class="col-md-8">


    </div>


    </div>


    <!-- Scripts-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   </body>

</html>