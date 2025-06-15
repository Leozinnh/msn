<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
                        max-width: calc(var(--width) + 100px);
                        max-height: calc(var(--height) + 100px);
                        background: #D7E4F5 url(./images/ui/main-background.png) bottom right no-repeat;
                        border-radius: var(--border-radius);
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
                    <div class="border-window"></div>
                </div>
            </template>
        </msn-messenger-window>
    </div>

</body>
<script>
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
</script>

</html>
