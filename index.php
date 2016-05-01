<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <style type="text/css">
      body {
      color: black;
      font-size: 20Pt;
      font-family: "Times New Roman", Georgia, Serif;
      text-align: center;
      }
      .number {
      color: gray;
      font-size: 0.8em;
      font-family: "Times New Roman", Georgia, Serif;
      text-align: center;
      display: block;
      }
      .name {
      color: black;
      font-size: 2em;
      font-family: "Times New Roman", Georgia, Serif;
      text-align: center;
      display: block;
      margin-bottom: 1em;
      }      

      .pagebreak { page-break-before: always; } // page-break-after works, as well
 
    </style>
  </head>

<?php
    $list = [
        1 => "Bisasam",
        2 => "Bisaknosp",
        3 => "Bisaflor",
        4 => "Glumanda",
        5 => "Glutexo",
        6 => "Glurak",
        7 => "Schiggy",
        8 => "Schillok",
        9 => "Turtok",
       10 => "Raupy",
       11 => "Safcon",
       12 => "Smettbo",
       13 => "Hornliu",
       14 => "Kokuna",
       15 => "Bibor",
       16 => "Taubsi",
       17 => "Tauboga",
       18 => "Tauboss",
       19 => "Rattfratz",
       20 => "Rattikarl",
       21 => "Habitak",
       22 => "Ibitak",
       23 => "Rettan",
       24 => "Arbok",
       25 => "Pikachu",
       26 => "Raichu",
       27 => "Sandan",
       28 => "Sandamer",
       29 => "Nidoran ♀",
       30 => "Nidorina",
       31 => "Nidoqueen",
       32 => "Nidoran ♂",
       33 => "Nidorino",
       34 => "Nidoking",
       35 => "Piepi",
       36 => "Pixi",
       37 => "Vulpix",
       38 => "Vulnona",
       39 => "Pummeluff",
       40 => "Knuddeluff",
       41 => "Zubat",
       42 => "Golbat",
       43 => "Myrapla",
       44 => "Duflor",
       45 => "Giflor",
       46 => "Paras",
       47 => "Parasek",
       48 => "Bluzuk",
       49 => "Omot",
       50 => "Digda",
       51 => "Digdri",
       52 => "Mauzi",
       53 => "Snobilikat",
       54 => "Enton",
       55 => "Entoron",
       56 => "Menki",
       57 => "Rasaff",
       58 => "Fukano",
       59 => "Arkani",
       60 => "Quapsel",
       61 => "Quaputzi",
       62 => "Quappo",
       63 => "Abra",
       64 => "Kadabra",
       65 => "Simsala",
       66 => "Machollo",
       67 => "Maschock",
       68 => "Machomei",
       69 => "Knofensa",
       70 => "Ultrigaria",
       71 => "Sarzenia",
       72 => "Tentacha",
       73 => "Tentoxa",
       74 => "Kleinstein",
       75 => "Georok",
       76 => "Geowaz",
       77 => "Ponita",
       78 => "Gallopa",
       79 => "Flegmon",
       80 => "Lahmus",
       81 => "Magnetilo",
       82 => "Magneton",
       83 => "Porenta",
       84 => "Dodu",
       85 => "Dodri",
       86 => "Jurob",
       87 => "Jugong",
       88 => "Sleima",
       89 => "Sleimok",
       90 => "Muschas",
       91 => "Austos",
       92 => "Nebulak",
       93 => "Alpollo",
       94 => "Gengar",
       95 => "Onix",
       96 => "Traumato",
       97 => "Hypno",
       98 => "Krabby",
       99 => "Kingler",
      100 => "Voltobal",
      101 => "Lektrobal",
      102 => "Owei",
      103 => "Kokowei",
      104 => "Tragosso",
      105 => "Knogga",
      106 => "Kicklee",
      107 => "Nockchan",
      108 => "Schlurp",
      109 => "Smogon",
      110 => "Smogmog",
      111 => "Rihorn",
      112 => "Rizeros",
      113 => "Chaneira",
      114 => "Tangela",
      115 => "Kangama",
      116 => "Seeper",
      117 => "Seemon",
      118 => "Goldini",
      119 => "Golking",
      120 => "Sterndu",
      121 => "Starmie",
      122 => "Pantimos",
      123 => "Sichlor",
      124 => "Rossana",
      125 => "Elektek",
      126 => "Magmar",
      127 => "Pinsir",
      128 => "Tauros",
      129 => "Karpador",
      130 => "Garados",
      131 => "Lapras",
      132 => "Ditto",
      133 => "Evoli",
      134 => "Aquana",
      135 => "Blitza",
      136 => "Flamara",
      137 => "Porygon",
      138 => "Amonitas",
      139 => "Amoroso",
      140 => "Kabuto",
      141 => "Kabutops",
      142 => "Aerodactyl",
      143 => "Relaxo",
      144 => "Arktos",
      145 => "Zapdos",
      146 => "Lavados",
      147 => "Dratini",
      148 => "Dragonir",
      149 => "Dragoran",
      150 => "Mewtu",
      151 => "Mew",
      152 => "Endivie",
      153 => "Lorblatt",
      154 => "Meganie",
      155 => "Feurigel",
      156 => "Igelavar",
      157 => "Tornupto",
      158 => "Karnimani",
      159 => "Tyracroc",
      160 => "Impergator",
      161 => "Wiesor",
      162 => "Wiesenior",
      163 => "Hoothoot",
      164 => "Noctuh",
      165 => "Ledyba",
      166 => "Ledian",
      167 => "Webarak",
      168 => "Ariados",
      169 => "Iksbat",
      170 => "Lampi",
      171 => "Lanturn",
      172 => "Pichu",
      173 => "Pii",
      174 => "Fluffeluff",
      175 => "Togepi",
      176 => "Togetic",
      177 => "Natu",
      178 => "Xatu",
      179 => "Voltilamm",
      180 => "Waaty",
      181 => "Ampharos",
      182 => "Blubella",
      183 => "Marill",
      184 => "Azumarill",
      185 => "Mogelbaum",
      186 => "Quaxo",
      187 => "Hoppspross",
      188 => "Hubelupf",
      189 => "Papungha",
      190 => "Griffel",
      191 => "Sonnkern",
      192 => "Sonnflora",
      193 => "Yanma",
      194 => "Felino",
      195 => "Morlord",
      196 => "Psiana",
      197 => "Nachtara",
      198 => "Kramurx",
      199 => "Laschoking",
      200 => "Traunfugil",
      201 => "Icognito",
      202 => "Woingenau",
      203 => "Girafarig",
      204 => "Tannza",
      205 => "Forstellka",
      206 => "Dummisel",
      207 => "Skorgla",
      208 => "Stahlos",
      209 => "Snubbull",
      210 => "Granbull",
      211 => "Baldorfish",
      212 => "Scherox",
      213 => "Pottrott",
      214 => "Skaraborn",
      215 => "Sniebel",
      216 => "Teddiursa",
      217 => "Ursaring",
      218 => "Schneckmag",
      219 => "Magcargo",
      220 => "Quiekel",
      221 => "Keifel",
      222 => "Corasonn",
      223 => "Remoraid",
      224 => "Octillery",
      225 => "Botogel",
      226 => "Mantax",
      227 => "Panzaeron",
      228 => "Hunduster",
      229 => "Hundemon",
      230 => "Seedraking",
      231 => "Phanpy",
      232 => "Donphan",
      233 => "Porygon2",
      234 => "Damhirplex",
      235 => "Farbeagle",
      236 => "Rabauz",
      237 => "Kapoera",
      238 => "Kussilla",
      239 => "Elekid",
      240 => "Magby",
      241 => "Miltank",
      242 => "Heiteira",
      243 => "Raikou",
      244 => "Entei",
      245 => "Suicune",
      246 => "Larvitar",
      247 => "Pupitar",
      248 => "Despotar",
      249 => "Lugia",
      250 => "Ho-Oh",
      251 => "Celebi",
      252 => "Geckarbor",
      253 => "Reptain",
      254 => "Gewaldro",
      255 => "Flemmli",
      256 => "Jungglut",
      257 => "Lohgock",
      258 => "Hydropi",
      259 => "Moorabbel",
      260 => "Sumpex",
      261 => "Fiffyen",
      262 => "Magnayen",
      263 => "Zigzachs",
      264 => "Geradaks",
      265 => "Waumpel",
      266 => "Schaloko",
      267 => "Papinella",
      268 => "Panekon",
      269 => "Pudox",
      270 => "Loturzel",
      271 => "Lombrero",
      272 => "Kappalores",
      273 => "Samurzel",
      274 => "Blanas",
      275 => "Tengulist",
      276 => "Schwalbini",
      277 => "Schwalboss",
      278 => "Wingull",
      279 => "Pelipper",
      280 => "Trasla",
      281 => "Kirlia",
      282 => "Guardevoir",
      283 => "Gehweiher",
      284 => "Maskeregen",
      285 => "Knilz",
      286 => "Kapilz",
      287 => "Bummelz",
      288 => "Muntier",
      289 => "Letarking",
      290 => "Nincada",
      291 => "Ninjask",
      292 => "Ninjatom",
      293 => "Flurmel",
      294 => "Krakeelo",
      295 => "Krawumms",
      296 => "Makuhita",
      297 => "Hariyama",
      298 => "Azurill",
      299 => "Nasgnet",
      300 => "Eneco",
      301 => "Enekoro",
      302 => "Zobiris",
      303 => "Flunkifer",
      304 => "Stollunior",
      305 => "Stollrak",
      306 => "Stolloss",
      307 => "Meditie",
      308 => "Meditalis",
      309 => "Frizelbliz",
      310 => "Voltenso",
      311 => "Plusle",
      312 => "Minun",
      313 => "Volbeat",
      314 => "Illumise",
      315 => "Roselia",
      316 => "Schluppuck",
      317 => "Schlukwech",
      318 => "Kanivanha",
      319 => "Tohaido",
      320 => "Wailmer",
      321 => "Wailord",
      322 => "Camaub",
      323 => "Camerupt",
      324 => "Qurtel",
      325 => "Spoink",
      326 => "Groink",
      327 => "Pandir",
      328 => "Knacklion",
      329 => "Vibrava",
      330 => "Libelldra",
      331 => "Tuska",
      332 => "Noktuska",
      333 => "Wablu",
      334 => "Altaria",
      335 => "Sengo",
      336 => "Vipitis",
      337 => "Lunastein",
      338 => "Sonnfel",
      339 => "Schmerbe",
      340 => "Welsar",
      341 => "Krebscorps",
      342 => "Krebutack",
      343 => "Puppance",
      344 => "Lepumentas",
      345 => "Liliep",
      346 => "Wielie",
      347 => "Anorith",
      348 => "Armaldo",
      349 => "Barschwa",
      350 => "Milotic",
      351 => "Formeo",
      352 => "Kecleon",
      353 => "Shuppet",
      354 => "Banette",
      355 => "Zwirrlicht",
      356 => "Zwirrklop",
      357 => "Tropius",
      358 => "Palimpalim",
      359 => "Absol",
      360 => "Isso",
      361 => "Schneppke",
      362 => "Firnontor",
      363 => "Seemops",
      364 => "Seejong",
      365 => "Walraisa",
      366 => "Perlu",
      367 => "Aalabyss",
      368 => "Saganabyss",
      369 => "Relicanth",
      370 => "Liebiskus",
      371 => "Kindwurm",
      372 => "Draschel",
      373 => "Brutalanda",
      374 => "Tanhel",
      375 => "Metang",
      376 => "Metagross",
      377 => "Regirock",
      378 => "Regice",
      379 => "Registeel",
      380 => "Latias",
      381 => "Latios",
      382 => "Kyogre",
      383 => "Groudon",
      384 => "Rayquaza",
      385 => "Jirachi",
      386 => "Deoxys",
      387 => "Chelast",
      388 => "Chelcarain",
      389 => "Chelterrar",
      390 => "Panflam",
      391 => "Panpyro",
      392 => "Panferno",
      393 => "Plinfa",
      394 => "Pliprin",
      395 => "Impoleon",
      396 => "Staralili",
      397 => "Staravia",
      398 => "Staraptor",
      399 => "Bidiza",
      400 => "Bidifas",
      401 => "Zirpurze",
      402 => "Zirpeise",
      403 => "Sheinux",
      404 => "Luxio",
      405 => "Luxtra",
      406 => "Knospi",
      407 => "Roserade",
      408 => "Koknodon",
      409 => "Rameidon",
      410 => "Schilterus",
      411 => "Bollterus",
      412 => "Burmy",
      413 => "Burmadame",
      414 => "Moterpel",
      415 => "Wadribie",
      416 => "Honweisel",
      417 => "Pachirisu",
      418 => "Bamelin",
      419 => "Bojelin",
      420 => "Kikugi",
      421 => "Kinoso",
      422 => "Schalellos",
      423 => "Gastrodon",
      424 => "Ambidiffel",
      425 => "Driftlon",
      426 => "Drifzepeli",
      427 => "Haspiror",
      428 => "Schlapor",
      429 => "Traunmagil",
      430 => "Kramshef",
      431 => "Charmian",
      432 => "Shnurgarst",
      433 => "Klingplim",
      434 => "Skunkapuh",
      435 => "Skuntank",
      436 => "Bronzel",
      437 => "Bronzong",
      438 => "Mobai",
      439 => "Pantimimi",
      440 => "Wonneira",
      441 => "Plaudagei",
      442 => "Kryppuk",
      443 => "Kaumalat",
      444 => "Knarksel",
      445 => "Knakrack",
      446 => "Mampfaxo",
      447 => "Riolu",
      448 => "Lucario",
      449 => "Hippopotas",
      450 => "Hippoterus",
      451 => "Pionskora",
      452 => "Piondragi",
      453 => "Glibunkel",
      454 => "Toxiquak",
      455 => "Venuflibis",
      456 => "Finneon",
      457 => "Lumineon",
      458 => "Mantirps",
      459 => "Shnebedeck",
      460 => "Rexblisar",
      461 => "Snibunna",
      462 => "Magnezone",
      463 => "Schlurplek",
      464 => "Rihornior",
      465 => "Tangoloss",
      466 => "Elevoltek",
      467 => "Magbrant",
      468 => "Togekiss",
      469 => "Yanmega",
      470 => "Folipurba",
      471 => "Glaziola",
      472 => "Skorgro",
      473 => "Mamutel",
      474 => "Porygon-Z",
      475 => "Galagladi",
      476 => "Voluminas",
      477 => "Zwirrfinst",
      478 => "Frosdedje",
      479 => "Rotom",
      480 => "Selfe",
      481 => "Vesprit",
      482 => "Tobutz",
      483 => "Dialga",
      484 => "Palkia",
      485 => "Heatran",
      486 => "Regigigas",
      487 => "Giratina",
      488 => "Cresselia",
      489 => "Phione",
      490 => "Manaphy",
      491 => "Darkrai",
      492 => "Shaymin",
      493 => "Arceus",
      494 => "Victini",
      495 => "Serpifeu",
      496 => "Efoserp",
      497 => "Serpiroyal",
      498 => "Floink",
      499 => "Ferkokel",
      500 => "Flambirex",
      501 => "Ottaro",
      502 => "Zwottronin",
      503 => "Admurai",
      504 => "Nagelotz",
      505 => "Kukmarda",
      506 => "Yorkleff",
      507 => "Terribark",
      508 => "Bissbark",
      509 => "Felilou",
      510 => "Kleoparda",
      511 => "Vegimak",
      512 => "Vegichita",
      513 => "Grillmak",
      514 => "Grillchita",
      515 => "Sodamak",
      516 => "Sodachita",
      517 => "Somniam",
      518 => "Somnivora",
      519 => "Dusselgurr",
      520 => "Navitaub",
      521 => "Fasasnob",
      522 => "Elezeba",
      523 => "Zebritz",
      524 => "Kiesling",
      525 => "Sedimantur",
      526 => "Brockoloss",
      527 => "Fleknoil",
      528 => "Fletiamo",
      529 => "Rotomurf",
      530 => "Stalobor",
      531 => "Ohrdoch",
      532 => "Praktibalk",
      533 => "Strepoli",
      534 => "Meistagrif",
      535 => "Schallquap",
      536 => "Mebrana",
      537 => "Branawarz",
      538 => "Jiutesto",
      539 => "Karadonis",
      540 => "Strawickl",
      541 => "Folikon",
      542 => "Matrifol",
      543 => "Toxiped",
      544 => "Rollum",
      545 => "Cerapendra",
      546 => "Waumboll",
      547 => "Elfun",
      548 => "Lilminip",
      549 => "Dressella",
      550 => "Barschuft",
      551 => "Ganovil",
      552 => "Rokkaiman",
      553 => "Rabigator",
      554 => "Flampion",
      555 => "Flampivian",
      556 => "Maracamba",
      557 => "Lithomith",
      558 => "Castellith",
      559 => "Zurrokex",
      560 => "Irokex",
      561 => "Symvolara",
      562 => "Makabaja",
      563 => "Echnatoll",
      564 => "Galapaflos",
      565 => "Karippas",
      566 => "Flapteryx",
      567 => "Aeropteryx",
      568 => "Unratütox",
      569 => "Deponitox",
      570 => "Zorua",
      571 => "Zoroark",
      572 => "Picochilla",
      573 => "Chillabell",
      574 => "Mollimorba",
      575 => "Hypnomorba",
      576 => "Morbitesse",
      577 => "Monozyto",
      578 => "Mitodos",
      579 => "Zytomega",
      580 => "Piccolente",
      581 => "Swaroness",
      582 => "Gelatini",
      583 => "Gelatroppo",
      584 => "Gelatwino",
      585 => "Sesokitz",
      586 => "Kronjuwild",
      587 => "Emolga",
      588 => "Laukaps",
      589 => "Cavalanzas",
      590 => "Tarnpignon",
      591 => "Hutsassa",
      592 => "Quabbel",
      593 => "Apoquallyp",
      594 => "Mamolida",
      595 => "Wattzapf",
      596 => "Voltula",
      597 => "Kastadur",
      598 => "Tentantel",
      599 => "Klikk",
      600 => "Kliklak",
      601 => "Klikdiklak",
      602 => "Zapplardin",
      603 => "Zapplalek",
      604 => "Zapplarang",
      605 => "Pygraulon",
      606 => "Megalon",
      607 => "Lichtel",
      608 => "Laternecto",
      609 => "Skelabra",
      610 => "Milza",
      611 => "Sharfax",
      612 => "Maxax",
      613 => "Petznief",
      614 => "Siberio",
      615 => "Frigometri",
      616 => "Schnuthelm",
      617 => "Hydragil",
      618 => "Flunschlik",
      619 => "Lin-Fu",
      620 => "Wie-Shu",
      621 => "Shardrago",
      622 => "Golbit",
      623 => "Golgantes",
      624 => "Gladiantri",
      625 => "Caesurio",
      626 => "Bisofank",
      627 => "Geronimatz",
      628 => "Washakwil",
      629 => "Skallyk",
      630 => "Grypheldis",
      631 => "Furnifraß",
      632 => "Fermicula",
      633 => "Kapuno",
      634 => "Duodino",
      635 => "Trikephalo",
      636 => "Ignivor",
      637 => "Ramoth",
      638 => "Kobalium",
      639 => "Terrakium",
      640 => "Viridium",
      641 => "Boreos",
      642 => "Voltolos",
      643 => "Reshiram",
      644 => "Zekrom",
      645 => "Demeteros",
      646 => "Kyurem",
      647 => "Keldeo",
      648 => "Meloetta",
      649 => "Genesect",
      650 => "Igamaro",
      651 => "Igastarnish",
      652 => "Brigaron",
      653 => "Fynx",
      654 => "Rutena",
      655 => "Fennexis",
      656 => "Froxy",
      657 => "Amphizel",
      658 => "Quajutsu",
      659 => "Scoppel",
      660 => "Grebbit",
      661 => "Dartiri",
      662 => "Dartignis",
      663 => "Fiaro",
      664 => "Purmel",
      665 => "Puponcho",
      666 => "Vivillon",
      667 => "Leufeo",
      668 => "Pyroleo",
      669 => "Flabébé",
      670 => "Floette",
      671 => "Florges",
      672 => "Mähikel",
      673 => "Chevrumm",
      674 => "Pam-Pam",
      675 => "Pandagro",
      676 => "Coiffwaff",
      677 => "Psiau",
      678 => "Psiaugon",
      679 => "Gramokles",
      680 => "Duokles",
      681 => "Durengard",
      682 => "Parfi",
      683 => "Parfinesse",
      684 => "Flauschling",
      685 => "Sabbaione",
      686 => "Iscalar",
      687 => "Calamanero",
      688 => "Bithora",
      689 => "Thanathora",
      690 => "Algitt",
      691 => "Tandrak",
      692 => "Scampisto",
      693 => "Wummer",
      694 => "Eguana",
      695 => "Elezard",
      696 => "Balgoras",
      697 => "Monargoras",
      698 => "Amarino",
      699 => "Amagarga",
      700 => "Feelinara",
      701 => "Resladero",
      702 => "Dedenne",
      703 => "Rocara",
      704 => "Viscora",
      705 => "Viscargot",
      706 => "Viscogon",
      707 => "Clavion",
      708 => "Paragoni",
      709 => "Trombork",
      710 => "Irrbis",
      711 => "Pumpdjinn",
      712 => "Arktip",
      713 => "Arktilas",
      714 => "eF-eM",
      715 => "UHaFnir",
      716 => "Xerneas",
      717 => "Yveltal",
      718 => "Zygarde",
      719 => "Diancie",
      720 => "Hoopa",
      721 => "Volcanion"
     ];

    $cols = 11;
    $rows = 12;
    $min = 605;
    $max = 721;
?>

  <body>
<?php
    $row = 0;
    $col = 0;
    for ($i=$min; $i<$max; $i++) {
        $col = $i % $cols;
	    if ($col == 0 && $i > 0) {
            echo "</tr>\n";
            $row++;
        }
        if ($col == 0) {
            if ($row >= $rows) {
                echo "</table>\n";
                echo "<span class='pagebreak'> </span>\n";
                $row = 0;
            }
            echo "<table width='100%' border='0'>\n";
            echo "<tr>\n";
        }

        $code = $i + 1;
		if ($i <9) {
		    $code = "00".$code;
	    }
		else if ($i <99) {
		    $code = "0".$code;
	    }
      $height = "";
      $picUri = "http://media.bisafans.de/6af690d/pokemon/artwork/$code.png";
      if ($code == 650)
      {
        $picUri = "http://media.bisafans.de/40de4fe/pokemon/gen6/xy/normal/650.png";
        $height = "height='300'";
      }
      if ($code == 651)
      {
        $picUri = "http://media.bisafans.de/40de4fe/pokemon/gen6/xy/normal/651.png";
        $height = "height='300'";
      }
        echo "<td><img src='$picUri' width='300' $height/>\n";
        echo "<span class='number'>#$code</span>\n";
        echo "<span class='name'>".$list[$i + 1]."</span></td>";
    }
?>
</table>
</body>
</html>
