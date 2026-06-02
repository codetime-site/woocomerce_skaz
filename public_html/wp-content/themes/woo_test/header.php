<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сказочный Сайт Алены</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
</head>

<body>
<header class="site-header">
  <div class="header-container">
    <!-- Логотип -->
    <a href="#" class="logo">
      <span class="logo-icon">⚡</span> WebStudio
    </a>

    <!-- Навигация -->
    <nav class="main-nav">
      <ul class="nav-list">
        <li><a href="#" class="nav-link active">Главная</a></li>
        <li><a href="#" class="nav-link">Услуги</a></li>
        <li><a href="#" class="nav-link">Портфолио</a></li>
        <li><a href="#" class="nav-link">Контакты</a></li>
      </ul>
    </nav>

    <!-- Кнопка действия -->
    <div class="header-actions">
      <a href="tel:+79991112233" class="phone-link">+7 (999) 111-22-33</a>
      <button class="cta-button">Обсудить проект</button>
    </div>
  </div>
</header>
