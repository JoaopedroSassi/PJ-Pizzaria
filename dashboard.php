<?php 
   include_once('templates/header.php');
   include_once('process/orders.php');
?>
   <div id="main-container" class="container-dashboard">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <h2>Gerenciar Pedidos:</h2>
            </div>
            <div class="col-md-12 table-container">
               <table class="table">
                  <thead>
                     <tr>
                        <th scope="col"><span>Pedido</span> #</th>
                        <th scope="col">Borda</th>
                        <th scope="col">Massa</th>
                        <th scope="col">Sabores</th>
                        <th scope="col">Status</th>
                        <th scope="col">Ações</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($pizzas as $pizza): ?>
                        <tr>
                           <td><?php echo $pizza['id'] ?></td>
                           <td><?php echo $pizza['borda'] ?></td>
                           <td><?php echo $pizza['massa'] ?></td>
                           <td>
                              <ul>
                                 <?php foreach ($pizza['sabores'] as $sabor): ?>
                                    <li><?php echo $sabor ?></li>
                                 <?php endforeach; ?> 
                              </ul>
                           </td>
                           <td>
                              <form action="process/orders.php" method="POST" class="form-group update-form">
                                 <input type="hidden" name="type" value="update">
                                 <input type="hidden" name="id" value="<?php echo $pizza['id'] ?>">
                                 <select name="status" class="form-control status-input">
                                 <?php foreach($status as $s): ?>
                                    <option value="<?= $s['id'] ?>" <?php echo ($s['id'] == $pizza['status']) ? "selected" : ""; ?> ><?= $s['tipo'] ?></option>
                                 <?php endforeach; ?>
                                 </select>
                                 <button type="submit" class="update-btn">
                                    <ion-icon name="refresh-outline"></ion-icon>
                                 </button>
                              </form>
                           </td>
                           <td>
                              <form action="process/orders.php" method="POST">
                                 <input type="hidden" name="type" value="delete">
                                 <input type="hidden" name="id" value="<?php echo $pizza['id'] ?>">
                                 <button type="submit" class="delete-btn">
                                    <ion-icon name="close-outline"></ion-icon>
                                 </button>
                              </form>
                           </td>
                        </tr>
                     <?php endforeach; ?> 
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
<?php 
   include_once('templates/footer.php');
?>