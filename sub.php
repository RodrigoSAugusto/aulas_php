<table class='table table-bordered'>
            <thead>
                <tr>
                    <th colspan='2' center><?php echo $cabecalho ?></th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan='2'><?php echo 'Nome: ' . $nome; ?></td>
                    
                </tr>
                <tr>
                    <td rowspan=''><?php echo 'Idade: ' . $idade; ?></td>
                    <td rowspan=''><?php echo 'E-mail: ' . $email; ?></td>
                </tr>
                <tr>
                    <td colspan='2'><?php echo 'Sexo: ' . $sexo; ?></td>
                    
                </tr>
                <tr>
                    <td colspan='2' style='text-align: center; vertical-align: middle;'><?php echo 'Observações: ' . $obs; ?></td>
                    
                </tr>
            </tbody>   
        </table>