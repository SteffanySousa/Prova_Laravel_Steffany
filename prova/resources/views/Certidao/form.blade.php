<div class="form-group">
    <label for="tipo_certidao">Tipo certidão</label>
    <input type="text" class="form-control" id="tipo_certidao" name="tipo_certidao" value="{{$certidao->tipo_certidao ?? ''}}">
</div>
<div class="form-group">
    <label for="nome_envolvido1">Nome envolvido 1</label>
    <input type="text" class="form-control" id="nome_envolvido1" name="nome_envolvido1" value="{{$produto->nome_envolvido1 ?? ''}}">
</div>
<div class="form-group">
    <label for="nome_envolvido2">Nome envolvido 2</label>
    <input type="text" class="form-control" id="nome_envolvido2" name="nome_envolvido2" value="{{$produto->nome_envolvido2 ?? ''}}">
</div>
<div class="form-group">
    <label for="data_da_certidao">Data da Certidão</label>
    <input type="date" class="form-control" id="data_da_certidao" name="data_da_certidao" value="{{$produto->data_da_certidao ?? ''}}">
</div>
<div class="form-group">
    <label for="nome_tabeliao">Nome do tabelião</label>
    <select class="form-control" id="nome_tabeliao" name="nome_tabeliao" value="{{$produto->nome_tabeliao ?? ''}}">
      <option selected>Escolher Tabelião...</option>
      <option>...</option>
</div>
