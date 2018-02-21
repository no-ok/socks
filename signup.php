<!doctype html>
<html>
  <head>
    <?php include 'blocks/meta.php'; ?>
    <?php include 'blocks/metatags.php'; ?>
    <?php include 'blocks/link.php'; ?>
  </head>
  <body>
    <?php include 'blocks/fixed-social.php';?>

    <?php include 'blocks/fixed-toggles.php';?>

    <div>
      <?php include 'blocks/header.php';?>

      <!-- begin main -->
      <div class="main">
        <div class="container">
          <div class="autorization-container">
            <h1 class="section-title"><span>Реєстрація</span></h1>

            <div class="form-descr">
              <p>Реєстрація надзвичайно проста, це займе лише декілька хвилин</p>
            </div>

            <form>
              <div class="form-row">
                <label for="inputName">Ім'я користувача:</label>

                <input type="text" class="form-control" id="inputName" required>
              </div>

              <div class="form-row">
                <label for="inputEmail">E-mail:</label>

                <input type="text" class="form-control" id="inputEmail" required>
              </div>

              <div class="form-row">
                <label for="inputPassword">Пароль:</label>

                <input type="password" class="form-control" id="inputPassword" required>
              </div>

              <button class="main-button fill-button">Зареєструватись</button>
            </form>

            <p>Вже зареєстровані? <a href="login.php">Увійти</a></p>

          </div>
        </div>
      </div>
      <!-- end main -->

      <?php include 'blocks/footer.php';?>
    </div>
  </body>
</html>