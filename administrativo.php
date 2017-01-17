<?php
include_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <body>
        <header>
            <?php
            include_once 'login.php';
            include_once 'homeadm.php';
            ?>
        </header>

        <div class="container conteudo">
            <table class="table"  border="3"  >
                <thead>
                    <tr  style="background-color: #BC320B" >
                        <td class="warning" cold-md-1 > <b> ID </b> </td>
                        <td class="warning" col-md-8> <b> Nome do arquivo </b> </td>
                        <td class="warning"> <b> Data de submissão </b> </td>
                        <td class="warning"> <b> Tipo de Arquivo </b> </td>
                        <td class="warning"> <b> Status</td> </b>
                    </tr>
                    <tr  style="background-color: #BC320B" >
                        <td class="success" cold-md-1>  </td>
                        <td class="success">  </td>
                        <td class="success">  </td>
                        <td class="success">  </td>
                        <td class="success"> <button class="btn " type="submit"> Aprovar</button> </td> 
                    </tr>
                    <tr  style="background-color: #BC320B" >
                        <td class="success" cold-md-1>  </td>
                        <td class="success" col-md-8>  </td>
                        <td class="success">  </td>
                        <td class="success">  </td>
                        <td class="success"> </td> 
                    </tr> 
                </thead>
            </table>
        </div>
<?php
include_once 'footer.php';
?> 