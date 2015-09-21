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
     ];

    $cols = 7;
    $rows = 7;
    $max = 151;
?>

  <body>
<?php
    $row = 0;
    $col = 0;
    for ($i=0; $i<$max; $i++) {
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
        echo "<td><img src='http://media.bisafans.de/6af690d/pokemon/artwork/$code.png' width='300' />\n";
        echo "<span class='number'>#$code</span>\n";
        echo "<span class='name'>".$list[$i + 1]."</span></td>";
    }
?>
</table>
</body>
</html>
