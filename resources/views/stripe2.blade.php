<!DOCTYPE html>
<html>
<head>
    <title>Tiendas Lay Stripe Checkout</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style type="text/css">
        body {
            color: #000;
            overflow-x: hidden;
            height: 100%;
            background-color: #0a0202;
            background-repeat: no-repeat
        }

        .card {
            padding: 30px 25px 35px 50px;
            border-radius: 30px;
            box-shadow: 0px 4px 8px 0px #ffffff;
            margin-top: 50px;
            margin-bottom: 50px
        }

        .border-line {
            border-right: 1px solid #BDBDBD
        }

        .text-sm {
            font-size: 13px
        }

        .text-md {
            font-size: 18px
        }

        .image {
            width: 60px;
            height: 30px
        }

        ::placeholder {
            color: grey;
            opacity: 1
        }

        :-ms-input-placeholder {
            color: grey
        }

        ::-ms-input-placeholder {
            color: grey
        }

        input {
            padding: 2px 0px;
            border: none;
            border-bottom: 1px solid lightgrey;
            margin-bottom: 5px;
            margin-top: 2px;
            box-sizing: border-box;
            color: #000;
            font-size: 16px;
            letter-spacing: 1px;
            font-weight: 500
        }

        input:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border-bottom: 1px solid #EF5350;
            outline-width: 0
        }

        button:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            outline-width: 0
        }

        .btn-red {
            background-color: #DA1192FF;
            color: #fff;
            padding: 8px 25px;
            border-radius: 50px;
            font-size: 18px;
            letter-spacing: 2px;
            border: 2px solid #fff
        }

        .btn-red:hover {
            box-shadow: 0 0 0 2px #da1192
        }

        .btn-red:focus {
            box-shadow: 0 0 0 2px #DA1192FF !important
        }

        .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
            background-color: #0a0202
        }

        @media screen and (max-width: 575px) {
            .border-line {
                border-right: none;
                border-bottom: 1px solid #EEEEEE
            }
        }
    </style>
</head>
<body>
<form role="form"
      action="{{ route('stripe.post') }}"
      method="post"
      class="require-validation"
      data-cc-on-file="false"
      data-stripe_publishable_key="{{ env('STRIPE_KEY') }}"
      id="payment-form">
    @csrf
    <div class="container-fluid px-1 px-md-2 px-lg-4 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-sm-11">
                <div><img src="{{ asset('images/LogoTiendasLauMX.png') }}" alt="" class="card-title"></div>
                <div class="card border-0">
                    <div class="row justify-content-center">
                        <h3 class="mb-4">Confirma tu forma de pago {{config('services.stripe.private') }}</h3>
                    </div>
                    <div class="row">
                        <div class="col-sm-7 border-line pb-3">
                            <div class="form-group">
                                <p class="text-muted text-sm mb-0">Nombre completo (como aparece en la tarjeta)</p>
                                <input type="text" name="name" placeholder="Name" size="15">
                            </div>
                            <div class="form-group">
                                <p class="text-muted text-sm mb-0">Número de tarjeta</p>
                                <div class="row px-3">
                                    <input type="text" name="card-num" placeholder="0000 0000 0000 0000" size="18"
                                           id="cr_no" minlength="16" maxlength="16" class="card-number">
                                </div>
                            </div>
                            <div class="form-group">
                                <p class="text-muted text-sm mb-0">Mes de expiración (03)</p> <input type="text" name="exp" placeholder="MM" size="6"
                                                                                          id="exp" minlength="2" maxlength="2" class="card-expiry-month">
                            </div>
                            <div class="form-group">
                                <p class="text-muted text-sm mb-0">Año de expiración (2001)</p> <input type="text" name="exp" placeholder="YYYY" size="6"
                                                                                           id="exp" minlength="4" maxlength="4" class="card-expiry-year">
                            </div>
                            <div class="form-group">
                                <p class="text-muted text-sm mb-0">CVV/CVC</p> <input type="password" name="cvv" class="card-cvc"
                                                                                      placeholder="000" size="1" minlength="3" maxlength="3">
                            </div>
                        </div>
                        <div class="col-sm-5 text-sm-center justify-content-center pt-4 pb-4"> <small class="text-sm text-muted">Número de orden</small>
                            <h5 class="mb-5">TL-2021-0010</h5> <small class="text-sm text-muted">Monto a pagar</small>
                            <div class="row px-3 justify-content-sm-center">
                                <input type="hidden" name="amount_vl" value="{{ $amount }}">
                                @foreach($skus as $key => $sku)
                                    <input type="hidden" name="compra[]" value="{{ $sku }}">
                                @endforeach
                                <h2 class=""><span class="text-md font-weight-bold mr-2">$</span><span class="text-danger">{{ $amount }}</span></h2>
                            </div> <button type="submit" class="btn btn-red text-center mt-4">Pagar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>

{{--<script>--}}
{{--    $(document).ready(function(){--}}

{{--//For Card Number formatted input--}}
{{--        var cardNum = document.getElementById('cr_no');--}}
{{--        cardNum.onkeyup = function (e) {--}}
{{--            if (this.value == this.lastValue) return;--}}
{{--            var caretPosition = this.selectionStart;--}}
{{--            var sanitizedValue = this.value.replace(/[^0-9]/gi, '');--}}
{{--            var parts = [];--}}

{{--            for (var i = 0, len = sanitizedValue.length; i < len; i +=4) { parts.push(sanitizedValue.substring(i, i + 4)); } for (var i=caretPosition - 1; i>= 0; i--) {--}}
{{--                var c = this.value[i];--}}
{{--                if (c < '0' || c> '9') {--}}
{{--                    caretPosition--;--}}
{{--                }--}}
{{--            }--}}
{{--            caretPosition += Math.floor(caretPosition / 4);--}}

{{--            this.value = this.lastValue = parts.join(' ');--}}
{{--            this.selectionStart = this.selectionEnd = caretPosition;--}}
{{--        }--}}

{{--        //For Date formatted input--}}
{{--        var expDate = document.getElementById('exp');--}}
{{--        expDate.onkeyup = function (e) {--}}
{{--            if (this.value == this.lastValue) return;--}}
{{--            var caretPosition = this.selectionStart;--}}
{{--            var sanitizedValue = this.value.replace(/[^0-9]/gi, '');--}}
{{--            var parts = [];--}}

{{--            for (var i = 0, len = sanitizedValue.length; i < len; i +=2) { parts.push(sanitizedValue.substring(i, i + 2)); } for (var i=caretPosition - 1; i>= 0; i--) {--}}
{{--                var c = this.value[i];--}}
{{--                if (c < '0' || c> '9') {--}}
{{--                    caretPosition--;--}}
{{--                }--}}
{{--            }--}}
{{--            caretPosition += Math.floor(caretPosition / 2);--}}

{{--            this.value = this.lastValue = parts.join('/');--}}
{{--            this.selectionStart = this.selectionEnd = caretPosition;--}}
{{--        }--}}

{{--    });--}}
{{--</script>--}}
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
    $(function() {
        var $form = $(".require-validation");
        $('form.require-validation').bind('submit', function(e) {
            var $form = $(".require-validation"),
                inputSelector = ['input[type=email]', 'input[type=password]',
                    'input[type=text]', 'input[type=file]',
                    'textarea'
                ].join(', '),
                $inputs = $form.find('.required').find(inputSelector),
                $errorMessage = $form.find('div.error'),
                valid = true;
            $errorMessage.addClass('hide');
            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorMessage.removeClass('hide');
                    e.preventDefault();
                }
            });
            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                var key = "pk_test_51JvYOzAgmIGXfk00amNK0buCGO2OT8kQqVxafhXC8tOsTEi0AY426gogsZ1lcO71VYXSI3OopmVFCuO1Hg9iax9G00wGZE4ZS8"
                Stripe.setPublishableKey(key);
                Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeResponseHandler);
            }
        });
        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                /* token contains id, last4, and card type */
                var token = response['id'];
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }
    });
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if (Session::has('success'))
    <script>
        Swal.fire(
            'Excelente!',
            'Hemos registrado tu pago, en breve recibiras un correo electrónico cofnrimando tu orden!',
            'success'
        ).then(function() {
            window.location = "/";
        });
    </script>
@endif
@if (Session::has('fail'))
    <script>
        Swal.fire(
            'Que Cagada!',
            'Tas pelando menor!',
            'danger'
        )
    </script>
@endif
</html>
