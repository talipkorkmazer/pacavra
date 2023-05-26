@extends('layouts.welcome')
@section('content')
    <div class="container">
        <div class="logos">
            <div class="logo">
                <a href="http://127.0.0.1:8000/show">
                    <img src="{{ asset('public/public/images/pacavra/87C24AD5-BB94-408A-9D82-CBC00C5C986F.PNG') }}" alt="Marka 1">
                </a>
            </div>
            <div class="logo">
                <a href="http://www.pacavra.com.tr/" target="_blank">
                    <img src="{{ asset('public/public/images/pacavra-beyaz.jpeg') }}" alt="Marka 2">
                </a>
            </div>
        </div>
        <p class="message">
            <strong>Patch Work Interior Design</strong> ve <strong>Paçavra Interior Design</strong>, kusursuz bir şekilde tasarlanmış kumaşlar üretmek
            için uzmanlaşmış lider markalardır. En son teknoloji ve yaratıcı tasarımlarımızla benzersiz seçenekler
            sunuyoruz. Müşterilerimize kalite, zarafet ve estetik açıdan mükemmel ürünler sunmak için sürekli olarak
            çalışıyoruz. Size özel koleksiyonlarımızı keşfedin ve hayallerinizdeki yaşam alanlarını gerçeğe dönüştürmek
            için bizi tercih edin.
        </p>
    </div>
@endsection
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
    }

    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        max-width: 90%;
        margin: 0 auto;
        padding: 40px;
        background-color: #ffffff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    .logos {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 20px;
    }

    .logo {
        flex: 1;
        max-width: 300px;
        max-height: 300px;
        text-align: center;
        transition: transform 0.3s ease;
    }

    .logo:hover {
        transform: scale(1.1);
    }

    .logo img {
        max-width: 100%;
        max-height: 100%;
        height: auto;
    }

    .message {
        font-family: sans-serif;
        text-align: center;
        margin-top: 40px;
        font-size: 24px;
        color: #333333;
        line-height: 1.5;
        max-width: 700px;
    }

    @media (max-width: 768px) {
        body {
            display: block;
        }

        .container {
            padding: 30px 30px 0 30px !important;
        }

        .logos {
            flex-direction: column;
        }

        .logo {
            max-width: 200px;
            max-height: 200px;
        }
    }
</style>
