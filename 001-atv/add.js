function Adicionar(){
    $("#tblCadastro tbody").append(
        "<tr>"+
        "<td><input type='text'/></td>"+
        "<td><input type='text'/></td>"+
        "<td><input type='text'/></td>"+
        "<td><img src='images/disk.png' class='btnSalvar'>
                       <img src='images/delete.png' class='btnExcluir'/></td>"+
        "</tr>");

        $(".btnSalvar").bind("click", Salvar);
        $(".btnExcluir").bind("click", Excluir);
};
