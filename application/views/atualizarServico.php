<?php
include "conecta.php";
$Vcodigo=$_POST["codigo"];
$vnome=$_POST["nome"];
$Vvalor=$_POST["valor"];


$update= mysqli_query($con,"update servicos set nome='$vnome',valor='$Vvalor' where idservico='$Vcodigo'")
 or die ("update servico set nome='$vnome',valor='$Vvalor' where idservico='$Vcodigo'");
if ($update != ''){
echo "<script>alert('Estado Atualizado com Sucesso');</script>";
echo "<script>window.location ='../pesquisas/pesquisaestado';</script>"; 
         
            }					
else{
				
echo "<script>alert('Erro ao atualizar os dados');</script>";	
echo "<script>window.location ='../pesquisas/pesquisaestado';</script>";
            		
				}
?>
