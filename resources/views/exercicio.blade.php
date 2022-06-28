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
    <main class="exercicio-main">
        <input type="text" name="respostaId" hidden="true">

        <div class="exercicio-main__progressbar">
            <div class="progress-exercicio">
                <div class="progress-exercicio__close-btn"></div>
                <div class="progress-exercicio__progress-bar">
                    <div class="progress">
                        @php
                            $widthCss = 'width: '.$porcentagem_exercicios_respondidos."%;";
                        @endphp
                        <div class="progress__bar" role="progressbar" style="{{$widthCss}}" aria-valuenow="{{$porcentagem_exercicios_respondidos}}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="progress-exercicio__closes-btn">{{$quantidade_exercicios_respondidos}} / {{ $quantidade_exercicios }}</div>
            </div>
        </div>

        <div class="exercicio-main__exercicio">
            <div class="exercicio-content">
                <h1 class="exercicio-content__title type--headline-5" id="group_label_pergunta">{{$exercicio["enunciado"]}}</h1>
                <div class="group-radiogroup-exercicio" aria-label="escolha" aria-labelledby="group_label_pergunta" role="radiogroup" id="rb_pergunta">
                    @foreach($exercicio["respostas"] as $resposta)

                        <div class="group-radiogroup-exercicio__item" data-value="{{ $resposta['id'] }}" aria-checked="false" aria-disabled="false" role="radio" tabindex="-1">
                            {{ $resposta["enunciado"] }}
                        </div>

                    @endforeach
                </div>
            </div>
        </div>

        <div class="exercicio-main__action">
            <!-- neutro -->
            <div id="footer-neutro" class="exercicio-player-footer">
                <div class="exercicio-player-footer__container">
                    <div>
                        <button id="btnVerificar" class="button button--filled" type="submit">Verificar</button>
                    </div>
                </div>
            </div>

            <!-- certo -->
            <div id="footer-correto" style="display: none;"  class="exercicio-player-footer exercicio-player-footer--correct">
                <div class="exercicio-player-footer__container exercicio-player-footer__container--correct">
                    <div class="exercicio-player-footer__item-status">
                        <div class="badge-status">

                        </div>
                        <div class="exercicio-player-footer__text-status type--headline-5">
                            Muito bem, você acertou.
                        </div>
                    </div>
                    <div class="exercicio-player-footer__item-action">
                        <button class="button button--filled" onclick="refresh()" type="button">Continuar</button>
                    </div>
                </div>
            </div>

            <!-- incorreto -->
            <div id="footer-incorreto" style="display: none;" class="exercicio-player-footer exercicio-player-footer--incorrect">
                <div class="exercicio-player-footer__container exercicio-player-footer__container--incorrect">
                    <div class="exercicio-player-footer__item-status">
                        <div class="badge-status">

                        </div>
                        <div class="exercicio-player-footer__text-status type--headline-5">
                            Ops! Parece que você errou.
                        </div>
                    </div>
                    <div class="exercicio-player-footer__item-action">
                        <button class="button button--filled" onclick="refresh()" type="button">Continuar</button>
                    </div>
                </div>
            </div>
        </div>

    </main>
<script>
    this.document.querySelector('#btnVerificar').addEventListener('click', () => {

        var url = '{{ route("cadastrarResposta", ":id") }}';
        url = url.replace(':id', document.getElementsByName("respostaId").value);

        $.ajax({
            type : "POST",
            url : url,
            success:function(response){
                if (response.isAcertou) {
                    document.querySelector('#footer-neutro').style.display = 'none';
                    document.querySelector('#footer-correto').style.display = 'flex';
                } else {
                    document.querySelector('#footer-neutro').style.display = 'none';
                    document.querySelector('#footer-incorreto').style.display = 'flex';
                }
            }
        });



    });

    function refresh() {
        document.location.reload(true);
    }
</script>
    <script src="/js/exercicio.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
</body>
</html>
