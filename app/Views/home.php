<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Entevior</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/stylee.css') ?>" />
  </head>
  <body>
    <header>
      <div class="logo">ENTE<span>VIOR</span></div>
      <nav>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Project</a>
        <a href="#">Contact</a>
      </nav>
      <div class="search-icon">🔍</div>
    </header>

    <main>
      <marquee direction="left" behavior="scroll">
        <h1>
          <span class="highlight">We design</span> based on
          <span class="highlight">behaviour</span> and what you
          <span class="highlight">want</span>.
        </h1>
      </marquee>
      <div class="room-preview"></div>
    </main>
    <section class="projects-section">
      <div class="text-content">
        <h1>
          We have <span class="gold">worked</span> on many 
          <br>projects with
          <span class="gold">clients</span>.
        </h1></h2>
        <p>
          According to the results of our data and testimonies, they are
          satisfied with the results we provide.
        </p>
        <div class="rating">9.7/10</div>
      </div>
      <div class="image-content">
      <img src="<?= base_url('assets/images/kitchen.jpg') ?>" alt="Modern kitchen interior design">
      </div>
    </section>

    <!-- CODE M3-->
    <audio controls>
        <source src="<?= base_url('assets/audio/i-loveee.mp3') ?>" type="audio/mpeg">
        Your browser does not support the audio element.
      </audio>


      <!-- CODE M4 -->
      <section class="video-section">
        <video controls autoplay muted loop>
          <source src="<?= base_url('assets/video/House_Interior.mp4') ?>" type="video/mp4">
             Your browser does not support the video tag.
        </video>
      </section>


  </body>
</html>
