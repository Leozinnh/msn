# 🧾 Clone MSN Messenger - Versão Web

Um projeto nostálgico inspirado no clássico **MSN Messenger**, desenvolvido em **Laravel**, com uma interface moderna recriando o visual original.  
Aqui você pode **se registrar**, **entrar em grupos existentes**, **sons clássicos**, **criar grupos próprios** e **trocar mensagens em tempo real** com suporte a **emojis**, **status online/offline**, e outros recursos que marcaram época!

---

## ✅ Funcionalidades Principais

-   Registro de novos usuários
-   Login com autenticação
-   Criação e entrada em grupos de conversa
-   Envio e recebimento de mensagens
-   Emojis, status e interface com estilo retrô MSN
-   Histórico de mensagens
-   Sons clássicos
-   Usuário's Online/Offlline
-   Atualizações futuras: envio de imagens, status de presença, entre outros

---

## ⚙️ Requisitos

-   PHP >= 8.1
-   Composer
-   MySQL ou MariaDB
-   Node.js + NPM (para assets frontend, caso queira personalizar ou compilar)

---

## 🚀 Como rodar o projeto localmente

1. **Clone o repositório:**

```bash
git clone https://github.com/Leozinnh/msn.git
cd msn
```

2. **Instale as dependências PHP:**

```bash
composer install
```

3. **Copie o arquivo `.env` de exemplo e configure:**

```bash
cp .env.example .env
```

Edite o arquivo `.env` com suas credenciais:

```bash
DB_DATABASE=msn
DB_USERNAME=root
DB_PASSWORD=sua_senha
```

4. **Crie o banco de dados:**

```bash
create database `msn`
default character set utf8
default collate utf8_general_ci;
```

5. **Crie uma chave de aplicaçao:**

```bash
php artisan key:generate
```

6. **Execute as migrations:**

```bash
php artisan migrate
```

7. **(Opcional) Compile os assets:**

```bash
npm install
npm run dev
```

8. **Inicie o servidor local:**

```bash
php artisan serve
```

Acesse: http://localhost:8000

8. **(Opcional) Crie a cron para deslogar usuários offline**

```bash
* * * * * cd /var/ww/msn && php artisan schedule:run >> /dev/null 2>&1
```

---

## ✨ Próximas melhorias (Roadmap)

-   ✅ Opção de trocar senha (Esqueceu sua senha?)
-   ✅ Sistema de envio de arquivos (imagens e documentos)
-   ✅ Animações de "Nudge / Chamar atenção"
-   ✅ Sistema de status (Disponível, Ocupado, Ausente)
-   ✅ Integração com Websockets para mensagens em tempo real
-   ✅ Histórico persistente de conversas
-   ✅ Suporte a emojis personalizados
-   ✅ Melhorias na interface para mobile
-   ✅ Notificações em tempo real (toast / desktop notification)
-   ✅ Integração futura com autenticação OAuth (Google, Facebook, etc)
