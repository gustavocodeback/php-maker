<style>
</style>
<h1>Olá, {{ $user_name }}</h1>
<p>
    Caso tenha solicitado a alteração de senha 
    da sua conta {{ site_name() }},
    clique no link abaixo para prosseguir.
</p>
<p>
    Caso não tenha sido você a solicitar essa alteração, ignore este E-mail.
</p>
<p>
    <a href="{{ site_url( 'auth/change_password/'.$token ) }}">Clique aqui para alterar sua senha</a>
</p>