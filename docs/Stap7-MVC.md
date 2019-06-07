#### Stap 7: Overzicht de MVC structuur die je hebt gemaakt


#### Model
In `model.php` heb je nu alle *Model* functions gezet.
Oftewel: alle functions die gegevens ophalen 
`get_latest_plants()` en `get_all_plants()`

Gegevens opslaan of verwijderen kun je ook zo gaan doen. Dan krijg je misschien een function:
`delete_plant($plant_id)` of `save_plant($plant_data)`?

#### View
Dit zijn de templates (met HTML en PHP)
- `homepage.php`
- `alle_plantjes.php`

Deze laten ALLEEN gegevens zien op het scherm. Ze maken geen database verbindingen en halen geen gegevens op uit de database. Deze gegevens krijgen ze van de **controller**.   

#### Controller
De controller functions handelen elke keer **één** pagina of **actie** af van de gebruiker.
De controller roept functions aan in de *Model* laag om gegevens op te halen.
Deze gegevens geeft de controller aan de view. Het werk van de controller is dan klaar.
De view kan het nu weergeven. 


