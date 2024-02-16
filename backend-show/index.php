
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    />

    <title>Waroeng Super</title>
    <link
      rel="stylesheet"
      type="text/css"
      href="./asset/bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/css/bootstrap.css"
    />
    <link rel="stylesheet" href="styles.css" />
    <script
      type="text/javascript"
      src="./asset/bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/js/bootstrap.js"
    ></script>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="content-wrapper">
      <!-- HEADER -->
      <header class="sticky-top">
        <!-- NAVBAR CONTAINER -->
        <nav
          class="navbar navbar-expand-lg navbar-dark"
          style="background-color: #1e57a6"
        >
          <!-- NAVBAR CONTENT CONTAINER -->
          <div
            class="container d-flex align-items-center justify-content-between"
          >
            <!-- BUSINESS BRAND -->
            <a class="navbar-brand" href="#">
              <strong style="color: yellow">WAROENG</strong> SUPER
            </a>
            <!-- RESPONSIVE NAVBAR DROP DOWN BUTTON PHONE SIZE -->
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarResponsive"
              aria-controls="navbarResponsive"
              aria-expanded="false"
              aria-label="Toggle navigation"
              data-bs-auto-close="outside"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <!-- NAVBAR LINK PAGE -->
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#" data-target="home"
                    >Home <span class="sr-only">(current)</span></a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" data-target="products"
                    >Products</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" data-target="gallery">Gallery</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" data-target="login">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" data-target="aboutUs"
                    >About Us</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" data-target="contactUs"
                    >Contact Us</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- MAIN CONTAINER -->
      <main class="center-display">
        <!-- Home Page -->
        <section id="home" class="section-container">
          <div class="container">
            <div class="row d-flex align-items-center">
              <div class="col-md-6">
                <h1 class="" style="font-size: 70px">
                  Kretek Asli Indonesia ?
                </h1>
                <br />
                <p>
                  Kretek Sehat Tentrem adalah produk kretek inovatif yang
                  menawarkan pengalaman merokok lebih ringan dan aman
                  dibandingkan kretek biasa. Dibuat dengan bahan-bahan alami
                  berkualitas dan teknologi terkini
                </p>
              </div>
              <div class="col-md-6">
                <img src="./asset/rpe.png" alt="" class="img-fluid rounded-3" />
              </div>
            </div>
          </div>
        </section>
        <!-- List Product Page -->
        <section id="products" class="section-container">
          <div class="container">
            <div class="row">
              <h2 class="col align-self-center" style="text-align: center">
                Our Sehat tentrem Products
              </h2>
            </div>

            <div class="d-grid gap-2 col-6 mx-auto">
              <button
                id="goToCartButton"
                class="btn btn-warning col align-self-center"
              >
                Go To Cart
              </button>
            </div>
          </div>

          <div id="listProducts"></div>
        </section>
        <!-- Galeri Page -->
        <section id="gallery" class="section-container pt-5 pb-5">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 text-center">
                <h1>Gallery</h1>
                <p class="lead">
                  Yuk ikuti berbagai aktivitas di Waroeng Super
                </p>
                <ul class="list-unstyled">
                  <li>
                    Bergabunglah dengan program membership kami dan dapatkan
                    akses menjadi anggota di Komunitas Sehat Tentrem Indonesia
                    dan masih banyak benefit lainnya.
                  </li>
                </ul>
              </div>
            </div>
            <!-- Image Carousel -->
            <div
              id="galleryCarousel"
              class="carousel slide mt-4"
              data-bs-ride="carousel"
              data-bs-interval="2500"
            >
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="https://picsum.photos/800/400?random=1"
                    class="d-block w-100"
                    alt="Image 1"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="https://picsum.photos/800/400?random=2"
                    class="d-block w-100"
                    alt="Image 2"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="https://picsum.photos/800/400?random=3"
                    class="d-block w-100"
                    alt="Image 3"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="https://picsum.photos/800/400?random=4"
                    class="d-block w-100"
                    alt="Image 4"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="https://picsum.photos/800/400?random=5"
                    class="d-block w-100"
                    alt="Image 5"
                  />
                </div>
              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#galleryCarousel"
                data-bs-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#galleryCarousel"
                data-bs-slide="next"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </section>

        <!-- Cart List Page -->
        <section id="cart" class="container mt-5">
          <h2>Your Cart</h2>
          <div id="cartItems" class="my-3"></div>
          <div id="cartTotal" class="fw-bold my-3"></div>
          <button id="checkoutButton" class="btn btn-success">Check Out</button>
        </section>
        <!-- Modal Success  -->
        <div
          class="modal fade"
          id="checkoutModal"
          tabindex="-1"
          aria-labelledby="checkoutModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5
                  style="color: green"
                  class="modal-title"
                  id="checkoutModalLabel"
                >
                  Checkout Success
                </h5>
                <!-- <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                ></button> -->
              </div>
              <div class="modal-body">
                Transaksi berhasil. Periksa email mu dan selesaikan pembayaran.
              </div>
              <div class="modal-footer">
                <button
                  id="done-checkout"
                  type="button"
                  class="btn btn-secondary"
                  data-bs-dismiss="modal"
                >
                  Done
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- If Cart Empty Modal -->
        <div
          class="modal fade"
          id="emptyCartModal"
          tabindex="-1"
          aria-labelledby="emptyCartModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5
                  style="color: red"
                  class="modal-title"
                  id="emptyCartModalLabel"
                >
                  Empty Cart
                </h5>
                <!-- <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                ></button> -->
              </div>
              <div class="modal-body">
                Kamu belum menambahkan item apapun ke dalam cart.
              </div>
              <div class="modal-footer">
                <button
                  id="fail-checkout"
                  type="button"
                  class="btn btn-secondary"
                  data-bs-dismiss="modal"
                >
                  Close
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Log In Form -->
        <section id="login" class="section-container">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-5">
                <div class="card">
                  <div class="card-body">
                    <form method="POST" action="login.php">
                      <h2 class="mb-3">Log In</h2>

                 
                        <div class="mb-3">
                        <label for="emailInput" class="form-label">
                        <i class="fas fa-envelope"></i> Email
                         </label>
                          <input type="email" class="form-control" id="emailInput" name="email" placeholder="Enter your Email" required>
                          </div> 

                      <div class="mb-3">
                        <label for="passwordInput" class="form-label">
                          <i class="fas fa-lock"></i> Password
                        </label>
                        <input type="password" class="form-control" id="passwordInput" name="password" placeholder="Enter your password" required>
                      </div>

                      <div class="mb-3 d-flex align-items-center">
                        <div class="form-check me-3">
                          <input
                            type="checkbox"
                            class="form-check-input"
                            id="rememberMe"
                          />
                          <label class="form-check-label" for="rememberMe">
                            Remember me
                          </label>
                        </div>
                        <a href="#" class="text-muted">Forgot password?</a>
                      </div>

                      <button type="submit" class="btn btn-primary mb-3">
                        Log In
                      </button>

                      <div class="mt-3 text-center">
                        Don't have an account?
                        <a id="goToRegistration" href="#">Sign up now</a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Registration Form -->
        <section id="registration" class="section-container">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-5">
                <div class="card">
                  <div class="card-body">
                    <form
                      id="registrationForm"
                      method="POST"
                      action="insert-registration.php"
                    >
                      <h2 class="mb-3">Registration</h2>

                      <div class="mb-3">
                        <label for="nameInput" class="form-label">
                          <i class="fas fa-user"></i> Name
                        </label>
                        <input type="text" class="form-control" id="nameInput" name="name" placeholder="Enter your name" required />
                      </div>

                      <div class="mb-3">
                        <label for="emailInput" class="form-label">
                          <i class="fas fa-envelope"></i> Email
                        </label>
                        <input
                          type="email"
                          class="form-control"
                          id="emailInput"
                          name="email"
                          placeholder="Enter your email"
                          required
                        />
                      </div>

                      <div class="mb-3">
                        <label for="passwordInput" class="form-label">
                          <i class="fas fa-lock"></i> Password
                        </label>
                        <input type="password" class="form-control" id="passwordInput" name="password" placeholder="Create a password" required />
                      </div>

                      <div class="mb-3">
                        <label for="confirmPasswordInput" class="form-label">
                          <i class="fas fa-lock"></i> Confirm Password
                        </label>
                        <input type="password" class="form-control" id="passwordInput" name="password" placeholder="Create a password" required />
                      </div>

                      <div class="mb-3 form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="termsConditions"
                          required
                        />
                        <label class="form-check-label" for="termsConditions">
                          I accept all terms & conditions
                        </label>
                      </div>

                      <button id="registration-button" type="submit" class="btn btn-primary mb-3">
                        Register Now
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Modal registration success -->
        <div
          class="modal fade"
          id="registration-success-modal"
          tabindex="-1"
          aria-labelledby="checkoutModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5
                  style="color: blue"
                  class="modal-title"
                  id="checkoutModalLabel"
                >
                  Registration Success
                </h5>
                <!-- <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                ></button> -->
              </div>
              <div class="modal-body">
                Terimakasih sudah melakukan registrasi. Silahkan Log In kembali.
              </div>
              <div class="modal-footer">
                <button
                  id="done-checkout"
                  type="button"
                  class="btn btn-secondary"
                  data-bs-dismiss="modal"
                >
                  Log In
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal registration failed -->
        <div
          class="modal fade"
          id="registration-failed-modal"
          tabindex="-1"
          aria-labelledby="emptyCartModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5
                  style="color: red"
                  class="modal-title"
                  id="emptyCartModalLabel"
                >
                  Registration Failed
                </h5>
                <!-- <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                ></button> -->
              </div>
              <div class="modal-body">
                Registrasi belum berhasil, lakukan beberapa saat lagi.
              </div>
              <div class="modal-footer">
                <button
                  id="fail-checkout"
                  type="button"
                  class="btn btn-secondary"
                  data-bs-dismiss="modal"
                >
                  Close
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- About Us Page -->
        <section id="aboutUs" class="py-5">
          <div class="container">
            <!-- Section Introduction -->
            <div class="row mb-5">
              <div class="col-lg-12 text-center">
                <h1 class="mb-3">About Us</h1>
                <p class="lead">
                  Waroeng Super hadir sebagai tempat berkumpul, melepas penat,
                  dan menjalin koneksi. Kami ingin menjadi ruang ketiga Anda
                  setelah rumah dan kantor, tempat Anda bisa menikmati
                  kenyamanan, keramahan, dan pengalaman ngopi yang tak
                  terlupakan.
                </p>
                <img
                  src="https://picsum.photos/1200/400?random=1"
                  class="img-fluid mb-3"
                  alt="Community Image"
                />
                <p>
                  Ingat, ngopi asyik, ngobrol santai, dan sehat tentrem, ya di
                  Waroeng Super!
                </p>
              </div>
            </div>

            <!-- Team Section -->
            <div class="row justify-content-center mb-5">
              <div class="col-md-8">
                <h2 class="mb-4 text-center">Our Team</h2>
                <p>
                  Dibalik Waroeng Super ada Mirza, Nanda, dan Aris, tiga sahabat
                  dengan semangat yang sama: menyajikan pengalaman ngopi terbaik
                  dan ternyaman untuk Anda. Kami percaya keramahan, pelayanan
                  yang hangat, dan suasana yang bersahabat adalah kunci utama.
                </p>
                <img
                  src="https://picsum.photos/1200/400?random=2"
                  class="img-fluid mb-3"
                  alt="Team Image"
                />
              </div>
            </div>

            <!-- Journey Section -->
            <div class="row justify-content-center mb-5">
              <div class="col-md-8">
                <h2 class="mb-4 text-center">Our Journey</h2>
                <p>
                  Lahir di bulan Januari 2023, Waroeng Super hadir sebagai
                  sebuah konsep baru di tengah hiruk pikuk kehidupan. Kami lebih
                  dari sekedar warung kopi biasa, kami menawarkan pengalaman
                  ngopi yang asyik, tempat ngobrol yang santai, dan tentunya,
                  pilihan produk Sehat Tentrem Kretek, berbagai varian Tembakau,
                  Kopi dan Es Teh yang nikmat.
                </p>
                <img
                  src="https://picsum.photos/1200/400?random=3"
                  class="img-fluid mb-3"
                  alt="Journey Image"
                />
              </div>
            </div>

            <!-- Mission Section -->
            <div class="row justify-content-center mb-5">
              <div class="col-md-8">
                <h2 class="mb-4 text-center">Our Mission</h2>
                <p>
                  Menikmati kopi bukan hanya tentang rasanya, tapi juga tentang
                  pengalaman. Inilah yang membuat Waroeng Super berbeda. Tempat
                  Nyaman Waroeng Super menawarkan ruang luas yang nyaman untuk
                  berlama-lama, bekerja, atau bersantai bersama teman. Wifi
                  Kencang Butuh internet cepat untuk menyelesaikan pekerjaan
                  atau bersosial media? Jangan khawatir, Waroeng Super
                  menyediakan wifi kencang dan gratis. Pilihan Lengkap Nikmati
                  beragam pilihan kopi, teh, dan minuman lainnya yang sesuai
                  dengan selera Anda. Tak lupa, kami juga menyediakan berbagai
                  produk Sehat Tentrem Kretek berkualitas dan jika kamu pecinta
                  Tembakau Tingwe kami adalah pilihan yang pas untuk menemani
                  momen ngopi Anda. Area Merokok Bagi Anda yang merokok, Waroeng
                  Super menyediakan area khusus yang luas dan nyaman, sehingga
                  tidak mengganggu kenyamanan pengunjung lain.
                </p>
                <img
                  src="https://picsum.photos/1200/400?random=4"
                  class="img-fluid mb-3"
                  alt="Mission Image"
                />
              </div>
            </div>

            <!-- Invitation Section -->
            <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                <h2 class="mb-4">Join Us</h2>
                <p>
                  Kami mengajak Anda untuk merasakan sendiri pengalaman ngopi
                  yang berbeda di Waroeng Super. Datanglah bersama teman,
                  keluarga, atau rekan kerja, nikmati suasana yang nyaman, dan
                  temukan produk Sehat Tentrem Kretek favorit Anda.
                </p>
                <img
                  src="https://picsum.photos/1200/400?random=5"
                  class="img-fluid mb-3"
                  alt="Invitation Image"
                />
                <a href="#" class="btn btn-primary">Back to Top</a>
              </div>
            </div>
          </div>
        </section>

        <!-- Contact Us Page -->
        <section id="contactUs" class="section-container">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                  <form method="POST" action="submit_contact_form.php">
                      <h2 class="mb-3">Contact Form</h2>
                      <p class="text-muted">
                        Beri tahu kami jika anda memiliki pertanyaan, saran dan
                        masukan dengan mengisi contact form ini.
                      </p>

                      <div class="row mb-3">
                        <div class="col">
                          <label for="firstNameInput" class="form-label"
                            >Name *</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            id="firstNameInput"
                            name="firstname"
                            placeholder="First name"
                            required
                          />
                        </div>
                        <div class="col">
                          <label for="lastNameInput" class="form-label"></label>
                          <input
                            type="text"
                            class="form-control"
                            id="lastNameInput"
                            name="lastname"
                            placeholder="Last name"
                            required
                          />
                        </div>
                      </div>

                      <div class="mb-3">
                        <label for="emailInput" class="form-label"
                          >Email *</label
                        >
                        <input
                          type="email"
                          class="form-control"
                          id="emailInput"
                          name="email"
                          placeholder="Enter your email"
                          required
                        />
                      </div>

                      <div class="mb-3">
                        <label for="phoneInput" class="form-label"
                          >Phone *</label
                        >
                        <input
                          type="tel"
                          class="form-control"
                          id="phoneInput"
                          name="phone"
                          placeholder="Enter your phone number"
                          required
                        />
                      </div>

                      <div class="mb-3">
                        <label for="messageSubjectInput" class="form-label"
                          >Message Subject *</label
                        >
                        <input
                          type="text"
                          class="form-control"
                          id="messageSubjectInput"
                          name="message_subject"
                          placeholder="Subject of your message"
                          required
                        />
                      </div>

                      <div class="mb-3">
                        <label for="messageInput" class="form-label"
                          >Message *</label
                        >
                        <textarea
                          class="form-control"
                          id="messageInput"
                          name="message"
                          rows="5"
                          placeholder="Your message"
                          required
                        ></textarea>
                      </div>

                      <button type="submit" class="btn btn-primary">
                        Send Message
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Modal contact form success -->
        <div
          class="modal fade"
          id="contact-success-modal"
          tabindex="-1"
          aria-labelledby="checkoutModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5
                  style="color: blue"
                  class="modal-title"
                  id="checkoutModalLabel"
                >
                  Submit Success
                </h5>
                <!-- <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                      ></button> -->
              </div>
              <div class="modal-body">
                Terimakasih sudah menghubungi kami, kami akan segera memberikan
                tanggapan.
              </div>
              <div class="modal-footer">
                <button
                  id="done-checkout"
                  type="button"
                  class="btn btn-secondary"
                  data-bs-dismiss="modal"
                >
                  Done
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal registration failed -->
        <div
          class="modal fade"
          id="contact-failed-modal"
          tabindex="-1"
          aria-labelledby="emptyCartModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5
                  style="color: red"
                  class="modal-title"
                  id="emptyCartModalLabel"
                >
                  Submit Failed
                </h5>
                <!-- <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                      ></button> -->
              </div>
              <div class="modal-body">
                Terjadi kesalahan lakukan beberapa saat lagi, lakukan beberapa
                saat lagi.
              </div>
              <div class="modal-footer">
                <button
                  id="fail-checkout"
                  type="button"
                  class="btn btn-secondary"
                  data-bs-dismiss="modal"
                >
                  Close
                </button>
              </div>
            </div>
          </div>
        </div>
      </main>

      <!-- Footer -->
      <footer class="footer">
        <div class="container">
          <span class="">© 2024 Waroeng Super. All rights reserved.</span>
        </div>
      </footer>
    </div>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      rel="stylesheet"
    />
    <script type="text/javascript" src="script.js"></script>
  </body>
</html>
