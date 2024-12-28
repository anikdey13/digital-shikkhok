<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eduport.webestica.com/coming-soon.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Dec 2024 08:14:40 GMT -->

<head>
  <title>Eduport - LMS, Education and Course Theme</title>

  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Webestica.com">
  <meta name="description" content="Eduport- LMS, Education and Course Theme">

  <!-- Dark mode -->
  <script>
    const storedTheme = localStorage.getItem('theme')

    const getPreferredTheme = () => {
      if (storedTheme) {
        return storedTheme
      }
      return window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'light'
    }

    const setTheme = function(theme) {
      if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        document.documentElement.setAttribute('data-bs-theme', 'dark')
      } else {
        document.documentElement.setAttribute('data-bs-theme', theme)
      }
    }

    setTheme(getPreferredTheme())

    window.addEventListener('DOMContentLoaded', () => {
      var el = document.querySelector('.theme-icon-active');
      if (el != 'undefined' && el != null) {
        const showActiveTheme = theme => {
          const activeThemeIcon = document.querySelector('.theme-icon-active use')
          const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
          const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

          document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
            element.classList.remove('active')
          })

          btnToActive.classList.add('active')
          activeThemeIcon.setAttribute('href', svgOfActiveBtn)
        }

        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
          if (storedTheme !== 'light' || storedTheme !== 'dark') {
            setTheme(getPreferredTheme())
          }
        })

        showActiveTheme(getPreferredTheme())

        document.querySelectorAll('[data-bs-theme-value]')
          .forEach(toggle => {
            toggle.addEventListener('click', () => {
              const theme = toggle.getAttribute('data-bs-theme-value')
              localStorage.setItem('theme', theme)
              setTheme(theme)
              showActiveTheme(theme)
            })
          })

      }
    })
  </script>

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.ico">

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap">

  <!-- Plugins CSS -->
  <link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="assets/vendor/aos/aos.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

  <!-- **************** MAIN CONTENT START **************** -->
  <main>
    <section class="pt-0 pt-lg-5 position-relative overflow-hidden my-auto">

      <!-- SVG decoration -->
      <figure class="position-absolute bottom-0 start-0">
        <svg width="822.2px" height="301.9px" viewBox="0 0 822.2 301.9">
          <path class="fill-warning opacity-5" d="M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z"></path>
        </svg>
      </figure>
      <!-- SVG decoration -->
      <figure class="position-absolute top-0 end-0 d-none d-xl-block">
        <svg width="822.2px" height="301.9px" viewBox="0 0 822.2 301.9">
          <path class="fill-danger opacity-3" d="M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z"></path>
        </svg>
      </figure>

      <div class="container position-relative">
        <div class="row g-5 align-items-center justify-content-center">
          <div class="col-lg-5">
            <!-- Title -->
            <h1 class="mt-4 mt-lg-0">Coming Soon</h1>
            <!-- info -->
            <p>This feature is currently under development and will be launched soon. Stay tuned!</p>
            <!-- Progress bar -->
            <div class="overflow-hidden mt-4">
              <p class="mb-1 h6 fw-light text-start">Launch progress</p>
              <div class="progress progress-md progress-percent-bg bg-light">
                <div class="progress-bar progress-bar-striped bg-blue aos" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                  <span class="progress-percent text-white">85%</span>
                </div>
              </div>
            </div>

            <!-- Newsletter -->
            <form class="mt-4">
              <!-- Info -->
              <h6>Notify me when website is launched</h6>
              <div class="bg-body border rounded-2 p-2">
                <!-- Input subscribe -->
                <div class="input-group">
                  <input class="form-control border-0 me-1" type="email" placeholder="Enter your email">
                  <button type="button" class="btn btn-blue mb-0 rounded-2">Notify Me!</button>
                </div>
              </div>
            </form>
          </div>

          <div class="col-lg-7 text-center">
            <!-- Image -->
            <img src="assets/images/element/coming-soon.svg" class="h-300px h-sm-400px h-md-500px h-xl-700px" alt="">
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- **************** MAIN CONTENT END **************** -->

  <!-- Back to top -->
  <div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

  <!-- Bootstrap JS -->
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Vendors -->
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Functions -->
  <script src="assets/js/functions.js"></script>

</body>

<!-- Mirrored from eduport.webestica.com/coming-soon.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Dec 2024 08:14:40 GMT -->

</html>