#### Stap 5: Het Model en de View aanroepen in de Controller (MVC!)
- Maak een bestand *controllers.php*.
- Zet hierin twee functions *homepage()* en *alle_plantjes()*.
- **Verplaats** nu de aanroep van de functions waar je de gegevens ophaalt (in de twee pagina's met HTML) naar deze twee functions.
- In de function *homepage()* de code die *get_latest_plants()* aanroept.
- In de function *alle_plantjes()* de code die *get_all_plants()* aanroept.
- Zet NA deze code een *include* die het juiste PHP bestand (met de HTML) inlaadt. 

**LET OP: Vanaf nu werken de oude URL's (even) niet meer!**  
* Dit komt omdat de code die verbinding maakt en gegevens ophaalt niet meer in de view staat.
* Dit ga je oplossen in Stap 6

Dus door naar **[stap 6](Stap6.md)!**

---
#### Hulplijn
In `controllers.php` staat iets als:

```php
function homepage(){
  $pdo = dbConnect();
  $plantjes = /* welke function uit het model roep je hier aan? */
  // Hier komt de include van je PHP/HTML bestand
}

function alle_plantjes(){
  $pdo = dbConnect();
  $plantjes = /* welke function uit het model roep je hier aan? */ 
  // Hier komt de include van je PHP/HTML bestand
}
```