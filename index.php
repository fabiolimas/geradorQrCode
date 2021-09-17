
<?php
	include "../cabecalho2.php";
?>
    <div class="interfaceqr">
        <h3>Gerador de QR Code</h3><br>
    <form action="vendor/geraQr.php" method="post">
    <div class="form-group">
    <label for="exampleInputEmail1">URL:</label>
    <input type="text" class="form-control" id="url" aria-describedby="url" name="url" size="50" placeholder="Cole aqui a url" required>
    
  </div>
  <button type="submit" class="btn btn-primary">Gerar QR Code</button>
        
    </form>
</div>
</body>
</html>
