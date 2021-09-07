<!-- nome repo: php-oop-2
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online;
ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà dove necessario;
ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l’utente dello shop inserisce una carta di credito...
$c = new CreditCard(..); 
$user->insertCreditCard($c); 
BONUS: Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta).
1. creiamo l'eshop
2. creiamo diversi prodotti
3. aggiungiamoli all'eshop
4. creiamo l'utente normale
5. creiamo l'utente premium
6. inseriamo le carte di credito per ciascun utente
7. l'utente normale acquista un prodotto
8. l'utente premium acquista un prodotto -->

<?php

require_once('eshop.php');
require_once('product.php');
require_once('user.php');
require_once('credit-card.php');

$boolazon = new Eshop('Boolazon', []);

$smartphone = new TechProduct('smartphone', 314.31, 5, true, false);
$laptop = new TechProduct('laptop', 567.89, 11, false, true);

$lipstick = new BeautyProduct('lipstick', 7.10, 45, true, 'red');
$nailpaint = new BeautyProduct('nailpaint', 5.45, 18, false, 'blue');

$laptop->addDescription('Lorem');

$lipstick->addImage('https://asdfg');

$boolazon->addProduct($smartphone);
$boolazon->addProduct($laptop);
$boolazon->addProduct($lipstick);
$boolazon->addProduct($nailpaint);

echo $boolazon->getProducts();

echo '<br />';

$boolazon->removeProduct($laptop);

echo $boolazon->getProducts();