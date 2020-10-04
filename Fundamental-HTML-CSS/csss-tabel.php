<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style-csss.css">
    <link rel="stylesheet" href="table-style-csss.css">
    <title>Tabel</title>
  </head>
  <body>
    <section class="container">
      <header>
        <img src="logo.png" alt="Logo">
      </header>
      <article>
        <table>
          <caption>
            Daftar Nama
          </caption>
          <thead> <!-- pengganti tr untuk th -->
            <th class="no">No</th>
            <th>Nama</th>
            <th>umur</th>
          </thead>
          <tbody> <!-- pengganti tr untuk td -->
            <td class="midle">1</td>
            <td>John</td>
            <td>12</td>
          </tbody>
          <tr>
            <td class="midle">2</td>
            <td>John</td>
            <td>13</td>
          </tr>
          <tr>
            <td class="midle">3</td>
            <td>John</td>
            <td>14</td>
          </tr>
          <tr>
            <td class="midle">4</td>
            <td>John</td>
            <td>15</td>
          </tr>
          <tr>
            <td class="midle">5</td>
            <td>John</td>
            <td>17</td>
          </tr>
          <tr>
            <td class="midle">6</td>
            <td>John</td>
            <td>16</td>
          </tr>
        </table>

        <table>
          <caption>
            Invoice
          </caption>
          <thead> <!-- pengganti tr untuk th -->
            <th class="no">Item</th>
            <th>QTY</th>
            <th>Harga</th>
            <th>Jumlah</th>
          </thead>
          <tbody> <!-- pengganti tr untuk td -->
            <td>JavaScript</td>
            <td class="midle">1</td>
            <td class="midle">150.000</td>
            <td class="midle">150.000</td>
          </tbody>
          <tr>
            <td>PHP</td>
            <td class="midle">2</td>
            <td class="midle">100.000</td>
            <td class="midle">200.000</td>
          </tr>
          <tr>
            <td>OOP</td>
            <td class="midle">1</td>
            <td class="midle">100.000</td>
            <td class="midle">100.000</td>
          </tr>
          <tr>
            <td colspan="3" class="total">Total</td>
            <td class="midle">450.000</td>
          </tr>
        </table>
        <table>
          <table>
            <caption>Pria / Wanita berdasarkan Umur</caption>
            <thead>
              <tr>
                <th colspan="2">15 - 20</th>
                <th colspan="2">21 - 25</th>
                <th colspan="2">26 - 30</th>
              </tr>
              <tr>
                <th>pria</th>
                <th>wanita</th>
                <th>pria</th>
                <th>wanita</th>
                <th>pria</th>
                <th>wanita</th>
              </tr>
            </thead>
            <tbody>
              <tr class="midle">
                <td>12</td>
                <td>13</td>
                <td>22</td>
                <td>24</td>
                <td>27</td>
                <td>28</td>
              </tr>
              <tr class="midle">
                <td>12</td>
                <td>13</td>
                <td>22</td>
                <td>24</td>
                <td>27</td>
                <td>28</td>
              </tr>
              <tr class="midle">
                <td>12</td>
                <td>13</td>
                <td>22</td>
                <td>24</td>
                <td>27</td>
                <td>28</td>
              </tr>
            </tbody>
        </table>
        <table>
          <caption>Founder</caption>
          <thead>
            <tr>
              <th>Perusahaan</th>
              <th>nama</th>
              <th>kekayaan</th>
            </tr>
            <tr>
              <th rowspan="3">Apple</th>
            </tr>
            <tr>
              <td>Steve Job</td>
              <td>400T</td>
            </tr>
            <tr>
              <td>Steve Paul</td>
              <td>400T</td>
            </tr>
            <tr>
              <th rowspan="4">Facebook</th>
            </tr>
            <tr>
              <td>Mark</td>
              <td>400T</td>
            </tr>
            <tr>
              <td>Suckerberk</td>
              <td>400T</td>
            </tr>
            <tr>
              <td>Suckerberk</td>
              <td>400T</td>
            </tr>
          </thead>
        </table>
      </article>
      <nav class="nav-sidebar">
        <ul>
          <li><a href="csss.php">Index</a></li>
          <li><a href="csss-form.php">Form</a></li>
          <li><a href="csss-tabel.php" class="active">Tabel</a></li>
        </ul>
      </nav>
      <footer>
        footer
      </footer>
    </section>
  </body>
</html>
