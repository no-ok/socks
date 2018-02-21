<!DOCTYPE html>
<html lang="ua">
<head>
	<?php include 'blocks/meta.php'; ?>
	<?php include 'blocks/metatags.php'; ?>
	<?php include 'blocks/link.php'; ?>
</head>

<body>
	<?php include 'blocks/header.php';?>

  <?php include 'blocks/fixed-social.php';?>

  <?php include 'blocks/fixed-toggles.php';?>

  <main class="main">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="#">Головна</a></li>
        <li class="active">Каталог</li>
      </ul>

      <div class="row">
        <div class="col-sm-3">
          <div class="filters-column">
            <div class="filters-head">
              <h3>Фільтри товарів</h3>
            </div>

            <div class="filter-item">
              <div class="filter-toggle active">
                <h4>Стать</h4>
              </div>

              <div class="filter-dropdown active">
                <div class="checkbox-container">
                  <input type="checkbox" id="checkbox1">
                  <label for="checkbox1">Жіночі</label>
                </div>

                <div class="checkbox-container">
                  <input type="checkbox" id="checkbox2">
                  <label for="checkbox2">Чоловічі</label>
                </div>

                <div class="checkbox-container">
                  <input type="checkbox" id="checkbox3">
                  <label for="checkbox3">Дівчинка</label>
                </div>

                <div class="checkbox-container">
                  <input type="checkbox" id="checkbox4">
                  <label for="checkbox4">Хлопчик</label>
                </div>
              </div>
            </div>

            <div class="filter-item">
              <div class="filter-toggle active">
                <h4>Сезон</h4>
              </div>

              <div class="filter-dropdown active">
                <div class="checkbox-container">
                  <input type="checkbox" id="checkbox1">
                  <label for="checkbox1">Літні</label>
                </div>

                <div class="checkbox-container">
                  <input type="checkbox" id="checkbox2">
                  <label for="checkbox2">Зимові</label>
                </div>

                <div class="checkbox-container">
                  <input type="checkbox" id="checkbox3">
                  <label for="checkbox3">Демісезонні</label>
                </div>
              </div>
            </div>

            <div class="filter-item">
              <div class="filter-toggle active">
                <h4>Торгова марка</h4>
              </div>

              <div class="filter-dropdown active">
                <div class="checkbox-container">
                  <input type="checkbox" id="checkbox1">
                  <label for="checkbox1">Nike</label>
                </div>

                <div class="checkbox-container">
                  <input type="checkbox" id="checkbox2">
                  <label for="checkbox2">Adidas</label>
                </div>

                <div class="checkbox-container">
                  <input type="checkbox" id="checkbox3">
                  <label for="checkbox3">Puma</label>
                </div>

                <div class="checkbox-container">
                  <input type="checkbox" id="checkbox3">
                  <label for="checkbox3">Tommy Hilfiger</label>
                </div>

                <div class="checkbox-container">
                  <input type="checkbox" id="checkbox3">
                  <label for="checkbox3">Reebok</label>
                </div>

                <div class="checkbox-container">
                  <input type="checkbox" id="checkbox3">
                  <label for="checkbox3">Lacoste</label>
                </div>
              </div>
            </div>

            <div class="filter-item">
              <div class="filter-toggle">
                <h4>Висота</h4>
              </div>

              <div class="filter-dropdown">
                <div class="checkbox-container">
                  <input type="checkbox" id="checkbox1">
                  <label for="checkbox1">Високі</label>
                </div>

                <div class="checkbox-container">
                  <input type="checkbox" id="checkbox2">
                  <label for="checkbox2">Середні</label>
                </div>

                <div class="checkbox-container">
                  <input type="checkbox" id="checkbox3">
                  <label for="checkbox3">Низькі</label>
                </div>
              </div>
            </div>

            <div class="filter-item">
              <div class="filter-toggle">
                <h4>Колір</h4>
              </div>

              <div class="filter-dropdown">
                <div class="checkbox-container">
                  <input type="checkbox" id="checkbox1">
                  <label for="checkbox1">Чорний</label>
                </div>

                <div class="checkbox-container">
                  <input type="checkbox" id="checkbox2">
                  <label for="checkbox2">Білий</label>
                </div>

                <div class="checkbox-container">
                  <input type="checkbox" id="checkbox3">
                  <label for="checkbox3">Сірий</label>
                </div>

                <div class="checkbox-container">
                  <input type="checkbox" id="checkbox3">
                  <label for="checkbox3">Темно-синій</label>
                </div>

                <div class="checkbox-container">
                  <input type="checkbox" id="checkbox3">
                  <label for="checkbox3">Світло-сірий</label>
                </div>

                <div class="checkbox-container">
                  <input type="checkbox" id="checkbox3">
                  <label for="checkbox3">Оранжевий</label>
                </div>
              </div>
            </div>

            <div class="filter-item">
              <div class="filter-toggle">
                <h4>Розмір в упаковці</h4>
              </div>

              <div class="filter-dropdown">
                <div class="checkbox-container">
                  <input type="checkbox" id="checkbox1">
                  <label for="checkbox1">37-41</label>
                </div>

                <div class="checkbox-container">
                  <input type="checkbox" id="checkbox2">
                  <label for="checkbox2">37-42</label>
                </div>

                <div class="checkbox-container">
                  <input type="checkbox" id="checkbox3">
                  <label for="checkbox3">36-40 (універмальний)</label>
                </div>

                <div class="checkbox-container">
                  <input type="checkbox" id="checkbox3">
                  <label for="checkbox3">35-41</label>
                </div>

                <div class="checkbox-container">
                  <input type="checkbox" id="checkbox3">
                  <label for="checkbox3">36-39 (універсальний)</label>
                </div>

                <div class="checkbox-container">
                  <input type="checkbox" id="checkbox3">
                  <label for="checkbox3">39-41</label>
                </div>
              </div>
            </div>

            <div class="filter-item">
              <div class="filter-toggle">
                <h4>Комплектація упаковки</h4>
              </div>

              <div class="filter-dropdown">
                <div class="checkbox-container">
                  <input type="checkbox" id="checkbox1">
                  <label for="checkbox1">12 пар різного кольору в одному розмірі</label>
                </div>

                <div class="checkbox-container">
                  <input type="checkbox" id="checkbox2">
                  <label for="checkbox2">12 пар одного кольору в одному розмірі</label>
                </div>

                <div class="checkbox-container">
                  <input type="checkbox" id="checkbox3">
                  <label for="checkbox3">10 одиниць в одному розмірі, різних кольорів</label>
                </div>

                <div class="checkbox-container">
                  <input type="checkbox" id="checkbox3">
                  <label for="checkbox3">6 шт в одному розмірі різного кольору</label>
                </div>

                <div class="checkbox-container">
                  <input type="checkbox" id="checkbox3">
                  <label for="checkbox3">36-39 (універсальний)</label>
                </div>

                <div class="checkbox-container">
                  <input type="checkbox" id="checkbox3">
                  <label for="checkbox3">39-41</label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-9">
          <div class="top-filters">
            <div class="row">
              <div class="col-sm-7">
                <div class="activated-filters">
                  <div class="item">
                    <span>Жіночі</span>

                    <div class="item-delete">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212.982 212.982"><path d="M131.804 106.491l75.936-75.936c6.99-6.99 6.99-18.323 0-25.312-6.99-6.99-18.322-6.99-25.312 0L106.491 81.18 30.554 5.242c-6.99-6.99-18.322-6.99-25.312 0-6.989 6.99-6.989 18.323 0 25.312l75.937 75.936-75.937 75.937c-6.989 6.99-6.989 18.323 0 25.312 6.99 6.99 18.322 6.99 25.312 0l75.937-75.937 75.937 75.937c6.989 6.99 18.322 6.99 25.312 0 6.99-6.99 6.99-18.322 0-25.312l-75.936-75.936z" fill-rule="evenodd" clip-rule="evenodd"/></svg>
                    </div>
                  </div>

                  <div class="item">
                    <span>Adidas</span>

                    <div class="item-delete">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212.982 212.982"><path d="M131.804 106.491l75.936-75.936c6.99-6.99 6.99-18.323 0-25.312-6.99-6.99-18.322-6.99-25.312 0L106.491 81.18 30.554 5.242c-6.99-6.99-18.322-6.99-25.312 0-6.989 6.99-6.989 18.323 0 25.312l75.937 75.936-75.937 75.937c-6.989 6.99-6.989 18.323 0 25.312 6.99 6.99 18.322 6.99 25.312 0l75.937-75.937 75.937 75.937c6.989 6.99 18.322 6.99 25.312 0 6.99-6.99 6.99-18.322 0-25.312l-75.936-75.936z" fill-rule="evenodd" clip-rule="evenodd"/></svg>
                    </div>
                  </div>

                  <div class="item">
                    <span>Чорні</span>

                    <div class="item-delete">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212.982 212.982"><path d="M131.804 106.491l75.936-75.936c6.99-6.99 6.99-18.323 0-25.312-6.99-6.99-18.322-6.99-25.312 0L106.491 81.18 30.554 5.242c-6.99-6.99-18.322-6.99-25.312 0-6.989 6.99-6.989 18.323 0 25.312l75.937 75.936-75.937 75.937c-6.989 6.99-6.989 18.323 0 25.312 6.99 6.99 18.322 6.99 25.312 0l75.937-75.937 75.937 75.937c6.989 6.99 18.322 6.99 25.312 0 6.99-6.99 6.99-18.322 0-25.312l-75.936-75.936z" fill-rule="evenodd" clip-rule="evenodd"/></svg>
                    </div>
                  </div>

                  <div class="reset-filters">
                    <span>Скинути</span>

                    <div class="item-delete">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212.982 212.982"><path d="M131.804 106.491l75.936-75.936c6.99-6.99 6.99-18.323 0-25.312-6.99-6.99-18.322-6.99-25.312 0L106.491 81.18 30.554 5.242c-6.99-6.99-18.322-6.99-25.312 0-6.989 6.99-6.989 18.323 0 25.312l75.937 75.936-75.937 75.937c-6.989 6.99-6.989 18.323 0 25.312 6.99 6.99 18.322 6.99 25.312 0l75.937-75.937 75.937 75.937c6.989 6.99 18.322 6.99 25.312 0 6.99-6.99 6.99-18.322 0-25.312l-75.936-75.936z" fill-rule="evenodd" clip-rule="evenodd"/></svg>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-5">
                <div class="sorting-types">
                  <div class="fw-select">
                    <p>Сортування:</p>

                    <button class="select-button"><span>за алфавітом</span> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240.811 240.811"><path d="M220.088 57.667l-99.671 99.695-99.671-99.707a12.147 12.147 0 0 0-17.191 0c-4.74 4.752-4.74 12.451 0 17.203l108.261 108.297c4.74 4.752 12.439 4.752 17.179 0L237.256 74.859c4.74-4.752 4.74-12.463 0-17.215-4.728-4.729-12.428-4.729-17.168.023z"/></svg></button>

                    <ul class="select-sorting">
                      <li><a href="#">від дешевих до дорогих</a></li>
                      <li><a href="#">від дорогих до дешевих</a></li>
                      <li><a href="#">акційні</a></li>
                      <li><a href="#">новинки</a></li>
                      <li><a href="#">популярні</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="search-title">
            <h3>Товарів знайдено: <span>43</span></h3>
          </div>

          <div class="row">
            <div class="col-sm-4">
              <div class="product-item">
                <div class="product-badge badge-new">
                  <p>NEW</p>
                </div>

                <div class="product-articule">
                  <p>Код: 0803-Aso-BR29</p>
                </div>

                <div class="product-img">
                  <a href="product.php">
                    <img src="img/product-1.jpg" alt="skarpetku">
                  </a>
                </div>

                <div class="product-title">
                  <h3><a href="product.php">Шкарпетки чоловічі класика "Рубіж-Текс" 100 чорні</a></h3>
                </div>

                <div class="product-cost">
                  <div class="old-price">
                    <p>8 грн.</p>
                  </div>

                  <div class="new-price">
                    <p>7.60 грн.</p>
                  </div>

                  <span>|</span>

                  <div class="cost-descr">
                    <p>Лише гуртом</p>
                  </div>
                </div>

                <button class="main-button">
                  <span class="default-text">+ В корзину</span>

                  <span class="active-text"><i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M504.502 75.496c-9.997-9.998-26.205-9.998-36.204 0L161.594 382.203 43.702 264.311c-9.997-9.998-26.205-9.997-36.204 0-9.998 9.997-9.998 26.205 0 36.203l135.994 135.992c9.994 9.997 26.214 9.99 36.204 0L504.502 111.7c9.998-9.997 9.997-26.206 0-36.204z"/></svg></i> Додано</span>
                </button>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="product-item">
                <div class="product-badge badge-new">
                  <p>NEW</p>
                </div>

                <div class="product-articule">
                  <p>Код: 0803-Aso-BR29</p>
                </div>

                <div class="product-img">
                  <a href="product.php">
                    <img src="img/product-1.jpg" alt="skarpetku">
                  </a>
                </div>

                <div class="product-title">
                  <h3><a href="product.php">Шкарпетки чоловічі класика "Рубіж-Текс" 100 чорні</a></h3>
                </div>

                <div class="product-cost">
                  <div class="old-price">
                    <p>8 грн.</p>
                  </div>

                  <div class="new-price">
                    <p>7.60 грн.</p>
                  </div>

                  <span>|</span>

                  <div class="cost-descr">
                    <p>Лише гуртом</p>
                  </div>
                </div>

                <button class="main-button">
                  <span class="default-text">+ В корзину</span>

                  <span class="active-text"><i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M504.502 75.496c-9.997-9.998-26.205-9.998-36.204 0L161.594 382.203 43.702 264.311c-9.997-9.998-26.205-9.997-36.204 0-9.998 9.997-9.998 26.205 0 36.203l135.994 135.992c9.994 9.997 26.214 9.99 36.204 0L504.502 111.7c9.998-9.997 9.997-26.206 0-36.204z"/></svg></i> Додано</span>
                </button>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="product-item loadMoreItems">
                <div class="load-more">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.12 17.12"><path d="M8.661.001h.034c.019-.002.027 0 .039 0a8.58 8.58 0 0 1 5.955 2.42L16.447.645a.286.286 0 0 1 .314-.065.297.297 0 0 1 .186.271l-.294 6.066h-5.715a.294.294 0 0 1-.145-.548l1.73-1.751c-1.026-.988-2.36-1.529-3.832-1.529-2.993.017-5.433 2.47-5.433 5.51.023 2.978 2.457 5.4 5.481 5.422a5.511 5.511 0 0 0 4.719-3.221l2.803 1.293-.019.039c-1.92 3.713-4.946 5.277-8.192 4.944-4.375-.348-7.848-4.013-7.878-8.52C.171 3.876 3.976.042 8.661.001z" fill="#00a651"/></svg>
                </div>

                <div class="itemText">
                  <p>Показати <br> ще 12 товарів</p>
                </div>
              </div>
            </div>
          </div>

          <div class="failed-search">

            <div class="failed-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><g fill="#EDEEF0"><path d="M175.918 502.154a80.005 80.005 0 0 1-72.241-45.607l-42.821-89.925-17.802-37.386a165.943 165.943 0 0 1-16.118-71.345V9.846h177.231V257.89a165.852 165.852 0 0 0 16.118 71.346l27.865 58.516c25.285 53.09-13.43 114.402-72.232 114.402zM404.999 502.154a80.005 80.005 0 0 1-72.241-45.607l-42.821-89.925-17.802-37.386a165.943 165.943 0 0 1-16.118-71.345V9.846h177.231V257.89a165.94 165.94 0 0 0 16.118 71.345l27.865 58.516c25.284 53.091-13.431 114.403-72.232 114.403z"/></g><g fill="#AEADB3"><path d="M26.933 9.846v49.231h177.231V9.846zM113.825 288.512c0 35.446-21.937 65.753-52.972 78.11l-17.802-37.386a165.943 165.943 0 0 1-16.118-71.345v-53.356c.945-.039 1.9-.059 2.855-.059 46.415-.001 84.037 37.621 84.037 84.036zM256.017 9.846v49.231h177.231V9.846zM342.909 288.512c0 35.446-21.937 65.753-52.972 78.11l-17.802-37.386a165.943 165.943 0 0 1-16.118-71.345v-53.356c.945-.039 1.9-.059 2.855-.059 46.415-.001 84.037 37.621 84.037 84.036z"/></g><g fill="#5B400A"><path d="M204.521 268.731l-.965.532a19.36 19.36 0 0 1-9.314 2.393c-9.659 0-18.599-7.296-19.486-17.93a45.116 45.116 0 0 0-22.124-35.18l-.935-.561c-7.06-4.145-10.703-11.412-10.703-18.718 0-6.134 2.56-12.288 7.828-16.67 3.584-2.983 6.508-6.607 8.635-10.654s3.476-8.507 3.909-13.145c2.048-21.967 21.327-37.849 42.801-36.254V257.89c0 3.624.118 7.237.354 10.841zM389.371 384.089l-5.411 15.054a19.166 19.166 0 0 1-2.542 4.798l-7.295 10.016c-4.626 6.351-.603 15.325 7.216 16.096l27.374 2.702a25.069 25.069 0 0 1 9.155 2.734l4.178 2.186c8.978 4.698 19.736-1.815 19.736-11.947v-21.934a25.146 25.146 0 0 0-12.602-21.793l-13.285-7.645c-9.945-5.724-22.643-1.063-26.524 9.733z"/></g><path d="M229.175 325.002c-8.544-17.943-13.534-37.09-14.828-56.917a155.69 155.69 0 0 1-.333-10.195V9.846c0-5.437-4.408-9.846-9.846-9.846H26.933c-5.438 0-9.846 4.409-9.846 9.846v49.231c0 .026.004.05.004.076v145.303c0 .027-.004.052-.004.079v53.355c0 25.984 5.905 52.119 17.074 75.578l17.802 37.386c.007.015.017.027.024.041l42.801 89.885c14.82 31.116 46.666 51.221 81.13 51.221 31.014 0 59.417-15.657 75.975-41.884 16.557-26.225 18.482-58.598 5.148-86.598l-27.866-58.517zm-34.81-63.194c-4.355.063-9.31-3.064-9.796-8.896-1.474-17.794-11.55-33.816-26.874-42.812l-1.011-.606c-3.659-2.148-5.843-5.972-5.843-10.228 0-3.573 1.519-6.805 4.281-9.102a44.763 44.763 0 0 0 11.051-13.641 44.933 44.933 0 0 0 4.997-16.81c1.227-13.155 10.901-23.689 23.151-26.617V257.89c.001 1.303.016 2.611.044 3.918zM51.944 325.003c-9.919-20.832-15.161-44.039-15.161-67.112V214.65c37.642 3.536 67.196 35.312 67.196 73.863 0 27.478-14.82 52.12-38.438 65.045l-13.597-28.555zm183.298 134.601c-12.93 20.478-35.106 32.704-59.324 32.704-26.912 0-51.779-15.699-63.351-39.995l-38.551-80.957c30.473-16.198 49.654-47.685 49.654-82.845 0-49.415-38.375-90.032-86.888-93.622V68.923h29.535c5.438 0 9.846-4.409 9.846-9.846s-4.408-9.846-9.846-9.846H36.783V19.692h157.535V49.23h-68.923c-5.438 0-9.846 4.409-9.846 9.846s4.408 9.846 9.846 9.846h68.927v44.17c-22.33 3.182-40.586 21.487-42.759 44.79a25.353 25.353 0 0 1-2.822 9.48 25.151 25.151 0 0 1-6.216 7.664c-7.23 6.014-11.377 14.849-11.377 24.238 0 11.314 5.818 21.485 15.487 27.164l1.012.607a35.31 35.31 0 0 1 17.298 27.506c1.259 15.118 14.128 26.96 29.297 26.96.554 0 1.109-.021 1.663-.053 2.425 18.03 7.614 35.48 15.49 52.019l27.866 58.518c10.412 21.864 8.909 47.141-4.019 67.619z"/><path d="M104.947 55.316a9.622 9.622 0 0 0-.906-1.702 9.343 9.343 0 0 0-1.221-1.498 9.435 9.435 0 0 0-1.497-1.221 10.214 10.214 0 0 0-1.703-.906 9.99 9.99 0 0 0-1.841-.571 10.135 10.135 0 0 0-3.85 0 9.99 9.99 0 0 0-1.841.571 10.46 10.46 0 0 0-1.703.906 10.36 10.36 0 0 0-1.497 1.221 9.916 9.916 0 0 0-2.127 3.2 9.687 9.687 0 0 0-.748 3.761 9.695 9.695 0 0 0 .748 3.76c.246.601.551 1.172.906 1.703.364.542.778 1.044 1.231 1.497.453.454.955.867 1.497 1.221.532.354 1.103.66 1.694.906s1.211.443 1.841.561c.64.128 1.29.197 1.93.197s1.29-.069 1.92-.197a9.252 9.252 0 0 0 1.841-.561 9.993 9.993 0 0 0 1.703-.906 9.272 9.272 0 0 0 1.497-1.221 9.435 9.435 0 0 0 1.221-1.497 9.95 9.95 0 0 0 1.664-5.463 9.69 9.69 0 0 0-.197-1.92 10.017 10.017 0 0 0-.562-1.841zM486.119 383.52l-27.865-58.517c-9.918-20.831-15.161-44.039-15.161-67.112V9.846c0-5.437-4.409-9.846-9.846-9.846h-177.23c-5.438 0-9.846 4.409-9.846 9.846V257.889c0 25.985 5.905 52.12 17.075 75.578l60.622 127.313c14.821 31.115 46.667 51.22 81.131 51.22 31.014 0 59.417-15.657 75.974-41.884 16.558-26.225 18.482-58.598 5.146-86.596zm-205.094-58.517c-9.918-20.831-15.161-44.039-15.161-67.112v-43.242c37.643 3.534 67.2 35.311 67.2 73.864 0 27.479-14.822 52.123-38.441 65.047l-13.598-28.557zm183.298 134.601c-12.93 20.478-35.106 32.704-59.323 32.704-26.912 0-51.78-15.699-63.353-39.994l-38.549-80.956c30.476-16.198 49.658-47.686 49.658-82.847 0-49.416-38.377-90.034-86.892-93.622V68.923h29.538c5.437 0 9.846-4.409 9.846-9.846s-4.409-9.846-9.846-9.846h-29.538V19.692h157.538V49.23h-68.923c-5.437 0-9.846 4.409-9.846 9.846s4.409 9.846 9.846 9.846h68.923V257.89c0 25.985 5.904 52.12 17.075 75.578l27.865 58.518c10.412 21.863 8.91 47.14-4.019 67.618z"/><path d="M334.028 55.316a9.622 9.622 0 0 0-.906-1.702 9.237 9.237 0 0 0-1.221-1.498 9.435 9.435 0 0 0-1.497-1.221 9.836 9.836 0 0 0-1.703-.906 9.98 9.98 0 0 0-1.84-.571 10.082 10.082 0 0 0-3.84 0 9.99 9.99 0 0 0-1.841.571 9.688 9.688 0 0 0-1.702.906c-.543.354-1.045.768-1.498 1.221s-.866.955-1.221 1.498a9.13 9.13 0 0 0-.906 1.702 10.014 10.014 0 0 0-.571 1.841 9.686 9.686 0 0 0-.186 1.92c0 .639.059 1.29.186 1.92.128.63.325 1.25.571 1.84.246.601.542 1.172.906 1.703a9.38 9.38 0 0 0 1.221 1.497 9.29 9.29 0 0 0 1.498 1.221 9.76 9.76 0 0 0 1.702.906 9.272 9.272 0 0 0 1.841.561c.63.128 1.28.197 1.92.197.639 0 1.29-.069 1.92-.197a9.223 9.223 0 0 0 1.84-.561 9.631 9.631 0 0 0 1.703-.906 9.272 9.272 0 0 0 1.497-1.221 9.326 9.326 0 0 0 1.221-1.497c.354-.532.66-1.103.906-1.703.246-.591.443-1.21.561-1.84a9.714 9.714 0 0 0 .197-1.92 9.69 9.69 0 0 0-.197-1.92 9.232 9.232 0 0 0-.561-1.841zM434.09 373.466l-13.285-7.647a28.193 28.193 0 0 0-23.839-2.034 28.204 28.204 0 0 0-16.86 16.973l-5.411 15.053a9.354 9.354 0 0 1-1.236 2.333l-7.295 10.016c-4.277 5.872-5.057 13.336-2.084 19.964 2.972 6.629 9.061 11.014 16.292 11.728l27.374 2.701a15.11 15.11 0 0 1 5.556 1.659l4.178 2.187a23.32 23.32 0 0 0 10.829 2.685c4.173 0 8.336-1.136 12.07-3.398 7.044-4.263 11.249-11.725 11.249-19.959v-21.933c-.001-12.483-6.721-24.105-17.538-30.328zm-2.155 52.259c0 1.785-1.099 2.717-1.755 3.112-.655.397-1.99.939-3.57.111l-4.181-2.188a34.747 34.747 0 0 0-12.751-3.807l-27.373-2.7c-.121-.013-.182-.019-.257-.185-.075-.166-.039-.217.032-.315l7.299-10.02a29.053 29.053 0 0 0 3.845-7.26l5.411-15.054c1.179-3.279 3.711-4.633 5.114-5.149 1.406-.516 4.211-1.121 7.231.616l13.285 7.647a15.333 15.333 0 0 1 7.667 13.258v21.933h.003zM385.991 350.529a9.831 9.831 0 0 0 7.88 3.934 9.8 9.8 0 0 0 5.906-1.975l13.108-9.846c4.348-3.265 5.225-9.438 1.958-13.786-3.265-4.349-9.438-5.227-13.786-1.958l-13.108 9.846c-4.348 3.264-5.224 9.437-1.958 13.785zM169.607 312.288c-3.443-4.209-9.646-4.829-13.856-1.385-4.208 3.443-4.829 9.646-1.385 13.855l4.431 5.415a9.826 9.826 0 0 0 7.627 3.612 9.81 9.81 0 0 0 6.23-2.226c4.208-3.443 4.829-9.646 1.385-13.855l-4.432-5.416zM150.718 356.73l-8.369 8.076c-3.913 3.776-4.024 10.01-.248 13.923a9.819 9.819 0 0 0 7.086 3.009 9.816 9.816 0 0 0 6.836-2.761l8.369-8.076c3.913-3.776 4.024-10.01.248-13.923-3.776-3.914-10.009-4.024-13.922-.248zM377.733 283.655l5.415 3.938a9.802 9.802 0 0 0 5.784 1.885 9.832 9.832 0 0 0 7.97-4.056c3.199-4.398 2.227-10.556-2.171-13.754l-5.415-3.938c-4.398-3.198-10.556-2.226-13.754 2.171-3.199 4.398-2.226 10.556 2.171 13.754z"/></svg>
            </div>

            <h2>Нічого не знайдено</h2>

            <p>Спробуйте змінити параметри пошуку</p>
          </div>

          <nav class="page-pagination">
            <ul class="pagination">
              <li>
                <a href="#" aria-label="Previous">
                  <span aria-hidden="true">«</span>
                </a>
              </li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><i>...</i></li>
              <li><a href="#">36</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <span aria-hidden="true">»</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>

      <p>Представлена ​​продукція відрізняється хорошою якістю. Ваша нога відчуватиме себе вільно. Ви залишитеся задоволені. Телефонуйте!</p>

      <p>Ми намагаємося максимально задовольнити потреби наших клієнтів, а тому організували найбільш комфортні умови купівлі. Вам більше не потрібно відвідувати стандартний магазин. Все, що Вам потрібно вже тут - на сайті. Від Вас потрібно лише вибрати вподобану модель і оформити замовлення або зв'язатись з нашим менеджером, який надасть усю вичерпну інформацію. Для цього не потрібно навіть залишати свій будинок. Кілька способів оплати і доставки. Виберіть найбільш зручний.</p>

      <p>Оперативна доставка не змусить себе довго чекати.</p>
    </div>

    <?php include 'blocks/callback.php';?>
  </main>

	<?php include 'blocks/footer.php';?>
</body>
</html>