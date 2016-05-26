<!DOCTYPE HTML>
<html>
<head>
    <?php include('common/head.php') ?>
</head>

<body>

  <!-- Header -->
  <header id="header">
    <?php include('common/header.php') ?>
  </header>

  <!-- Main -->
  <section id="main" class="container small">
    <header>
      <h2>Contact Us</h2>
    </header>
    <div class="box special">
      <p>Questions? Use the form below, or email us directly at <a href="mailto:tbp@ucsd.edu">tbp@ucsd.edu</a></p>
      <form method="post" action="">
        <div class="row uniform half collapse-at-2">
          <div class="6u">
            <input type="text" name="name" id="name" value="" placeholder="Name" />
          </div>
          <div class="6u">
            <input type="email" name="email" id="email" value="" placeholder="Email" />
          </div>
        </div>
        <div class="row uniform half">
          <div class="12u">
            <input type="text" name="subject" id="subject" value="" placeholder="Subject" />
          </div>
        </div>
        <div class="row uniform half">
          <div class="12u">
            <textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
          </div>
        </div>
        <div class="row uniform">
          <div class="12u">
            <ul class="actions align-center">
              <li><input type="submit" disabled value="Under Construction" class="fit"/></li>
            </ul>
          </div>
        </div>
      </form>
    </div>
  </section>

  <footer>
    <?php include('common/footer.php') ?>
  </footer>
</body>
</html>
