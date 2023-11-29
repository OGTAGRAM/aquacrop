<!DOCTYPE HTML> 
<html>
	<head>
		<title>AquaCropNet.</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        <link rel="icon" type="image/png" href="images/iconn.png">
        <link href='https://fonts.googleapis.com/css2?family=Montserrat&family=Philosopher:wght@700&display=swap' rel='stylesheet'>
        <style>
            /* General styling */
body {
  font-family: sans-serif;
  margin: 0;
  padding: 0;
}

h1 {
  font-size: 40px;
  font-weight: bold;
  margin-bottom: 0;
}

main {
  padding: 20px;
}

img {
  width: 600px;
  height: auto;
  margin-right: 20px;
  float: left;
}
.grid-container {
            display: grid;
            grid-auto-columns: 70%;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            gap: 20px; /* Ruang antar elemen */
        }

        .grid-item {
            border: 1px solid #ccc;
            padding: 20px;
            justify-content: center;
        }
.ror{
    max-width: 100%;
    height: auto;
    display: block;
    margin: auto;
}
.comment-container {
    display: flex;
    padding: 10px;
    border: 1px solid #ddd;
    margin: 10px;
    background-color: #fff;
}

.avatar img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
}

.comment-content {
    margin-left: 10px;
}

.user-info {
    display: flex;
    justify-content: space-between;
}

.username {
    font-weight: bold;
}

.timestamp {
    color: #888;
    font-size: 12px;
}
.message-form {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    border-radius: 8px;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 5px;
}

input,
textarea {
    margin-bottom: 10px;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.comment-text {
    margin-top: 5px;
} 
.ikan {
                    width:400px;
                    justify-content:center;
                    height: 200px;
                    padding: 8px;
                    margin-bottom: 10px;
                    border: 1px solid #ddd;
                    border-radius: 10px;
                    resize: vertical;
                    box-sizing: border-box;
}
.hero {
                cursor: pointer;
                text-decoration: none;
                list-style: none;
                display: inline-block;
                font-size: 0.8em;
                font-weight: 600;
                height: 3.5em;
                padding: 0 1.75em;
                text-align: center;
                text-decoration: none;
                text-transform: uppercase;
}
        </style>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="/" class="logo"><span style="font-family:'Montserrat', sans-serif; color:white;">Aqua</span><span style="font-family:'Montserrat', sans-serif; color:#4F6F52">Cropnet.</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="/">Home</a></li>
							<li><a href="/kabar">Kabar</a></li>
							<li><a href="/kiat">Kiat</a></li>
							<li><a href="/vidio">VIdeo</a></li>
              <li><a href="/store">Store</a></li>
						</ul>
						<ul class="actions stacked">
							<li><a href="{{ route('register') }}" class="button primary fit">Register</a></li>
							<li><a href="{{ route('login') }}" class="button fit">Log In</a></li>
						</ul>
					</nav>


                <!-- isi -->
                <div class="hero">
                  <a href="/">Home</a>
                  <strong>/</strong>
                  <a href="/vidio">Video</a>
              </div>
                <div class="grid-container">
                  <div class="grid-item">
                <main>
                <header>
                    <h1 style="text-align: center">Metode sri organik</h1>
                  </header>
                  <br>
                  <div class="ror">
                    <iframe width="560" height="315" src="https://youtu.be/HyW2UEycQcQ?si=s8e3I5__QxOe-H9U" frameborder="0" allowfullscreen></iframe>
                    <br>
                    <p>
                        Setelah proses pertama dan kedua, selanjutnya tahapan persiapan lahan. Lahan diolah dengan prinsip penghematan sumber daya seperti air dan pupuk. Meski input produksi diaplikasikan secara minimal, hasil yang akan didapatkan tetap tinggi. Ini salah satu kelebihan dari metode SRI.
                    </p>
                    </div>
                  </div>
                  <div style="text-align: center;
                  justify-content: center;
                  padding: 20px">
                  <footer id="footer">
                    <div class="inner">
                      <ul class="icons">
                        <li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
                        <li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
                      </ul>
                    </div>
                    </div>
                  </footer>
            <footer id="footer">
              <div class="inner">
              <ul class="copyright">
                <li>&copy; Calois</li><li>Make By: <a href="https://www.instagram.com/wafiian03_/">Aiman</a></li>
              </ul>
              </div>
            </footer>
                  </main>
                  

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>