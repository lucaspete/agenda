    <div class="col-md-12">
    <div class="card strpied-tabled-with-hover">
    <table class="table table-hover">
    <thead class="thead-light">   
        <tr>
            <td>Nome</td>
            <td>Telefone</td>
            <td>Email</td>
            <td> </td>
        </tr>
    </thead>

    <?php
    foreach($tabela as $linha){
        echo "<tr>".
                "<td>". $linha->nome . "</td>".
                "<td>". $linha->telefone . "</td>".
                "<td>". $linha->email . "</td>".
                "<td><a class='btn btn-fill btn-warning' href='/agenda/index.php/contatos/alterar/"  . $linha->id . " '>  Alterar  </a>"  . 
                "  <td>        <a  class='btn btn-fill btn-danger' href='/agenda/index.php/contatos/excluir/" . $linha->id . " '>  Excluir </td>" .
                "</tr>";
    }
    ?>
    
</table>
</div>