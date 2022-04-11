<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/static/css/normalize.css">
    <link rel="stylesheet" href="/static/css/scrollbar.css">
    <link rel="stylesheet" href="/static/css/animate.css">
    <link rel="stylesheet" href="/static/css/style.css">
    <link rel="icon" href="/static/images/logo.svg">
    <script src="/static/js/libs/ScrollEvent.js" type="text/javascript"></script>
    <script src="/static/js/location.js" type="text/javascript"></script>
    <title>ARVINE - location</title>
  </head>
  <body>
    <div class="wrapper">
      <?php include "includes/header.php" ?>
      <main class="main">
        <section class="location">
          <?php include "includes/map.php" ?>
        </section>
        <section class="shops">
          <div class="shop">
            <div id="shop_Moscow" class="inner-shop">
              <div class="shop__image">
                <img src="/static/images/shops/Moscow.png" alt="">
              </div>
              <div class="shop__lore">
                <span class="shop__lore-title style--second-lite">Moscow</span>
                <span class="shop__lore-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat doloremque maiores laborum debitis ut pariatur ipsa voluptatibus asperiores nisi consectetur corporis labore et aliquid quaerat esse, alias similique, natus quasi.</span>
              </div>
            </div>
          </div>
          <div class="shop">
            <div id="shop_Petersburg" class="inner-shop">
              <div class="shop__lore">
                <span class="shop__lore-title style--second-lite">St. Petersburg</span>
                <span class="shop__lore-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat doloremque maiores laborum debitis ut pariatur ipsa voluptatibus asperiores nisi consectetur corporis labore et aliquid quaerat esse, alias similique, natus quasi.</span>
              </div>
              <div class="shop__image">
                <img src="/static/images/shops/Petersburg.png" alt="">
              </div>
            </div>
          </div>
          <div class="shop">
            <div id="shop_Pyatigorsk" class="inner-shop">
              <div class="shop__image">
                <img src="/static/images/shops/Pyatigorsk.png" alt="">
              </div>
              <div class="shop__lore">
                <span class="shop__lore-title style--second-lite">Pyatigorsk</span>
                <span class="shop__lore-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat doloremque maiores laborum debitis ut pariatur ipsa voluptatibus asperiores nisi consectetur corporis labore et aliquid quaerat esse, alias similique, natus quasi.</span>
              </div>
            </div>
          </div>
          <div class="shop">
            <div id="shop_Nizhny_Novgorod" class="inner-shop">
              <div class="shop__lore">
                <span class="shop__lore-title style--second-lite">Nizhny Novgorod</span>
                <span class="shop__lore-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat doloremque maiores laborum debitis ut pariatur ipsa voluptatibus asperiores nisi consectetur corporis labore et aliquid quaerat esse, alias similique, natus quasi.</span>
              </div>
              <div class="shop__image">
                <img src="/static/images/shops/Nizhny_Novgorod.png" alt="">
              </div>
            </div>
          </div>
          <div class="shop">
            <div id="shop_Veliky_Novgorod" class="inner-shop">
              <div class="shop__image">
                <img src="/static/images/shops/Veliky_Novgorod.png" alt="">
              </div>
              <div class="shop__lore">
                <span class="shop__lore-title style--second-lite">Veliky Novgorod</span>
                <span class="shop__lore-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat doloremque maiores laborum debitis ut pariatur ipsa voluptatibus asperiores nisi consectetur corporis labore et aliquid quaerat esse, alias similique, natus quasi.</span>
              </div>
            </div>
          </div>
        </section>
      </main>
      <?php include "includes/footer.php" ?>
    </div>
  </body>
</html>
