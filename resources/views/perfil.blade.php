<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="/css/style.css" rel="stylesheet">
</head>
<body style="background-color: #F6F7FB;">

    <header class="header">
        <div class="header__container">
            <div class="header__logo">
                <img src="assets/logo_signaal.svg" alt="">
            </div>
            <nav class="header__menu"></nav>
            <div class="header__profile"></div>
        </div>
    </header>

    <main class="home-main">

        <section class="home-main__content">

            <div class="profile-section__container-cover">
                <div class="profile-section__cover">
                    <!-- <img src="https://images.unsplash.com/photo-1517273006195-51fa3364bce2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1073&q=80" alt=""> -->
                </div>
            </div>

            <header class="profile-header">
                <div class="profile-header__item">
                    <div class="profile-header__container-action">
                        <div class="profile-header-photo">
                            <div class="fix-height" style="background-color: rgba(137, 43, 226, 0);"></div>
                            <div class="profile-header-photo__container">

                                <div class="profile-header-photo__pato">
                                    <div class="fix-height" style="background-color: rgba(165, 42, 42, 0);"></div>
                                    <div class="profile-header-photo__galinha">
                                        <div class="profile-header-photo__cachorro">

                                            <a class="profile-header-photo__link-image">

                                                <div class="profile-header-photo__border">
                                                    <div class="profile-header-photo__border-bg"></div>
                                                </div>

                                                <div class="profile-header-photo__avatar">
                                                    <div class="avatar-profile">
                                                        <div class="fix-height"></div>
                                                        <div class="avatar-profile__avatar-container">
                                                            <div class="avatar-profile__container-image">
                                                                <div class="avatar-profile__image-bg" style="background-image: url('https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80');"></div>
                                                                <img class="avatar-profile__image" draggable="true" src="https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="Abre a foto do perfil">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="hover-avatar">
                                                    <div class="hover-avatar__background"></div>
                                                </div>

                                            </a>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="profile-header__menu">
                            <button class="button button--filled type--button">seguir</button>
                        </div>
                    </div>
                </div>
                <div class="profile-header__item">
                    <div class="profile-header__username-container">
                        <div class="profile-header__name type--headline-6">
                            {{ $usuario["primeiroNome"] }} {{ $usuario["segundoNome"] }}
                        </div>
                        <div class="profile-header__username type--body-1">
                            @ {{ $usuario["slug"] }}
                        </div>
                    </div>
                </div>
                <div class="profile-header__item">
                    <div class="profile-header__description-container">
                        <div class="profile-header__description type--body-1">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic harum iusto sequi impedit architecto, eius velit ex consequuntur fugit aspernatur similique reiciendis ipsam a, esse aliquid quis magnam corrupti tenetur.
                        </div>
                    </div>
                </div>

            </header>

        </section>

        <aside class="home-main__aside">
            <section class="card-aside">
                <header class="card-aside__header">
                    <h1>Seu progresso</h1>
                    <button>editar</button>
                </header>
                <div class="card-aside__line">
                </div>
                <div class="card-aside__content">
                    <div class="card-seu-progresso">
                        <div class="card-seu-progresso__icon"></div>
                        <div class="card-seu-progresso__content">
                            <div class="card-seu-progresso__status">
                                <h5>Meta diária</h5>
                                <span>24/50 XP</span>
                            </div>
                            <div class="card-seu-progresso__bar-progress"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="card-aside">
                <header class="card-aside__header">
                    <h1>Seus amigos</h1>
                    <button>Ver todos</button>
                </header>
                <div class="card-aside__line">
                </div>
                <div class="card-aside__content">
                    <ul class="card-seus-amigos">
                        <li class="card-seus-amigos__item">
                            <div class="card-seus-amigos__profile-image"></div>
                            <div class="card-seus-amigos__name">Lorem ipsum</div>
                            <div class="card-seus-amigos__xp">480 XP</div>
                        </li>
                        <li class="card-seus-amigos__item">
                            <div class="card-seus-amigos__profile-image"></div>
                            <div class="card-seus-amigos__name">Lorem ipsum</div>
                            <div class="card-seus-amigos__xp">480 XP</div>
                        </li>
                        <li class="card-seus-amigos__item">
                            <div class="card-seus-amigos__profile-image"></div>
                            <div class="card-seus-amigos__name">Lorem ipsum</div>
                            <div class="card-seus-amigos__xp">480 XP</div>
                        </li>
                        <li class="card-seus-amigos__item">
                            <div class="card-seus-amigos__profile-image"></div>
                            <div class="card-seus-amigos__name">Lorem ipsum</div>
                            <div class="card-seus-amigos__xp">480 XP</div>
                        </li>
                        <li class="card-seus-amigos__item">
                            <div class="card-seus-amigos__profile-image"></div>
                            <div class="card-seus-amigos__name">Lorem ipsum</div>
                            <div class="card-seus-amigos__xp">480 XP</div>
                        </li>
                    </ul>
                </div>
            </section>
        </aside>
    </main>
    <footer></footer>
</body>
</html>
