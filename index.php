<?php
session_start();
if (isset($_SESSION["pesan"])) :
  ?>
  <script>
    window.onload = function() {
      Swal.fire(
        "<?= $_SESSION["pesan"]; ?>",
        '',
        'success'
      )
    }
  </script>
<?php
  unset($_SESSION["pesan"]);
endif;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dwi Nofebri | Portfolio Website</title>
  <meta name="description" content="Dwi Nofebri | Portfolio Website" />
  <meta name="”robots”" content="index, follow" />
  <link rel="stylesheet" href="assets/css/aristyle.css" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->

  <link rel="icon" href="assets/icon.png" sizes="16x16" type="image/png" />
</head>

<body id="body" class="theme-light">

  <!-- <div
      class="bg-profile-img"
      style="
        background-image: url(assets/img/kewcoder.png);
      "
    ></div> -->
  <header>
    <a href="https://dnfebri.github.io/" class="logo" data-tilt>
      Dwi No<span>febri</span>
    </a>
    <nav class="navbar">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-secondary mx-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Panduan
      </button>

      <!-- <a href="#" class="hide-m">Course</a>
            <a href="#" class="hide-m">Blog</a>
            <a href="#" class="hide-m">Portfolio</a> -->
      <a onclick="toggleDarkMode()">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-lightbulb-fill" viewBox="0 0 16 16">
          <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13h-5a.5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm3 8.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1-.5-.5z" />
        </svg>
      </a>
    </nav>
  </header>
  <!-- About Me -->

  <section class="latest-project" id="latestproject" style="margin-top: 80px; height: 100%;">


    <!-- <h1 >
            My <span >Latest Project</span> Work
        </h1> -->

    <div class="list d-flex justify-content-evenly">
      <!-- <div class="row justify-content-around"></div> -->
      <div class="list-item" data-tilt>
        <a href="https://dnfebri.000webhostapp.com/sistem-login/" class="" target="_blank">
          <img src="assets/img/projects/p-login_user.png" alt="Project">
        </a>
      </div>
      <div class="list-item" data-tilt>
        <a href="https://dnfebri.000webhostapp.com/donasi/" class="" target="_blank">
          <img src="assets/img/projects/p_umsida_peduli.png" alt="Project">
        </a>
      </div>
      <div class="list-item" data-tilt>
        <a href="https://dnfebri.000webhostapp.com/habib/" class="" target="_blank">
          <img src="assets/img/projects/p-habib.png" alt="Project">
        </a>
      </div>
      <!-- <div class="list-item" data-tilt>
              <div class="services-img text-center py-4">
                  <img src="assets/img/projects/project-1.jpg" alt="services">
              </div>
              <div class="card-body text-center">
                  <div class="buttons-wrap">
                      <div class="follow-wrap">
                          <a href="coming.html" target="blank" class="follow">Visit</a>
                          <i class="fas fa-arrow-right"></i>
                      </div>
                  </div>
              </div>
          </div>

          <div class="list-item" data-tilt>
              <img src="assets/img/projects/project-2.jpg" alt="Project">
          </div>
          <div class="list-item" data-tilt>
              <img src="assets/img/projects/project-3.jpg" alt="Project">
          </div>
          <div class="list-item" data-tilt>
              <img src="assets/img/projects/project-4.jpg" alt="Project">
          </div>
          <div class="list-item" data-tilt>
              <img src="assets/img/projects/project-5.jpg" alt="Project">
          </div>
          <div class="list-item" data-tilt>
              <img src="assets/img/projects/project-6.jpg" alt="Project">
          </div> -->

    </div>

    <!-- <a href="#latestblogpost" class="btn-next-page" data-tilt>
            <span>Latest Blog Post</span>
            <div class="circle"></div>
        </a> -->
  </section>
  <!--================ Start footer Area  =================-->
  <footer class="footer" style="position: fixed; bottom: 0; right: 0; left: 0; z-index: 2; ">
    <div class="footer-bottom" id="contact">
      <div class="container">
        <div class="row d-flex">
          <p class="col-lg-12 footer-text text-center">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            <script>
              document.write(new Date().getFullYear());
            </script> All rights reserved | By
            <a href="https://github.com/dnfebri" target="_blank">Dwi NoFebri</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!--================ End footer Area  =================-->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Panduan Akses</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Panduan akses akan dikirim melalui email!</p>
          <p>Sistem ini hanya untuk keperluan pribadi bukan untuk di publikasikan.
            Jadi setiap pengunjung yang mengalami kerugian, pihak admin atau developer tidak bertanggung jawab atas
            kerugian apapun.</p>
          <form action="sentEmailProses.php" method="post">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Silakan masukan email anda</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@gmail.com" required>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Keperluan ?</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="keperluan" placeholder="Contoh : Edukasi" required>
            </div>
            <p>* Jika anda keberatan/tidak yakin dengan pengisisan form ini anda bisa kilk <a href="https://forms.gle/fkzEdq1djBHyk1QVA" target="_blank">Link ini</a> </p>
            <p>Sistem hanya perlu merekem data pengunjung yang akan mengakses Administrator Website ini!</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Kirim</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  <script src="js/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="js/sweetalert2.min.css">

  <script type="text/javascript" src="assets/js/typed.min.js"></script>
  <script type="text/javascript" src="assets/js/vanilla-tilt.min.js"></script>
  <script>
    if (
      window.matchMedia &&
      window.matchMedia("(prefers-color-scheme: dark)").matches
    ) {
      // dark mode
      let el = document.getElementById("body");
      el.className = "theme-dark";
    }

    function toggleDarkMode() {
      let el = document.getElementById("body");
      if (el.className === "theme-light") {
        el.className = "theme-dark";
      } else {
        el.className = "theme-light";
      }
    }
    // bg img
    VanillaTilt.init(document.querySelector(".bg-profile-img"), {
      scale: 1.2,
    });

    new Typed("#typed", {
      strings: [
        "<strong><i>UI/UX Designer</i></strong>",
        "<strong><i>Web Developer</i></strong>",
        "<strong><i>Mobile Developer</i></strong>",
      ],
      typeSpeed: 80,
      backSpeed: 30,
      cursorChar: "<strong>_</strong>",
      shuffle: true,
      smartBackspace: false,
      loop: true,
    });
  </script>
</body>

</html>