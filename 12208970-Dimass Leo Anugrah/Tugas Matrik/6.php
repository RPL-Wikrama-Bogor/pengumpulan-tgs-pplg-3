<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soal 6</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
    }

    .card {
      background-color: white;
      margin: auto;
      margin-top: 50px;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .card-body {
      text-align: center;
    }

    input[type="number"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    button[type="submit"] {
      padding: 10px 20px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button[type="submit"]:hover {
      background-color: #0056b3;
    }

    p.result {
      font-size: 18px;
      margin-top: 20px;
    }
  </style>
</head>

<body>
      <h1>From Total Second to Hour, Minute, Second</h1>
      <form action="" method="post">
        <table>
          <tr>
            <td>Total Second :</td>
            <td><input type="number" name="total"></td>
          </tr>
          <tr>
            <td><br><button type="submit" name="submit">Submit</button></td>
          </tr>
        </table>
      </form>
      <?php
      $h;
      $m;
      $s;
      $total;
      $leftover;
      if (isset($_POST['submit'])) {
        $total = $_POST['total'];
        $leftover = $total % 3600;
        $h = ($total - $leftover) / 3600;
        $leftover2 = $leftover % 60;
        $m = ($leftover - $leftover2) / 60;
        $s = $leftover2;
        echo '<p class="result">' . $h . " Hour " . $m . " Minute " . $s . " Second" . '</p>';
      }
      ?>
</body>

</html>
