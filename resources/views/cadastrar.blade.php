<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
    <main class="entrar-page">
        <section class="entrar-page__content">
            <section class="presentation-auth-lateral">

                <div class="presentation-auth-lateral__logo-container">
                    <div class="presentation-auth-lateral__logo">
                        <img src="assets/logo_signaal.svg" alt="">
                    </div>
                    <p class="presentation-auth-lateral__description type type--subtitle-1">Ferramenta digital para auxiliar o ensino-aprendizagem de Libras utilizando metodologia ativa e gamificação no ambiente digital.</p>
                </div>

                <div class="presentation-auth-lateral__presentation-image">
                    Aqui vai ficar alguma ilustração
                </div>

            </section>
        </section>

        <section class="entrar-page__form-container">
            <form class="form-auth-lateral" method="post" action="{{ route('register.perform') }}">

                <div class="form-auth-lateral__logo-container">
                    <div class="form-auth-lateral__logo">
                        <img src="assets/logo_signaal.svg" alt="">
                    </div>
                </div>

                <h1 class="form-auth-lateral__title type--headline-3">Entre no Signaal.</h1>
                <h2 class="form-auth-lateral__signup-helper type--headline-6">
                    Primeira vez aqui? <a href="#">criar conta</a>
                </h2>
                <div class="form-auth-lateral__item">
                    <label class="form-auth-lateral__label" for="email">Email</label>
                    <input placeholder="exemplo@gmail.com" type="email" name="email" id="email">
                    <span class="valid-helper">Digite um e-mail válido.</span>
                </div>
                <div class="form-auth-lateral__item">
                    <label class="form-auth-lateral__label" for="senha">Senha</label>
                    <input placeholder="**********" type="password" name="senha" id="senha">
                </div>
                <div class="form-auth-lateral__item">
                    <button class="button button--filled" type="submit">Entrar</button>
                </div>
            </form>
        </section>
    </main>
    <footer></footer>

</body>
</html>
