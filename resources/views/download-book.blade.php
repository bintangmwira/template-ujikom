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
    <table id="customers">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Book Category</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Publisher</th>
            <th scope="col">Year</th>
          </tr>
        </thead>
        <tbody>
          <h6>book data</h6>
          <tr>
            <td>itteration</td>
            <td>data category name</td>
            <td>data title</td>
            <td>data author</td>
            <td>data publisher</td>
            <td>data year</td>
          </tr>
          <h6></h6>
        </tbody>
      </table>
</body>

</html>
