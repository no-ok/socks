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
            <h1 class="section-title"><span>Вхід</span></h1>

            <div class="form-descr">
              <p>Якщо у вас вже є аккаунт, будь-ласка авторизуйтесь</p>
            </div>

            <form>
              <div class="form-row">
                <label for="inputName">E-mail:</label>

                <input type="text" class="form-control" id="inputName" required>
              </div>

              <div class="form-row">
                <label for="inputPassword">Пароль:</label>

                <input type="password" class="form-control" id="inputPassword" required>
              </div>

              <span class="forget-toggle" data-toggle="modal" data-target="#rememberModal">Забули пароль?</span>

              <button class="main-button fill-button">Увійти</button>
            </form>


            <p><a href="signup.php">Зареєструватись</a></p>
          </div>
        </div>

        <div class="modal fade" id="rememberModal" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content rememberContent">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                <h4 class="modal-title">Нагадування паролю</h4>
              </div>

              <div class="modal-body clearfix">
                <p>Вкажіть будь-ласка e-mail внесений при реєстрації, ми надіслемо туди інформацію про відновлення доступу до особистого кабінету</p>

                <div class="form-container">
                  <form>
                    <div class="form-row">
                      <label for="inputModalMail">E-mail:</label>
                      <input type="mail" class="form-control" id="inputModalMail">
                    </div>

                    <!-- <button class="main-button fill-button">Надіслати</button> -->
                    <a href="" class="main-button fill-button">Надіслати</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- end main -->

      <?php include 'blocks/footer.php';?>
    </div>
  </body>
</html>