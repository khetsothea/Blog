<div id="page">
    
  Još jedna aplikacija koja ima za cilj da demonstrira moj skromni trud. <br /> <br />
  Na prvi pogled deluje jednostavna ali poseduje funkcionalnosti koje je još više pojednostavljuju, a ujedno i komplikuju.<br /> 
  Za razliku od telefonskog imenika, prilikom učitavanja strana poziva se tzv. multiple view u svakoj f-ji u controller-u. Veoma velika pogodnost. <br /> 
  <br /> Drugo, koristi html helper. Napravio sam funkciju menu() pomoću koje se kreiraju stavke menija, a sve to kroz jednostavan niz. <br />Da pojednostavim... Kroz menu_view.php 
  pišem ime stavke u meniju, npr. о_meni, o_blogu, kontakt itd. a dobijam kao izlaz O MENI, O BLOGU, KONTAKT... Dakle vrši se konverzija iz malih u velika slova kao i zamena znaka "_" sa razmakom.<br /> 
  Kroz routes.php je iskazana putanja svake stavke menija, odnosno putanja do odgovarajuće f-je u controller-u, čime je postignuta automatizacija
  u radu i manje opterećenje servera. <br /> <br /> 
  
  Jedino ulogovan korisnik može kreirati postove, dok ih ostali korisnici mogu samo čitati.<br /> 
  Parametri za login:  <b>Username: admin   Password: admin </b> --->>> dakle razrađene su sesije... <br /> <br /> 
  Koristi i pagination.php library u kome su neka osnovna podešavanja u prikazu postova.<br /> 
  BTW, pagination.php koristi tzv. <b>public property CI</b> koji koristi sve biblioteke koje su mu dostupne, a sve to bez extendovanja. Zašto? 
  <br />
  Zato što je napravljen objekat koji instancira sve klase iz CI jezgra, a pozvan je po referenci.
  <br /><br />
  Pored toga, od biblioteka još koristi form_validation, email, session...
  
  
  
</div>