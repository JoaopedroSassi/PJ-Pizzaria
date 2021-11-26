<?php 
   include_once('templates/header.php');
   include_once('process/pizza.php');
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
                        <?php foreach($bordas as $borda): ?>
                           <option value="<?php echo $borda['id'] ?>"><?php echo $borda['tipo'] ?></option>
                        <?php endforeach; ?>
                     </select>
                  </div>
                  <div class="form-group">
                     <label for="massa">Massa:</label>
                     <select class="form-control" name="massa" id="massa">
                        <option value="">Selecione a massa</option>
                        <?php foreach($massas as $massa): ?>
                           <option value="<?php echo $massa['id'] ?>"><?php echo $massa['tipo'] ?></option>
                        <?php endforeach; ?>
                     </select>
                  </div>
                  <div class="form-group">
                     <label for="sabores">Sabores: (Máximo 3)</label>
                     <select class="form-control" name="sabores[]" id="sabores" multiple>
                     <?php foreach($sabores as $sabor): ?>
                           <option value="<?php echo $sabor['id'] ?>"><?php echo $sabor['nome'] ?></option>
                        <?php endforeach; ?>
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