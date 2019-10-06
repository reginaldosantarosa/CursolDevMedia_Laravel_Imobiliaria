<div class="input-field">
    <input type="text" name="name" class="validate" value=" {{ isset($usuario->name) ? $usuario->name : ''}}" >
    <label>Nome</label>
</div>

<div class="input-field">
    <input class="validate" name="email" type="text" value=" {{ isset($usuario->email) ? $usuario->email : ''}}">
    <label>E-mail</label>
</div>

<div class="input-field">
    <input type="password" name="password" class="validate">
    <label>Senha</label>
</div>