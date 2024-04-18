<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <title>Download Data</title>
  <style>
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #customers td,
    #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #customers tr:nth-child(even) {
      background-color: #f2f2f2;
    }

   
    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #17a2b8;
      color: white;
    }

  </style>
</head>

<body>
  <h3>Laporan Aktivitas Peminjaman Buku</h3><br>

    <table id="customers">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Book id</th>
            <th scope="col">Borrowed date</th>
            <th scope="col">Return date</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          <h6>borrowed data</h6>
          <tr>
            <td>itteration</td>
            <td>data book_id</td>
            <td>data borrowed date</td>
            <td>data return date</td>
            <td>data status</td>
          </tr>
          <h6></h6>
        </tbody>
      </table>
</body>

</html>
