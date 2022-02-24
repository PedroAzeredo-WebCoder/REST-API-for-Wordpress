<?php include("header.php"); ?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <?php for ($countPost = 1; $countPost <= 6; $countPost++) : ?>
                        <div class="col-lg-6 mb-4">
                            <div class="card">
                                <div class="slider-produto">
                                    <?php for ($countImagePost = 1; $countImagePost <= 6; $countImagePost++) : ?>
                                        <figure>
                                            <img src="https://images.lojanike.com.br/1024x1024/produto/tenis-air-jordan-1-hi-flyease-CQ3835-006-1-11629820332.jpg" class="card-img-top" alt="...">
                                        </figure>
                                    <?php endfor; ?>
                                </div>
                                <span class="badge bg-primary position-absolute top-0 start-0 py-2 px-3">Jordan</span>
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">Tênis Air Jordan 1 Hi FlyEase Masculino</h5>
                                    <p class="card-text line-clamp-3">O Air Jordan 1 Hi FlyEase combina o estilo cobiçado dos primeiros sneakers conceito de Michael Jordan com um sistema de calçamento rápido e fácil com uma mão. O modelo não inclui cadarços, apenas um zíper e duas tiras para obter um ajuste personalizado. O lançamento desta temporada mistura preto, vermelho sangria e cinza fosco, as cores originais que nunca saíram de moda.</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <?php for ($countDescPost = 1; $countDescPost <= 4; $countDescPost++) : ?>
                                        <li class="list-group-item list-group-item-action">Logotipo Swoosh costurado</li>
                                    <?php endfor; ?>
                                </ul>
                                <div class="card-body">
                                    <a href="#" class="btn btn-outline-primary">Comprar</a>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sticky-top">
                    <div class="card">
                        <div class="card-body py-4">
                            <h5 class="text-primary fw-bold">Categorias</h5>
                            <ul class="list-group list-group-flush">
                                <?php for ($countCat = 1; $countCat <= 6; $countCat++) : ?>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold">Primary</div>
                                        </div>
                                        <span class="badge bg-primary rounded-pill"><?php echo $countCat; ?></span>
                                        <a href="<?php echo $countCat; ?>" class="position-absolute start-0 top-0 w-100 h-100"></a>
                                    </li>
                                <?php endfor; ?>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</main>
<?php include("footer.php"); ?>