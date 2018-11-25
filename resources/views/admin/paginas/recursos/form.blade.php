					  
{!! csrf_field() !!}
<div class="form-group">
    <label for="title" class="control-label col-sm-2">Titulo</label>
    <div class="col-sm-10">
        <input type="text" name="titulo" id="titulo" class="form-control" value="{{ $atividades->titulo ?? '' }}" placeholder="Titulo">
    </div>
</div>
<div class="form-group">
    <label for="title" class="control-label col-sm-2">Atividades</label>
    <div class="col-sm-10">
        <input type="text" name="atividade" id="atividade" class="form-control" value="{{ $atividades->atividade ?? '' }}" placeholder="atividades ...">
    </div>
</div>
<div class="form-group">
    <label for="url" class="control-label col-sm-2">Custo</label>
    <div class="col-sm-10">
        <input type="money" name="custo" id="cep" class="form-control" value="{{ $atividades->custo ?? '' }}" placeholder="Custo da atividade...">
    </div>
</div>


<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
        <input type="submit" value="salvar" class="btn btn-primary">
    </div>
</div>









