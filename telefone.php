<html>
<head>
    <title>Mascara Telefone</title>
    
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="https://raw.githubusercontent.com/digitalBush/jquery.maskedinput/master/dist/jquery.maskedinput.min.js"></script>

    <script>
// <![CDATA[
jQuery(function($) {
	$.mask.definitions['~']='[+-]';
	//Inicio Mascara Telefone
	$('input[type=tel]').focusout(function(){
		var phone, element;
		element = $(this);
		element.unmask();
		phone = element.val().replace(/\D/g, '');
		if(phone.length > 10) {
			element.mask("(99) 99999-999?9");
		} else {
			element.mask("(99) 9999-9999?9");
		}
	}).trigger('focusout');
	//Fim Mascara Telefone
	$("#cpf").mask("999.999.999-99");
	$("#rg").mask("99.999.999-*");
});
// ]]>
    
    </script>

 
</head>
<body>
    <ul>
        <li><label for="nome">Nome: </label><input type="text" id="nome" /></li>
        <li><label for="celular">Celular: </label>
        <input type="tel" id="celular" /></li>
        <li><label for="rg">RG: </label><input type="text" id="rg" /></li>
        <li><label for="cpf">CPF: </label><input type="text" id="cpf" /></li>
        <li class="button"><button>Enviar</button></li>
    </ul>
    
    
    
</body>
</html>
