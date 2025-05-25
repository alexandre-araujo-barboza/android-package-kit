<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Minha Loja de Apps</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body class="bg-light">

<div class="container mt-5">
  <h1 class="text-center mb-4">📱 Meus Aplicativos Android</h1>
  <div class="row row-cols-1 row-cols-md-2 g-4">

    <?php
     
    $apps = [
      ['nome' => 'Pet-Sheriff', 'arquivo' => 'pet-soft.apk'],
      ['nome' => 'Where-App', 'arquivo' => 'where-app.apk'],
      ['nome' => 'Consultório',   'arquivo' => 'consultorio.apk'],
      ['nome' => 'Eventos','arquivo' => 'eventos.apk']
    ];
    
    /* Solução alternativa
    $apps = [
      ['nome' => 'Pet-Sheriff', 'link_download' => 'https://github.com/alexandre-araujo-barboza/android-package-kit/releases/download/apps-apk/pet-soft.apk'],
      ['nome' => 'Where-App', 'link_download' => 'https://github.com/alexandre-araujo-barboza/android-package-kit/releases/download/apps-apk/where-app.apk'],
      ['nome' => 'Consultório', 'link_download' => 'https://github.com/alexandre-araujo-barboza/android-package-kit/releases/download/apps-apk/consultorio.apk.'],
      ['nome' => 'Eventos','link_download' => 'https://github.com/alexandre-araujo-barboza/android-package-kit/releases/download/apps-apk/eventos.apk']
    ];
    */   
    foreach ($apps as $app) {
      echo <<<HTML
      <div class="col">
        <div class="card shadow">
          <div class="card-body">
            <h5 class="card-title">{$app['nome']}</h5>
            <p class="card-text">Clique abaixo para instalar o app.</p>
            <a href="instalar.php?apk={$app['arquivo']}" class="btn btn-primary">Instalar</a>
          </div>
        </div>
      </div>
      HTML;
    }
    /* Solução alternativa
    foreach ($apps as $app) {
      echo <<<HTML
      <div class="col">
        <div class="card shadow">
          <div class="card-body">
            <h5 class="card-title">{$app['nome']}</h5>
            <p class="card-text">Clique abaixo para baixar e instalar o app.</p>
            <a href="{$app['link_download']}" class="btn btn-primary" download>Instalar</a>
          </div>
        </div>
      </div>
      HTML;
    }
    */ 
    ?>
  </div>
</div>

</body>
</html>
