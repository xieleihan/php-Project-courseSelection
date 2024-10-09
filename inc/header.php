<?php include 'config/db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.bootcdn.net/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css" rel="stylesheet">
    <title>课程评价</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light mb-4">
        <div class="container">
          <a class="navbar-brand" href="#">课程评价平台</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="/course-review-app/index.php">首页</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/course-review-app/reviews.php">评价</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/course-review-app/about.php">关于</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <main>
        <div class="container d-flex flex-column align-items-center">