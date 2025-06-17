<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>MSN Messenger</title>
    <base href="./">

    <style>
        body {
            background: #2c2b5c;
            width: 100svw;
            height: 100svh;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100svw;
            height: 100svh;
        }

        img {
            user-select: none;
        }
    </style>

    <script>
        window.console = window.console || function(t) {};
    </script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" defer></script> --}}
</head>

<body translate="no">
    <div class="container">
        <msn-messenger-window>
            <template shadowrootmode="open">
                <style>
                    @media screen and (min-width:1px) and (max-width: 600px) {
                        .container {
                            transform: scale(0.79) !important;
                        }
                    }

                    :host {
                        --width: 475px;
                        --height: 400px;
                        --border-radius: 6px;
                    }

                    .container {
                        width: var(--width);
                        height: auto;
                        /* height: var(--height); */
                        min-width: 467px;
                        min-height: 425px;
                        max-width: 470px;
                        max-height: calc(var(--height) + 50px);
                        background: #D7E4F5 url(./images/ui/main-background.png) bottom right no-repeat;
                        display: grid;
                        grid-template-rows: 60px 1fr 140px 24px;
                        border-radius: var(--border-radius);
                        overflow: hidden;
                        box-shadow:
                            2px 2px 5px #0009,
                            5px 5px 10px #000c;
                        position: relative;
                        transform: translate(var(--x, 0), var(--y, 0));

                        padding: 5px;
                        resize: both
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
                                    <image-button image="convidar" text="Convidar" bind="C"
                                        style="cursor: not-allowed;">
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
                                                <img src="./images/ui/invite.png" alt="Convidar">
                                                <div class="text"><span>C</span>onvidar</div>
                                            </div>
                                        </template>
                                    </image-button>
                                    <image-button image="groups" text="Grupos" bind="G"
                                        style="padding-left: 15px;cursor: pointer;">
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
                                            <div class="container" onclick="viewGroups(event);">
                                                <img src="./images/ui/groups.webp" width="30px" height="30px"
                                                    alt="Grupos">
                                                <div class="text"><span>G</span>rupos</div>
                                            </div>
                                            <script>
                                                function viewGroups(event) {
                                                    event.stopPropagation();
                                                    localStorage.removeItem('chatId');

                                                    const windowEl = document.querySelector('msn-messenger-window').shadowRoot;
                                                    const remoteUserEl = windowEl.querySelector('msn-messenger-remote-user');
                                                    if (!remoteUserEl) return console.error('msn-messenger-remote-user não encontrado');

                                                    const remoteUserShadow = remoteUserEl.shadowRoot;
                                                    const historyChatEl = remoteUserShadow.querySelector('msn-messenger-history-chat');
                                                    if (!historyChatEl) return console.error('msn-messenger-history-chat não encontrado');

                                                    const historyChatShadow = historyChatEl.shadowRoot;
                                                    if (!historyChatShadow) return console.error('shadowRoot do msn-messenger-history-chat é null');

                                                    const avatarChatEl = remoteUserShadow.querySelector('msn-messenger-avatar');
                                                    if (!avatarChatEl) return console.error('msn-messenger-avatar não encontrado');

                                                    const avatarChatShadow = avatarChatEl.shadowRoot;
                                                    if (!avatarChatShadow) return console.error('shadowRoot do msn-messenger-avatar é null');

                                                    const photo = avatarChatShadow.querySelector(`div.groupPhoto`);
                                                    if (!photo) return console.error(`div.groupPhoto não encontrado no msn-messenger-avatar`);

                                                    photo.innerHTML =
                                                        `<button onclick="createGroup(event);">CRIAR GRUPO</button>`;

                                                    historyChatShadow.querySelector('#group').innerText = `Para: ?`;
                                                    historyChatShadow.querySelector('#history').style.display = 'none';
                                                    historyChatShadow.querySelector('#groups').style.display = 'block';
                                                }
                                            </script>
                                        </template>
                                    </image-button>
                                    {{-- <image-button image="send" text="Send Files" bind="l">
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
                                    </image-button> --}}
                                    <image-button image="video" text="Video" bind="o"
                                        style="cursor: not-allowed;">
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
                                    <image-button image="voice" text="Voice" bind="c"
                                        style="cursor: not-allowed;">
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
                                    <image-button image="activities" text="Activities" bind="v"
                                        style="cursor: not-allowed;">
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
                                    <image-button image="games" text="Games" bind="G"
                                        style="cursor: not-allowed;">
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
                                                display: flex;
                                                flex-direction: column;
                                                justify-content: flex-start;
                                                font-family: Verdana;
                                                font-size: 10px;
                                                width: 97%;
                                                height: 100%;
                                                background: #fff;
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
                                                position: relative;
                                                height: auto;
                                                max-height: 176px;
                                                background: #fff;
                                                padding: 2px;
                                                word-wrap: break-word;
                                                word-break: break-all;
                                                overflow-y: auto;
                                            }

                                            .history p {
                                                margin: 0;
                                            }

                                            .history p b {
                                                position: relative;
                                            }

                                            aside.status {
                                                position: absolute;
                                                top: 0;
                                                right: -4px;
                                                width: 4px;
                                                height: 4px;
                                                border-radius: 100%;
                                            }

                                            aside.status.on {
                                                background: #0be041;
                                            }

                                            aside.status.off {
                                                background: #e0240b;
                                            }

                                            .groups {
                                                position: relative;
                                                height: auto;
                                                max-height: 176px;
                                                background: #fff;
                                                padding: 2px;
                                                word-wrap: break-word;
                                                word-break: break-all;
                                                overflow-y: auto;
                                            }

                                            .groups .group {
                                                width: 100%;
                                                display: flex;
                                                align-items: center;
                                                justify-content: space-between;
                                                padding: 4px 0;
                                                border-bottom: 1px solid #586170;
                                            }

                                            .groups .group:last-child {
                                                border-bottom: none;
                                            }

                                            .groups .group img {
                                                width: 32px;
                                                height: 32px;
                                                border-radius: 6px;
                                                border: 1px solid #586170;
                                                margin-right: 8px;
                                                padding: 1px;
                                            }

                                            .groups .group span {
                                                /* flex: 1; */
                                                font-family: Verdana;
                                                font-size: 10px;
                                                color: #000;
                                            }

                                            .groups .group span.members {
                                                font-size: 9px;
                                                color: #666;
                                            }

                                            .groups .group button.join {
                                                background: #FBFBFB;
                                                box-shadow: -4px -4px 4px #C0C9E0 inset;
                                                border: 1px solid #93989C;
                                                color: #969C9A;
                                                padding: 4px 8px;
                                                border-radius: 4px;
                                                cursor: pointer;
                                            }

                                            .groups .group button.join:is(:hover, :active) {
                                                background: #F0F0F0;
                                            }
                                        </style>
                                        <div class="container">
                                            <div class="subject" id="group">Para: ?</div>
                                            <div class="groups" id="groups">
                                                @foreach ($grupos as $grupo)
                                                    <div class="group" id="group-{{ $grupo->id }}"
                                                        group-name="{{ $grupo->name }}">
                                                        <div style="display: flex; flex-direction: row;">
                                                            <img src="./images/ui/{{ $grupo->photo ? $grupo->photo : 'persons.jpeg' }}"
                                                                alt="Foto do Grupo">
                                                            <div
                                                                style="justify-content: center;display: flex;flex-direction: column;">
                                                                {{ $grupo->name }}
                                                                {{ $grupo->is_private ? '(Privado)' : '(Público)' }}
                                                                {{ $grupo->owner_id == auth()->user()->id ? '(Seu grupo)' : '' }}
                                                                <span style="font-size: 8px;color:#666;"
                                                                    class="description">{{ $grupo->description }}</span>
                                                            </div>
                                                        </div>
                                                        <span class="members">Membro's:
                                                            {{ $grupo->members_count }}</span>
                                                        <button class="join"
                                                            onclick="joinGroup('{{ $grupo->id }}')">{{ $grupo->is_member ? 'Ver' : 'Entrar' }}</button>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="history" id="history" style="display: none">
                                            </div>
                                        </div>
                                        <script>
                                            document.addEventListener('DOMContentLoaded', () => {
                                                let chatId = null;
                                                let lastChatId = null;
                                                let fetchLoopRunning = false;

                                                let historyIds = new Set();

                                                let stopFetchLoop = () => {
                                                    fetchLoopRunning = false;
                                                };


                                                let startFetchLoop = (historyEl) => {

                                                    setInterval(() => {
                                                        const newChatId = localStorage.getItem('chatId');
                                                        if (newChatId != chatId) {
                                                            console.log(`Mudou o chatId de ${chatId} para ${newChatId}`);
                                                            chatId = newChatId;
                                                            stopFetchLoop();
                                                            historyIds.clear();
                                                        }
                                                    }, 5000);

                                                    if (fetchLoopRunning) return; // Já tem um loop rodando
                                                    fetchLoopRunning = true;

                                                    function fetchMessages() {
                                                        if (!fetchLoopRunning || chatId === null) return;

                                                        fetch('/get-messages', {
                                                                method: 'POST',
                                                                headers: {
                                                                    'Content-Type': 'application/json',
                                                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                                                },
                                                                body: JSON.stringify({
                                                                    chat_id: chatId
                                                                })
                                                            })
                                                            .then(res => res.json())
                                                            .then(data => {
                                                                if (data.success) {
                                                                    const fragment = document.createDocumentFragment();
                                                                    data.messages.forEach(msg => {
                                                                        const windowEl = document.querySelector('msn-messenger-window')
                                                                            .shadowRoot;
                                                                        const remoteUserEl = windowEl.querySelector(
                                                                            'msn-messenger-remote-user');
                                                                        if (!remoteUserEl) return console.error(
                                                                            'msn-messenger-remote-user não encontrado');

                                                                        const remoteUserShadow = remoteUserEl.shadowRoot;
                                                                        const historyChatEl = remoteUserShadow.querySelector(
                                                                            'msn-messenger-history-chat');
                                                                        if (!historyChatEl) return console.error(
                                                                            'msn-messenger-history-chat não encontrado');

                                                                        const historyChatShadow = historyChatEl.shadowRoot;
                                                                        if (!historyChatShadow) return console.error(
                                                                            'shadowRoot do msn-messenger-history-chat é null');
                                                                        const messageElement = historyChatShadow.getElementById(
                                                                            `msg-${msg.id}`);

                                                                        if (!historyIds.has(`msg-${msg.id}`)) {
                                                                            const p = document.createElement('p');
                                                                            p.id = `msg-${msg.id}`;

                                                                            if (msg.text === "nudge") {
                                                                                const isSelf = (msg.author === "Você");
                                                                                if (!isSelf) nudge();
                                                                                msg.text = isSelf ?
                                                                                    "<mark>Você alertou com um cutucão!</mark>" :
                                                                                    "<mark>Você recebeu um cutucão!</mark>";
                                                                            }

                                                                            p.innerHTML =
                                                                                `<b>${msg.author}<aside class="status ${msg.status}"></aside></b>: <span>${msg.text}</span>`;
                                                                            fragment.appendChild(p);
                                                                            historyIds.add(`msg-${msg.id}`);

                                                                            if (msg.author !== "Você" && msg.text !== "nudge") {
                                                                                newMessage();
                                                                            }
                                                                        } else {
                                                                            if (messageElement) {
                                                                                const statusEl = messageElement.querySelector(
                                                                                    'aside.status');
                                                                                if (statusEl) {
                                                                                    statusEl.className = `status ${msg.status}`;
                                                                                }
                                                                            }
                                                                        }
                                                                    });




                                                                    // data.messages.forEach(msg => {
                                                                    //     if (!historyIds.has(`msg-${msg.id}`)) {
                                                                    //         const p = document.createElement('p');
                                                                    //         p.id = `msg-${msg.id}`;

                                                                    //         if (msg.text === "nudge") {
                                                                    //             const isSelf = (msg.author === "Você");
                                                                    //             if (!isSelf) nudge();
                                                                    //             msg.text = isSelf ?
                                                                    //                 "<mark>Você alertou com um cutucão!</mark>" :
                                                                    //                 "<mark>Você recebeu um cutucão!</mark>";
                                                                    //         }

                                                                    //         p.innerHTML =
                                                                    //             `<b>${msg.author}<aside class="status ${msg.status}"></aside></b>: <span>${msg.text}</span>`;
                                                                    //         fragment.appendChild(p);
                                                                    //         historyIds.add(`msg-${msg.id}`);
                                                                    //         if (msg.author != "Você" && msg.text != "nudge")
                                                                    //             newMessage();
                                                                    //     }
                                                                    // });
                                                                    if (fragment.children.length > 0) {
                                                                        historyEl.appendChild(fragment);
                                                                        historyEl.scrollTop = historyEl.scrollHeight;
                                                                    }
                                                                }
                                                            })
                                                            .catch(console.error)
                                                            .finally(() => {
                                                                if (fetchLoopRunning) setTimeout(fetchMessages, 1000);
                                                            });
                                                    }

                                                    fetchMessages();
                                                };

                                                window.joinGroup = (groupId) => {
                                                    console.log(`Entrando no grupo ${groupId}`);

                                                    fetch('/enter-group', {
                                                            method: 'POST',
                                                            headers: {
                                                                'Content-Type': 'application/json',
                                                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                                            },
                                                            body: JSON.stringify({
                                                                group_id: groupId
                                                            })
                                                        })
                                                        .then(res => res.json())
                                                        .then(data => {})
                                                        .catch(console.error)
                                                        .finally(() => {});

                                                    // Parar o loop anterior (interrompe o fetch antigo)
                                                    stopFetchLoop();

                                                    // Resetar o array de mensagens recebidas
                                                    historyIds.clear();

                                                    chatId = groupId;
                                                    localStorage.setItem('chatId', chatId);

                                                    const windowEl = document.querySelector('msn-messenger-window').shadowRoot;
                                                    const remoteUserEl = windowEl.querySelector('msn-messenger-remote-user');
                                                    if (!remoteUserEl) return console.error('msn-messenger-remote-user não encontrado');

                                                    const remoteUserShadow = remoteUserEl.shadowRoot;
                                                    const historyChatEl = remoteUserShadow.querySelector('msn-messenger-history-chat');
                                                    if (!historyChatEl) return console.error('msn-messenger-history-chat não encontrado');
                                                    const avatarChatEl = remoteUserShadow.querySelector('msn-messenger-avatar');
                                                    if (!avatarChatEl) return console.error('msn-messenger-avatar não encontrado');

                                                    const historyChatShadow = historyChatEl.shadowRoot;
                                                    if (!historyChatShadow) return console.error('shadowRoot do msn-messenger-history-chat é null');

                                                    const avatarChatShadow = avatarChatEl.shadowRoot;
                                                    if (!avatarChatShadow) return console.error('shadowRoot do msn-messenger-avatar é null');


                                                    const group = historyChatShadow.querySelector(`#group-${groupId}`);
                                                    if (!group) return console.error(`Grupo ${groupId} não encontrado no historyChat`);

                                                    const photo = avatarChatShadow.querySelector(`div.groupPhoto`);
                                                    if (!photo) return console.error(`div.groupPhoto não encontrado no msn-messenger-avatar`);

                                                    photo.innerHTML =
                                                        `<img class="picture" src="./images/ui/${group.getAttribute('group-photo') || 'persons.jpeg'}" alt="Foto do Grupo">`;

                                                    const name = group.getAttribute('group-name');
                                                    const description = group.querySelector('.description')?.innerText || '';

                                                    historyChatShadow.querySelector('#group').innerText = `Grupo: ${name} (${description})`;
                                                    historyChatShadow.querySelector('#history').style.display = 'block';
                                                    historyChatShadow.querySelector('#groups').style.display = 'none';

                                                    const historyEl = historyChatShadow.querySelector('#history');

                                                    // 👇 Aqui é a limpeza do histórico visual antes de começar o fetch do novo grupo
                                                    historyEl.innerHTML = '';

                                                    // Iniciar o loop de mensagens do novo grupo
                                                    startFetchLoop(historyEl);
                                                };

                                            });
                                        </script>

                                        </script>


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
                                                margin-bottom: 5px;
                                            }

                                            .down {
                                                border: 0;
                                                background: transparent;
                                                color: #4D5967;
                                                transform: scaleY(0.5);
                                                align-self: flex-end;
                                                display: none;
                                            }

                                            .expand {
                                                position: absolute;
                                                top: 4px;
                                                right: -9px;
                                            }

                                            div.groupPhoto button {
                                                background: #FBFBFB;
                                                box-shadow: -4px -4px 4px #C0C9E0 inset;
                                                border: 1px solid #93989C;
                                                color: #434645;
                                                padding: 6px 8px;
                                                border-radius: 4px;
                                                font-size: 13px;
                                                cursor: not-allowed;
                                            }

                                            div.groupPhoto button:is(:hover, :active) {
                                                background: #F0F0F0;
                                            }
                                        </style>
                                        <div class="container">
                                            <div class="groupPhoto">
                                                <button onclick="createGroup(event);">CRIAR GRUPO</button>
                                            </div>
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
                                                position: relative;
                                                width: 100%;
                                                max-width: 318px;
                                                display: flex;
                                                justify-content: space-between;
                                                align-items: center;
                                                margin: 3px;
                                            }

                                            .chat #chat {
                                                position: relative;
                                                width: 100%;
                                                max-width: 300px;
                                                max-height: 75px;
                                                height: 100%;
                                                word-wrap: break-word;
                                                word-break: break-all;
                                                border-radius: 5px;
                                                font-family: Verdana;
                                                font-size: 10px;
                                                color: #000;
                                                background: #FDFDFF;
                                                overflow-y: auto;
                                                outline: none;
                                            }

                                            .normal {
                                                position: relative;
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
                                                cursor: pointer;
                                            }

                                            .normal:is(:hover, :active) {
                                                background: #F0F0F0;
                                            }

                                            .normal span {
                                                text-decoration: underline;
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

                                                            .container button {
                                                                border: 0;
                                                                background: transparent;
                                                                transform: scale(0.6);
                                                                padding: 0;
                                                            }
                                                        </style>
                                                        <div class="container" style="cursor: not-allowed">
                                                            <img src="./images/ui/letter.png" alt="letter">
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

                                                            .container button {
                                                                border: 0;
                                                                background: transparent;
                                                                transform: scale(0.6);
                                                                padding: 0;
                                                            }
                                                        </style>
                                                        <div class="container" style="cursor: not-allowed">
                                                            <img src="./images/ui/happy.png" alt="happy">
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
                                                        <div class="container" style="cursor: not-allowed">
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

                                                            .container span:not(:empty).emoji {
                                                                position: relative;
                                                                width: 15px;
                                                                height: 15px;
                                                                padding: 0;
                                                                margin: 1px;
                                                                cursor: pointer;
                                                                transform: scale(1.3);
                                                                transition: all 0.1s ease;
                                                            }

                                                            .container span:not(:empty).emoji:is(:hover, :active) {
                                                                transform: scale(1.5);
                                                            }

                                                            .container button {
                                                                border: 0;
                                                                background: transparent;
                                                                transform: scale(0.6);
                                                                padding: 0;
                                                            }
                                                        </style>
                                                        <div class="container" onclick="viewEmojis(event);"
                                                            style="position: relative;">
                                                            <img src="./images/ui/wink.png" alt="wink">
                                                            <span></span>
                                                            <button>⯆</button>
                                                        </div>

                                                        <script>
                                                            function viewEmojis(event) {
                                                                const container = event.target.closest('.container');
                                                                if (!container) {
                                                                    return;
                                                                }
                                                                if (container.querySelector('.emoji-container')) {
                                                                    // Já existe, evita criar duplicado
                                                                    return;
                                                                }
                                                                const span = container.querySelector('span');

                                                                const emojis = [
                                                                    '😊', '😂', '😍', '😢', '😡', '👍', '👎', '👏', '🙏', '🤔',
                                                                    '😎', '🥳', '😭', '😴', '🤯', '😱', '🤩', '🤗', '😇', '😈',
                                                                    '💀', '👻', '🎃', '🔥', '🌟', '💥', '💫', '✨', '❤️', '💔',
                                                                    '💕', '💖', '💗', '💙', '💚', '💛', '💜', '🖤', '🤍', '🤎',
                                                                    '🍕', '🍔', '🍟', '🍩', '🍪', '🍫', '🍿', '🍎', '🍇', '🍓',
                                                                    '🍉', '🍌', '🍒', '🥑', '🥦', '🥕', '🍗', '🍖', '🍤', '🍱',
                                                                    '⚽', '🏀', '🏈', '⚾', '🎾', '🏐', '🏉', '🥏', '🎱', '🏓',
                                                                    '🚗', '🚕', '🚙', '🚌', '🚎', '🏎️', '🚓', '🚑', '🚒', '🚜',
                                                                    '🌍', '🌎', '🌏', '🌕', '🌙', '⭐', '☀️', '🌈', '🌧️', '❄️',
                                                                    '🎉', '🎊', '🎈', '🎂', '🍰', '🥂', '🍻', '☕', '🍺', '🍷'
                                                                ];
                                                                const emojiList = emojis.map(emoji => `<span class="emoji">${emoji}</span>`).join('');
                                                                const emojiContainer = document.createElement('div');
                                                                emojiContainer.className = 'emoji-container';
                                                                emojiContainer.innerHTML = emojiList;
                                                                emojiContainer.style.position = 'absolute';
                                                                emojiContainer.style.display = 'flex';
                                                                emojiContainer.style.flexWrap = 'wrap';
                                                                emojiContainer.style.width = 'max-content';
                                                                emojiContainer.style.maxWidth = '273px';
                                                                emojiContainer.style.background = 'linear-gradient(#D8E8F7, #F5F2F9, #D8E8F7)';
                                                                emojiContainer.style.padding = '2px';
                                                                emojiContainer.style.border = '1px solid #586170';
                                                                emojiContainer.style.borderRadius = '6px';
                                                                emojiContainer.style.zIndex = 1000;
                                                                emojiContainer.style.top = '100%';
                                                                emojiContainer.style.left = '-75px';
                                                                emojiContainer.style.boxShadow = '-1px -1px 3px #0000001f, 3px 3px 6px #00000038';

                                                                container.appendChild(emojiContainer);

                                                                emojiContainer.addEventListener('click', (e) => {
                                                                    if (e.target.classList.contains('emoji')) {
                                                                        // span.textContent += e.target.textContent;

                                                                        const windowEl = document.querySelector('msn-messenger-window').shadowRoot;
                                                                        const remoteUserEl = windowEl.querySelector('msn-messenger-local-user');
                                                                        if (!remoteUserEl) return console.error('msn-messenger-local-user não encontrado');

                                                                        const localUserShadow = remoteUserEl.shadowRoot;
                                                                        if (!localUserShadow) return console.error('shadowRoot do msn-messenger-local-user é null');

                                                                        const messageChatEl = localUserShadow.querySelector('msn-messenger-chat');
                                                                        if (!messageChatEl) return console.error('msn-messenger-chat não encontrado');

                                                                        const chatEl = messageChatEl.shadowRoot.querySelector('.chat #chat');
                                                                        if (!chatEl) return console.error('Elemento #chat não encontrado');
                                                                        chatEl.textContent += e.target.textContent;

                                                                        container.removeChild(emojiContainer);
                                                                    }
                                                                });

                                                                // Delay para evitar que o clique atual remova imediatamente
                                                                setTimeout(() => {
                                                                    document.addEventListener('click', (e) => {
                                                                        if (!container.contains(e.target)) {
                                                                            if (container.contains(emojiContainer)) {
                                                                                container.removeChild(emojiContainer);
                                                                            }
                                                                        }
                                                                    }, {
                                                                        once: true
                                                                    });
                                                                }, 0);
                                                            }
                                                        </script>

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

                                                            .container button {
                                                                border: 0;
                                                                background: transparent;
                                                                transform: scale(0.6);
                                                                padding: 0;
                                                            }
                                                        </style>
                                                        <div class="container" style="cursor: not-allowed">
                                                            <img src="./images/ui/mountain.png" alt="mountain">
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

                                                            .container button {
                                                                border: 0;
                                                                background: transparent;
                                                                transform: scale(0.6);
                                                                padding: 0;
                                                            }
                                                        </style>
                                                        <div class="container" style="cursor: not-allowed">
                                                            <img src="./images/ui/gift.png" alt="gift">
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
                                                                cursor: pointer;
                                                            }

                                                            .container button {
                                                                border: 0;
                                                                background: transparent;
                                                                transform: scale(0.6);
                                                                padding: 0;
                                                            }
                                                        </style>
                                                        <div class="container" onclick="sendNudge(event);"
                                                            title="Cutucar">
                                                            <img src="./images/ui/nudge.png" alt="nudge">
                                                        </div>
                                                        <script>
                                                            function sendNudge(event) {
                                                                var chatId = localStorage.getItem('chatId');

                                                                fetch('/send-message', {
                                                                        method: 'POST',
                                                                        headers: {
                                                                            'Content-Type': 'application/json',
                                                                            'X-CSRF-TOKEN': "{{ csrf_token() }}"
                                                                        },
                                                                        body: JSON.stringify({
                                                                            chat_id: chatId,
                                                                            message: 'nudge'
                                                                        })
                                                                    })
                                                                    .then(response => response.json())
                                                                    .then(data => {})
                                                                    .catch(error => {
                                                                        console.error('Error:', error);
                                                                    });
                                                            }
                                                        </script>
                                                    </template>
                                                </simple-button>
                                            </div>
                                            <div class="chat">
                                                <span id="chat" contenteditable="true"></span>
                                                <button class="normal"
                                                    onclick="sendMessage(event);"><span>S</span>end</button>
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
                                                        <div class="container" style="cursor: not-allowed">
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

                                        <script>
                                            function sendMessage(event) {
                                                const chatElement = event.target.closest('.chat').querySelector('#chat');
                                                const message = chatElement.textContent.trim();

                                                if (message) {
                                                    console.log('Sending message:', message);
                                                    var chatId = localStorage.getItem('chatId');

                                                    fetch('/send-message', {
                                                            method: 'POST',
                                                            headers: {
                                                                'Content-Type': 'application/json',
                                                                'X-CSRF-TOKEN': "{{ csrf_token() }}"
                                                            },
                                                            body: JSON.stringify({
                                                                chat_id: chatId,
                                                                message: message
                                                            })
                                                        })
                                                        .then(response => response.json())
                                                        .then(data => {
                                                            chatElement.textContent = '';
                                                        })
                                                        .catch(error => {
                                                            console.error('Error:', error);
                                                        });
                                                } else {
                                                    alert('Digite uma mensagem antes de enviar.');
                                                }
                                            }
                                        </script>
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
                                                background: #fff;
                                                border: 1px solid #586170;
                                                border-radius: 8px;
                                                transform: translateY(4px);
                                                margin-bottom: 8px;
                                            }

                                            .down {
                                                border: 0;
                                                background: transparent;
                                                color: #4D5967;
                                                transform: scaleY(0.5);
                                                align-self: flex-end;
                                                display: none;
                                            }

                                            .expand {
                                                position: absolute;
                                                top: 4px;
                                                right: -9px;
                                            }
                                        </style>
                                        <div class="container">
                                            <img class="picture" src="./images/ui/{{ $usuario->foto }}"
                                                alt="Avatar">
                                            <button class="down">⯆</button>
                                            <img class="expand" src="./images/ui/expand-left.png" alt="expand arrow">
                                        </div>
                                    </template>
                                </msn-messenger-avatar>
                            </div>

                        </template>
                    </msn-messenger-local-user>
                    <msn-messenger-statusbar style="position: absolute;bottom: 4px;width: 100%;padding-left: 3px;">
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
<script>
    document.addEventListener('DOMContentLoaded', () => {

        let keepAliveRunning = false;

        function sendKeepAlive() {
            if (keepAliveRunning || document.hidden) return;
            keepAliveRunning = true;

            fetch('/keepAlive', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({
                        page: 'App'
                    })
                })
                .catch(error => console.error('Erro no keepAlive:', error))
                .finally(() => {
                    keepAliveRunning = false;
                });
        }

        function keepAliveLoop() {
            sendKeepAlive();
            setTimeout(keepAliveLoop, 10000);
        }
        document.addEventListener('visibilitychange', () => {
            if (!document.hidden) {
                sendKeepAlive();
            }
        });
        keepAliveLoop();


        // $(function() {
        //     const windowWidth = $(window).width();
        //     const windowHeight = $(window).height();
        //     const el = $("msn-messenger-window");

        //     const elWidth = el.outerWidth();
        //     const elHeight = el.outerHeight();

        //     el.draggable({
        //         containment: [
        //             0, // min X
        //             0, // min Y
        //             windowWidth - elWidth, // max X
        //             windowHeight - elHeight // max Y
        //         ]
        //     });
        // });

        const audioNewMessage = new Audio('./sounds/new_message.mp3');
        audioNewMessage.load();
        const audioNudge = new Audio('./sounds/nudge.mp3');
        audioNudge.load();

        window.newMessage = () => {
            audioNewMessage.currentTime = 0;
            audioNewMessage.play().catch(error => {
                console.error('Erro ao tocar o som new_message:', error);
            });
        };
        window.nudge = () => {
            audioNudge.currentTime = 0;
            audioNudge.play().catch(error => {
                console.error('Erro ao tocar o som nudge:', error);
            });
        };

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
