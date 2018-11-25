<script>
$(document).ready(function()
{	
	alert('working');
	function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#rua").val("");
        $("#bairro").val("");
        $("#cidade").val("");
        //$("#uf").val("");
        
    }
    
    //Quando o campo cep perde o foco.
    $("#cep").blur(function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#rua").val("...");
                $("#bairro").val("...");
                $("#cidade").val("...");
                //$("#uf").val("...");
                //$("#ibge").val("...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#rua").val(dados.logradouro);
                        $("#bairro").val(dados.bairro);
                        $("#cidade").val(dados.localidade);
                        //$("#uf").val(dados.uf);
                        //$("#ibge").val(dados.ibge);
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    });
});

</script>					  
{!! csrf_field() !!}
<div class="form-group">
    <label for="title" class="control-label col-sm-2">Nome</label>
    <div class="col-sm-10">
        <input type="text" name="nome" id="nome" class="form-control" value="{{ $clientes->nome ?? '' }}" placeholder="Nome">
    </div>
</div>
<div class="form-group">
    <label for="title" class="control-label col-sm-2">CNPJ ou CPF</label>
    <div class="col-sm-10">
        <input type="text" name="cnpjCpf" id="cliente" class="form-control" value="{{ $clientes->cnpjCpf ?? '' }}" placeholder="cnpj ou cpf ...">
    </div>
</div>
<div class="form-group">
    <label for="url" class="control-label col-sm-2">CEP</label>
    <div class="col-sm-10">
        <input type="text" name="cep" id="cep" class="form-control" value="{{ $clientes->cep ?? '' }}" placeholder="CEP...">
    </div>
</div>
<div class="form-group">
    <label for="url" class="control-label col-sm-2">Cidade</label>
    <div class="col-sm-10">
        <input type="text" name="cidade" id="cidade" class="form-control" value="{{ $clientes->cidade ?? '' }}" placeholder="Cidade...">
    </div>
</div>
<div class="form-group">
    <label for="url" class="control-label col-sm-2">Bairro</label>
    <div class="col-sm-10">
        <input type="text" name="bairro" id="bairro" class="form-control" value="{{ $clietnes->bairro ?? '' }}" placeholder="Bairro...">
    </div>
</div>
<div class="form-group">
    <label for="url" class="control-label col-sm-2">Rua</label>
    <div class="col-sm-10">
        <input type="text" name="rua" id="rua" class="form-control" value="{{ $clientes->rua ?? '' }}" placeholder="Rua...">
    </div>
</div>
<div class="form-group">
    <label for="url" class="control-label col-sm-2">numero</label>
    <div class="col-sm-10">
        <input type="text" name="numero" id="numero" class="form-control" value="{{ $clientes->numero ?? '' }}" placeholder="Numero...">
    </div>
</div>
<div class="form-group">
    <label for="body" class="control-label col-sm-2">Descrição do cliente</label>
    <div class="col-sm-10">
        <textarea name="descricao" id="DescricaoProejto" cols="30" rows="10" class="form-control" placeholder="Conteúdo...">{{ $clientes->descricao ?? '' }}</textarea>
    </div>
</div>






<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
        <input type="submit" value="salvar" class="btn btn-primary">
    </div>
</div>









