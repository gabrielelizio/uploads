<?php

include_once	("../lib/verifica-login.php");
$mod_Title="Usuários";

$mod_title_datagerid="Usuários";
$mod_width_heigth="width:700px;height:350px";

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> <?php echo $mod_Title; ?>  </title>
    <link rel="stylesheet" type="text/css" href="../easyui/themes/bootstrap/easyui.css">
    <link rel="stylesheet" type="text/css" href="../easyui/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="../easyui/themes/color.css">
    <link rel="stylesheet" type="text/css" href="../easyui/demo.css">

		<script type="text/javascript" src="../easyui/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="../easyui/jquery.easyui.min.js"></script>

</head>
<body>



    <table id="dg" title="<?php echo $mod_title_datagerid; ?>"
		class="easyui-datagrid" style="<?php echo $mod_width_heigth;?>"
    url="get.php"
    toolbar="#toolbar"
		pagination="true"
    rownumbers="true"
		fitColumns="true"
		singleSelect="true">
        <thead>
            <tr>
                <th field="firstname" width="50">Login</th>
                <th field="lastname" width="50">Nome</th>
                <th field="phone" width="50">Telefone</th>
                <th field="email" width="50">Email</th>
                <th field="cpf" width="50">CPF</th>
            </tr>
        </thead>
    </table>
    <div id="toolbar">
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="novo()">Novo</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="edit()">Editar</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="remover()">Remover</a>
    </div>

    <div id="dlg" class="easyui-dialog" style="width:500px"
            closed="true" buttons="#dlg-buttons">
        <form id="fm" method="post" novalidate style="margin:0;padding:20px 50px">
            <div style="margin-bottom:20px;font-size:14px;border-bottom:1px solid #ccc">Informações</div>
            <div style="margin-bottom:10px">
                <input name="firstname" class="easyui-textbox" required="true" label="Nome:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="lastname" class="easyui-textbox" required="true" label="Sobrenome:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="phone" class="easyui-textbox" required="true" label="Telefone:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="email" class="easyui-textbox" required="true" validType="E-mail" label="Email:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="cpf" class="easyui-textbox" required="true" validType="CPF" label="CPF:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="pass" class="easyui-textbox" required="true" type="password" label="Senha:" style="width:100%">
            </div>
            <label for="">Função:</label>
            <select id="funcao" class="easyui-combobox" name="funcao" style="width: 200px">
                <option value="1">Professor</option>
                <option value="0">SICP</option>
            </select>
        </form>
    </div>
    <div id="dlg-buttons">
        <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="Salvar()" style="width:90px">Salvar</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancelar</a>
    </div>
    <script type="text/javascript">
        var url;
        function novo(){
            $('#dlg').dialog('open').dialog('center').dialog('setTitle','Novo');
            $('#fm').form('clear');
            url ='save.php';
        }
        function edit(){
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $('#dlg').dialog('open').dialog('center').dialog('setTitle','Editar');
                $('#fm').form('load',row);
                url = 'update.php?id='+row.id;
            }
        }
        function Salvar(){
            $('#fm').form('submit',{
                url: url,
                onSubmit: function(){
                    return $(this).form('validate');
                },
                success: function(result){
                    var result = eval('('+result+')')
                    if (result.errorMsg){
                        $.messager.show({
                            title: 'Error',
                            msg: result.errorMsg
                        })
                    } else {
                        $('#dlg').dialog('close');        // close the dialog
                        $('#dg').datagrid('reload');    // reload the user data
                    }
                }
            });
        }
        function remover(){
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $.messager.confirm('Confirm','Remover registro?',function(r){
                    if (r){
                        $.post('destroy.php',{id:row.id},function(result){
                            if (result.success){
                                $('#dg').datagrid('reload');    // reload the user data
                            } else {
                                $.messager.show({    // show error message
                                    title: 'Error',
                                    msg: result.errorMsg
                                });
                            }
                        },'json');
                    }
                });
            }
        }
    </script>

</body>
</html>
