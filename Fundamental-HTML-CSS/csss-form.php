<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style-csss.css">
    <link rel="stylesheet" href="form-style-csss.css">
    <title>Form</title>
  </head>
  <body>
    <section class="container">
      <header>
        <img src="logo.png" alt="Logo">
      </header>
      <article>
        <form class="" action="#" method="post">
          <label class="form-style">
            Nama Lengkap
            <input type="text" name="name" class="input" placeholder="Your Name" required>
          </label>
          <label class="form-style">
            Phone
            <input type="number" name="number" class="input" placeholder="Your Phone">
          </label>
          <label class="form-style">
            Email
            <input type="Email" name="number" class="input" placeholder="Your Email">
          </label>
          <label class="form-style">
            Password
            <input type="password" name="password" class="input" placeholder="Your Password">
          </label>
          <label class="form-style">
            Address
            <textarea name="address" class="input textarea"></textarea>
          </label>
          <fieldset class="form-style">
            <legend>Hobby</legend>
            <label>
              <label>
                <input type="checkbox" name="checkbox" value="0"> Reading
              </label>
              <label>
                <input type="checkbox" name="checkbox" value="1"> Coding
              </label>
              <label>
                <input type="checkbox" name="checkbox" value="2"> Swimming
              </label>
            </label>
          </fieldset>
          <fieldset class="form-style">
            <legend>Jenis Kelamin</legend>
            <label>
              <label>
                <input type="radio" name="radiobtn" value="0"> Laki - Laki
              </label>
              <label>
                <input type="radio" name="radiobtn" value="1"> Perempuan
              </label>
            </label>
          </fieldset>
          <label class="form-style">
            Prodi
            <select class="input" name="prodi">
              <option value="0">TIF</option>
              <option value="1">TKK</option>
              <option value="2">MIF</option>
            </select>
          </label>
          <label class="form-style">
            Favorite Color
            <input list="datalist-color" class="input">
            <datalist id="datalist-color">
              <option value="R">Red</option>
              <option value="Y">Yellow</option>
              <option value="G">Green</option>
              <option value="B">Blue</option>
              <option value="BN">Blue Navy</option>
            </datalist>
          </label>
          <input type="submit" name="btn-send" value="send">
        </form>
      </article>
      <nav class="nav-sidebar">
        <ul>
          <li><a href="csss.php">Index</a></li>
          <li><a href="csss-form.php" class="active">Form</a></li>
          <li><a href="csss-tabel.php">Tabel</a></li>
        </ul>
      </nav>
      <footer>
        footer
      </footer>
    </section>
  </body>
</html>
