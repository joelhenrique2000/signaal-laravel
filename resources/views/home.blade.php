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
                        @php
                            $posLicao = true;
                        @endphp
            @foreach($assuntos as $assunto)
                <section>
                    <header class="card-header-licao">
                        <div class="card-header-licao__icon"></div>
                        <div class="card-header-licao__content">
                            <h1>{{ $assunto["titulo"] }}</h1>
                            <p>{{ $assunto["descricao"] }}</p>
                        </div>
                    </header>
                    @foreach($assunto["licoes"] as $licao)

                        @php
                            $link = "/exercicio/{$licao['id']}";

                        @endphp

                        @if ($licao["quantidade_exercicios_respondidos"] == $licao["quantidade_exercicios"])
                            <article class="card-licao card-licao--done">
                                <h1 class="card-licao__title card-licao__title--done">{{ $licao["titulo"] }}</h1>
                                <p class="card-licao__description card-licao__description--done">{{ $licao["descricao"] }}</p>
                                <div class="progress-licao progress-licao--done">
                                    @for  ($i = 1; $i <= $licao["quantidade_exercicios"]; $i++)
                                        <div class="progress-licao__item progress-licao__item--complete"></div>
                                    @endfor
                                </div>
                            </article>
                        @elseif ($licao["quantidade_exercicios_respondidos"] > 0 || $posLicao == true)
                        @php
                            $posLicao = false;
                        @endphp
                            <a href="{{$link}}">
                                <article class="card-licao card-licao--doing">
                                    <h1 class="card-licao__title card-licao__title--doing">{{ $licao["titulo"] }}</h1>
                                    <p class="card-licao__description card-licao__description--doing">{{ $licao["descricao"] }}</p>
                                    <div class="progress-licao progress-licao--doing">
                                        @for  ($i = 1; $i <= $licao["quantidade_exercicios"]; $i++)
                                            @if ($i <= $licao["quantidade_exercicios_respondidos"])
                                                <div class="progress-licao__item progress-licao__item--complete"></div>
                                            @else
                                                <div class="progress-licao__item progress-licao__item--working"></div>
                                            @endif
                                        @endfor
                                    </div>
                                </article>
                            </a>
                        @else
                            <article class="card-licao card-licao--todo">
                                <h1 class="card-licao__title card-licao__title--todo">{{ $licao["titulo"] }}</h1>
                                <p class="card-licao__description card-licao__description--todo">{{ $licao["descricao"] }}</p>
                                <div class="progress-licao progress-licao--todo"></div>
                            </article>
                        @endif
                    @endforeach
                </section>
            @endforeach
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
