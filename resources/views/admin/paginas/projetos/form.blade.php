					  
{!! csrf_field() !!}
<div class="form-group">
    <label for="title" class="control-label col-sm-2">Nome</label>
    <div class="col-sm-10">
        <input type="text" name="nome" id="nome" class="form-control" value="{{ $projetos->nome ?? '' }}" placeholder="Nome">
    </div>
</div>
<div class="form-group">
    <label for="title" class="control-label col-sm-2">Cliente</label>
    <div class="col-sm-10">
        <input type="text" name="cliente" id="cliente" class="form-control" value="{{ $projetos->cliente ?? '' }}" placeholder="cliente ...">
    </div>
</div>
<div class="form-group">
    <label for="url" class="control-label col-sm-2">Tipo</label>
    <div class="col-sm-10">
        <input type="text" name="tipo" id="tipo" class="form-control" value="{{ $projetos->tipo ?? '' }}" placeholder="Tipo...">
    </div>
</div>
<div class="form-group">
    <label for="body" class="control-label col-sm-2">Descrição do projeto</label>
    <div class="col-sm-10">
        <textarea name="DescricaoProjeto" id="DescricaoProejto" cols="30" rows="10" class="form-control" placeholder="Conteúdo...">{{ $projetos->DescricaoProjeto ?? '' }}</textarea>
    </div>
</div>






<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
        <input type="submit" value="salvar" class="btn btn-primary">
    </div>
</div>









