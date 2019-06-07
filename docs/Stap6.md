#### Stap 6: De Front controller

**Voor de laatste stap heb ik alvast de index.php gemaakt, dit is de Front Controller**  

Deze index.php roept de code aan die jij net opnieuw hebt gestructureerd in de vorige stappen.

Hier zie je dat index.php kijkt naar een $_GET parameter met de naam 'page'.
Vervolgens wordt de juiste controller function aangeroepen.

~~~php
switch ( $_GET['page'] ) {
	case 'homepage':
		homepage();
		break;
	case 'alle-plantjes':
		alle_plantjes();
		break;
}
~~~

De URL's die nu dus werken zijn:
1. `index.php?page=homepage`
2. `index.php?page=alle-plantjes` 

Als het goed is werkt alles nu nog steeds.... **Is dat niet het geval?**

- Het kan zijn dat je in de HTML/PHP bestanden nu nog code hebt staan die niet meer nodig is.
  Haal die weg.
- Als je een foutmelding krijgt: Lees goed en kijk of je snapt wat er fout gaat
- Misschien staat er nog een aanroep naar een function die niet meer nodig is
- Include je misschien een bestand meerdere keren, en is dat niet nodig?
- Volg de code vanaf index.php en kijk of je kunt volgen hoe PHP de code uitvoert.

**Als je stap voor stap de code volgt wordt duidelijk hoe alle code samenwerkt** 

[Bekijk hier nog een overzicht](Stap7-MVC.md) van hoe alles met elkaar samenwerkt in deze MVC structuur.

---
#### Hulplijn

Probeer `index.php?page=homepage` of `index.php?page=alle-plantjes` op te roepen op de website.

---
Verdere uitdagingen die ik aan jou laat:
- De database configuratie in een los configuratie bestand zetten en deze inladen in je database connectie functie.
- Paginering toevoegen op de pagina met alle plantjes.
- Een detail pagina toevoegen zodat je op een plantje kunt doorklikken. Dit zou nu met deze structuur snel mogelijk moeten zijn.
- Een pagina toevoegen waar je zelf plantjes kunt toevoegen aan de database.