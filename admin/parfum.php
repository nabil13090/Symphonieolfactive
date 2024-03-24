<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleAdmin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Accueil</title>
</head>
<body>
<div class="wrapper">
<div class="sidebar">
  <h2>Menu</h2>
<nav class="nav flex-column">
  <ul>
    <li><a class="nav-link active bi bi-house-gear-fill" href="/admin/dashBord.php">  DashBord</a></li>
    <li><a class="nav-link active bi bi-gear" href="/admin/parfum.php">   Parfums</a></li>
    <li><a class="nav-link active bi bi-person-fill-gear" href="/admin/comptes.php">   Compte Clients</a></li>
    <li><a class="nav-link active bi bi-sliders2-vertical" href="/admin/categories.php">  Categories</a></li>
  </ul>
</nav>
</div>
</div>
<!-- Page Content  -->
<div class="d-flex justify-content-center py-3 bg-black mb-3  ">
<h2  class="text-white">Dashbord Parfums</h2>
</div>

<table class="table caption-top w-75 ">
  <caption>Listes de Parfums</caption>
  <thead class="rounded rounded">
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prix</th>
      <th scope="col">contenances</th>
      <th scope="col">Rating</th>
      <th scope="col">stock</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Opium</td>
      <td>95 €</td>
      <td>100 Ml</td>
      <td>4.5 / 5</td>
      <td>35</td>
    </tr>
  </tbody>
</table>
</body>
</html>