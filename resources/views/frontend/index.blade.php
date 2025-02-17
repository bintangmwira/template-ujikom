<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PerpusApp - Landing</title>
</head>
<style>
    /* font */
@import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&family=Roboto:wght@400;500&display=swap");
/* tutup font */
html {
  scroll-behavior: smooth;
}
body {
  margin: 0;
  padding: 0;
  font-family: "Quicksand", sans-serif;
  font-family: "Roboto", sans-serif;
}
/* Awal style css header */
header {
  display: flex;
  background-color: #fff;
  height: 70px;
  justify-content: space-between;
  align-items: center;
  color: #000000;
  font-weight: 400;
  padding-top: 10px;
  position: fixed;
  left: 0;
  right: 0;
  box-sizing: border-box;
  padding-left: 40px;
  padding-right: 40px;
  z-index: 999999;
  border-bottom: 1px solid #ded3d3;
}

header .login-header {
  height: 33px;
  width: 100px;
  background-color: #17a2b8;
  color: #fff;
  border-radius: 30px;
  justify-content: center;
  display: flex;
  align-items: center;
}
header .login-header:hover {
  cursor: pointer;
  background-color: #16877d;
}
header nav.nav-header ul {
  padding-left: 0;
  display: flex;
  justify-content: center;
  gap: 55px;
}

header nav.nav-header ul li {
  list-style-type: none;
}
header nav.nav-header ul li:hover {
  cursor: pointer;
  transform: scale(1.1);
}
header nav.nav-header ul li a {
  text-decoration: none;
  color: #000;
}

header .logo-header {
  display: flex;
  font-size: 12px;
  gap: 10px;
}
header .logo-header:hover {
  cursor: pointer;
}
header .logo-header img {
  width: 45px;
}

.menu-mobile {
  display: none;
}

/* Akhir style css header */

/* landing */
main .container-landing {
  display: flex;
  background-color: #fff;
  height: 100vh;
  justify-content: space-around;
}

/* landing kiri */
main .container-landing .landing-kiri {
  width: 50%;
  padding-left: 140px;
  padding-top: 12%;
  letter-spacing: 1px;
  box-sizing: border-box;
}
main .container-landing .landing-kiri h2 {
  font-size: 2.5rem;
}
button.mulai-button {
  height: 33px;
  width: 100px;
  background-color: #17a2b8;
  border-radius: 30px;
  border: none;
  color: #fff;
  margin-top: 30px;
  margin-right: 20px;
}
button.mulai-button a {
  text-decoration: none;
  color: #ffffff;
}
button.mulai-button:hover {
  cursor: pointer;
  background-color: #16877d;
  transform: translate(-0.05em, -0.05em);
}

button.jelajahi-button {
  height: 33px;
  width: 100px;
  border: 2px solid #17a2b8;
  border-radius: 30px;
  color: #000;
  margin-top: 30px;
}
button.jelajahi-button a {
  text-decoration: none;
  color: #000000;
}
button.jelajahi-button:hover {
  cursor: pointer;
  border: 2px solid #16877d;
  transform: translate(-0.05em, -0.05em);
}
/* akhir landing kiri */

/* awal landing kanan */
main .container-landing .landing-kanan {
  width: 50%;
  padding-right: 140px;
  box-sizing: border-box;
  display: flex;
  justify-content: center;
  align-items: center;
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}
@-webkit-keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}
main .container-landing .landing-kanan img {
  width: 480px;
  margin-top: 75px;
}
/* akhir landing kanan */
/* Akhir landing */

/* awal  content dan sidebar*/
.content-sidebar {
  display: flex;
  justify-content: space-between;
  box-sizing: border-box;
  padding-left: 50px;
  padding-right: 50px;
  gap: 5rem;
  margin-top: 70px;
  scroll-margin-top: 80px;
}
/* awal sidebar */

aside {
  background-color: #17a2b8;
  display: flex;
  flex-grow: 1;
  border-radius: 10px;
  flex-flow: column;
  height: 470px;
  scroll-margin-top: 80px;
}
.avatar {
  display: flex;
  justify-content: center;
  width: 100%;
}
aside img {
  width: 100px;
  border-radius: 50%;
  background-color: #fff;
  margin-top: 30px;
}
aside h3 {
  text-align: center;
  color: #fff;
}
aside p {
  background-color: #fff;
  margin: 15px;
  padding: 5px;
  border-radius: 5px;
}
aside button {
  background-color: #fff;
  margin: 15px;
  padding: 5px;
  border-radius: 5px;
  text-align: center;
  border: none;
}
aside button a {
  text-decoration: none;
  font-size: 17px;
  color: #000;
}
aside button a:hover {
  color: #17a2b8;
}
/* akhir sidebar */

/* awal content */
.content {
  border: 1px solid #17a2b8;
  flex-grow: 4;
  border-radius: 10px;
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  width: 700px;
  padding: 20px;
  gap: 30px 20px;
}
.content .card-book {
  width: 250px;
  height: 120px;
  background-color: #fff;
  display: flex;
}
.content .card-book img {
  height: 120px;
}
.content .card-book .deskripsi-book {
  margin-left: 20px;
  margin-right: 5px;
  display: flex;
  flex-direction: column;
  box-sizing: border-box;
}
.content .card-book .deskripsi-book h3 {
  font-size: 13px;
}
.content .card-book .deskripsi-book p {
  font-size: 11px;
}
.content .card-book .deskripsi-book button {
  border: 1px solid #17a2b8;
  border-radius: 30px;
  height: 25px;
  width: 80px;
  background-color: #fff;
}
.content .card-book .deskripsi-book button:hover {
  background-color: #17a2b8;
  color: #fff;
  cursor: pointer;
}

/* akhir content */
/* akhir  content dan sidebar*/

/* Awal footer */
footer {
  margin-top: 100px;
  width: 100%;
}
.footer-satu {
  width: 100%;
  height: 250px;
  background-color: #1f283bff;
  display: flex;
  justify-content: space-between;
  color: #fff;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  padding-left: 40px;
  padding-right: 40px;
  box-sizing: border-box;
  border-bottom: 1px solid #2a384aff;
}

footer .logo-footer {
  width: 300px;
}
footer .logo-footer img {
  width: 150px;
}

footer .kategori-footer ul,
.sosial-media ul,
.learn-more ul {
  list-style-type: none;
  padding-left: 0;
  color: #cad0d5ff;
}
footer .kategori-footer ul li,
.sosial-media ul li,
.learn-more ul li {
  margin-bottom: 10px;
}
footer .kategori-footer ul li a,
.sosial-media ul li a,
.learn-more ul li a {
  text-decoration: none;
  color: #fff;
}

footer .footer-dua {
  width: 100%;
  background-color: #1f283bff;
  display: flex;
  justify-content: center;
  align-items: center;
  color: #fff;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  box-sizing: border-box;
}
/* Akhir footer */
/* responsive */
@media only screen and (max-width: 600px) {
  header .login-header {
    display: none;
  }
  header .menu-mobile {
    background-color: #17a2b8;
    width: 60px;
    height: 30px;
    border-radius: 30px;
    display: flex;
    z-index: 8999;
  }
  header .menu-mobile input {
    width: 150%;
    opacity: 0;
    z-index: 99;
  }
  header .menu-mobile p {
    position: absolute;
    top: 15px;
    right: 30px;
    color: #fff;
    z-index: 80;
  }

  nav ul {
    position: absolute;
    right: 0;
    top: -20px;
    width: 60%;
    height: 100vh;
    flex-direction: column;
    align-items: center;
    background-color: #ffffff;
    transform: translateX(100%);
    transition: all 1s;
    opacity: 0;
    color: #ffffff;
    z-index: -1;
  }

  nav ul.nyala {
    transform: translateX(0);
    opacity: 1;
    z-index: 899;
  }
  main .container-landing {
    flex-direction: column;
  }
  main .container-landing .landing-kiri {
    width: 100%;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin-top: 600px;
    padding-left: 20px;
    padding-top: 0;
    letter-spacing: 1px;
    box-sizing: border-box;
  }
  main .container-landing .landing-kanan {
    visibility: hidden;
  }

  .content-sidebar {
    display: flex;
    flex-direction: column;
    box-sizing: border-box;
    padding-left: 10px;
    padding-right: 10px;
    margin-top: 20px;
    box-sizing: border-box;
    scroll-margin-top: 90px;
  }
  .content {
    border: 1px solid #17a2b8;
    flex-grow: 1;
    justify-content: start;
    width: 100%;
    padding: 3px;
    gap: 30px 20px;
    border: none;
  }
  .content .card-book {
    width: 300px;
    height: 120px;
    background-color: #fff;
    display: flex;
  }
  .footer-satu {
    height: 900px;
    flex-direction: column;
  }

  header {
    padding-left: 20px;
    padding-right: 20px;
  }
}
/* akhir responsive */
</style>
<body>
    <body>
        <header>
            <div class="logo-header">
                <img src="../assets/landing-img.png" alt="logo e-perpus" title="E-Perpus Indonesia">
                <h1>PerpusApp</h1>
            </div>
            
            <div class="login-header">Masuk</div>
            <div class="menu-mobile">
                <input type="checkbox" />
                <p>Menu</p>
            </div>
    
        </header>
    
        <main>
            <div class="container-landing">
                <div class="landing-kiri">
                    <p>Mari baca buku dan tingkatkan ilmu</p>
                    <h2>Selamat Datang <br>Di PerpusApp</h2>
                    <p>Yuk, belajar dan membaca!</p>
    
                    <div class="button-landing">
                        <button class="mulai-button"><a href="#buku">Mulai Baca!</a></button>
                        <button class="jelajahi-button"><a href="#buku">Jelajahi</a></button>
                    </div>
                </div>
                <div class="landing-kanan">
                    <img src="assets/landing-img.png" alt="buku landing">
                </div>
            </div>
           
        </main>
    
   
        <script src="js/script.js"></script>
    </body>
</html>




