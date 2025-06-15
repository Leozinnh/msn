<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>MSN Messenger</title>
    <base href="./">

    <style>
        * {
            /* font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif !important; */
            box-sizing: border-box !important;
        }

        body {
            background: #2c2b5c;
        }

        .container {
            display: flex;
            justify-content: center;
            margin: 1em auto;
        }

        img {
            user-select: none !important;
        }
    </style>

    <script>
        window.console = window.console || function(t) {};
    </script>

</head>

<body translate="no">
    <div class="container">
        <msn-messenger-window>
            <template shadowrootmode="open">
                <style>
                    :host {
                        --width: 475px;
                        --height: 400px;
                        --border-radius: 6px;
                    }

                    .container {
                        width: var(--width);
                        height: var(--height);
                        min-width: 300px;
                        min-height: 555px;
                        max-width: calc(var(--width) + 100px);
                        max-height: calc(var(--height) + 100px);
                        background: #D7E4F5 url(./images/ui/main-background.png) bottom right no-repeat;
                        border-radius: var(--border-radius);

                        display: flex;
                        flex-direction: column;
                        justify-content: space-between;

                        overflow: hidden;
                        box-shadow:
                            2px 2px 5px #0009,
                            5px 5px 10px #000c;
                        position: relative;

                        padding: 5px;
                        resize: both;
                    }

                    .border-window {
                        position: absolute;
                        bottom: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background-image:
                            url(./images/ui/main-corner-top-left.png),
                            url(./images/ui/main-corner-top-right.png),
                            url(./images/ui/main-top.png),
                            url(./images/ui/main-corner-left.png),
                            url(./images/ui/main-corner-right.png),
                            url(./images/ui/main-left.png),
                            url(./images/ui/main-right.png),
                            url(./images/ui/main-bottom2.png);
                        background-repeat: no-repeat, no-repeat, repeat-x, no-repeat, no-repeat, repeat-y, repeat-y, repeat-x;
                        background-position: top left, top right, top, bottom left, bottom -5px right -5px, bottom left, bottom right, bottom;
                        pointer-events: none;
                    }
                </style>
                <div class="container">
                    <msn-messenger-toolbar>
                        <template shadowrootmode="open">
                            <style>
                                .container {
                                    width: 100%;
                                    height: 100%;
                                    border-radius: var(--border-radius) var(--border-radius) 0 0;
                                    position: relative;
                                }

                                .toolbar-container {
                                    justify-content: flex-end;
                                    align-items: center;
                                }

                                .toolbar-small-container {
                                    height: 100%;
                                }

                                .toolbar-small-container .center {
                                    background:
                                        url(./images/ui/msn-logo.png) top left 4px;
                                    background-repeat: no-repeat, repeat-x;
                                }

                                .center .buttons {
                                    display: flex;
                                    gap: 0 4px;
                                    transform: translate(2px, 23px);
                                }

                                .center image-circular-button {
                                    --size: 19px;
                                    --image-size: 13px;
                                }

                                .up-down {
                                    --image-size: 15px;
                                    position: absolute;
                                    top: 2px;
                                    left: 2px;
                                }

                                .up-logo {
                                    position: absolute;
                                    top: -2px;
                                    left: 20px;
                                }
                            </style>
                            <div class="container">
                                <div class="toolbar-container">
                                    <image-circular-button class="up-down" image="up-down">
                                        <template shadowrootmode="open">
                                            <style>
                                                .container {
                                                    width: var(--size, 16px);
                                                    height: var(--size, 16px);
                                                    display: flex;
                                                    justify-content: center;
                                                    align-items: center;
                                                    background: url(./images/ui/small-circle-button.png) no-repeat;
                                                    background-size: cover;
                                                }

                                                .container img {
                                                    width: var(--image-size, 11px);
                                                    height: var(--image-size, 11px);
                                                }
                                            </style>
                                            <div class="container">
                                                <img src="./images/ui/small-up-down.png" alt="up-down">
                                            </div>
                                        </template>
                                    </image-circular-button>
                                    <image-circular-button class="up-logo" image="up-logo">
                                        <template shadowrootmode="open">
                                            <style>
                                                .container {
                                                    width: fit-content;
                                                    height: fit-content;
                                                    display: flex;
                                                    justify-content: center;
                                                    align-items: center;
                                                }

                                                b {
                                                    font-size: 15px;
                                                    font-weight: 600;
                                                    color: #0b2c90;
                                                    margin-top: 5px;
                                                    margin-left: 4px;
                                                }
                                            </style>
                                            <div class="container">
                                                <img width="40px" height="20px" src="./images/ui/msn-logo.png">
                                                <b>Login</b>
                                            </div>
                                        </template>
                                    </image-circular-button>
                                </div>
                            </div>
                        </template>
                    </msn-messenger-toolbar>
                    <msn-messenger-auth>
                        <template shadowrootmode="open">
                            <style>
                                .container {
                                    width: 100%;
                                    height: 92%;
                                    display: flex;
                                    flex-direction: column;
                                    align-items: center;
                                    justify-content: center;
                                    padding: 4px 0;
                                }
                            </style>
                            <div class="container">
                                <msn-messenger-avatar image="msn">
                                    <template shadowrootmode="open">
                                        <style>
                                            .container {
                                                width: 114px;
                                                height: 100px;
                                                display: flex;
                                                justify-content: center;
                                                align-items: center;
                                                flex-direction: column;
                                                border-radius: 8px;
                                                position: relative;
                                            }

                                            .picture {
                                                width: 96px;
                                                height: 96px;
                                                border: 1px solid #586170;
                                                border-radius: 8px;
                                            }
                                        </style>
                                        <div class="container">
                                            <img class="picture" src="./images/ui/msn.png" alt="Avatar">
                                        </div>
                                    </template>
                                </msn-messenger-avatar>
                                <msn-messenger-form>
                                    <template shadowrootmode="open">
                                        <style>
                                            .container {
                                                width: fit-content;
                                                height: fit-content;
                                                display: flex;
                                                justify-content: center;
                                                align-items: center;
                                                flex-direction: column;
                                                border-radius: 8px;
                                                position: relative;
                                            }


                                            div.form-control {
                                                position: relative;
                                                width: 100%;
                                                margin-top: 8px;
                                                display: flex;
                                                flex-direction: column;
                                            }

                                            div.form-control label {
                                                display: block;
                                                margin-bottom: 4px;
                                                color: #0b2c90;
                                                font-size: 13px;
                                                font-weight: 500;
                                                font-family: system-ui;
                                            }

                                            div.form-control input {
                                                width: 100%;
                                                max-width: 100%;
                                                box-sizing: border-box;
                                                padding: 4px;
                                                border: 1px solid #0b2c90;
                                                background-color: #fff;
                                                color: #222;
                                                outline: none;
                                            }

                                            div.form-control img {
                                                position: absolute;
                                                right: 5px;
                                                top: 25px;
                                                width: 16px;
                                                height: 16px;
                                                cursor: pointer;
                                            }

                                            div.checkboxs {
                                                position: relative;
                                                width: 100%;
                                                word-wrap: normal;
                                                word-break: normal;
                                                display: flex;
                                                align-items: center;
                                                margin-top: 8px;
                                            }

                                            div.checkboxs input {
                                                padding: 0;
                                                margin: 0;
                                                width: 16px;
                                                height: 16px;
                                                margin-right: 6px;
                                            }

                                            div.checkboxs label {
                                                display: block;
                                                color: #0b2c90;
                                                font-size: 13px;
                                                font-weight: 500;
                                                font-family: system-ui;
                                            }

                                            button {
                                                width: 100%;
                                                padding: 8px;
                                                background-color: #fff;
                                                background-image: url(./images/ui/bg1.png);
                                                background-repeat: no-repeat;
                                                background-size: 200% 275%;
                                                background-position-x: 50%;
                                                color: #0b2c90;
                                                border: 1px solid #0b2c90;
                                                border-radius: 4px;
                                                font-size: 14px;
                                                font-weight: bold;
                                                cursor: pointer;
                                                margin-top: 25px;
                                                transition: all 0.3s ease, background-position 0.3s ease;
                                            }

                                            button:hover {
                                                background-position-y: 35%;
                                                background-color: #0b2c90;
                                            }

                                            button:active {
                                                transform: scale(0.97);
                                                filter: brightness(0.95);
                                            }

                                            p {
                                                margin: 7px;
                                                color: #0b2c90;
                                                font-size: 16px;
                                                font-weight: 500;
                                                cursor: pointer;
                                            }

                                            .alert.alert-danger {
                                                background: linear-gradient(135deg, #ffbebe, #ff6b6b);
                                                border: 2px solid #c0392b;
                                                border-radius: 6px;
                                                padding: 10px 15px;
                                                color: #800000;
                                                font-family: Tahoma, Verdana, sans-serif;
                                                font-size: 13px;
                                                box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
                                                position: relative;
                                                margin-top: 15px;
                                            }

                                            .alert.alert-danger ul {
                                                margin: 0;
                                                padding-left: 20px;
                                                list-style-type: none;
                                            }

                                            .alert.alert-danger li {
                                                list-style-type: square;
                                                list-style-type: none;
                                                max-width: 240px;
                                            }

                                            .alert.alert-danger::before {
                                                content: '⚠️';
                                                position: absolute;
                                                top: 6px;
                                                left: 8px;
                                                font-size: 16px;
                                                text-shadow: 1px 1px 3px rgba(0, 0, 0, .7);
                                            }

                                            .alert.alert-success {
                                                background: linear-gradient(135deg, #b9f6ca, #00c853);
                                                border: 2px solid #009624;
                                                border-radius: 6px;
                                                padding: 10px 15px;
                                                color: #004d1a;
                                                font-family: Tahoma, Verdana, sans-serif;
                                                font-size: 13px;
                                                box-shadow: 2px 2px 8px rgba(0, 77, 26, 0.3);
                                                position: relative;
                                                margin-top: 15px;
                                                padding-left: 35px;
                                            }

                                            .alert.alert-success ul {
                                                margin: 0;
                                                padding-left: 20px;
                                                list-style-type: none;
                                            }

                                            .alert.alert-success li {
                                                list-style-type: none;
                                            }

                                            .alert.alert-success::before {
                                                content: '✅';
                                                position: absolute;
                                                top: 6px;
                                                left: 8px;
                                                font-size: 16px;
                                                text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
                                            }

                                            .photo-radio-group {
                                                display: flex;
                                                gap: 10px;
                                            }

                                            .photo-radio-group label {
                                                cursor: pointer;
                                                border: 2px solid transparent;
                                                border-radius: 6px;
                                                padding: 4px;
                                                transition: all 0.2s ease;
                                            }

                                            .photo-radio-group label img {
                                                width: 35px;
                                                height: 35px;
                                                border-radius: 4px;
                                                display: block;
                                                background: #fff;
                                            }

                                            .photo-radio-group input[type="radio"] {
                                                display: none;
                                            }

                                            .photo-radio-group input[type="radio"]:checked+img {
                                                border: 2px solid #0b2c90ce;
                                                box-shadow: 0 0 5px #0b2c90ce;
                                            }
                                        </style>
                                        <main id="login">
                                            <form action="/login" method="POST" class="container">
                                                @csrf
                                                <div class="form-control">
                                                    <label for="email">Email:</label>
                                                    <input type="email" id="email" required name="email"
                                                        placeholder="Digite seu email" value="{{ old('email') }}">
                                                </div>

                                                <div class="form-control">
                                                    <label for="password">Senha:</label>
                                                    <input type="password" id="password" minlength="6" required
                                                        name="password" placeholder="Digite sua senha">
                                                    <img onclick="eye(event);" src="./images/ui/eye-open.png"
                                                        alt="">
                                                </div>

                                                <div class="checkboxs">
                                                    <input type="checkbox" id="remember" name="remember"
                                                        {{ old('remember') ? 'checked' : '' }}>
                                                    <label for="remember">Lembrar-me</label>
                                                </div>
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                                @if (session('message'))
                                                    <div class="alert alert-success">
                                                        {{ session('message') }}
                                                    </div>
                                                @endif
                                                <button type="submit">Login</button>
                                                <p onclick="createAccount(event);">Criar conta</p>
                                            </form>
                                        </main>
                                        <main id="register" style="display: none;">
                                            <form action="/register" method="POST" class="container">
                                                @csrf

                                                <div class="photo-radio-group">
                                                    <label>
                                                        <input type="radio" name="avatar" value="msn.png"
                                                            checked>
                                                        <img src="./images/ui/msn.png" alt="Avatar 1">
                                                    </label>

                                                    <label>
                                                        <input type="radio" name="avatar" value="duck.png">
                                                        <img src="./images/ui/duck.png" alt="Avatar 2">
                                                    </label>

                                                    <label>
                                                        <input type="radio" name="avatar" value="borboleta.png">
                                                        <img src="./images/ui/borboleta.png" alt="Avatar 3">
                                                    </label>
                                                </div>


                                                <div class="form-control">
                                                    <label for="name">Nome:</label>
                                                    <input type="text" id="name" required name="name" minlength="3"
                                                        placeholder="Digite o seu nome" value="{{ old('name') }}">
                                                </div>

                                                <div class="form-control">
                                                    <label for="email">Email:</label>
                                                    <input type="email" id="email" required name="email"
                                                        placeholder="Digite seu email" value="{{ old('email') }}">
                                                </div>

                                                <div class="form-control">
                                                    <label for="password2">Senha:</label>
                                                    <input type="password" id="password2" minlength="6" required
                                                        name="password" placeholder="Digite sua senha">
                                                    <img onclick="eye(event);" src="./images/ui/eye-open.png"
                                                        alt="">
                                                </div>

                                                <div class="checkboxs">
                                                    <input type="checkbox" id="terms" required name="terms"
                                                        {{ old('terms') ? 'checked' : '' }}>
                                                    <label for="terms">Aceito os termos de uso</label>
                                                </div>
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                                @if (session('message'))
                                                    <div class="alert alert-success">
                                                        {{ session('message') }}
                                                    </div>
                                                @endif
                                                <button type="submit">Registrar</button>
                                                <p onclick="loginAccount(event);">Voltar</p>
                                            </form>
                                        </main>

                                        <script>
                                            function eye(event) {
                                                const eyeIcon = event.target; // Ícone clicado
                                                const container = eyeIcon.closest('.form-control'); // Pega o .form-control mais próximo
                                                const passwordInput = container.querySelector(
                                                    'input[type="password"], input[type="text"]'); // Pega o input dentro dele

                                                if (!passwordInput) return; // Se por algum motivo não achar, evita erro

                                                if (passwordInput.type === 'password') {
                                                    passwordInput.type = 'text';
                                                    eyeIcon.src = './images/ui/eye-close.png';
                                                } else {
                                                    passwordInput.type = 'password';
                                                    eyeIcon.src = './images/ui/eye-open.png';
                                                }
                                            }

                                            function createAccount(event) {
                                                event.preventDefault();

                                                const shadow = event.target.getRootNode();

                                                const loginForm = shadow.getElementById('login');
                                                const registerForm = shadow.getElementById('register');

                                                if (loginForm && registerForm) {
                                                    loginForm.style.display = 'none';
                                                    registerForm.style.display = 'block';
                                                }
                                            }

                                            function loginAccount(event) {
                                                event.preventDefault();

                                                const shadow = event.target.getRootNode();
                                                const loginForm = shadow.getElementById('login');
                                                const registerForm = shadow.getElementById('register');

                                                loginForm.style.display = 'block';
                                                registerForm.style.display = 'none';
                                            }
                                        </script>
                                    </template>
                                </msn-messenger-form>
                            </div>
                        </template>
                    </msn-messenger-auth>
                    <msn-messenger-statusbar>
                        <template shadowrootmode="open">
                            <style>
                                .container {
                                    width: 100%;
                                    height: 14px;
                                    border-radius: 0 0 var(--border-radius) var(--border-radius);
                                    border-top: 1px solid #505E67;
                                    background: #FDFDFF;
                                    position: relative;
                                    display: flex;
                                    align-items: center;
                                    padding-left: 8px;
                                }

                                .text {
                                    font-family: Verdana;
                                    font-size: 10px;
                                    font-weight: bold;
                                    color: navy;
                                }

                                .text a {
                                    color: black;
                                }

                                .text a:hover {
                                    color: darkred;
                                }
                            </style>
                            <div class="container">
                                <div class="text">Mais conteúdo em <a href="https://leonardo-alves.com"
                                        target="_blank">https://leonardo-alves.com</a></div>
                            </div>
                        </template>
                    </msn-messenger-statusbar>
                    <div class="border-window"></div>
                </div>
            </template>
            <main class="absolute top-0 left-0 bg-red-600 w-[100px] h-[100px] flex justify-center items-center">
                <div class="flex flex-col items-center gap-4">
                    <img src="./images/ui/msn-logo.png" alt="MSN Logo" width="200px" height="100px">
                    <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-2">
                        @csrf
                        <input type="text" name="email" placeholder="Email" required
                            class="p-2 rounded border border-gray-300 w-64">
                        <input type="password" name="password" placeholder="Senha" required
                            class="p-2 rounded border border-gray-300 w-64">
                        <button type="submit"
                            class="bg-blue-500 text-white p-2 rounded hover:bg-blue-600 transition-colors">Entrar</button>
                    </form>
                </div>
            </main>
        </msn-messenger-window>
    </div>

</body>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const styleContent = `
img {
    user-select: none !important;
}
`;

        function applyStyleToShadowRoot(shadowRoot) {
            if (shadowRoot._styleInjected) return;
            shadowRoot._styleInjected = true;

            const style = document.createElement('style');
            style.textContent = styleContent;
            shadowRoot.appendChild(style);
        }

        function applyStyleToAllShadowRoots(root) {
            root.querySelectorAll('*').forEach(el => {
                if (el.shadowRoot) {
                    applyStyleToShadowRoot(el.shadowRoot);
                    applyStyleToAllShadowRoots(el.shadowRoot);
                }
            });
        }

        document.addEventListener('DOMContentLoaded', () => {
            if ('requestIdleCallback' in window) {
                requestIdleCallback(() => applyStyleToAllShadowRoots(document));
            } else {
                setTimeout(() => applyStyleToAllShadowRoots(document), 0);
            }
        });
    });
</script>

</html>
