<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>MSN Messenger</title>
    <base href="./">

    <style>
        body {
            background: #2c2b5c;
        }

        .container {
            display: flex;
            justify-content: center;
            margin: 1em auto;
        }

        img {
            user-select: none;
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
                        background: #D7E4F5 url(./images/ui/main-background.png) bottom 20px right no-repeat;
                        display: grid;
                        grid-template-rows: 60px 1fr 140px 24px;
                        border-radius: var(--border-radius);
                        overflow: hidden;
                        box-shadow:
                            2px 2px 5px #0009,
                            5px 5px 10px #000c;
                        position: relative;
                        transform: translate(var(--x, 0), var(--y, 0));
                    }

                    .border-window {
                        position: absolute;
                        bottom: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background-image:
                            url(./images/ui/main-corner-top-left.png),
                            url(./images/ui/main-top.png),
                            url(./images/ui/main-corner-top-right.png),
                            url(./images/ui/main-corner-left.png),
                            url(./images/ui/main-corner-right.png),
                            url(./images/ui/main-left.png),
                            url(./images/ui/main-right.png),
                            url(./images/ui/main-bottom2.png);
                        background-repeat: no-repeat, repeat-x, no-repeat, no-repeat, no-repeat, repeat-y, repeat-y, repeat-x;
                        background-position: top left, top, top right, bottom left, bottom -5px right -5px, bottom left, bottom right, bottom;
                        
                        {{-- clip-path: polygon(
                            0 0,          /* Ponto 1: Top-left corner */
                            100% 0,         /* Ponto 2: Um pouco à direita no topo */
                            100% 100%,       /* Ponto 3: Top-right corner */
                            0 100%,       /* Ponto 3: Top-right corner */
                            0 0,          /* Ponto 4: (repetição do início - Top-left de novo) */
                            100% 0,       /* Ponto 5: Top-right novamente */
                            100% 100%,    /* Ponto 6: Bottom-right corner */
                            0 100%        /* Ponto 7: Bottom-left corner */
                        ); --}}
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
                                    display: grid;
                                    grid-template-columns: 310px 1fr;
                                    position: relative;
                                }

                                .toolbar-container {
                                    display: grid;
                                    grid-template-columns: 40px 56px 44px 40px 54px 44px;
                                    justify-content: flex-end;
                                    align-items: center;
                                    background: url(./images/ui/toolbar-background.png) repeat;
                                    background-size: contain;
                                }

                                .toolbar-small-container {
                                    display: grid;
                                    grid-template-columns: 50px 50px 37px 28px;
                                    height: 100%;
                                }

                                .toolbar-small-container .left {
                                    background: url(./images/ui/small-toolbar-left-background.png) no-repeat;
                                }

                                .toolbar-small-container .center {
                                    background:
                                        url(./images/ui/msn-logo.png) top left 4px,
                                        url(./images/ui/small-toolbar-center-background.png);
                                    background-repeat: no-repeat, repeat-x;
                                }

                                .toolbar-small-container .right {
                                    background: url(./images/ui/small-toolbar-right-background.png) no-repeat;
                                }

                                .toolbar-small-container .end {
                                    background: url(./images/ui/small-toolbar-end-background.png) repeat;
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
                                    <image-button image="invite" text="Invite" bind="I">
                                        <template shadowrootmode="open">
                                            <style>
                                                .container {
                                                    display: inline-flex;
                                                    flex-direction: column;
                                                    align-items: center;
                                                    justify-content: center;
                                                }

                                                .text {
                                                    font-family: Verdana;
                                                    font-size: 10.5px;
                                                    letter-spacing: -0.25px;
                                                    color: #434C4B;
                                                }

                                                .text span {
                                                    text-decoration: underline;
                                                }
                                            </style>
                                            <div class="container">
                                                <img src="./images/ui/invite.png" alt="Invite">
                                                <div class="text"><span>I</span>nvite</div>
                                            </div>
                                        </template>
                                    </image-button>
                                    <image-button image="send" text="Send Files" bind="l">
                                        <template shadowrootmode="open">
                                            <style>
                                                .container {
                                                    display: inline-flex;
                                                    flex-direction: column;
                                                    align-items: center;
                                                    justify-content: center;
                                                }

                                                .text {
                                                    font-family: Verdana;
                                                    font-size: 10.5px;
                                                    letter-spacing: -0.25px;
                                                    color: #434C4B;
                                                }

                                                .text span {
                                                    text-decoration: underline;
                                                }
                                            </style>
                                            <div class="container">
                                                <img src="./images/ui/send.png" alt="Send Files">
                                                <div class="text">Send Fi<span>l</span>es</div>
                                            </div>
                                        </template>
                                    </image-button>
                                    <image-button image="video" text="Video" bind="o">
                                        <template shadowrootmode="open">
                                            <style>
                                                .container {
                                                    display: inline-flex;
                                                    flex-direction: column;
                                                    align-items: center;
                                                    justify-content: center;
                                                }

                                                .text {
                                                    font-family: Verdana;
                                                    font-size: 10.5px;
                                                    letter-spacing: -0.25px;
                                                    color: #434C4B;
                                                }

                                                .text span {
                                                    text-decoration: underline;
                                                }
                                            </style>
                                            <div class="container">
                                                <img src="./images/ui/video.png" alt="Video">
                                                <div class="text">Vide<span>o</span></div>
                                            </div>
                                        </template>
                                    </image-button>
                                    <image-button image="voice" text="Voice" bind="c">
                                        <template shadowrootmode="open">
                                            <style>
                                                .container {
                                                    display: inline-flex;
                                                    flex-direction: column;
                                                    align-items: center;
                                                    justify-content: center;
                                                }

                                                .text {
                                                    font-family: Verdana;
                                                    font-size: 10.5px;
                                                    letter-spacing: -0.25px;
                                                    color: #434C4B;
                                                }

                                                .text span {
                                                    text-decoration: underline;
                                                }
                                            </style>
                                            <div class="container">
                                                <img src="./images/ui/voice.png" alt="Voice">
                                                <div class="text">Voi<span>c</span>e</div>
                                            </div>
                                        </template>
                                    </image-button>
                                    <image-button image="activities" text="Activities" bind="v">
                                        <template shadowrootmode="open">
                                            <style>
                                                .container {
                                                    display: inline-flex;
                                                    flex-direction: column;
                                                    align-items: center;
                                                    justify-content: center;
                                                }

                                                .text {
                                                    font-family: Verdana;
                                                    font-size: 10.5px;
                                                    letter-spacing: -0.25px;
                                                    color: #434C4B;
                                                }

                                                .text span {
                                                    text-decoration: underline;
                                                }
                                            </style>
                                            <div class="container">
                                                <img src="./images/ui/activities.png" alt="Activities">
                                                <div class="text">Acti<span>v</span>ities</div>
                                            </div>
                                        </template>
                                    </image-button>
                                    <image-button image="games" text="Games" bind="G">
                                        <template shadowrootmode="open">
                                            <style>
                                                .container {
                                                    display: inline-flex;
                                                    flex-direction: column;
                                                    align-items: center;
                                                    justify-content: center;
                                                }

                                                .text {
                                                    font-family: Verdana;
                                                    font-size: 10.5px;
                                                    letter-spacing: -0.25px;
                                                    color: #434C4B;
                                                }

                                                .text span {
                                                    text-decoration: underline;
                                                }
                                            </style>
                                            <div class="container">
                                                <img src="./images/ui/games.png" alt="Games">
                                                <div class="text"><span>G</span>ames</div>
                                            </div>
                                        </template>
                                    </image-button>
                                </div>
                                <div class="toolbar-small-container">
                                    <div class="left"></div>
                                    <div class="center">
                                        <div class="buttons">
                                            <image-circular-button image="block">
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
                                                        <img src="./images/ui/small-block.png" alt="block">
                                                    </div>
                                                </template>
                                            </image-circular-button>
                                            <image-circular-button image="paint">
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
                                                        <img src="./images/ui/small-paint.png" alt="paint">
                                                    </div>
                                                </template>
                                            </image-circular-button>
                                        </div>
                                    </div>
                                    <div class="right"></div>
                                    <div class="end"></div>
                                </div>
                            </div>
                        </template>
                    </msn-messenger-toolbar>
                    <msn-messenger-remote-user>
                        <template shadowrootmode="open">
                            <style>
                                .container {
                                    width: 100%;
                                    height: 92%;
                                    display: grid;
                                    grid-template-columns: 1fr 140px;
                                    margin: 4px 8px;
                                }
                            </style>
                            <div class="container">
                                <msn-messenger-history-chat>
                                    <template shadowrootmode="open">
                                        <style>
                                            .container {
                                                display: grid;
                                                justify-content: center;
                                                grid-template-columns: 1fr;
                                                grid-template-rows: 28px 1fr;
                                                font-family: Verdana;
                                                font-size: 10px;
                                                width: 97%;
                                                height: 100%;
                                                border: 1px solid #586170;
                                                border-radius: 8px 8px 0 0;
                                                margin: 2px 1px;
                                            }

                                            .subject {
                                                border-radius: 8px 8px 0 0;
                                                background: #EEF0FD;
                                                display: flex;
                                                align-items: center;
                                                padding-left: 6px;
                                                border-bottom: 1px solid #586170;
                                            }

                                            .subject strong {
                                                padding-left: 3px;
                                            }

                                            .history {
                                                background: #fff;
                                            }
                                        </style>
                                        <div class="container">
                                            <div class="subject">To: <strong>Leozin (leonardoaf6557@icloud.com)</strong>
                                            </div>
                                            <div class="history"></div>
                                        </div>
                                    </template>
                                </msn-messenger-history-chat>
                                <msn-messenger-avatar image="msn">
                                    <template shadowrootmode="open">
                                        <style>
                                            .container {
                                                width: 114px;
                                                height: 114px;
                                                display: flex;
                                                justify-content: center;
                                                align-items: center;
                                                flex-direction: column;
                                                border: 1px solid #586170;
                                                border-radius: 8px;
                                                position: relative;
                                            }

                                            .picture {
                                                width: 96px;
                                                height: 96px;
                                                border: 1px solid #586170;
                                                border-radius: 8px;
                                                transform: translateY(4px);
                                            }

                                            .down {
                                                border: 0;
                                                background: transparent;
                                                color: #4D5967;
                                                transform: scaleY(0.5);
                                                align-self: flex-end;
                                            }

                                            .expand {
                                                position: absolute;
                                                top: 4px;
                                                right: -9px;
                                            }
                                        </style>
                                        <div class="container">
                                            <img class="picture" src="./images/ui/msn.png" alt="Avatar">
                                            <button class="down">⯆</button>
                                            <img class="expand" src="./images/ui/expand-left.png" alt="expand arrow">
                                        </div>
                                    </template>
                                </msn-messenger-avatar>
                            </div>
                        </template>
                    </msn-messenger-remote-user>
                    <msn-messenger-local-user>
                        <template shadowrootmode="open">
                            <style>
                                .container {
                                    width: 100%;
                                    height: 100%;
                                    display: grid;
                                    grid-template-columns: 1fr 140px;
                                    margin: 4px 8px;
                                }
                            </style>
                            <div class="container">
                                <msn-messenger-chat>
                                    <template shadowrootmode="open">
                                        <style>
                                            .container {
                                                display: grid;
                                                grid-template-rows: 24px 1fr 24px;
                                                min-height: 122px;
                                                background: #fff;
                                                width: 97%;
                                                border: 1px solid #586170;
                                                border-radius: 6px;
                                            }

                                            .actionbar,
                                            .tabs {
                                                background: linear-gradient(#D8E8F7, #F5F2F9, #D8E8F7);
                                            }

                                            .actionbar {
                                                border-bottom: 1px solid #586170;
                                                border-radius: 6px 6px 0 0;
                                                display: flex;
                                            }

                                            .tabs {
                                                border-top: 1px solid #565F70;
                                                border-radius: 0 0 6px 6px;
                                                display: flex;
                                                justify-content: flex-end;
                                                padding-right: 12px;
                                            }

                                            .chat {
                                                display: flex;
                                                justify-content: flex-end;
                                                margin: 3px;
                                            }

                                            .chat .buttons {
                                                display: flex;
                                                flex-direction: column;
                                                gap: 3px 0;
                                            }

                                            .normal {
                                                border: 1px solid #93989C;
                                                background: #FBFBFB;
                                                box-shadow: -4px -4px 4px #C0C9E0 inset;
                                                width: 58px;
                                                height: 37px;
                                                border-radius: 5px;
                                                font-family: Tahoma;
                                                font-weight: bold;
                                                font-size: 11px;
                                                color: #969C9A;
                                            }

                                            .normal span {
                                                text-decoration: underline;
                                            }

                                            .normal.small {
                                                height: 25px;
                                            }
                                        </style>
                                        <div class="container">
                                            <div class="actionbar">
                                                <simple-button image="letter">
                                                    <template shadowrootmode="open">
                                                        <style>
                                                            .container {
                                                                display: flex;
                                                                align-items: center;
                                                                padding: 0 6px;
                                                                height: 100%;
                                                            }

                                                            .container img {
                                                                height: 16px;
                                                            }

                                                            .container span:not(:empty) {
                                                                font-family: Verdana;
                                                                font-size: 10px;
                                                                color: #444;
                                                                display: inline-block;
                                                                width: 50px;
                                                                padding-left: 3px;
                                                            }

                                                            .container button {
                                                                border: 0;
                                                                background: transparent;
                                                                transform: scale(0.6);
                                                                padding: 0;
                                                            }
                                                        </style>
                                                        <div class="container">
                                                            <img src="./images/ui/letter.png" alt="letter">
                                                            <span></span>

                                                        </div>
                                                    </template>
                                                </simple-button>
                                                <simple-button image="happy" arrow="">
                                                    <template shadowrootmode="open">
                                                        <style>
                                                            .container {
                                                                display: flex;
                                                                align-items: center;
                                                                padding: 0 6px;
                                                                height: 100%;
                                                            }

                                                            .container img {
                                                                height: 16px;
                                                            }

                                                            .container span:not(:empty) {
                                                                font-family: Verdana;
                                                                font-size: 10px;
                                                                color: #444;
                                                                display: inline-block;
                                                                width: 50px;
                                                                padding-left: 3px;
                                                            }

                                                            .container button {
                                                                border: 0;
                                                                background: transparent;
                                                                transform: scale(0.6);
                                                                padding: 0;
                                                            }
                                                        </style>
                                                        <div class="container">
                                                            <img src="./images/ui/happy.png" alt="happy">
                                                            <span></span>
                                                            <button>⯆</button>
                                                        </div>
                                                    </template>
                                                </simple-button>
                                                <simple-button image="voice-clip" label="Voice clip">
                                                    <template shadowrootmode="open">
                                                        <style>
                                                            .container {
                                                                display: flex;
                                                                align-items: center;
                                                                padding: 0 6px;
                                                                height: 100%;
                                                            }

                                                            .container img {
                                                                height: 16px;
                                                            }

                                                            .container span:not(:empty) {
                                                                font-family: Verdana;
                                                                font-size: 10px;
                                                                color: #444;
                                                                display: inline-block;
                                                                width: 50px;
                                                                padding-left: 3px;
                                                            }

                                                            .container button {
                                                                border: 0;
                                                                background: transparent;
                                                                transform: scale(0.6);
                                                                padding: 0;
                                                            }
                                                        </style>
                                                        <div class="container">
                                                            <img src="./images/ui/voice-clip.png" alt="voice-clip">
                                                            <span>Voice clip</span>

                                                        </div>
                                                    </template>
                                                </simple-button>
                                                <simple-button image="wink" arrow="">
                                                    <template shadowrootmode="open">
                                                        <style>
                                                            .container {
                                                                display: flex;
                                                                align-items: center;
                                                                padding: 0 6px;
                                                                height: 100%;
                                                            }

                                                            .container img {
                                                                height: 16px;
                                                            }

                                                            .container span:not(:empty) {
                                                                font-family: Verdana;
                                                                font-size: 10px;
                                                                color: #444;
                                                                display: inline-block;
                                                                width: 50px;
                                                                padding-left: 3px;
                                                            }

                                                            .container button {
                                                                border: 0;
                                                                background: transparent;
                                                                transform: scale(0.6);
                                                                padding: 0;
                                                            }
                                                        </style>
                                                        <div class="container">
                                                            <img src="./images/ui/wink.png" alt="wink">
                                                            <span></span>
                                                            <button>⯆</button>
                                                        </div>
                                                    </template>
                                                </simple-button>
                                                <simple-button image="mountain" arrow="">
                                                    <template shadowrootmode="open">
                                                        <style>
                                                            .container {
                                                                display: flex;
                                                                align-items: center;
                                                                padding: 0 6px;
                                                                height: 100%;
                                                            }

                                                            .container img {
                                                                height: 16px;
                                                            }

                                                            .container span:not(:empty) {
                                                                font-family: Verdana;
                                                                font-size: 10px;
                                                                color: #444;
                                                                display: inline-block;
                                                                width: 50px;
                                                                padding-left: 3px;
                                                            }

                                                            .container button {
                                                                border: 0;
                                                                background: transparent;
                                                                transform: scale(0.6);
                                                                padding: 0;
                                                            }
                                                        </style>
                                                        <div class="container">
                                                            <img src="./images/ui/mountain.png" alt="mountain">
                                                            <span></span>
                                                            <button>⯆</button>
                                                        </div>
                                                    </template>
                                                </simple-button>
                                                <simple-button image="gift" arrow="">
                                                    <template shadowrootmode="open">
                                                        <style>
                                                            .container {
                                                                display: flex;
                                                                align-items: center;
                                                                padding: 0 6px;
                                                                height: 100%;
                                                            }

                                                            .container img {
                                                                height: 16px;
                                                            }

                                                            .container span:not(:empty) {
                                                                font-family: Verdana;
                                                                font-size: 10px;
                                                                color: #444;
                                                                display: inline-block;
                                                                width: 50px;
                                                                padding-left: 3px;
                                                            }

                                                            .container button {
                                                                border: 0;
                                                                background: transparent;
                                                                transform: scale(0.6);
                                                                padding: 0;
                                                            }
                                                        </style>
                                                        <div class="container">
                                                            <img src="./images/ui/gift.png" alt="gift">
                                                            <span></span>
                                                            <button>⯆</button>
                                                        </div>
                                                    </template>
                                                </simple-button>
                                                <simple-button image="nudge">
                                                    <template shadowrootmode="open">
                                                        <style>
                                                            .container {
                                                                display: flex;
                                                                align-items: center;
                                                                padding: 0 6px;
                                                                height: 100%;
                                                            }

                                                            .container img {
                                                                height: 16px;
                                                            }

                                                            .container span:not(:empty) {
                                                                font-family: Verdana;
                                                                font-size: 10px;
                                                                color: #444;
                                                                display: inline-block;
                                                                width: 50px;
                                                                padding-left: 3px;
                                                            }

                                                            .container button {
                                                                border: 0;
                                                                background: transparent;
                                                                transform: scale(0.6);
                                                                padding: 0;
                                                            }
                                                        </style>
                                                        <div class="container">
                                                            <img src="./images/ui/nudge.png" alt="nudge">
                                                            <span></span>

                                                        </div>
                                                    </template>
                                                </simple-button>
                                            </div>
                                            <div class="chat">
                                                <div class="buttons">
                                                    <button class="normal"><span>S</span>end</button>
                                                </div>
                                            </div>
                                            <div class="tabs">
                                                <tab-button image="paint">
                                                    <template shadowrootmode="open">
                                                        <style>
                                                            .container {
                                                                min-width: 25px;
                                                                height: 18px;
                                                                border: 1px solid #ABB0C6;
                                                                border-top: 0;
                                                                border-radius: 0 0 6px 6px;
                                                                display: flex;
                                                                justify-content: center;
                                                                background: #EDF2F8;
                                                            }

                                                            :host([focus]) .container {
                                                                background: #fff;
                                                                border-bottom: 3px solid #E2C47B;
                                                                border-top: 0;
                                                                transform: translateY(-1px);
                                                            }

                                                            img {
                                                                width: 16px;
                                                                height: 16px;
                                                            }
                                                        </style>
                                                        <div class="container">
                                                            <img src="./images/ui/paint.png" alt="paint">
                                                        </div>
                                                    </template>
                                                </tab-button>
                                                <tab-button image="letter" focus="">
                                                    <template shadowrootmode="open">
                                                        <style>
                                                            .container {
                                                                min-width: 25px;
                                                                height: 18px;
                                                                border: 1px solid #ABB0C6;
                                                                border-top: 0;
                                                                border-radius: 0 0 6px 6px;
                                                                display: flex;
                                                                justify-content: center;
                                                                background: #EDF2F8;
                                                            }

                                                            :host([focus]) .container {
                                                                background: #fff;
                                                                border-bottom: 3px solid #E2C47B;
                                                                border-top: 0;
                                                                transform: translateY(-1px);
                                                            }

                                                            img {
                                                                width: 16px;
                                                                height: 16px;
                                                            }
                                                        </style>
                                                        <div class="container">
                                                            <img src="./images/ui/letter.png" alt="letter">
                                                        </div>
                                                    </template>
                                                </tab-button>
                                            </div>
                                        </div>
                                    </template>
                                </msn-messenger-chat>
                                <msn-messenger-avatar image="duck">
                                    <template shadowrootmode="open">
                                        <style>
                                            .container {
                                                width: 114px;
                                                height: 114px;
                                                display: flex;
                                                justify-content: center;
                                                align-items: center;
                                                flex-direction: column;
                                                border: 1px solid #586170;
                                                border-radius: 8px;
                                                position: relative;
                                            }

                                            .picture {
                                                width: 96px;
                                                height: 96px;
                                                border: 1px solid #586170;
                                                border-radius: 8px;
                                                transform: translateY(4px);
                                            }

                                            .down {
                                                border: 0;
                                                background: transparent;
                                                color: #4D5967;
                                                transform: scaleY(0.5);
                                                align-self: flex-end;
                                            }

                                            .expand {
                                                position: absolute;
                                                top: 4px;
                                                right: -9px;
                                            }
                                        </style>
                                        <div class="container">
                                            <img class="picture" src="./images/ui/duck.png" alt="Avatar">
                                            <button class="down">⯆</button>
                                            <img class="expand" src="./images/ui/expand-left.png" alt="expand arrow">
                                        </div>
                                    </template>
                                </msn-messenger-avatar>
                            </div>
                        </template>
                    </msn-messenger-local-user>
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
        </msn-messenger-window>
    </div>

</body>

</html>
