function validaForm()
{
	var tamanho_nome = document.forms["formCadMens"].tNome.value.length;
	if (tamanho_nome < 5 || tamanho_nome > 64 || tamanho_nome.value == " ")
		{
		alert("O campo 'Nome' deve ter entre 5 e 64 caracteres.");
		return false;
		}
	
	
	/*function TestaCPF(strCPF) {
	    var Soma;
	    var Resto;
	    Soma = 0;
		if (strCPF == "00000000000") 
			document.alert("CPF inválido");
	    
		for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
		Resto = (Soma * 10) % 11;
		
	    	if ((Resto == 10) || (Resto == 11))  
	    		Resto = 0;
	    	if (Resto != parseInt(strCPF.substring(9, 10)) ) 
	    		document.alert("CPF inválido");
		
	    	Soma = 0;
	    	for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
	    	Resto = (Soma * 10) % 11;
		
	    	if ((Resto == 10) || (Resto == 11))  
	    		Resto = 0;
	    	if (Resto != parseInt(strCPF.substring(10, 11) ) ) 
	    		document.alert("CPF inválido");
	    
	    	return true;
	    
	    	
	}
	
	var strCPF = document.forms["formCadMens"].tCPF.value;
	alert(TestaCPF(strCPF));
	*/
	
	var campo_sexo = document.forms["formCadMens"].tSexo;
	var sexo = false;
	for (i=0; i<campo_sexo.length; i++)
		{
		if(campo_sexo[i].checked == true)
			{
			sexo = campo_sexo[i].value;
			break;
			}
		}
	if(sexo == false)
		{
		alert ("O campo 'Sexo' deve ser preenchido.");
		return false;
		
		}
	
	var tamanho_end = document.forms["formCadMens"].tEnd.value.length;
	if (tamanho_end < 10 || tamanho_end > 64)
		{
		alert("O campo 'Endereço' deve ter entre 5 e 64 caracteres.");
		return false;
		}
	
	var tamanho_cep = document.forms["formCadMens"].tCep.value.length;
	if (tamanho_cep != 9)
		{
		alert("O campo 'CEP' deve conter 8 caracteres.");
		return false;
		}
	
	var estado = document.forms["formCadMens"].tEst.selectedIndex;
	if(estado == 0)
		{
		alert("O campo 'Estado' deve ser preenchido.");
		return false;
		
		}
	
	var tamanho_cidade = document.forms["formCadMens"].tCid.value.length;
	if (tamanho_cidade < 3)
		{
		alert("O campo 'Cidade' deve ser preenchido corretamente.");
		return false;
		}
	
	var tamanho_bairro = document.forms["formCadMens"].tBairro.value.length;
	if (tamanho_bairro < 3)
		{
		alert("O campo 'Bairro' deve ser preenchido corretamente.");
		return false;
		}
	
	var email = document.forms["formCadMens"].tEmail.value;
	if(email.length < 5 || email.length > 128 || email.indexOf('@') == -1 || email.indexOf('.') == -1)
		{
		alert("O campo 'Email' deve ser preenchido corretamente.");
		return false;
		}
	
}