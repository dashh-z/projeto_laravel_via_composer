{{ $slot }}

    
<form action={{ route('site.contato') }} method="post">
    @csrf
    <input name="nome" value="{{ old('nome')}}" type="text" placeholder="Nome" class="{{ $classe }}">
    <br>
    <input name="telefone" value="{{ old('telefone')}}" type="text" placeholder="Telefone" class="{{ $classe }}">
    <br>
    <input name="email" value="{{ old('email')}}" type="text" placeholder="E-mail" class="{{ $classe }}">
    <br>
    <select name="motivo_contato" class="{{ $classe }}">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" class="{{ $classe }}">
        @if(old('mensagem') != '')
            {{ old('mensagem') }}
        @else
            Preencha aqui a sua mensagem
        @endif
    </textarea>
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>

<div style="position:absolute; top:80px; left:0px; width:100px;">
    <pre>
        {{ print_r($errors) }}
    </pre>
</div>
