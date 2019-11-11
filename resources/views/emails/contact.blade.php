<html>
<style>
    @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 500;
        src: local('Montserrat Medium'), local('Montserrat-Medium'), url(https://fonts.gstatic.com/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_ZpC3gfD_u50.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 500;
        src: local('Montserrat Medium'), local('Montserrat-Medium'), url(https://fonts.gstatic.com/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_ZpC3gnD_g.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 600;
        src: local('Montserrat SemiBold'), local('Montserrat-SemiBold'), url(https://fonts.gstatic.com/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_bZF3gfD_u50.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 600;
        src: local('Montserrat SemiBold'), local('Montserrat-SemiBold'), url(https://fonts.gstatic.com/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_bZF3gnD_g.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    * {
        margin: 0;
        padding: 0;
        margin-bottom: 15px;
    }

    html, body {
        font-family: 'Montserrat', sans-serif;
        font-size: 16px;
        font-weight: 500;
        background: #ffffff;
        color: #252529;
        padding: 8px;
    }

    p {
        line-height: 1.8;
    }

    h1 {
        font-size: 16px;
    }

    h2 {
        font-size: 15px;
    }

    h1, h2, strong, a, a:visited {
        color: #1c4d80;
    }

    a, a:visited {
        font-weight: 600;
        text-decoration: none;
    }

    a:hover, a:active {
        color: #24609e;
    }

    .guest_message p:last-of-type {
        margin-bottom: 0px;
    }
    .guest_message {
        font-style: italic;
        background-color: #f2f1f8;
        max-width: 650px;
        padding: 8px;
        border: 1px solid #1c4d80;
    }

    .logo {
        height: 54px;
    }

</style>

<body>
    <p>
        Olá <strong>{{ $admin->name }}</strong>, esta é uma mensagem automática gerada pelo portal da
        <a href="{{ $portalLink }}" target="_blank">CEIE</a>
    </p>

    <p>
        O visitante <strong>{{ $guest->name }}</strong> acessou o portal da
        <a href="{{ $portalLink }}" target="_blank">CEIE</a>
        e deixou a seguinte mensagem:
    </p>

    <div class="guest_message">
        <h2>{{ $guest->message->subject }}</h2>
        <p>{{ $guest->message->content }}</p>
    </div>

    <p>
        Para responder esta mensagem envie um email para o endereço <strong>{{ $guest->email }}</strong>
        informando o seguinte título no assunto da mensagem: <strong>RE: Portal da CEIE - {{ $guest->message->subject }}
    </p>

    <a href="{{ $portalLink }}" target="_blank">
        <img class="logo" src="{{ $inline->svg('logo/full_logo.svg') }}">
    </a>
</body>

</html>
