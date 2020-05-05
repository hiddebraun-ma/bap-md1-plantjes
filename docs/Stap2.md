#### Stap 2: Dubbele database connectie oplossen
- Maak een bestand *functions.php*.
- Zorg dat dit bestand via een require wordt ingeladen *bovenaan* in de twee PHP bestanden.
- Zet nu de code voor de database verbinding in de dbConnect() function, dit heb je al vaker gedaan.
- Zorg dat de verbinding met een *return* wordt teruggegeven door de function.
- Gebruik nu de function die je hebt gemaakt i.p.v. de oude code.

Klaar voor de volgende stap? Ga naar **[stap 3](Stap3.md).**

---
#### Hulplijn

In `functions.php` staat dus nu zoiets als:

```php
function dbConnect() {
 
 // hier komt de database verbindings code

 return $pdo;

}
```
