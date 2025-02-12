<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="resources/css/app.css" class="">
    <title>Альпина книги</title>
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else


</head>
<body>
<!-- Первый нав -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container p-0">
        <a href="" class="navbar-brand mb-2">КазБукЭсперт</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav me-auto mb-2">
            <li class="nav-item">
                <a href="" class="nav-link">Казахстан</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">Доставка</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">Возврат</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">Корпоративным клиентам</a>
            </li>
        </ul>
        <div class="navbar-nav me-3 mb-2">
            <a href="">+7 (771) 290-6696</a>
        </div>
        <form action="" class="d-flex mb-2">
            <svg class="me-auto my-3" xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
              </svg>
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Войти</button>
        </form>
    </div>
    </nav>
  
<!-- Второй нав -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container p-0">
        <a href="" style="margin-right: 30%;" class="navbar-brand mb-2">LOGO</a>

    <div class="collapse navbar-collapse me-5" id="navbarContent2">
            <form action="" class="d-flex">
                <input type="search" placeholder="Search" class="form-control ms-5">
                <button class="btn">
                    <svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                      </svg>
                </button>
            </form>
    </div>

        <div class="collapse navbar-collapse ms-5 mb-2 nav justify-content-end" id="navbarContent2">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                      </svg>
                      <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Избранное</button>
                </li>
                <li class="nav-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
                        <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z"/>
                      </svg>
                      <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Доставка</button>
                </li>
            </ul>
        </div>
    </div>
    </nav>

<!-- Третий нав -->
 </div>
    <nav class="navbar-expand-lg bg-body-tertiary nav_bot">
        <div class="container nav_cat p-0">
            <div class="dropdown">
                <button class="btn dropdown-toggle mb-2 p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Каталог
                </button>
                </div>

    <div class="collapse navbar-collapse mb-2 nav justify-content-end" id="navbarContent3">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                              <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Серия</button>
                        </li>
                        <li class="nav-item">
                              <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Блок</button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Контакты</button>
                      </li>
                    </ul>
    </div>
        </div>
        </nav>
<!--Слайды-->
    <main>
        <div class="carousel slide p-0" id="carouselControls" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://s3-alpha-sig.figma.com/img/8f05/f333/55d5632f680c5d953b0c493ad8909d6a?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=PqM8uUv1bz6-9d8c4CGZpObNCvBXJavJDl23gZYMRjqGNJzKdMkc0gRTsjDwMUlWUG6JqiWqUlUJG~CxrLn5m~nwuBITR0~gykjip6FXtf~OqpX~HqgoTrQhlRidWSeXTI4BkPAZ4gx-vr4yF2t57kxP0w6T1D-y2xizjg4~0KsgmQVPuOcEAPScPFVrgQf2hEAFt5-sxXFyuQ4rcPHhqJg83oYEwrgN4GssyHaUMAjZQ3OOOgRYlTV~AiYMA9jQd0IKG-QW9C0yp~mNgATMub43t2FY96k1EnHqvq3yBfOL~hW2kxnf0WZR3ZXyRp9QHs2w5VAGar5B98qCO2JuMw__" alt="">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://s3-alpha-sig.figma.com/img/8f05/f333/55d5632f680c5d953b0c493ad8909d6a?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=PqM8uUv1bz6-9d8c4CGZpObNCvBXJavJDl23gZYMRjqGNJzKdMkc0gRTsjDwMUlWUG6JqiWqUlUJG~CxrLn5m~nwuBITR0~gykjip6FXtf~OqpX~HqgoTrQhlRidWSeXTI4BkPAZ4gx-vr4yF2t57kxP0w6T1D-y2xizjg4~0KsgmQVPuOcEAPScPFVrgQf2hEAFt5-sxXFyuQ4rcPHhqJg83oYEwrgN4GssyHaUMAjZQ3OOOgRYlTV~AiYMA9jQd0IKG-QW9C0yp~mNgATMub43t2FY96k1EnHqvq3yBfOL~hW2kxnf0WZR3ZXyRp9QHs2w5VAGar5B98qCO2JuMw__" alt="">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://s3-alpha-sig.figma.com/img/8f05/f333/55d5632f680c5d953b0c493ad8909d6a?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=PqM8uUv1bz6-9d8c4CGZpObNCvBXJavJDl23gZYMRjqGNJzKdMkc0gRTsjDwMUlWUG6JqiWqUlUJG~CxrLn5m~nwuBITR0~gykjip6FXtf~OqpX~HqgoTrQhlRidWSeXTI4BkPAZ4gx-vr4yF2t57kxP0w6T1D-y2xizjg4~0KsgmQVPuOcEAPScPFVrgQf2hEAFt5-sxXFyuQ4rcPHhqJg83oYEwrgN4GssyHaUMAjZQ3OOOgRYlTV~AiYMA9jQd0IKG-QW9C0yp~mNgATMub43t2FY96k1EnHqvq3yBfOL~hW2kxnf0WZR3ZXyRp9QHs2w5VAGar5B98qCO2JuMw__" alt="">
                </div>
            </div>
            <a href="#carouselControls" class="carousel-control-prev" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a href="#carouselControls" class="carousel-control-next" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

    <div class="container">
        <h2 class="my-5">Hello Team Lead</h2>
    </div>

<!--Каталог-->
    <div class="container">
        <h2 class="my-5">Каталог</h2>
            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 g-3">
            <div class="col">
                    <a href="alpina-proza.html" class="category-link">
                        <img src="https://s3-alpha-sig.figma.com/img/8db7/b89d/37d6cf6919f50703f2ab9ae84f913822?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=JWN1x1H3yZWjUjYBs3V4QRMrf0wI~QonipGiDHJPG~MHiT~Ip5PSadG25andq2Sb04sBRxw9s950EDZuMfV0O6mZcFT~JT61exA7itcp968dahUjDZniWJoL~Co57HzusBZF~LIUNcFKiB1oCC8k4rfvaFdPJxfLJwXpcOE3iNkgd1v9I8wJcMulctLmKS5aSYz2qEUdi8cwrSp2ok2nT6vh1zdp0y-u41rLPzGmxVeevZdYNzzIsSWLWHI0uxGcRKaOVNlGP8JyZNO3ZGLwFQsVVh4qxQQhBaz-zc9e0KGHVKxlvuops6Xcc7r2piI0m6mInga1zKlHwUjQwIXo5g__" alt="Альпина.Проза" class="category-img">
                        <p class="category-text">Скидки</p>
                    </a>
            </div>
    
            <div class="col">
                <a href="alpina-proza.html" class="category-link">
                    <img src="https://s3-alpha-sig.figma.com/img/aed6/a87f/377aa2d66d0bca4ff21bdfc70ce9f701?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=tHVdQ8q2oziFOD13qu8yXVc5VZZIfAewUuzmRsgxVbcmFDwQuFvkiZ5ulMrFZo9LQBEIUSF71K07PCXyQJ6A3Jp7fo-n7cNz0Ke9-DuiBN5pupexScXeiUwtyL1CMu1KWNvZWW9wXwKeKPiTstXF7TURCzin2MdVhZZmiLfEx57BTdqynGx89X0OqsK2742zApIRjFN53MjWL~9HNciRPyZ3HXTqMschSl9soH4YZUm6OHxUIcfGcKViVWSXTBYAa39ieFSML7iBv5VMiwRZecNiQx8YSUGiCz6UwOX9Kb0DJavXtr8Tm8CD8qVpaKGsZfkO267NzUc2omGrlqjv2w__" alt="Альпина.Проза" class="category-img">
                    <p class="category-text">Альпина.Проза</p>
                </a>
            </div>
    
            <div class="col">
                <a href="antikrizisnoe.html" class="category-link">
                    <img src="https://s3-alpha-sig.figma.com/img/8c2d/2cf3/dab65d46a6c9e483c87f21aea4df416a?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=CjA~41NHTf9pmRhrAZy6LtbfuEz6BxzK0bnp1R51nUo3q7GHPUsf9tHoLgv4tlMvfBT-GSZ9srP18LPxdNQi39APRagwBS~nAJqA~N-YkyBop-jTqoPz2NhSrDZfWJSPMgbRwESs8CZ3EYavfs3BGHcgGIwrnVb2yG0U8FGfMb5ahDg9O2oflLp6Z-jEMiPeBqhvZqBOR~3EJ79rbech~bQxu8MbJm4u52IiFssCxQUAq8H08W8gnuA76sL4LCWBA6FqHYx-3PumkTWU38mGX-0byvdjQUHhEvEt083RFy58gfp1BnsO0Qe69mDLMYpVhHtHLvVF8gwOmp5CkpYPYg__" alt="Антикризисное управление" class="category-img">
                    <p class="category-text">Антикризисное управление</p>
                </a>
            </div>
    
            <div class="col">
                <a href="#" class="category-link">
                    <img src="https://s3-alpha-sig.figma.com/img/f195/a735/fc94d8b6f625627e079679ed377cbd65?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=ku1jPaAXvBPmqr2Gm~142U9~jDzXJ0HmHsn0AYqg83TLrj561U7JKe76cRpcOz1qxYr8tKS2OQ34Oa2UDUsb8yfx1o4BrsFgmXw5Dc0dGTR2EDVvWk0TCzHt5-TE428n-X-tmFmvz-aUVvVpZqZdJszNiobMKmzz6LAKE5ecTPSUIcjyR60vpXF3uIPO9JRk6i2hkIr8p~dAlff~itEi3IyPUrCAXOyBX8-0Or4zChRLtEixnjYmI0r7h1JegwKULykk1Gqz9kJMxzYSaKfajKw~a8PysY7AyZ4qs0mWgO9JvIwAa4baxDc9HDB3bQfNHzLAIi773AjBDLGhNZ96~A__" alt="Бизнес-процессы" class="category-img">
                    <p class="category-text">Бизнес-процессы</p>
                </a>
            </div>
    
            <div class="col">
                <a href="dlya-detei.html" class="category-link">
                    <img src="https://s3-alpha-sig.figma.com/img/ce24/c006/fd28096e406ee7de378ea2bf5ea236fc?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=d3uBqUmByCUi1ftfl9~pij~3iPX25IbIXqPu15ffnQRUx~OSQJJzy2KUo9cJ6XTF3QcadiOHspxjZCNJ1ganYdqcDTvFjLwd8WiQ08Vp6bOIz5NJk6vz0opdCA4JVECNRPz3ZI7zHqR2YbEFtkJP9sXtICyGdo8WsE92MNt~OOAEcCzplTmC1~ps4nV0UHE4A5x3nk5lUsUVmzyk9E4itRo-J5YIZrMruOf7M-PmTxM6ny~fo1x331uo8Cmy3BDgnJkHGz8H0BiHowhvx7h40DGMz16XQ6IApCSX1hkSFGDE8qg9Nn3~1nodTvXIca2Oza-daGp29uwKvEMpAs9eIw__" alt="Для детей и родителей" class="category-img">
                    <p class="category-text">Для детей и родителей</p>
                </a>
            </div>
            <div class="col">
                <a href="dlya-detei.html" class="category-link">
                    <img src="https://s3-alpha-sig.figma.com/img/92dc/d98c/f7614a1c90afb5fdff7c84079847e934?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=WCIinh9VlFDb64sMp~8Cc3SCYtIs5-G~jRVUVqW9C8VLi0ibnBG2J6Ayqy-D7pvzYVLE7PwfIXSESCXQoDbjBfypUkt5vXGjeMPLsy71xt8gWX-52VwykyAqVJ5-iv9QmPdtVxMY0C~M2hWfrR-ulKK8A9C8QY3EnHAmFUW6KSmIoqizOgdynbaES4V5cYdAObWhcX4qvKYZn1Mto4G4w-pa5-UTrWQscEb2lZUfJZMlXQ-mEZTaj17es94QwPPjrvM0bVsGZ3UCh9YWN23nAMFFiOcjWxuceWrhU60NeFv20NYunp4HcVyjnK4cPhlhWt-n3S2vrTbxqI5X9rd2Gg__" alt="Для детей и родителей" class="category-img">
                    <p class="category-text">Для детей и родителей</p>
                </a>
            </div>
    
            <div class="col">
                <a href="detskie-knigi.html" class="category-link">
                    <img src="https://s3-alpha-sig.figma.com/img/3ad4/d52e/314f14f967cbbf41541606ac98207202?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=D7L1lFBNtHKVI0sTIxC5mb3Iq-RnX5R995HSnzCrU9v3zXtP8wQiSadcTlMkmwm~GJtQygloF3TvQ9ssMxZSwyCXf3KfSbUXWq4KNznMy6u1Wx-rDoracCk8bKjUIOrkkHWFFWSn-FaaJksZDSSY6McbxHA3vnuiL~0GKz8YXqICzTha7OE35Ho1~6i5gpnDGTZO-XFei8hjaAGWnXG~wNFo3AhVntj93GqnRI3XodnpliyiYHfSSLwnShC-fY5xwuQwEY1lRnzboHiOtXmV98gHr7PqfYPFdBb-mhtjej3hrzJyisp7gUAH4m9MGER8Qw5WCLvm0Dx-lMwU--AnPg__" alt="Детские книги" class="category-img">
                    <p class="category-text">Детские книги</p>
                </a>
            </div>
    
            <div class="col">
                <a href="dlya-detei.html" class="category-link">
                    <img src="https://s3-alpha-sig.figma.com/img/881c/5038/9743df6620bea230a9f7bae87ff5ccf6?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=iIACsZSowuggz8N95vWA38hPd467k~2Se3t9ZQOoDtRI1a2aaIat0kFDWDtdYWyNabaDY92aFVgKvLSpkpBmwMwq7wa7MuU8cnBEjEPg~0eYn1-6bOWdCMpN-fstfO0M~8mXTF-aCElLbxKaVTe-Ziphw0vljXx2P670PZziVti9XgX1YSavAVfuWFGjlBc3K8dyGlQwCeRKTlp8qCYDX1J9IzSoyQzyaxbJDV~TWlw9O9KOHnfE2cElNz0kYCYJ51on0fSDVIzXcBNC5WBxCCu8CGhA9wN3HdJIInYwqA2Xuiz0xQTk8vd2VqjVmuo3dH-qXZ9ryz~QrkbP9MggcQ__" alt="Для детей и родителей" class="category-img">
                    <p class="category-text">Для детей и родителей</p>
                </a>
            </div>
    
            <div class="col">
                <a href="ezhednevniki.html" class="category-link">
                    <img src="https://s3-alpha-sig.figma.com/img/955b/8f9e/da5c154a02561164788b4fdef581fd95?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=GQdyE4d7q1~Zc04RNS5Y-2IdINu5lq9cnNtO6vjHUeKiwpJafqnOIcJNHcgE1Z8SktuIDfDQANOziDUsmleW9kU5l1aPf-C8VdCHbADVSwLmxJRHIBbKBZY8GUYDuwZJLLza2~Xc2JTcvkWpJCgYNBu45Np3J2kiLeaK2g3K7-jPXwzclAvcawBHiHEb~AkP1f8QJ7J9UFsbhOGhH07CMnAWZT9xjm2o7VFcmT-O7A4LWReSZ3xQoikDB8kyEnBP5aKyNpnvmvtVAvfWNxpdRyuEmkSOlYeYFQ7HhdKO9bqZtdnnmWnSFp0~s9-CSJic9BBE-oDxaFyuxC2ao1RPFA__" alt="Ежедневники" class="category-img">
                    <p class="category-text">Ежедневники</p>
                </a>
            </div>
    
            <div class="col">
                <a href="ezhednevniki-biznes.html" class="category-link">
                    <img src="https://s3-alpha-sig.figma.com/img/6647/bc05/0c02b9f2e063a86b8d424419170ca312?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=q6FRVetZQ5U0iNTyi7~JRGKUKA5nXmUn54cApDNyaSiMb5GbELkAhbKDVWhO~r74CWi1ePe7cqhMk3nRI4t9Nd6gGWEIYnE4nCis42uhX0uj8EigGQcspcj7XoJxbC0RBrbLAxn9N4Z8FkRScUcy8aIQw8prDSCL9VPXLvG45dfvL0iOSkNBbNo7ZhbK3e2J7RwPcttRhONcFbIp4076qJgfQbUq2wke2eFttNoASIbomgxhzvXtsAdoQuxqnQJ9iuOyxhNxFqX2pvtXoiXJQAb6p~qW3fr6cjc90fhnIlMtautx0UcILP1Q8LMbTmECQHZ5s58HSMsYFeNBq1rIAQ__" alt="Ежедневники для бизнеса" class="category-img">
                    <p class="category-text">Ежедневники для бизнеса</p>
                </a>
            </div>
    
            <div class="col">
                <a href="ezhednevniki-samorazvitie.html" class="category-link">
                    <img src="https://s3-alpha-sig.figma.com/img/621f/9013/21805f9a3b22804bc40435c3ff32330b?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=TUW4zDnp9nV6M2BiB0s-Y-F88fj9s3gGBwP7m-xnDk3rfCX38ZNCc5QP02xtfFwNmna5bka--Yc4tgeAbhzYttXppTKhmH3xUusC19OsgPsvHel8RSYx7zERBubkM2Gr9QuEShAHOyLHFl2yCa6Xd9JOnA2IYGDUs~MfjcP9tv91Me-e04BhQKorUpITp75GAA1ly43mNauWF5lrzTHG4E76SxikopbOIW~Zh8xrpxgwXHzIiRxYCaUqdQqLxmTH4pDWQQjQEOSN1064cSpWFIEBR6JM6Y7tEwaPfxeSW7W1-2TJ9Kw48DlTr4wxvJCBMPNWyz4ezkh1YKUOpkzq4w__" alt="Ежедневники для саморазвития" class="category-img">
                    <p class="category-text">Ежедневники для саморазвития</p>
                </a>
            </div>
    
            <div class="col">
                <a href="ezhednevniki-samorazvitie.html" class="category-link">
                    <img src="https://s3-alpha-sig.figma.com/img/621f/9013/21805f9a3b22804bc40435c3ff32330b?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=TUW4zDnp9nV6M2BiB0s-Y-F88fj9s3gGBwP7m-xnDk3rfCX38ZNCc5QP02xtfFwNmna5bka--Yc4tgeAbhzYttXppTKhmH3xUusC19OsgPsvHel8RSYx7zERBubkM2Gr9QuEShAHOyLHFl2yCa6Xd9JOnA2IYGDUs~MfjcP9tv91Me-e04BhQKorUpITp75GAA1ly43mNauWF5lrzTHG4E76SxikopbOIW~Zh8xrpxgwXHzIiRxYCaUqdQqLxmTH4pDWQQjQEOSN1064cSpWFIEBR6JM6Y7tEwaPfxeSW7W1-2TJ9Kw48DlTr4wxvJCBMPNWyz4ezkh1YKUOpkzq4w__" alt="Ежедневники для саморазвития" class="category-img">
                    <p class="category-text">Ежедневники для саморазвития</p>
                </a>
            </div>
    
            <div class="col">
                <a href="ezhednevniki-samoreflexiya.html" class="category-link">
                    <img src="https://s3-alpha-sig.figma.com/img/0f07/0af2/772bc8d6c0d2cc6d9900d27d9950c2e6?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=uEyOOc2XNkgGryTCBR4fTdN0uZfZ7nnbTP5wf-tzMXwm82FpDh582KGgOBWzdhjrxnuZWGzMf48nVNt~GcCMsYfwXYbmjfPLjo5bq7CnUn3TGQ06P2KhFuDfrGib709soJ9KHzzZD8dPrDSOmlxMkt8iGEXx8CwO1EJfWBwZHEStWEOuafMBQAZNA5IkVCxWDiK3ZhJGPeUPy3qNYgHBpbo3qZl02yDNw6gGRH91M2oRcOnJfzZQHgSsobPqUeLxROjpQutqlItpQGqWbGwU1yFe-cgN0S-Oh07tsiXy79aBaNGSZ-RXS6W-oBz2FBm-u3mEnZxSDp3ciDvndQsQqw__" alt="Ежедневники для саморефлексии" class="category-img">
                    <p class="category-text">Ежедневники для саморефлексии</p>
                </a>
            </div>
    
            <div class="col">
                <a href="zdorovie.html" class="category-link">
                    <img src="https://s3-alpha-sig.figma.com/img/4460/4ddf/7fc3e094633c59c654a8afeb2ef5e216?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=ra4tqiKKZQaEKs-JpYPktRNdFzqSQpmr~u7JTpTX8nVP8BCB468XgjO-z0J8iR-I6mKRl4orlhTT1V-2XbUpCcMyVPSB4y-Rt95fZyGdS8wUvqRR67QDoCZ5tVR944NWQ7ZobdrvICL8w8TR2NvCE0gx8T1OhxLRJes~tEeD8bc4X~gWEDL2apkL4Xbu~JuaOyfFdSfls06Rxcakz8PgF~FVnbT8tZkCK0fIvGdxvWBv1xIMFlNOAA-iO1Z0fiMHOJjWNKR1t7EV9ucQ9l4y4kirKbo~Fm9OaVDJoT5BEaA4zP5P~8xmhQy99WboLfZVXQ-VckYo152kdtA~Sx2~uA__" alt="Здоровье, питание, сон" class="category-img">
                    <p class="category-text">Здоровье, питание, сон</p>
                </a>
            </div>
    
            <div class="col">
                <a href="iskusstvo.html" class="category-link">
                    <img src="https://s3-alpha-sig.figma.com/img/df33/2819/a893247ee0f311c604e52b99cd205de3?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=NxXbwn82NgGalM1w9MigFdjRDgjKA46P~5u1G4fARl9kJ0B0jgfszDgfcPnCpO6C5ILe1qA4lXNzcbQcu~tqU9y5b2e7FHiy~EdL~o0n66F6dSUViNuB~codSICyngQztnNu5uTzmQhrYPe4knjajGNh08H-xdKzIr0Eu29M3IxB3L4ErF1oSp-uqbP-hCdn6yz-BIjXS9NbsS9wEnhG9WWDo~uI8c-h-Zb3KJ6zZY333LJ9fxEPIVpxlI17ZnfdiZog3jtvhdjCzHln~MUwS4HfCQYv3dpp5tJnUXi6DeGsgJySIuOhaWvyp9bePgKF86t3SYGazL4h5FiKUsEfgg__" alt="Искусство и творчество" class="category-img">
                    <p class="category-text">Искусство и творчество</p>
                </a>
            </div>
    
            <div class="col">
                <a href="all-books.html" class="btn-all">Смотреть все бумажные книги →</a>
            </div>
        </div>
    </div>

<!--Книжнные новинки-->
    <div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Книжные новинки</h2>
        <div class="d-flex align-items-center">
            <a href="#" class="text-decoration-none text-secondary me-3">СМОТРЕТЬ ВСЕ</a>
            <div class="carousel-nav">
                <button class="nav-btn prev" data-bs-target="#bookCarousel" data-bs-slide="prev">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button class="nav-btn next" data-bs-target="#bookCarousel" data-bs-slide="next">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>

    <div id="bookCarousel" class="carousel slide" data-bs-interval="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-3">
                        <div class="book-card">
                            <div class="badge-container">
                                <span class="badge bg-success">НОВИНКА</span>
                                <span class="badge bg-danger">-34%</span>
                            </div>
                            <div class="card-img-top">
                                <img src="https://s3-alpha-sig.figma.com/img/f9ad/9f9a/3b87befec166747d6d55e11929b16464?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=NHFG4M5YtK0Yn6PkuRILx28MLZmNKYTDNH5quqP4qudnsAL5vV0hwwhFyBh~ioxcq1KeN5CPTIn65DH9w0A~UkeptTjnIEP73yAOmADrycGogotNdm6HqWEkT1cauPXoXSEJFxrOBrmFd7QfvBwuc-bFdekgozq3VnFy8CvEZxsfg6-lbFRIS7HtMRoeRru8TBw4qzuj5S5aBgna16up~eOyeyDEJtG5pF8e32VMRtttA6cIoFSTkFL35Ylri5vm074h0QtG-DJoKbjy3l9y8ONOazkmVhBCvTtQrTfwhCx8ar0J6Ec1CfIgpsFAMnIUJK06wZYPuaHkqZRqP-GQ8Q__" class="card-img-top" alt="Book 1">    
                            </div>
                            <div class="card-body">
                                <div class="price-container">
                                    <span class="price">628 руб.</span>
                                    <span class="old-price">628 руб.</span>
                                </div>
                                <p class="binding">Твердый переплет</p>
                                <h6 class="book-title">За мной придут ночью: Уйгурский поэт о геноциде в современном Китае</h6>
                                <p class="author">Илья Латыпов</p>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="rating-number">4</span>
                                    <span class="reviews-count">(2)</span>
                                </div>
                                <div class="buttons">
                                    <button type="button" class="btn btn-primary cart-btn">
                                        <i class="bi bi-cart3"></i>
                                        <span>В корзину</span>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary favorite-btn">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="book-card">
                            <div class="badge-container">
                                <span class="badge bg-success">НОВИНКА</span>
                                <span class="badge bg-danger">-34%</span>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/9c37/f37c/949206e1a933ca0ee55bed511c80ca00?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=HdHhT3mxaYj8aE6KBlYNnXlnt6sE3fqQsyW9D3OkteCIE4LT6HT~rYW0HzEktT0~RCpEHl15lOta~jzLBknVeZEwKF9IIUrwqmXhiVigC8o~AFGe2EvbkbsSwgorVnzsQD9Lawp1~bZ-T-LQcrAikOlX5HFhAeJ7wsveZQaM2pr9MF1wS4C2ZLyEfgURUEZ2BRbrg7KyEm2bBG4txdkb5uKOcBU3DlqSoYKxSprVruBZOzZslkeTFuhiiL8zy-aBpbsDSuKWx8avB97Cth~GEV0f8233o~0q0jjjBzC3orYjH6ZxSu-mFakPobYUkHqY3bSTRh4Pwi4ZBt0~x~Lw9w__" class="card-img-top" alt="Book 2">
                            <div class="card-body">
                                <div class="price-container">
                                    <span class="price">628 руб.</span>
                                    <span class="old-price">628 руб.</span>
                                </div>
                                <p class="binding">Твердый переплет</p>
                                <h6 class="book-title">Зимний солдат</h6>
                                <p class="author">Илья Латыпов</p>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="rating-number">4</span>
                                    <span class="reviews-count">(2)</span>
                                </div>
                                <div class="buttons">
                                    <button type="button" class="btn btn-primary cart-btn">
                                        <i class="bi bi-cart3"></i>
                                        <span>В корзину</span>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary favorite-btn">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="book-card">
                            <div class="badge-container">
                                <span class="badge bg-success">НОВИНКА</span>
                                <span class="badge bg-danger">-34%</span>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/c37c/f314/9afa71b3fbafcb42a8b260c3120e0aea?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=L95FyGXZyYvIPv5Hcf6sXIbPUpFIXOQnfx0bfls~W2VkDdcZVg5qc1xDn~y6k2O2Nh04bxZbDZFIIOGsHSIfA4QH2-RrEkDcTkqf0IPuXn~TTLyLPxrXHsgeW7p5uy~SWLxTkIwXewuZX3RaJ3cXti9sJpjjg1coIaI-WwWjT7sTOCy8YCsd~6NKWY2kRfCoTAjRJe90ZOov1HTFQCiKOgoSIgO0efemqnac2MBLOiDsxXDHp831dBPRlTbkn2rM4CwQ1wxL4BCx4uToQnPwOTZSxZODfSgcIGyGXgnqpc8zlRVpI-6Hwxwmur4GDDhIhRmw5qJDKQrrUJsN2av6sQ__" class="card-img-top" alt="Book 3">
                            <div class="card-body">
                                <div class="price-container">
                                    <span class="price">628 руб.</span>
                                    <span class="old-price">628 руб.</span>
                                </div>
                                <p class="binding">Твердый переплет</p>
                                <h6 class="book-title">Остров Сокровищ</h6>
                                <p class="author">Илья Латыпов</p>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="rating-number">4</span>
                                    <span class="reviews-count">(2)</span>
                                </div>
                                <div class="buttons">
                                    <button type="button" class="btn btn-primary cart-btn">
                                        <i class="bi bi-cart3"></i>
                                        <span>В корзину</span>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary favorite-btn">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="book-card">
                            <div class="badge-container">
                                <span class="badge bg-success">НОВИНКА</span>
                                <span class="badge bg-danger">-34%</span>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/d077/9c9d/59ce28ce2fee16b5fdb2c88e5832e7fd?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=arswfTar9HjoLlQomujBj2-qUjpHKWegYJ-D2jLaYmV2Ay6NCblJvxieJ2NjfwDSXSdm0PcmnXmMaHR5u06RHMYAYgISJjH00mwQfGu4MWRs3r0H0tBUcTN2f-ecfLduGQth8M0vBpE3kiqLaoa65wKQ~B0BZ6-zr-MewMY7m80Op~xNCtf0q4hzLfBQ8aM6mCPsD5w1myKnjL-LSer-ON9g8cZvBFYqIhMN6Ycm~a6MAa3~MgS1uNofGyYM-kWi7N52vmRkRgEt13rCiukSx7~~Qi8tMceAuuY~UJc6z8s8wwhC4ZVZPWu7cvco1X--fgvhW~O37uUi54P9UFwovQ__" class="card-img-top" alt="Book 4">
                            <div class="card-body">
                                <div class="price-container">
                                    <span class="price">628 руб.</span>
                                    <span class="old-price">628 руб.</span>
                                </div>
                                <p class="binding">Твердый переплет</p>
                                <h6 class="book-title">Рыцарь за братьев</h6>
                                <p class="author">Илья Латыпов</p>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="rating-number">4</span>
                                    <span class="reviews-count">(2)</span>
                                </div>
                                <div class="buttons">
                                    <button type="button" class="btn btn-primary cart-btn">
                                        <i class="bi bi-cart3"></i>
                                        <span>В корзину</span>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary favorite-btn">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-3">
                        <div class="book-card">
                            <div class="badge-container">
                                <span class="badge bg-success">НОВИНКА</span>
                                <span class="badge bg-danger">-34%</span>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/15dc/a140/7c52ce54c732330d58be54ba08832ca8?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=nIWmiTypbdKELKqVIV--ZDsDrfOI19wt6bIAIrPHWPbUmUyYjxlHmwRmDLo3DxDyZE073EMjT6TWxxnx8xOKQuqDmg6jDMUKcBVkP369-6XlXVg6LANO0d4XyuzJs3iLlYr3ihsfm4rKPXoeBA88~zOTBjwazg-t-kQkZfr8asLvq26FIbb2sBUbF6pxQaRSvihAqgLoK7B18XSC9umbT1X01Jh5-TYY4XwJVzR8IDLJ7PA4p9P1gOIOvnMjScl98IfjmLQ73-KJl45IdpP6u30rEW3trQszb0hxLhlFnbf-JO4FvtWs1HmW8zBI1B01NMt4a6aK8b8A9cEbG7Laaw__" class="card-img-top" alt="Book 5">
                            <div class="card-body">
                                <div class="price-container">
                                    <span class="price">628 руб.</span>
                                    <span class="old-price">628 руб.</span>
                                </div>
                                <p class="binding">Твердый переплет</p>
                                <h6 class="book-title">За мной придут ночью: Уйгурский поэт о геноциде в современном Китае</h6>
                                <p class="author">Илья Латыпов</p>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="rating-number">4</span>
                                    <span class="reviews-count">(2)</span>
                                </div>
                                <div class="buttons">
                                    <button type="button" class="btn btn-primary cart-btn">
                                        <i class="bi bi-cart3"></i>
                                        <span>В корзину</span>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary favorite-btn">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="book-card">
                            <div class="badge-container">
                                <span class="badge bg-success">НОВИНКА</span>
                                <span class="badge bg-danger">-34%</span>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/9b46/a2da/8905c79cbe5abf8b0bd27a4af639934a?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=OMMDdvesIUJwh5yrQAD-0MZ4vNIXAm5KPfu8qHNlIavd8erDd9Ren1FMvJsU9~TuUUOjXI4QCDqeKyJSP7DuDNlcw27PTna9~fjkyGudjtiAc67Wt4b5XZojiYtDUHPVahHChh5p2ZwjJQWJg7EHynwCUCeEvtROWzaJsZen9XlWFdhmnjsNAyVzO-LTOTVlnAQ3Pxx82k90jPTDLYZu5F1XOj~C~LSbxfiYxA8IVjy3iFpA1M14eouGacyRABJQ5hFD31XGa4VzbaIehvxitSFQNu6rT4dOD6aQv0S0dcFEWmrUYXNuup1hqx~9Eq-lZ07yKzG0IJLGNuiJtvUJ9w__" class="card-img-top" alt="Book 6">
                            <div class="card-body">
                                <div class="price-container">
                                    <span class="price">628 руб.</span>
                                    <span class="old-price">628 руб.</span>
                                </div>
                                <p class="binding">Твердый переплет</p>
                                <h6 class="book-title">Зимний солдат</h6>
                                <p class="author">Илья Латыпов</p>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="rating-number">4</span>
                                    <span class="reviews-count">(2)</span>
                                </div>
                                <div class="buttons">
                                    <button type="button" class="btn btn-primary cart-btn">
                                        <i class="bi bi-cart3"></i>
                                        <span>В корзину</span>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary favorite-btn">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="book-card">
                            <div class="badge-container">
                                <span class="badge bg-success">НОВИНКА</span>
                                <span class="badge bg-danger">-34%</span>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/50fa/c1a0/2e18219b0b21aa268095f945c83465a0?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=RyPsa72d~yYkzT3GaZML~Th7RGw9m6OnWksSrkiHi0Z4yVKESaTpVZ8~eMytbExBKt0wy2HAg1sym9bI02MpKyNaYK083UUTBJAT6sCD4DyD4OY7uh3JDG5Jk9uY8k8OXLjtRKkIkbxH5ySt823JA-RYRYK0ZgRy~m02dLvLwwiDw-Th5QLlTFOEUfmwph01b57praywxtlTB1aLeNp44eNeakLTBG1zKSAR7l7xNt7DODTFVBnQopfGUkhAnEkbftrMUEIPj7cfV~5CJN3cXogNhWOe9CHxAwNLPbBOtR6h8-~HlhXdtQ7tRAt7GH5VUqCL5YiH4oIhrTCAoUlJpA__" class="card-img-top" alt="Book 7">
                            <div class="card-body">
                                <div class="price-container">
                                    <span class="price">628 руб.</span>
                                    <span class="old-price">628 руб.</span>
                                </div>
                                <p class="binding">Твердый переплет</p>
                                <h6 class="book-title">Остров Сокровищ</h6>
                                <p class="author">Илья Латыпов</p>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="rating-number">4</span>
                                    <span class="reviews-count">(2)</span>
                                </div>
                                <div class="buttons">
                                    <button type="button" class="btn btn-primary cart-btn">
                                        <i class="bi bi-cart3"></i>
                                        <span>В корзину</span>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary favorite-btn">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="book-card">
                            <div class="badge-container">
                                <span class="badge bg-success">НОВИНКА</span>
                                <span class="badge bg-danger">-34%</span>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/cb15/3d1e/06f80b8fe880e7a375a03d532d3478c3?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=om97pZC3cm0J9zHFpVYeYLxkcWEkb0sZkYSZ7ufmqz5pcah1JsaGoF9wD6ymrLT9~YjL5trQABudBc~5xMzgKmmmcv9d7V2O1ynKXxy4BnkuvmLic-~Owa5X-2L-g6sk6eIyBMU-7Za4i7fAXvx0JirqVn2I6cuoOFMW5H04jiOWemjC2tqGihVqVozKRExBjjZ8a8CYjZtZwNxnYPmcJMHC1eF8HkTRNzOmfgFwindARINHkFaUVxLKZ-vVDRjuMA9l24pMDyzQQu7fIbzg1OxFWq03ZOZ7BJUbenXIpICbju5WrnZC0jf~Vhy3K5Z-RcIicQuU7Bo8-q55~qV7oA__" class="card-img-top" alt="Book 8">
                            <div class="card-body">
                                <div class="price-container">
                                    <span class="price">628 руб.</span>
                                    <span class="old-price">628 руб.</span>
                                </div>
                                <p class="binding">Твердый переплет</p>
                                <h6 class="book-title">Рыцарь за братьев</h6>
                                <p class="author">Илья Латыпов</p>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="rating-number">4</span>
                                    <span class="reviews-count">(2)</span>
                                </div>
                                <div class="buttons">
                                    <button type="button" class="btn btn-primary cart-btn">
                                        <i class="bi bi-cart3"></i>
                                        <span>В корзину</span>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary favorite-btn">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    



<!--Книжные бесстреллеры-->

<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Книжные бестселлеры</h2>
        <div class="d-flex align-items-center">
            <a href="#" class="text-decoration-none text-secondary me-3">СМОТРЕТЬ ВСЕ</a>
            <div class="carousel-nav">
                <button class="nav-btn prev" data-bs-target="#bestbookCarousel" data-bs-slide="prev">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button class="nav-btn next" data-bs-target="#bestbookCarousel" data-bs-slide="next">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>

    <div id="bestbookCarousel" class="carousel slide" data-bs-interval="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-3">
                        <div class="book-card">
                            <div class="badge-container">
                                <span class="badge bg-bestofthebest">бестселлер</span>
                                <span class="badge bg-danger">-34%</span>
                            </div>
                            <div class="card-img-top">
                                <img src="https://s3-alpha-sig.figma.com/img/f9ad/9f9a/3b87befec166747d6d55e11929b16464?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=NHFG4M5YtK0Yn6PkuRILx28MLZmNKYTDNH5quqP4qudnsAL5vV0hwwhFyBh~ioxcq1KeN5CPTIn65DH9w0A~UkeptTjnIEP73yAOmADrycGogotNdm6HqWEkT1cauPXoXSEJFxrOBrmFd7QfvBwuc-bFdekgozq3VnFy8CvEZxsfg6-lbFRIS7HtMRoeRru8TBw4qzuj5S5aBgna16up~eOyeyDEJtG5pF8e32VMRtttA6cIoFSTkFL35Ylri5vm074h0QtG-DJoKbjy3l9y8ONOazkmVhBCvTtQrTfwhCx8ar0J6Ec1CfIgpsFAMnIUJK06wZYPuaHkqZRqP-GQ8Q__" class="card-img-top" alt="Book 1">    
                            </div>
                            <div class="card-body">
                                <div class="price-container">
                                    <span class="price">628 руб.</span>
                                    <span class="old-price">628 руб.</span>
                                </div>
                                <p class="binding">Твердый переплет</p>
                                <h6 class="book-title">За мной придут ночью: Уйгурский поэт о геноциде в современном Китае</h6>
                                <p class="author">Илья Латыпов</p>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="rating-number">4</span>
                                    <span class="reviews-count">(2)</span>
                                </div>
                                <div class="buttons">
                                    <button type="button" class="btn btn-primary cart-btn">
                                        <i class="bi bi-cart3"></i>
                                        <span>В корзину</span>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary favorite-btn">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="book-card">
                            <div class="badge-container">
                                <span class="badge bg-bestofthebest">бестселлер</span>
                                <span class="badge bg-danger">-34%</span>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/9c37/f37c/949206e1a933ca0ee55bed511c80ca00?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=HdHhT3mxaYj8aE6KBlYNnXlnt6sE3fqQsyW9D3OkteCIE4LT6HT~rYW0HzEktT0~RCpEHl15lOta~jzLBknVeZEwKF9IIUrwqmXhiVigC8o~AFGe2EvbkbsSwgorVnzsQD9Lawp1~bZ-T-LQcrAikOlX5HFhAeJ7wsveZQaM2pr9MF1wS4C2ZLyEfgURUEZ2BRbrg7KyEm2bBG4txdkb5uKOcBU3DlqSoYKxSprVruBZOzZslkeTFuhiiL8zy-aBpbsDSuKWx8avB97Cth~GEV0f8233o~0q0jjjBzC3orYjH6ZxSu-mFakPobYUkHqY3bSTRh4Pwi4ZBt0~x~Lw9w__" class="card-img-top" alt="Book 2">
                            <div class="card-body">
                                <div class="price-container">
                                    <span class="price">628 руб.</span>
                                    <span class="old-price">628 руб.</span>
                                </div>
                                <p class="binding">Твердый переплет</p>
                                <h6 class="book-title">Зимний солдат</h6>
                                <p class="author">Илья Латыпов</p>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="rating-number">4</span>
                                    <span class="reviews-count">(2)</span>
                                </div>
                                <div class="buttons">
                                    <button type="button" class="btn btn-primary cart-btn">
                                        <i class="bi bi-cart3"></i>
                                        <span>В корзину</span>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary favorite-btn">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="book-card">
                            <div class="badge-container">
                                <span class="badge bg-bestofthebest">бестселлер</span>
                                <span class="badge bg-danger">-34%</span>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/c37c/f314/9afa71b3fbafcb42a8b260c3120e0aea?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=L95FyGXZyYvIPv5Hcf6sXIbPUpFIXOQnfx0bfls~W2VkDdcZVg5qc1xDn~y6k2O2Nh04bxZbDZFIIOGsHSIfA4QH2-RrEkDcTkqf0IPuXn~TTLyLPxrXHsgeW7p5uy~SWLxTkIwXewuZX3RaJ3cXti9sJpjjg1coIaI-WwWjT7sTOCy8YCsd~6NKWY2kRfCoTAjRJe90ZOov1HTFQCiKOgoSIgO0efemqnac2MBLOiDsxXDHp831dBPRlTbkn2rM4CwQ1wxL4BCx4uToQnPwOTZSxZODfSgcIGyGXgnqpc8zlRVpI-6Hwxwmur4GDDhIhRmw5qJDKQrrUJsN2av6sQ__" class="card-img-top" alt="Book 3">
                            <div class="card-body">
                                <div class="price-container">
                                    <span class="price">628 руб.</span>
                                    <span class="old-price">628 руб.</span>
                                </div>
                                <p class="binding">Твердый переплет</p>
                                <h6 class="book-title">Остров Сокровищ</h6>
                                <p class="author">Илья Латыпов</p>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="rating-number">4</span>
                                    <span class="reviews-count">(2)</span>
                                </div>
                                <div class="buttons">
                                    <button type="button" class="btn btn-primary cart-btn">
                                        <i class="bi bi-cart3"></i>
                                        <span>В корзину</span>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary favorite-btn">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="book-card">
                            <div class="badge-container">
                                <span class="badge bg-bestofthebest">бестселлер</span>
                                <span class="badge bg-danger">-34%</span>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/d077/9c9d/59ce28ce2fee16b5fdb2c88e5832e7fd?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=arswfTar9HjoLlQomujBj2-qUjpHKWegYJ-D2jLaYmV2Ay6NCblJvxieJ2NjfwDSXSdm0PcmnXmMaHR5u06RHMYAYgISJjH00mwQfGu4MWRs3r0H0tBUcTN2f-ecfLduGQth8M0vBpE3kiqLaoa65wKQ~B0BZ6-zr-MewMY7m80Op~xNCtf0q4hzLfBQ8aM6mCPsD5w1myKnjL-LSer-ON9g8cZvBFYqIhMN6Ycm~a6MAa3~MgS1uNofGyYM-kWi7N52vmRkRgEt13rCiukSx7~~Qi8tMceAuuY~UJc6z8s8wwhC4ZVZPWu7cvco1X--fgvhW~O37uUi54P9UFwovQ__" class="card-img-top" alt="Book 4">
                            <div class="card-body">
                                <div class="price-container">
                                    <span class="price">628 руб.</span>
                                    <span class="old-price">628 руб.</span>
                                </div>
                                <p class="binding">Твердый переплет</p>
                                <h6 class="book-title">Рыцарь за братьев</h6>
                                <p class="author">Илья Латыпов</p>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="rating-number">4</span>
                                    <span class="reviews-count">(2)</span>
                                </div>
                                <div class="buttons">
                                    <button type="button" class="btn btn-primary cart-btn">
                                        <i class="bi bi-cart3"></i>
                                        <span>В корзину</span>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary favorite-btn">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-3">
                        <div class="book-card">
                            <div class="badge-container">
                                <span class="badge bg-bestofthebest">бестселлер</span>
                                <span class="badge bg-danger">-34%</span>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/15dc/a140/7c52ce54c732330d58be54ba08832ca8?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=nIWmiTypbdKELKqVIV--ZDsDrfOI19wt6bIAIrPHWPbUmUyYjxlHmwRmDLo3DxDyZE073EMjT6TWxxnx8xOKQuqDmg6jDMUKcBVkP369-6XlXVg6LANO0d4XyuzJs3iLlYr3ihsfm4rKPXoeBA88~zOTBjwazg-t-kQkZfr8asLvq26FIbb2sBUbF6pxQaRSvihAqgLoK7B18XSC9umbT1X01Jh5-TYY4XwJVzR8IDLJ7PA4p9P1gOIOvnMjScl98IfjmLQ73-KJl45IdpP6u30rEW3trQszb0hxLhlFnbf-JO4FvtWs1HmW8zBI1B01NMt4a6aK8b8A9cEbG7Laaw__" class="card-img-top" alt="Book 5">
                            <div class="card-body">
                                <div class="price-container">
                                    <span class="price">628 руб.</span>
                                    <span class="old-price">628 руб.</span>
                                </div>
                                <p class="binding">Твердый переплет</p>
                                <h6 class="book-title">За мной придут ночью: Уйгурский поэт о геноциде в современном Китае</h6>
                                <p class="author">Илья Латыпов</p>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="rating-number">4</span>
                                    <span class="reviews-count">(2)</span>
                                </div>
                                <div class="buttons">
                                    <button type="button" class="btn btn-primary cart-btn">
                                        <i class="bi bi-cart3"></i>
                                        <span>В корзину</span>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary favorite-btn">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="book-card">
                            <div class="badge-container">
                                <span class="badge bg-bestofthebest">бестселлер</span>
                                <span class="badge bg-danger">-34%</span>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/9b46/a2da/8905c79cbe5abf8b0bd27a4af639934a?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=OMMDdvesIUJwh5yrQAD-0MZ4vNIXAm5KPfu8qHNlIavd8erDd9Ren1FMvJsU9~TuUUOjXI4QCDqeKyJSP7DuDNlcw27PTna9~fjkyGudjtiAc67Wt4b5XZojiYtDUHPVahHChh5p2ZwjJQWJg7EHynwCUCeEvtROWzaJsZen9XlWFdhmnjsNAyVzO-LTOTVlnAQ3Pxx82k90jPTDLYZu5F1XOj~C~LSbxfiYxA8IVjy3iFpA1M14eouGacyRABJQ5hFD31XGa4VzbaIehvxitSFQNu6rT4dOD6aQv0S0dcFEWmrUYXNuup1hqx~9Eq-lZ07yKzG0IJLGNuiJtvUJ9w__" class="card-img-top" alt="Book 6">
                            <div class="card-body">
                                <div class="price-container">
                                    <span class="price">628 руб.</span>
                                    <span class="old-price">628 руб.</span>
                                </div>
                                <p class="binding">Твердый переплет</p>
                                <h6 class="book-title">Зимний солдат</h6>
                                <p class="author">Илья Латыпов</p>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="rating-number">4</span>
                                    <span class="reviews-count">(2)</span>
                                </div>
                                <div class="buttons">
                                    <button type="button" class="btn btn-primary cart-btn">
                                        <i class="bi bi-cart3"></i>
                                        <span>В корзину</span>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary favorite-btn">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="book-card">
                            <div class="badge-container">
                                <span class="badge bg-bestofthebest">бестселлер</span>
                                <span class="badge bg-danger">-34%</span>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/50fa/c1a0/2e18219b0b21aa268095f945c83465a0?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=RyPsa72d~yYkzT3GaZML~Th7RGw9m6OnWksSrkiHi0Z4yVKESaTpVZ8~eMytbExBKt0wy2HAg1sym9bI02MpKyNaYK083UUTBJAT6sCD4DyD4OY7uh3JDG5Jk9uY8k8OXLjtRKkIkbxH5ySt823JA-RYRYK0ZgRy~m02dLvLwwiDw-Th5QLlTFOEUfmwph01b57praywxtlTB1aLeNp44eNeakLTBG1zKSAR7l7xNt7DODTFVBnQopfGUkhAnEkbftrMUEIPj7cfV~5CJN3cXogNhWOe9CHxAwNLPbBOtR6h8-~HlhXdtQ7tRAt7GH5VUqCL5YiH4oIhrTCAoUlJpA__" class="card-img-top" alt="Book 7">
                            <div class="card-body">
                                <div class="price-container">
                                    <span class="price">628 руб.</span>
                                    <span class="old-price">628 руб.</span>
                                </div>
                                <p class="binding">Твердый переплет</p>
                                <h6 class="book-title">Остров Сокровищ</h6>
                                <p class="author">Илья Латыпов</p>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="rating-number">4</span>
                                    <span class="reviews-count">(2)</span>
                                </div>
                                <div class="buttons">
                                    <button type="button" class="btn btn-primary cart-btn">
                                        <i class="bi bi-cart3"></i>
                                        <span>В корзину</span>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary favorite-btn">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="book-card">
                            <div class="badge-container">
                                <span class="badge bg-bestofthebest">бестселлер</span>
                                <span class="badge bg-danger">-34%</span>
                            </div>
                            <img src="https://s3-alpha-sig.figma.com/img/cb15/3d1e/06f80b8fe880e7a375a03d532d3478c3?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=om97pZC3cm0J9zHFpVYeYLxkcWEkb0sZkYSZ7ufmqz5pcah1JsaGoF9wD6ymrLT9~YjL5trQABudBc~5xMzgKmmmcv9d7V2O1ynKXxy4BnkuvmLic-~Owa5X-2L-g6sk6eIyBMU-7Za4i7fAXvx0JirqVn2I6cuoOFMW5H04jiOWemjC2tqGihVqVozKRExBjjZ8a8CYjZtZwNxnYPmcJMHC1eF8HkTRNzOmfgFwindARINHkFaUVxLKZ-vVDRjuMA9l24pMDyzQQu7fIbzg1OxFWq03ZOZ7BJUbenXIpICbju5WrnZC0jf~Vhy3K5Z-RcIicQuU7Bo8-q55~qV7oA__" class="card-img-top" alt="Book 8">
                            <div class="card-body">
                                <div class="price-container">
                                    <span class="price">628 руб.</span>
                                    <span class="old-price">628 руб.</span>
                                </div>
                                <p class="binding">Твердый переплет</p>
                                <h6 class="book-title">Рыцарь за братьев</h6>
                                <p class="author">Илья Латыпов</p>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="rating-number">4</span>
                                    <span class="reviews-count">(2)</span>
                                </div>
                                <div class="buttons">
                                    <button type="button" class="btn btn-primary cart-btn">
                                        <i class="bi bi-cart3"></i>
                                        <span>В корзину</span>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary favorite-btn">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





    <div class="container py-5">
        <h2 class="my-5">Облако тэгов</h2>
        <div class="tag-cloud d-flex flex-wrap">
            
            <button class="tag btn btn-outline-danger">pr</button>
            <button class="tag btn btn-outline-danger">альпина.проза</button>
            <button class="tag btn btn-outline-danger">выбор редакции</button>
            <button class="tag btn btn-outline-danger">главред</button>
            <button class="tag btn btn-outline-danger">деловая переписка</button>
            <button class="tag btn btn-outline-danger">копирайтер</button>
            <button class="tag btn btn-outline-danger">копирайтинг</button>
            <button class="tag btn btn-outline-danger">нонконформизм</button>
            <button class="tag btn btn-outline-danger">объективизм</button>
            <button class="tag btn btn-outline-danger">пиар</button>
            <button class="tag btn btn-outline-danger">письмо</button>
            <button class="tag btn btn-outline-danger">редактор</button>
            <button class="tag btn btn-outline-danger">рекламный текст</button>
            <button class="tag btn btn-outline-danger">роман</button>
            <button class="tag btn btn-outline-danger">свобода личности</button>
            <button class="tag btn btn-outline-danger">талант</button>
            <button class="tag btn btn-outline-danger">текст</button>
            <button class="tag btn btn-outline-danger">художественная литература</button>
        </div>
    </div>


<div class="section-blog my-5 bg-gray">
    <div class="container">
        <section class="blog-section">
            <h2 class="my-5">Статьи блога о лучших книгах</h2>
            <div class="container ">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="https://s3-alpha-sig.figma.com/img/4da2/1c96/22c1424524cd4a0fc998ee7c2335e01c?Expires=1740355200&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=se3YDL0Mzps8wYubqiAk8GLlnwIZj8ef5uTEaEantKzXWwoaRYaMwwNwDr8p7FZpGCKZAtAhXgcBkIk5sitRhA5~EAGNbfq6ovqsOJq2u5WF5KoRy4gREWwJxNawJixyFLzSJW8F2~d0yctgUP3L26lhToTMfQx6ExyW7z~YP8-UVdyP4A~9GMsG5Jk9ULrakIYmDrVbyCwTL-SMZF5cuHPiswPmEOgbXZzTNZ-D6rV4MslKxAepPv-BLT~SGAO4uprChBEtJtQpvqV34NvJ3QiA7HAwZLQYIpykLqFbyNcenyxcSod9CdC978XbHv8S092yI~dSV-nP1zODVT-rlQ__" class="card-img-top" alt="Изображение">
                            <div class="card-body">
                                <h5 class="card-title">Критическое мышление в команде: секрет продуктивного сотрудничества</h5>
                                <p class="card-text">Динамичная команда специалистов работает над созданием передового инновационного продукта...</p>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="https://s3-alpha-sig.figma.com/img/2ffc/b98b/72cc58328d921d65740c781cd44335f0?Expires=1740355200&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=bre9DRxkg-w24p1ZsNiyIQonxQeNoy5PI73CJ5r7ukWZNW~ru1-LKj6ycYYJkScVPNYL1uwmIe1jd1JkN4YT~Rk4ezO-bkQkwOIxxLApEyNG8yN7Vofr-9pJNh0Bvaqhvd18a97IH0IpUmAJ2Zz3Cd3vGLKB3sfvSUrVkKHfDQrNzTUMkAwXhuc73-mQ8j7U9TkFmqFwtI4ndfMDUUKvKjk0eENOj2R1zenCK1ZjH~4bTCYrHWrid81lyAeyfG3BjGEwaGYvRgiCmlf80-vr4dnOFJhNKIBuLxAdD06XtM-SPbUQtedgoH7DS0uYhyHLHs2e3MLQVIK2jR05Y~HbTg__" class="card-img-top" alt="Изображение">
                            <div class="card-body">
                                <h5 class="card-title">Сепарация по-мужеки: Как сыну перестать быть «маменькиным» и обрести свободу</h5>
                                <p class="card-text">Как сыну перестать быть «маменькиным» и обрести свободу...</p>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="https://s3-alpha-sig.figma.com/img/8bf7/7517/2e619f8fbe6d652120bc8f5a8a98758f?Expires=1740355200&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=dodnvpa9eC5YeY4NKqt1rY2kjWeCH5utX3bsKH34RqNZlOekBgiH9Kb8kVkOTGlcJZpcwXuJnD7zDkCxYBRWjFoiykzBSf45Oz2ybiIkQbUuVmqU~5jEscqckHF376RqZ7cM8y7~mjLerVyOyYUTEy6r8bbmYO0Pw~j~e8tIKQXTizh15hIo1wfqbgwUk1UvlTbaHpzQBZ2pPcIHgIQUm8zfXbwhy2g0LuRxJ-KNKYXMIYjaCj3KE~S~Q2-3iUUydgjFvqL8ttzgaRh04g~yhXiTWrkTRUkfJYt3GDgun5zFWNmhYINk2S0Z-XKS0MbT~wf-0yYaTZGhWAqObRoSiQ__" class="card-img-top" alt="Изображение">
                            <div class="card-body">
                                <h5 class="card-title">Сепарация по-мужеки: Как сыну перестать быть «маменькиным» и обрести свободу</h5>
                                <p class="card-text">Как сыну перестать быть «маменькиным» и обрести свободу...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

    <div class="container my-5">
        <div class="text-secondary mb-5 text-secondary-light">
            <b class="text-secondary-bold">Издательская группа «Альпина»: 25 лет вдохновляем думающих
                читателей</b><br><br>

            <p>«Альпина» — крупнейшая независимая издательская группа в России, основанная в 1998 году. Она объединяет
                семь издательств, каждое из которых занимает свое место на рынке:</p>
            <ul>
                <li>—&nbsp;Издательство <b>«Альпина Паблишер»</b> выпускает книги по&nbsp;психологии, саморазвитию,
                    личной эффективности, истории, управлению, а&nbsp;также по&nbsp;бизнесу для практиков.</li>
                <li>—&nbsp;<b>«Альпина PRO»</b> помогает компаниям и&nbsp;лидерам делиться опытом и&nbsp;знаниями
                    с&nbsp;читателями и&nbsp;укреплять экспертный статус.</li>
                <li>—&nbsp;Книги издательства <b>«Альпина нон-фикшн»</b>&nbsp;— яркие научно-популярные новинки
                    в&nbsp;области гуманитарных и&nbsp;естественных наук.</li>
                <li>—&nbsp;<b>«Альпина.Дети»</b> выпускает книги для всей семьи, малышей и&nbsp;их&nbsp;родителей. Они
                    способствуют развитию важных навыков, таких, как эмоциональный интеллект, коммуникация и&nbsp;работа
                    в&nbsp;команде.</li>
                <li>—&nbsp;<b>«Альпина.Проза»</b> публикует яркие романы российских и&nbsp;зарубежных авторов,
                    а&nbsp;также классические произведения русской литературы.</li>
                <li>—&nbsp;В&nbsp;фокусе внимания издательства <b>«Бель Летр»</b> литературные бестселлеры: женская
                    проза о&nbsp;красоте, любви и&nbsp;путешествиях.</li>
                <li>—&nbsp;Книги <b>Marshmallow Books</b>&nbsp;— для тех, кто любит почитать новинки Young и&nbsp;New
                    Adult, а&nbsp;также мангу и&nbsp;азиатские романы.</li>
            </ul>
            <br>
            <p>
                Миссия издательской группы «Альпина»&nbsp;— распространять полезные знания, чтобы читатели могли ясно
                видеть будущее, развиваться, делать осознанный выбор и&nbsp;жить интереснее.
            </p>
        </div>
    </div>


    <!--Футер-->
    <footer class="pt-3 md-3 pt-md-4 border-top bg-dark mb-2">
        <div style="padding: 100px;" class="container">
            <div class="fot-top mb-5">
                <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <p style="color: azure;">Интернет магазин</p>
                    <ul class="list-unstyled text-small">
                        <li class="">
                            <a class="link-secondary text-decoration-none" href=" ">Книги</a>
                        </li>
                        <li class="">
                            <a class="link-secondary text-decoration-none" href="#">Авторы</a>
                        </li>
                        <li class="">
                            <a class="link-secondary text-decoration-none" href="#">Блог</a>
                        </li>
                        <li class="">
                            <a class="link-secondary text-decoration-none" href="#">Политика конфиденциальности</a>
                        </li>
                        <li class="">
                            <a class="link-secondary text-decoration-none" href="#">Договор оферты «Альпина Паблишер»</a>
                        </li>
                        <li class="">
                            <a class="link-secondary text-decoration-none" href="#">Реквизиты</a>
                        </li>
                        <li class="">
                            <a class="link-secondary text-decoration-none" href="#">Об издательской группе «Альпина»</a>
                        </li>
                        <li class="">
                            <a class="link-secondary text-decoration-none" href="#" target="_blank">Партнерская программа</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <p style="color: azure;">Категории</p>
                    <ul class="list-unstyled text-small">
                        <li class="">
                            <a href="" class="link-secondary text-decoration-none">Бумажные книги</a>
                        </li>
                        <li>
                        <li>
                            <a href="" class="link-secondary text-decoration-none">Бизнес</a>
                        </li>
                        <li>
                            <a href="" class="link-secondary text-decoration-none">Финансы</a>
                        </li>
                        <li>
                            <a href="" class="link-secondary text-decoration-none">Художественная литература</a>
                        </li>
                        <li class="">
                            <a href="" class="link-secondary text-decoration-none">Маркетинг и продажи</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <p style="color: azure;">Покупка книги</p>
                    <ul class="list-unstyled text-small">
                        <li>
                            <a class="link-secondary text-decoration-none" href="">Как купить книгу</a>
                        </li>
                        <li>
                            <a class="link-secondary text-decoration-none" href="">Где купить бумажные книги</a>
                        </li>
                        <li>
                            <a class="link-secondary text-decoration-none" href="">Скидки</a>
                        </li>
                        <li>
                            <a class="link-secondary text-decoration-none" href="">Оплата</a>
                        </li>
                        <li>
                            <a class="link-secondary text-decoration-none" href="">Доставка</a>
                        </li>
                        <li>
                            <a class="link-secondary text-decoration-none" href="">Возврат</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <p style="color: azure;">Контакты</p>
                </div>
                </div>
            </div>
            <div class="fot-bot border border-start-0 border-end-0 py-4">
                <div class="footer-bot-img d-flex gap-4">
                    <img src="https://s3-alpha-sig.figma.com/img/3bee/3af2/136af319ea5767cc5f636902e8da35be?Expires=1739750400&Key-Pair-Id=APKAQ4GOSFWCW27IBOMQ&Signature=eJq5vRU2n23BSPpSdReByBDnX6r8Vy9y7Beht5lTqLKAUEtcqJ6l1Zj6wg2dRE0MYn-64m9Y69tJNWK1t5WTvVH1xbWkKDm9fsRwQQ6VGnLSlv-kx5Ths0ndEk-9IiWbSf6GvHHdNbUXqhFpToUV2e3AV-urqFR4qGJfPOl2917oZcEfyPSKhVy6JcXcU7yuyEzrll5ERbz2DJUT0Mvtr4-qcMJmZr0WgsVO1JolvDV3kOpRx-Xs3Cp2JuykfynIo0B9xM8d~fYEQ-8PvME7~oOivJv~12Tu3iTGnubHlOQ9CA6f0gJmii-luatFKuWqgnByIz1hVuK7xWFCgFODfw__"  class="footer-bot-img" alt="">
                    <img src="" alt="">
                </div>
                
            </div>
            <div class="fot-down mt-4">
                <p class="footer-p">
                    Copyright © 2024 Эхо Книги & Бук Эксперт Казахстан
                </p>
            </div>
        </div>
    </footer>

    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>