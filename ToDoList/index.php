<?php 
    require 'tareas.php';
    function home(){
        $titulo = "To Do List";

        
    
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php echo $titulo ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <h1> <?php echo $titulo ?> </h1>
    <div class="conteiner">
        <ul class="list-group">

        <?php 
          foreach(getTareas() as $tarea){
            if($tarea['completada']== 1){
                echo '<li class="list-group-item d-flex justify-content-between align-items-center">'.$tarea['titulo'].': '.$tarea['descripcion'].'<span class="badge text-bg-info">Completada</span></li>';
            }else{
                echo '<li class="list-group-item d-flex justify-content-between align-items-center">'.$tarea['titulo'].': '.$tarea['descripcion'].'<span class="badge text-bg-danger">Sin Completar</span>
                </li>';
            }
          }
        ?>
         </ul>   
    </div>
    <div class="conteiner">
      <h2>Crear tarea</h2>
    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Titulo</label>
    <input type="text" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Descripcion</label>
    <input type="text" class="form-control">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Comppletada</label>
  </div>
  <button type="submit" class="btn btn-outline-primary">Agreagr tarea</button>
</form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>

<?php } ?>

