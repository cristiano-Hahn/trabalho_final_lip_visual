
<!DOCTYPE html>
<html>
<link rel="icon" href="<?php echo base_url('img/logo.jpg');?>" type="image/x-icon">

<head>
</head>
						
<body>

<?php
include "menucadastro.php";
include 'conecta.php';


$sqlcliente= mysqli_query($con, "SELECT * FROM cliente");


if(!empty($_GET['resposta'])){

    if($_GET['resposta']=='1'){
    echo "<script>alert('Cadastro Efetuado com Sucesso!');</script>";
    }
    else{
    echo "<script>alert('Erro ao efetuar cadastro!);</script>";
    }
    
}

?>
    <section class="content">
        <div class="container-fluid">

            <!-- #END# Inline Layout | With Floating Label -->
            <!-- Multi Column -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                          <form action="<?php echo site_url("cadastros/adicionarveiculo")?>" method="POST">
                            <div class="row clearfix">
                           <div class="body">
                            <ul class="list-group">
                            <center>
                                <li class="list-group-item list-group-item-info"><h4>Cadastro Veiculo</h4></li>
                                </center>
                            </ul>
                        </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label> Placa</label>
                                            <input type="text" class="form-control" name="placa" required>
                                        </div>
                                    </div>
                                </div>  
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label> Ano</label>
                                            <input type="text" class="form-control" name="ano" required>
                                        </div>
                                    </div>
                                </div>  
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label> Modelo</label>
                                            <input type="text" class="form-control" name="modelo" required>
                                        </div>
                                    </div>
                                </div>
                                                                           
                          <div class="col-md-3">
                                   
                                        <div class="form-line">
                                        <label>Cliente</label><br>
                                            <select   class="form-control" name="cliente" id="cliente">
                                            <option>Selecione...</option>
                                            <?php
                                                while ($qrycliente = mysqli_fetch_array($sqlcliente))   {
                                                ?>
                                                <option value="<?php echo $qrycliente['idcliente']; ?>">
                                                <?php echo $qrycliente['nome']; ?></option>";
                                                <?php
                                                }
                                            ?>	
                                            </select>
                                        </div>                                
                                </div>  
                            </div>
                            
<center>
                                
                            <button type="submit" class="btn btn-success waves-effect">Cadastrar</button>
                            
                            </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Multi Column -->
        </div>
    </section>

</body>

</html>