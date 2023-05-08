<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/index.css" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
	
	<title>Projekt Beta</title>
</head>

<body>
  <script src="app.js"></script>
	<div class="container">
		<div class="baner">
			<li><a href="#page-1">Kenji</a></li>
			<li><a href="#page-2">Hiro</a></li>
			<li><a href="#page-3">Historia</a></li>
			<li><a href="#statyski">Statystyki</a></li>
			<!--<li><a href="#">Opcje</a></li> -->
      <a href="rejestracja.php" class="btn">Zarejestruj</a>
       <a href="logowanie.php" class="btn">Zaloguj</a>
		</div>
		<div class="glowny" id="page-1">
			<div class="text">
				<h1>Kenji</h1>
				<p style="color:white;">Informacje na temat Samuraji</p>
				<div class="LewyBTN"> <a href="#page-3"> Dowiedz sie Wiecej</a> </div>
			</div>

			<div class="down-arrow">
				<img src="down-arrow.svg" alt="down" width="60px" height="60px">
			</div>
		</div>

		<div class="glowny2" id="page-2">
			<div class="text2">
				<h1 style="color:white;">Hiro</h1>
				<p style="color:black;">Informacje na temat Samuraji</p>
				<div class="LewyBTN"> <a href="#page-3"> Dowiedz sie Wiecej</a> </div>
				
			</div>
		</div>
		<div class="glowny3" id="page-3">
				<div class="text3">
					<h2>Historia Samuraji<h2>
						<p>Dwaj samurajowie stali naprzeciw siebie na polu walki, obaj ubrani w tradycyjne stroje bojowe i trzymając w dłoniach miecze.

Pierwszy z nich był wysoki i potężny, a jego twarz była spokojna i opanowana. Drugi zaś był nieco niższy, ale za to szybszy i bardziej zwinny.

Obaj zaczęli się powoli krążyć, szukając słabych punktów u przeciwnika. W końcu pierwszy z samurajów zdecydował się na atak i z całych sił uderzył mieczem w drugiego. Ten jednak szybko uniknął ciosu i odpowiedział uderzeniem w nogę przeciwnika.

Walczyli długo i zacięcie, a ich miecze rozbrzmiewały echem po całym polu bitwy. W końcu jednak jeden z nich upadł na ziemię, a drugi stanął nad nim triumfalnie trzymając miecz w dłoni.

Zwycięski samuraj ukłonił się przeciwnikowi i pomógł mu wstać. Obaj byli zmęczeni i poranieni po walce, ale obaj też byli dumni ze swojej walki i godności, którą pokazali na polu bitwy.	</p>
				</div>

		</div>

			<div class="statyski" id="statyski">
				<div class="lewe-statyski">
					
				<div class="skill-bars">
				<h1>Statystyki Kenji</h1>
    <div class="bar">
      <div class="info">
        <span>Attack Damage</span>
      </div>
      <div class="progress-line attack">
        <span></span>
      </div>
    </div>
    <div class="bar">
      <div class="info">
        <span>Zwinność</span>
      </div>
      <div class="progress-line zwinnosc">
        <span></span>
      </div>
    </div>
    <div class="bar">
      <div class="info">
        <span>Predkość ataku</span>
      </div>
      <div class="progress-line speed">
        <span></span>
      </div>
    </div>
  </div>
				</div>

				<div class="prawe-statyski">
				<div class="skill-bars2">
				<h1>Statystyki Hiro</h1>
    <div class="bar2">
      <div class="info2">
        <span>Attack Damage</span>
      </div>
      <div class="progress-line attack2">
        <span></span>
      </div>
    </div>
    <div class="bar2">
      <div class="info2">
        <span>Zwinność</span>
      </div>
      <div class="progress-line zwinnosc2">
        <span></span>
      </div>
    </div>
    <div class="bar2">
      <div class="info2">
        <span>Predkość ataku</span>
      </div>
      <div class="progress-line speed2">
        <span></span>
      </div>
    </div>
  </div>
				</div>
			</div>

			<div class="content1">
    </div>
    <footer>
      <div class="main-content">
        <div class="left box">
          <h2 style ="color:white;">O Nas</h2>
          <div class="content">
            <p >Strona i Gra powstala w celu aby nauczyc sie projektowania stron internetowych tworzenia stron internetowych interfejsu uzytkownika oraz nauki javascript Jezyka PHP oraz baz danych MYSQL.</p>
          </div>
        </div>
        <div class="center box">
          <h2 style ="color:white;">Address</h2>
          <div class="content">
            <div class="place">
              <span class="fas fa-map-marker-alt"></span>
              <span class="text">Warszawa  ul gen Józefa Zajączka 7
              <i class="uil uil-map-marker-info" style="font-size:24px ; color:white"></i>
              </span>
            </div>
            <div class="phone">
              <span class="fas fa-phone-alt"></span>
              <span class="text">+48-507321332
              <i class="uil uil-phone-alt" style="font-size:24px; color:white;"></i>

              </span>
            </div>
            <div class="email">
              <span class="fas fa-envelope"></span>
              <span class="text">KacperOdziemczyk@example.com

              <i class="uil uil-envelope-edit" style="font-size:24px; color:white;" ></i>
              </span>
            </div>
          </div>
        </div>
        <div class="right box">
          <h2 style ="color:white;" >Zaloguj sie odrazu do gry</h2>
          <div class="content">
		  <form action="logowanie2.php" method="POST">
              <div class="email">
                <div class="text">Nazwa Uzytkownika</div>
                <input type="text" name="username" placeholder="Nazwa Konta" required>
              </div>
              <div class="msg">
                <div class="text">Haslo</div>
                <input type="password" name="password" placeholder="Wpisz Hasło" required>
              </div>
              <div class="btn">
			      <input type="submit" placeholder="Wyślij" value="Zaloguj sie"  required>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="bottom">
        <center>
          <span class="credit">Strona zostala stworzona przez Kacper Odziemczyk | </span>
          <span class="far fa-copyright"></span><span> &copy; Utworzona 26 grudnia 2022</span>
        </center>
      </div>
    </footer>
</body>
</html>