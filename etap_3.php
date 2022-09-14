<!DOCTYPE html>
<html lang="pl-PL">

<head>

<title> Sondaż wyborczy - poglądy Polaków</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
body{
font-family:"Times New Roman", Times, serif;
background-color:lightblue;
padding:5px;
text-align:center;
}
p{
font-size:26px;
}
.div1
{
width:100%;
margin:35px;
padding:10px;
border:1px solid black;
box-sizing: border-box;
}

</style>
</head>

<body>
<?php
if(isset ($_POST["płeć"])){
	$płeć=$_POST["płeć"];
	$wiek=$_POST["wiek"];
	$wykształcenie=$_POST["wykształcenie"];
	$zameldowanie=$_POST["zameldowanie"];
	$Dochód=$_POST["Dochód"];
	$glos_w_poprzednich_wyborach=$_POST["glos_w_poprzednich_wyborach"];
	$ocena=$_POST["ocena"];
	$ocena2=$_POST["ocena2"];
	$wybory=$_POST["wybory"];
	$votewhy=$_POST["votewhy"];
	$votewhy2=$_POST["votewhy2"];
	
	if( empty($płeć)|| empty($wiek) || empty($wykształcenie) || empty($zameldowanie) || empty($Dochód) || empty ($glos_w_poprzednich_wyborach) || empty ($ocena) || empty($ocena2) || empty($wybory) || empty($votewhy) || empty($votewhy2)){
		echo"wypełnij wszystkie pola";
	} else{
		$conn = new mysqli("localhost","root","","piba");
		
		$odp=$conn->query("INSERT INTO piba(płeć,wiek,wykształcenie,zameldowanie,Dochód,glos_w_poprzednich_wyborach,ocena,ocena2,wybory,votewhy,votewhy2) VALUES ('$płeć','$wiek','$wykształcenie','$zameldowanie','$Dochód','$głos_w_poprzednich_wyborach','$ocena','$ocena2','$wybory','$votewhy','$votewhy2') ");
		
		if($odp){
			echo"Dodano odpowiedzi";
		} else{
			echo"Nie wysłano odpowiedzi";
		}
		
		
		$conn->close();
	}
	
}
?>

<h3>

Postanowiliśmy zbadać poglądy polityczne Polaków, ich zadowolenie z obecnej władzy w związku 
z obecnie panującą sytuacją na świecie oraz ewentualne chęci jej zmiany, ponieważ polityka
jest jedną z dziedzin, którymi warto się chociaż pobieżnie interesować, a takie badanie
da możliwość sprawdzić podstawowe informacje o obywatelach i ich poglądach i ewentualnie
postawić prostą prognozę na wybory parlamentarne w roku 2023.
</h3>
<a>
<img src="https://www.wroclaw.pl/portal/files/news/30516/wybory-2020.jpg"</a>
<h1>Sondaż wyborczy - Wybory parlamentarne w Polsce (2023)</h1>
<div class="div1">
<p>1. Płeć</p>
<form metod="POST" action="etap_3.php">
<input type="radio" name="płeć" value="1" id="mezczyzna" >
<label for="mezczyzna"> mężczyzna</label><br>
<input type="radio" name="płeć" value="2" id="kobieta" >
<label for="kobieta">kobieta </label><br>
</div>
<div class="div1">
<p>2. Wiek</p>
<input type="radio" name="wiek" value="1" id="przedział_1">
<label for ="18-24"> 18-26</label><br>
<input type="radio" name="wiek" value="2" id="przedział_2">
<label for ="27-50"> 27-35</label><br>
<input type="radio" name="wiek" value="3" id="przedział_3">
<label for ="36-50"> 36-50</label><br>
<input type="radio" name="wiek" value="4" id="przedział_4">
<label for ="51-65"> 51-65</label><br>
<input type="radio" name="wiek" value="5" id="przedział_5">
<label for ="powyżej 65"> powyżej 65</label><br>
</div>
<div class="div1">
<p>3. Wykształcenie</p>
<input type="radio" name="wykształcenie" value="1" id="podstawowe">
<label for ="podstawowe"> podstawowe</label><br>
<input type="radio" name="wykształcenie" value="1" id="zawodowe">
<label for ="zawodowe"> zawodowe</label><br>
<input type="radio" name="wykształcenie" value="1" id="średnie">
<label for ="średnie"> średnie</label><br>
<input type="radio" name="wykształcenie" value="1" id="wyższe">
<label for ="wyższe"> wyższe</label><br>
</div>
<div class="div1">
<p>4. Miejsce zamieszkania</p>
<input type="radio" name="zameldowanie" value="1" id="wieś">
<label for ="wieś"> wieś</label><br>
<input type="radio" name="zameldowanie" value="2" id="miasto_1">
<label for ="miasto liczące do 20 tyś. mieszkańców"> miasto liczące do 20 tyś. mieszkańców</label><br>
<input type="radio" name="zameldowanie" value="3" id="miasto_2">
<label for ="miasto liczące od 21 do 50 tyś. mieszkańców"> miasto liczące od 21 do 50 tyś. mieszkańców</label><br>
<input type="radio" name="zameldowanie" value="4" id="miasto_3">
<label for ="miasto liczące od 51 do 200 tyś. mieszkańców"> miasto liczące od 51 do 200 tyś. mieszkańców</label><br>
<input type="radio" name="zameldowanie" value="5" id="miasto_4">
<label for ="miasto liczące powyżej 200 tyś. mieszkańców"> miasto liczące powyżej 200 tyś. mieszkańców</label><br>
</div>
<div class="div1">
<p>5. Dochód brutto</p>
<select name="Dochód">
<option selected>0-500</option>
<option>500-1500</option>
<option>1500-3000</option>
<option>3000-4500</option>
<option>4500-6000</option>
    <option>6000-8000</option>
<option>powyżej 8000</option>
</select><br>
</div>
<div class="div1">
<label for="glos_w_poprzednich_wyborach"><p>6. Na kandydata której z wymienionych partii głosował/a Pan/Pani w poprzednich wyborach parlamentarnych?</p></label><br>
<select id="glos_w_poprzednich_wyborach"name="glos_w_poprzednich_wyborach"  multiple>
<option value="psl"> Polskie Stronnictwo Ludowe</option>
<option value="pis">Prawo i Sprawiedliwość </option>
<option value="sld"> Sojusz Lewicy Demokratycznej </option>
<option value="konfed"> Konfederacja Wolność i Niepodległość </option>
<option value="kkw"> KKW Koalicja Obywatelska</option>
<option value="brak"> Nie głosowałem/am</option>
<option value="inne"> Inne </option>
</select><br>
   
</value>
<input type="submit" value="Zaznacz głos">
</div>
<div class="div1">
<p>7. Czy ocenia Pan/Pani pozytywnie działania partii obecnie rządzącej biorąc pod uwagę kryzysową sytuację w kraju i za granicą?</p>
<input type="radio" name="ocena" value="1" id="ocena_1">
<label for ="zdecydowanie tak"> zdecydowanie tak</label><br>
<input type="radio" name="ocena" value="2" id="ocena_2">
<label for ="raczej tak"> raczej tak</label><br>
<input type="radio" name="ocena" value="3" id="ocena_3">
<label for ="trudno powiedzieć"> trudno powiedzieć</label><br>
<input type="radio" name="ocena" value="4" id="ocena_4">
<label for ="raczej nie"> raczej nie</label><br>
<input type="radio" name="ocena" value="5" id="ocena_5">
<label for ="zdecydowanie nie"> zdecydowanie nie</label><br>
</div>
<div class="div1">
<p>8. Jak ocenia Pan/Pani ostatnie 7 lat rządów PiS względem gospodarczym?</p>
<input type="radio" name="ocena2" value="1" id="ocena_1">
<label for ="bardzo_dobrze"> bardzo dobrze</label><br>
<input type="radio" name="ocena2" value="2" id="ocena_2">
<label for ="dobrze"> dobrze</label><br>
<input type="radio" name="ocena2" value="3" id="ocena_3">
<label for ="trudno_powiedzieć"> trudno powiedzieć</label><br>
<input type="radio" name="ocena2" value="4" id="ocena_4">
<label for ="źle"> źle</label><br>
<input type="radio" name="ocena2" value="5" id="ocena_5">
<label for ="bardzo_źle"> bardzo źle</label><br>
</div>
<div class="div1">
<p>9. Na kandydata której partii zagłosuje Pan/Pani w nadchodzących wyborach parlamentarnych?</p>
<input type="checkbox" name="wybory" value="1" id="psl">
<label for="psl"> Polskie Stronnictwo Ludowe</label><br>
<input type="checkbox" name="wybory" value="2" id="pis">
<label for="pis">Prawo i Sprawiedliwość </label><br>
<input type="checkbox" name="wybory" value="3" id="sld">
<label for="sld"> Sojusz Lewicy Demokratycznej </label><br>
<input type="checkbox" name="wybory" value="4" id="kwin" >
<label for="kwin"> Konfederacja Wolność i Niepodległość </label><br>
<input type="checkbox" name="wybory" value="5" id="koiz" >
<label for="koiz"> KKW Koalicja Obywatelska PO .N iPL Zieloni*</label><br>
<input type="checkbox" name="wybory" value="6" id="brak">
<label for="brak"> Nie będę głosować</label><br>
<input type="checkbox" name="wybory" value="7" id="inne">
<label for="inne"> Inne</label><br>

</div>
<div class="div1">
<p>10. Dlaczego decyduje się Pan/Pani zagłosować na kandydata tej partii?</p>
<textarea name="votewhy" rows="10" cols="100">
</textarea>
</div>
<div class="div1">
<p>11. Jakie Pana/Pani zdaniem wyzwania będą stać przed kolejnym wybranym rządem?</p>
<textarea name="votewhy" rows="10" cols="100">
</textarea>
</form>

</div>
<input type="submit" value="wyślij">
</body>
</html>

