<div class="panel-heading">Bem Vindo(a) {{Auth::user()->name}}!</div>

<div class="panel-body">
    Seu email de login é [{!! protectEmail(Auth::user()->email) !!}]
</div>