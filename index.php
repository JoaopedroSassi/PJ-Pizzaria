<?php 
   include_once('templates/header.php');
?>
   <div id="main-banner">
      <h1>Faça seu pedido</h1>
   </div>
   <div id="main-container">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <h2>Monte a pizza como desejar:</h2>
               <form action="process/pizza.php" method="POST" id="pizza-form">
                  <div class="form-group">
                     <label for="borda">Borda:</label>
                     <select class="form-control" name="borda" id="borda">
                        <option value="">Selecione a borda</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <label for="massa">Massa:</label>
                     <select class="form-control" name="massa" id="massa">
                        <option value="">Selecione a massa</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <label for="sabores">Sabores: (Máximo 3)</label>
                     <select class="form-control" name="sabores[]" id="sabores" multiple>
                     </select>
                  </div>
                  <div class="form-group">
                     <input type="submit" class="btn btn-primary" value="Fazer pedido">
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
<?php 
   include_once('templates/footer.php');
?>