# API pro Obchodný register SR (ORSR)
PHP třída, která umožňuje získat data z [orsr.sk](http://orsr.sk/ "Obchodný register SR") pomocí API, které poskytuje [eWay-CRM](https://www.eway-crm.com/ "eWay-CRM").

## Hledání podle obchodního názvu

```php
$orsr = new ORSR();

// Získání informací o společnosti pomocí jména
$info = $orsr->getCompaniesByName("S4B s.r.o.")[0]->Zaznam;
```

## Hledání podle identifikačního čísla (IČ)

```php
$orsr = new ORSR();

// Získání informací o společnosti pomocí IČ
$info = $orsr->getCompaniesByID("46 507 345")[0]->Zaznam;
```

Výsledek volání vypadá takto:

```
SimpleXMLElement Object
(
    [DenZapisu] => 20.01.2012
    [ICO] => 46 507 345
    [KonanieMenomSpolocnosti] => SimpleXMLElement Object
        (
        )

    [ObchodneMeno] => S4B s.r.o.
    [Oddiel] => Sro 78615/B
    [PravniForma] => Spoločnosť s ručením obmedzeným
    [PredmetCinnosti] => vedenie účtovníctva kúpa tovaru za účelom jeho predaja konečnému spotrebiteľovi (maloobchod) v rozsahu voľnej živnosti kúpa tovaru za účelom jeho predaja iným prevádzkovateľom živnosti (veľkoobchod) v rozsahu voľnej živnosti sprostredkovateľská činnosť v oblasti služieb poskytovanie softwaru- predaj hotových programov na základe zmluvy s autorom administratívne služby poradenská a konzultačná činnosť v oblasti výpočtovej techniky, elektroniky, informatiky v rozsahu v voľnej živnosti reklamné činnosti prenájom nehnuteľností spojený s inými než základnými službami spojenými s prenájmom zabezpečovanie služieb potrebných na prevádzku objektov, zariadení a budov v rozsahu voľných živností podnikateľské poradenstvo v rozsahu voľnej živnosti organizovanie kurzov, školení a seminárov spracovanie grafických návrhov správa počítačových sietí vykonávanie mimoškolskej vzdelávacej činnosti služby súvisiace s počítačovým spracovaním údajov sprostredkovateľská činnosť v oblasti stavebníctva Sprostredkovateľská činnosť v oblasti obchodu a výroby Čistiace a upratovacie práce Uskutočňovanie stavieb a ich zmien Údržba motorových vozidiel bez zásahu do motorickej časti vozidla Marketingové služby, prieskum trhu a verejnej mienky Faktoring a forfaiting Poskytovanie služieb v poľnohospodárstve a záhradníctve Správa a údržba bytového a nebytového fondu v rozsahu voľných živností Poskytovanie služieb rýchleho občerstvenia v spojení s predajom na priamu konzumáciu Prevádzkovanie čistiarne a práčovne Nákladná cestná doprava vykonávaná vozidlami s celkovou hmotnosťou do 3,5 t vrátane 
prípojného vozidla Poskytovanie služieb osobného charakteru Prevádzkovanie výdajne stravy Poskytovanie obslužných služieb pri kultúrnych a iných spoločenských podujatiach Podnikanie v oblasti nakladania s iným ako nebezpečným odpadom Výroba a hutnícke spracovanie kovov Výroba a opracovanie jednoduchých výrobkov z kovu Oprava osobných potrieb a potrieb pre domácnosť Výroba strojov a zariadení pre všeobecné účely Vydavateľská činnosť, polygrafická výroba a knihárske práce Prípravné práce k realizácii stavby Dokončovacie stavebné práce pri realizácii exteriérov a interiérov Vykonávanie odbornej prípravy na úseku prevencie závažných priemyselných havárií Prenájom hnuteľných vecí Inžinierska činnosť, stavebné cenárstvo, projektovanie a konštruovanie elektrických 
zariadení Výroba skla, výrobkov zo skla a ich úprava Skladovanie a pomocné činnosti v doprave Služby súvisiace s produkciou filmov, videozáznamov a zvukových nahrávok Prevádzkovanie kultúrnych, spoločenských a zábavných zariadení Výroba potravinárskych výrobkov Výroba nápojov
    [Sidlo] => Učiteľská 15/9138 Bratislava 821 06
    [Spolocnici] => Ing. Dušan Daniš Rajecká 32/8686 Bratislava 821 07 StarStreet Group, a.s. Primátorská 296/38 Praha 8, Libeň 180 00 Česká republika
    [StatutarnyOrgan] => konateľ Ing. Dušan Daniš Rajecká 32/8686 Bratislava 821 07 Vznik funkcie: 24.02.2015
    [VyskaVkladuKazdehoSpolecnika] => Ing. Dušan Daniš Vklad: 2 500 EUR ( peňažný vklad ) Splatené: 2 500 EUR StarStreet Group, a.s. Vklad: 2 500 EUR ( peňažný vklad ) Splatené: 2 500 EUR
    [ZakladniImanie] => 5 000 EUR Rozsah splatenia: 5 000 EUR
)
```

Firma [S4B s.r.o.](https://www.s4b.sk/ "S4B s.r.o.") je obchodní partner [eWay-CRM](https://www.eway-crm.com/ "eWay-CRM") na Slovensku.