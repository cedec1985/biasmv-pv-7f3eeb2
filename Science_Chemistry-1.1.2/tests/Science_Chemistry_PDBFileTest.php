<?php
require_once "PHPUnit/Framework/TestCase.php";
require_once "Science/Chemistry/PDBFile.php";

class Science_Chemistry_PDBFileTest extends PHPUnit_Framework_TestCase {

    public function test() {
        $file = new Science_Chemistry_PDBFile(dirname(__FILE__) . "/small.pdb");
        //$file = new Science_Chemistry_PDBFile("1hca.pdb");

        ob_start();
        for ($j=0; $j < $file->num_macromolecules; $j++) {
	        $mol =& $file->macromolecules[$j];
    	    echo $mol->toCML("model", ($j + 1));
        }
        $result = ob_get_clean();

        ob_start();
?>
<molecule title="model" id="1">
<list title="molecules">
 <molecule title="TRP" id="1">
  <string title="name">TRP</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">8.5330 -0.7480 10.8820</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">7.6610 -1.6750 11.6200</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">6.7920 -2.5000 10.6650</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">6.5450 -2.1380 9.5060</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">6.8140 -0.9310 12.6200</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">5.7170 -0.0530 12.1650</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD1</string>
    <coordinate3 builtin="xyz3">5.7830 1.2690 11.8130</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CD2</string>
    <coordinate3 builtin="xyz3">4.3280 -0.4210 12.0540</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">NE1</string>
    <coordinate3 builtin="xyz3">4.5360 1.7430 11.4810</coordinate3>
   </atom>
   <atom title="atom" id="10">
    <string title="name">CE2</string>
    <coordinate3 builtin="xyz3">3.6270 0.7250 11.6160</coordinate3>
   </atom>
   <atom title="atom" id="11">
    <string title="name">CE3</string>
    <coordinate3 builtin="xyz3">3.6340 -1.6010 12.2870</coordinate3>
   </atom>
   <atom title="atom" id="12">
    <string title="name">CZ2</string>
    <coordinate3 builtin="xyz3">2.2600 0.7160 11.4150</coordinate3>
   </atom>
   <atom title="atom" id="13">
    <string title="name">CZ3</string>
    <coordinate3 builtin="xyz3">2.2750 -1.6190 12.0690</coordinate3>
   </atom>
   <atom title="atom" id="14">
    <string title="name">CH2</string>
    <coordinate3 builtin="xyz3">1.5880 -0.4820 11.6460</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="GLY" id="2">
  <string title="name">GLY</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">6.3390 -3.5990 11.2240</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">5.4780 -4.5660 10.5170</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">5.1210 -5.6460 11.5470</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">5.1390 -5.3410 12.7470</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="TYR" id="3">
  <string title="name">TYR</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">4.8570 -6.8240 11.0400</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">4.4720 -7.9780 11.8470</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">5.3130 -9.1920 11.4790</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">5.0030 -10.3160 11.8730</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">2.9650 -8.2950 11.6580</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">2.0900 -7.1220 12.0340</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD1</string>
    <coordinate3 builtin="xyz3">1.6570 -6.9940 13.3560</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CD2</string>
    <coordinate3 builtin="xyz3">1.7160 -6.1390 11.1130</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">CE1</string>
    <coordinate3 builtin="xyz3">0.8560 -5.9310 13.7480</coordinate3>
   </atom>
   <atom title="atom" id="10">
    <string title="name">CE2</string>
    <coordinate3 builtin="xyz3">0.9330 -5.0580 11.4960</coordinate3>
   </atom>
   <atom title="atom" id="11">
    <string title="name">CZ</string>
    <coordinate3 builtin="xyz3">0.4960 -4.9620 12.8230</coordinate3>
   </atom>
   <atom title="atom" id="12">
    <string title="name">OH</string>
    <coordinate3 builtin="xyz3">-0.2890 -3.9360 13.2630</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="GLY" id="4">
  <string title="name">GLY</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">6.3490 -8.9070 10.7260</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">7.3120 -9.9020 10.2420</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">8.3160 -10.2150 11.3480</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">8.2990 -9.6010 12.4280</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="LYS" id="5">
  <string title="name">LYS</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">9.1750 -11.1570 11.0440</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">10.2020 -11.6530 11.9550</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">11.1880 -10.6400 12.4740</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">11.5620 -10.7470 13.6630</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">10.9750 -12.7980 11.2490</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">11.9300 -13.5300 12.2100</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD</string>
    <coordinate3 builtin="xyz3">11.1470 -14.0260 13.4150</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CE</string>
    <coordinate3 builtin="xyz3">11.9850 -14.8510 14.3760</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">NZ</string>
    <coordinate3 builtin="xyz3">11.1060 -15.3590 15.4740</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="HIS" id="6">
  <string title="name">HIS</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">11.6200 -9.7070 11.6430</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">12.6170 -8.7040 12.0260</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">12.1040 -7.3050 12.2730</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">12.9290 -6.4050 12.5540</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">13.7340 -8.5610 10.9240</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">14.5460 -9.8200 10.8390</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">ND1</string>
    <coordinate3 builtin="xyz3">14.2870 -10.8480 9.9840</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CD2</string>
    <coordinate3 builtin="xyz3">15.6250 -10.1840 11.5690</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">CE1</string>
    <coordinate3 builtin="xyz3">15.1760 -11.8080 10.1800</coordinate3>
   </atom>
   <atom title="atom" id="10">
    <string title="name">NE2</string>
    <coordinate3 builtin="xyz3">16.0140 -11.4260 11.1350</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="ASN" id="7">
  <string title="name">ASN</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">10.8120 -7.1240 12.1510</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">10.1840 -5.8070 12.3290</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">8.8950 -5.9450 13.1330</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">8.1700 -4.9510 13.3110</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">10.0010 -5.1360 10.9700</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">9.1570 -5.8760 9.9790</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">OD1</string>
    <coordinate3 builtin="xyz3">8.7930 -7.0530 10.1230</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">ND2</string>
    <coordinate3 builtin="xyz3">8.8170 -5.1700 8.8970</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="GLY" id="8">
  <string title="name">GLY</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">8.6660 -7.1560 13.5870</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">7.5040 -7.5030 14.3930</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">7.3750 -6.6530 15.6570</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">8.2700 -5.8720 16.0060</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="PRO" id="9">
  <string title="name">PRO</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">6.2430 -6.8380 16.3260</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">5.9270 -6.1210 17.5590</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">7.0210 -6.1330 18.6110</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">7.1110 -5.2030 19.4540</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">4.6420 -6.7820 18.0680</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">3.9990 -7.3930 16.8400</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD</string>
    <coordinate3 builtin="xyz3">5.1550 -7.7610 15.9290</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="GLU" id="10">
  <string title="name">GLU</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">7.8390 -7.1620 18.5910</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">8.9380 -7.3270 19.5590</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">10.0770 -6.3540 19.3220</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">10.9770 -6.2480 20.1790</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">9.4770 -8.7430 19.5670</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">10.0170 -9.4110 18.3400</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD</string>
    <coordinate3 builtin="xyz3">9.1470 -10.0270 17.2980</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">OE1</string>
    <coordinate3 builtin="xyz3">7.9290 -10.1590 17.5700</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">OE2</string>
    <coordinate3 builtin="xyz3">9.6310 -10.4110 16.2220</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="HIS" id="11">
  <string title="name">HIS</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">10.0560 -5.6370 18.2240</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">11.0760 -4.6660 17.8480</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">10.5470 -3.2360 17.9010</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">11.3680 -2.2960 17.7840</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">11.6180 -4.8710 16.4120</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">12.4870 -6.0590 16.1770</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">ND1</string>
    <coordinate3 builtin="xyz3">13.8610 -6.0070 16.0740</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CD2</string>
    <coordinate3 builtin="xyz3">12.1620 -7.3700 16.0310</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">CE1</string>
    <coordinate3 builtin="xyz3">14.3330 -7.2240 15.8780</coordinate3>
   </atom>
   <atom title="atom" id="10">
    <string title="name">NE2</string>
    <coordinate3 builtin="xyz3">13.3320 -8.0660 15.8490</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="TRP" id="12">
  <string title="name">TRP</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">9.2440 -3.0790 18.0400</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">8.6740 -1.7090 18.0220</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">9.2930 -0.7830 19.0570</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">9.3680 0.4290 18.7680</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">7.1480 -1.6930 18.0670</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">6.4900 -2.4340 16.9490</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD1</string>
    <coordinate3 builtin="xyz3">7.0660 -2.8980 15.8010</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CD2</string>
    <coordinate3 builtin="xyz3">5.0860 -2.7250 16.8370</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">NE1</string>
    <coordinate3 builtin="xyz3">6.1250 -3.5120 15.0170</coordinate3>
   </atom>
   <atom title="atom" id="10">
    <string title="name">CE2</string>
    <coordinate3 builtin="xyz3">4.9030 -3.4100 15.6170</coordinate3>
   </atom>
   <atom title="atom" id="11">
    <string title="name">CE3</string>
    <coordinate3 builtin="xyz3">3.9900 -2.4850 17.6610</coordinate3>
   </atom>
   <atom title="atom" id="12">
    <string title="name">CZ2</string>
    <coordinate3 builtin="xyz3">3.6560 -3.8570 15.1950</coordinate3>
   </atom>
   <atom title="atom" id="13">
    <string title="name">CZ3</string>
    <coordinate3 builtin="xyz3">2.7510 -2.9350 17.2490</coordinate3>
   </atom>
   <atom title="atom" id="14">
    <string title="name">CH2</string>
    <coordinate3 builtin="xyz3">2.5850 -3.6010 16.0440</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="HIS" id="13">
  <string title="name">HIS</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">9.7190 -1.3060 20.1810</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">10.3100 -0.5070 21.2570</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">11.4690 0.3820 20.8260</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">11.6090 1.4680 21.4350</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">10.7600 -1.3620 22.4620</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">11.9300 -2.2680 22.3060</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">ND1</string>
    <coordinate3 builtin="xyz3">13.1940 -1.9830 22.7790</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CD2</string>
    <coordinate3 builtin="xyz3">12.0270 -3.4990 21.7360</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">CE1</string>
    <coordinate3 builtin="xyz3">13.9980 -3.0030 22.5030</coordinate3>
   </atom>
   <atom title="atom" id="10">
    <string title="name">NE2</string>
    <coordinate3 builtin="xyz3">13.3200 -3.9300 21.8690</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="LYS" id="14">
  <string title="name">LYS</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">12.2670 -0.0140 19.8580</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">13.4430 0.7600 19.4300</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">13.0960 2.0570 18.7330</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">13.8750 3.0280 18.7920</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">14.3610 -0.0840 18.5460</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">14.8980 -1.3290 19.2590</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD</string>
    <coordinate3 builtin="xyz3">15.5100 -2.3340 18.3120</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CE</string>
    <coordinate3 builtin="xyz3">14.5050 -3.1580 17.5520</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">NZ</string>
    <coordinate3 builtin="xyz3">15.1480 -4.0870 16.5840</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="ASP" id="15">
  <string title="name">ASP</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">11.9480 2.0780 18.0890</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">11.5060 3.2980 17.3710</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">10.4580 4.0490 18.1810</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">10.3790 5.2750 18.1080</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">11.0620 2.8870 15.9630</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">12.2460 2.8390 15.0090</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">OD1</string>
    <coordinate3 builtin="xyz3">12.9970 3.8300 14.9480</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">OD2</string>
    <coordinate3 builtin="xyz3">12.3720 1.8040 14.3430</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="PHE" id="16">
  <string title="name">PHE</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">9.6840 3.2720 18.9180</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">8.5950 3.8190 19.7650</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">8.7830 3.2450 21.1740</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">8.1820 2.2110 21.5030</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">7.2260 3.5070 19.1520</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">7.1780 3.7660 17.6610</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD1</string>
    <coordinate3 builtin="xyz3">7.5280 2.7580 16.7730</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CD2</string>
    <coordinate3 builtin="xyz3">6.8160 5.0260 17.1870</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">CE1</string>
    <coordinate3 builtin="xyz3">7.4920 2.9930 15.3870</coordinate3>
   </atom>
   <atom title="atom" id="10">
    <string title="name">CE2</string>
    <coordinate3 builtin="xyz3">6.7760 5.2810 15.8180</coordinate3>
   </atom>
   <atom title="atom" id="11">
    <string title="name">CZ</string>
    <coordinate3 builtin="xyz3">7.1180 4.2650 14.9110</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="PRO" id="17">
  <string title="name">PRO</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">9.6100 3.9290 21.9420</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">9.9130 3.4990 23.3210</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">8.6810 3.4460 24.1970</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">8.7720 2.9020 25.3120</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">11.0020 4.4390 23.8020</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">10.9500 5.6220 22.8890</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD</string>
    <coordinate3 builtin="xyz3">10.3410 5.1540 21.5830</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="ILE" id="18">
  <string title="name">ILE</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">7.5490 3.9550 23.7180</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">6.3210 3.9310 24.5360</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">5.7300 2.5150 24.5950</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">4.8710 2.2120 25.4400</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">5.2820 5.0080 24.1040</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG1</string>
    <coordinate3 builtin="xyz3">4.2760 5.1570 25.2720</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CG2</string>
    <coordinate3 builtin="xyz3">4.6170 4.6350 22.7570</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CD1</string>
    <coordinate3 builtin="xyz3">3.5370 6.4990 25.3970</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="ALA" id="19">
  <string title="name">ALA</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">6.2270 1.6770 23.7030</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">5.8600 0.2760 23.5980</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">5.9420 -0.4220 24.9590</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">5.2420 -1.4210 25.2240</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">6.8140 -0.4070 22.6230</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="LYS" id="20">
  <string title="name">LYS</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">6.8240 0.1180 25.7880</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">7.0930 -0.4180 27.1260</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">6.5150 0.4640 28.2120</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">6.9420 0.3980 29.3910</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">8.6170 -0.5560 27.3400</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">9.3030 -1.4370 26.2930</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD</string>
    <coordinate3 builtin="xyz3">10.5940 -2.0750 26.8330</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CE</string>
    <coordinate3 builtin="xyz3">10.8140 -3.4050 26.1010</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">NZ</string>
    <coordinate3 builtin="xyz3">11.6590 -4.3380 26.9160</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="GLY" id="21">
  <string title="name">GLY</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">5.5730 1.2950 27.8300</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">4.8720 2.2680 28.6320</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">3.9890 1.6820 29.7170</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">4.0060 0.4820 29.9940</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="GLU" id="22">
  <string title="name">GLU</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">3.2050 2.5600 30.3220</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">2.2880 2.2510 31.4070</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">0.8940 1.8160 31.0340</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">0.3200 1.0450 31.8560</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">2.1450 3.4950 32.3440</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">3.4210 3.7220 33.2090</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD</string>
    <coordinate3 builtin="xyz3">3.8270 2.4450 33.8970</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">OE1</string>
    <coordinate3 builtin="xyz3">3.2710 2.0170 34.9000</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">OE2</string>
    <coordinate3 builtin="xyz3">4.7700 1.8490 33.3350</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="ARG" id="23">
  <string title="name">ARG</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">0.3670 2.2580 29.9120</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-0.9970 1.8660 29.4950</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-1.0760 1.4750 28.0230</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-1.7510 2.0960 27.1860</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-2.0030 2.9860 29.8350</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-1.5920 4.3680 29.3850</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD</string>
    <coordinate3 builtin="xyz3">-2.6170 5.4250 29.5380</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">NE</string>
    <coordinate3 builtin="xyz3">-3.7680 5.3460 28.6520</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">CZ</string>
    <coordinate3 builtin="xyz3">-4.7030 6.3050 28.5750</coordinate3>
   </atom>
   <atom title="atom" id="10">
    <string title="name">NH1</string>
    <coordinate3 builtin="xyz3">-4.6880 7.3940 29.3330</coordinate3>
   </atom>
   <atom title="atom" id="11">
    <string title="name">NH2</string>
    <coordinate3 builtin="xyz3">-5.7200 6.2070 27.7080</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="GLN" id="24">
  <string title="name">GLN</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-0.3590 0.4200 27.6880</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-0.2540 -0.1390 26.3440</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-1.3610 -1.1580 26.0860</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-1.8100 -1.8330 27.0180</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">1.1410 -0.7290 26.1130</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">2.1870 0.3590 25.8960</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD</string>
    <coordinate3 builtin="xyz3">2.1040 0.9820 24.5300</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">OE1</string>
    <coordinate3 builtin="xyz3">2.3480 0.3310 23.5110</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">NE2</string>
    <coordinate3 builtin="xyz3">1.7390 2.2700 24.5180</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="SER" id="25">
  <string title="name">SER</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-1.7600 -1.2390 24.8150</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-2.8280 -2.2020 24.4390</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-2.2950 -3.1810 23.4000</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-1.2960 -2.8790 22.7170</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-4.0570 -1.4780 23.9220</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">OG</string>
    <coordinate3 builtin="xyz3">-4.4690 -0.4090 24.7360</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="PRO" id="26">
  <string title="name">PRO</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-2.9360 -4.3030 23.2410</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-4.1210 -4.7770 23.9710</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-3.7240 -5.4710 25.2600</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-2.5400 -5.4520 25.6450</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-4.7520 -5.7430 22.9710</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-3.5120 -6.4630 22.4640</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD</string>
    <coordinate3 builtin="xyz3">-2.5220 -5.3110 22.2400</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="VAL" id="27">
  <string title="name">VAL</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-4.7040 -6.0970 25.8940</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-4.4950 -6.8160 27.1490</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-5.4060 -8.0480 27.1540</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-6.1840 -8.2650 26.2030</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-4.7290 -5.9400 28.3990</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG1</string>
    <coordinate3 builtin="xyz3">-3.9710 -4.6170 28.4080</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CG2</string>
    <coordinate3 builtin="xyz3">-6.2040 -5.6680 28.6600</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="ASP" id="28">
  <string title="name">ASP</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-5.2410 -8.7950 28.2310</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-6.0800 -9.9960 28.4410</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-7.1790 -9.4850 29.3960</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-6.8570 -8.7510 30.3500</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-5.3360 -11.2020 28.9390</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-6.2300 -12.3920 29.2060</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">OD1</string>
    <coordinate3 builtin="xyz3">-7.0060 -12.7990 28.3040</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">OD2</string>
    <coordinate3 builtin="xyz3">-6.1740 -12.9580 30.3170</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="ILE" id="29">
  <string title="name">ILE</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-8.3970 -9.8480 29.0870</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-9.5180 -9.4270 29.9450</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-9.8900 -10.6590 30.7870</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-10.4570 -11.6370 30.3300</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-10.7010 -8.7520 29.2050</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG1</string>
    <coordinate3 builtin="xyz3">-10.3060 -7.3140 28.7900</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CG2</string>
    <coordinate3 builtin="xyz3">-12.0030 -8.7570 30.0560</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CD1</string>
    <coordinate3 builtin="xyz3">-10.7530 -6.9040 27.3590</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="ASP" id="30">
  <string title="name">ASP</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-9.4560 -10.5070 32.0320</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-9.6940 -11.4920 33.0930</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-11.1100 -11.1170 33.5650</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-11.2670 -10.0710 34.2250</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-8.6130 -11.4230 34.1560</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-8.7230 -12.5300 35.1820</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">OD1</string>
    <coordinate3 builtin="xyz3">-9.8130 -13.1430 35.1910</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">OD2</string>
    <coordinate3 builtin="xyz3">-7.7970 -12.8100 35.9640</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="THR" id="31">
  <string title="name">THR</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-12.0460 -11.9270 33.1990</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-13.4690 -11.7450 33.4970</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-13.8230 -11.9060 34.9580</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-14.7930 -11.2630 35.4390</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-14.2520 -12.7350 32.5420</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">OG1</string>
    <coordinate3 builtin="xyz3">-13.9700 -14.0680 33.0570</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CG2</string>
    <coordinate3 builtin="xyz3">-13.7960 -12.5490 31.0840</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="HIS" id="32">
  <string title="name">HIS</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-13.0670 -12.7280 35.6510</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-13.2810 -12.9770 37.0930</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-12.6640 -11.8370 37.8820</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-13.1600 -11.4860 38.9550</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-12.7800 -14.3590 37.5520</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-13.5620 -15.4240 36.8240</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">ND1</string>
    <coordinate3 builtin="xyz3">-13.0610 -16.1930 35.7990</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CD2</string>
    <coordinate3 builtin="xyz3">-14.8560 -15.7890 36.9990</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">CE1</string>
    <coordinate3 builtin="xyz3">-14.0160 -17.0140 35.3910</coordinate3>
   </atom>
   <atom title="atom" id="10">
    <string title="name">NE2</string>
    <coordinate3 builtin="xyz3">-15.1050 -16.7960 36.0930</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="THR" id="33">
  <string title="name">THR</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-11.6370 -11.2420 37.3230</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-10.9120 -10.1070 37.8960</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-11.5420 -8.7590 37.5810</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-11.4110 -7.8290 38.3940</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-9.4020 -10.1330 37.4220</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">OG1</string>
    <coordinate3 builtin="xyz3">-8.8330 -11.3280 38.0400</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CG2</string>
    <coordinate3 builtin="xyz3">-8.5910 -8.8970 37.7740</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="ALA" id="34">
  <string title="name">ALA</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-12.1750 -8.6620 36.4140</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-12.8200 -7.4160 35.9700</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-13.8630 -7.0210 37.0270</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-14.5810 -7.8450 37.6070</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-13.3870 -7.5250 34.5740</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="LYS" id="35">
  <string title="name">LYS</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-13.8990 -5.7340 37.2610</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-14.7720 -5.1220 38.2590</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-16.0450 -4.5400 37.6940</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-16.0030 -3.5960 36.8880</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-13.9600 -4.0290 38.9670</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-14.3570 -3.7770 40.4180</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD</string>
    <coordinate3 builtin="xyz3">-15.7020 -3.0790 40.5280</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CE</string>
    <coordinate3 builtin="xyz3">-15.9810 -2.6340 41.9550</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">NZ</string>
    <coordinate3 builtin="xyz3">-17.3900 -2.1730 42.0640</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="TYR" id="36">
  <string title="name">TYR</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-17.1660 -5.0840 38.1380</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-18.4850 -4.5960 37.7350</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-18.7100 -3.2230 38.3870</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-18.8150 -3.1020 39.6210</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-19.6260 -5.5690 38.0860</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-20.9690 -4.8700 37.9700</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD1</string>
    <coordinate3 builtin="xyz3">-21.6400 -4.7550 36.7580</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CD2</string>
    <coordinate3 builtin="xyz3">-21.5320 -4.2760 39.1010</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">CE1</string>
    <coordinate3 builtin="xyz3">-22.8560 -4.0860 36.6720</coordinate3>
   </atom>
   <atom title="atom" id="10">
    <string title="name">CE2</string>
    <coordinate3 builtin="xyz3">-22.7480 -3.6060 39.0340</coordinate3>
   </atom>
   <atom title="atom" id="11">
    <string title="name">CZ</string>
    <coordinate3 builtin="xyz3">-23.4080 -3.5170 37.8060</coordinate3>
   </atom>
   <atom title="atom" id="12">
    <string title="name">OH</string>
    <coordinate3 builtin="xyz3">-24.6060 -2.8620 37.7250</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="ASP" id="37">
  <string title="name">ASP</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-18.7610 -2.2110 37.5450</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-18.9710 -0.8150 37.9290</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-20.4020 -0.4170 37.5250</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-20.7300 -0.3860 36.3300</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-17.9230 0.1140 37.3340</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-18.1470 1.5790 37.6430</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">OD1</string>
    <coordinate3 builtin="xyz3">-19.0760 1.8940 38.4130</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">OD2</string>
    <coordinate3 builtin="xyz3">-17.4270 2.4660 37.1460</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="PRO" id="38">
  <string title="name">PRO</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-21.1920 -0.1320 38.5450</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-22.5940 0.2480 38.3480</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-22.7720 1.7060 37.9920</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-23.9110 2.0830 37.6570</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-23.2640 -0.1640 39.6570</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-22.1840 -0.2960 40.6750</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD</string>
    <coordinate3 builtin="xyz3">-20.8520 -0.1680 39.9690</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="SER" id="39">
  <string title="name">SER</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-21.7060 2.4900 38.0480</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-21.7890 3.9290 37.7260</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-21.5750 4.2020 36.2360</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-21.4470 5.3680 35.8140</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-20.8470 4.7540 38.5810</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">OG</string>
    <coordinate3 builtin="xyz3">-19.4790 4.5580 38.2950</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="LEU" id="40">
  <string title="name">LEU</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-21.5500 3.1390 35.4640</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-21.3690 3.1810 34.0100</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-22.7200 3.2200 33.2950</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-23.5600 2.3280 33.4870</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-20.5150 1.9740 33.5810</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-19.0250 2.1990 33.4470</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD1</string>
    <coordinate3 builtin="xyz3">-18.5050 3.0850 34.5670</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CD2</string>
    <coordinate3 builtin="xyz3">-18.3320 0.8360 33.4840</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="LYS" id="41">
  <string title="name">LYS</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-22.8720 4.2550 32.5020</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-24.0940 4.4720 31.6880</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-23.9320 3.6200 30.4450</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-22.7920 3.2200 30.1330</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-24.2330 5.9640 31.3920</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-24.1000 6.7420 32.7170</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD</string>
    <coordinate3 builtin="xyz3">-23.2030 7.9680 32.6000</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CE</string>
    <coordinate3 builtin="xyz3">-22.7550 8.4100 33.9980</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">NZ</string>
    <coordinate3 builtin="xyz3">-21.6790 9.4350 33.9010</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="PRO" id="42">
  <string title="name">PRO</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-25.0280 3.3410 29.7820</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-25.0270 2.5190 28.5590</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-24.4240 3.2930 27.4000</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-24.4490 4.5370 27.3900</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-26.4740 2.0980 28.4010</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-27.2270 2.6260 29.5970</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD</string>
    <coordinate3 builtin="xyz3">-26.3920 3.7950 30.1110</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="LEU" id="43">
  <string title="name">LEU</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-23.8620 2.5700 26.4490</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-23.2330 3.1290 25.2530</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-24.2700 3.8200 24.3580</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-25.4230 3.3780 24.2830</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-22.4770 2.0170 24.5300</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-21.0400 1.7400 24.8800</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD1</string>
    <coordinate3 builtin="xyz3">-20.4120 0.7220 23.9330</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CD2</string>
    <coordinate3 builtin="xyz3">-20.2420 3.0500 24.8040</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="SER" id="44">
  <string title="name">SER</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-23.8070 4.8760 23.7110</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-24.6610 5.6620 22.8020</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-23.9600 5.7820 21.4430</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-23.0620 6.5770 21.1910</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-25.0500 7.0020 23.3830</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">OG</string>
    <coordinate3 builtin="xyz3">-26.2980 7.4320 22.8320</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="VAL" id="45">
  <string title="name">VAL</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-24.4290 4.9260 20.5600</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-23.9630 4.7760 19.1820</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-24.9360 5.4160 18.2050</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-26.0130 4.8490 17.9640</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-23.7340 3.2610 18.9550</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG1</string>
    <coordinate3 builtin="xyz3">-22.9700 2.9460 17.6780</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CG2</string>
    <coordinate3 builtin="xyz3">-23.0610 2.6070 20.1520</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="SER" id="46">
  <string title="name">SER</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-24.5570 6.5630 17.6680</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-25.4040 7.2820 16.6870</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-24.6930 7.2930 15.3370</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-23.9530 8.2460 15.0260</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-25.7380 8.6840 17.1510</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">OG</string>
    <coordinate3 builtin="xyz3">-26.3600 8.6780 18.4240</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="TYR" id="47">
  <string title="name">TYR</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-24.9170 6.2470 14.5740</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-24.3030 6.0790 13.2550</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-25.3140 6.1560 12.1120</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-24.9520 5.8410 10.9530</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-23.5250 4.7650 13.1610</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-22.3230 4.4920 14.0080</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD1</string>
    <coordinate3 builtin="xyz3">-21.5620 5.4910 14.6050</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CD2</string>
    <coordinate3 builtin="xyz3">-21.9180 3.1630 14.2270</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">CE1</string>
    <coordinate3 builtin="xyz3">-20.4350 5.2150 15.3760</coordinate3>
   </atom>
   <atom title="atom" id="10">
    <string title="name">CE2</string>
    <coordinate3 builtin="xyz3">-20.7970 2.8520 14.9930</coordinate3>
   </atom>
   <atom title="atom" id="11">
    <string title="name">CZ</string>
    <coordinate3 builtin="xyz3">-20.0580 3.8940 15.5690</coordinate3>
   </atom>
   <atom title="atom" id="12">
    <string title="name">OH</string>
    <coordinate3 builtin="xyz3">-18.9470 3.6150 16.3230</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="ASP" id="48">
  <string title="name">ASP</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-26.5280 6.5550 12.4350</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-27.6050 6.6510 11.4340</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-27.2370 7.5930 10.2860</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-27.6170 7.3200 9.1400</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-28.9400 7.0210 12.0880</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-28.8920 8.2110 13.0200</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">OD1</string>
    <coordinate3 builtin="xyz3">-28.1810 8.1810 14.0480</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">OD2</string>
    <coordinate3 builtin="xyz3">-29.5960 9.1940 12.7200</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="GLN" id="49">
  <string title="name">GLN</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-26.5140 8.6380 10.6180</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-26.1040 9.6730 9.6670</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-24.6800 9.5970 9.1520</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-24.1890 10.6070 8.6130</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-26.2940 11.0350 10.3700</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-26.7320 12.1310 9.4220</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD</string>
    <coordinate3 builtin="xyz3">-28.2010 11.9040 9.0720</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">OE1</string>
    <coordinate3 builtin="xyz3">-28.5810 11.7310 7.9200</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">NE2</string>
    <coordinate3 builtin="xyz3">-28.9600 11.8960 10.1700</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="ALA" id="50">
  <string title="name">ALA</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-24.0290 8.4740 9.2880</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-22.6590 8.2290 8.8640</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-22.4670 8.3320 7.3520</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-23.3240 7.9590 6.5310</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-22.2070 6.8530 9.3650</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="THR" id="51">
  <string title="name">THR</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-21.2890 8.8420 7.0110</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-20.8530 9.0460 5.6300</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-19.4760 8.4480 5.3620</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-18.4580 9.0400 5.7640</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-20.8380 10.5860 5.2500</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">OG1</string>
    <coordinate3 builtin="xyz3">-22.2030 11.0680 5.4180</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CG2</string>
    <coordinate3 builtin="xyz3">-20.3140 10.8750 3.8420</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="SER" id="52">
  <string title="name">SER</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-19.4630 7.3200 4.6880</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-18.1770 6.6600 4.3350</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-17.7120 7.3100 3.0180</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-18.5250 7.7040 2.1510</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-18.2790 5.1620 4.3050</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">OG</string>
    <coordinate3 builtin="xyz3">-19.2140 4.6890 3.3720</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="LEU" id="53">
  <string title="name">LEU</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-16.4100 7.4290 2.9020</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-15.7410 8.0340 1.7670</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-14.9360 7.0450 0.9330</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-15.0960 7.0240 -0.3100</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-14.8910 9.2070 2.3040</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-15.6300 10.3430 2.9940</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD1</string>
    <coordinate3 builtin="xyz3">-14.6660 11.4390 3.4160</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CD2</string>
    <coordinate3 builtin="xyz3">-16.6790 10.9080 2.0460</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="ARG" id="54">
  <string title="name">ARG</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-14.0900 6.2890 1.5900</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-13.2380 5.3180 0.8720</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-12.5880 4.3010 1.7940</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-12.6410 4.3290 3.0240</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-12.1560 6.0630 0.0710</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-11.4520 7.1440 0.8360</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD</string>
    <coordinate3 builtin="xyz3">-10.0630 6.8930 1.2140</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">NE</string>
    <coordinate3 builtin="xyz3">-9.0720 7.6020 0.4240</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">CZ</string>
    <coordinate3 builtin="xyz3">-7.8050 7.8370 0.7450</coordinate3>
   </atom>
   <atom title="atom" id="10">
    <string title="name">NH1</string>
    <coordinate3 builtin="xyz3">-7.3260 7.7070 1.9800</coordinate3>
   </atom>
   <atom title="atom" id="11">
    <string title="name">NH2</string>
    <coordinate3 builtin="xyz3">-6.9440 8.2210 -0.2010</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="ILE" id="55">
  <string title="name">ILE</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-11.9650 3.3750 1.0960</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-11.2480 2.2370 1.6660</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-9.8500 2.2510 1.0650</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-9.6930 2.3450 -0.1580</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-12.0730 0.9390 1.4230</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG1</string>
    <coordinate3 builtin="xyz3">-11.3980 -0.2500 2.1450</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CG2</string>
    <coordinate3 builtin="xyz3">-12.3100 0.6880 -0.1010</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CD1</string>
    <coordinate3 builtin="xyz3">-12.3840 -1.4140 2.4730</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="LEU" id="56">
  <string title="name">LEU</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-8.8770 2.1770 1.9610</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-7.4630 2.1960 1.6060</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-6.6930 1.0630 2.2560</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-6.9600 0.6020 3.3830</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-6.9810 3.5930 2.0340</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-5.5030 3.8980 1.9820</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD1</string>
    <coordinate3 builtin="xyz3">-5.1300 4.5880 0.6730</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CD2</string>
    <coordinate3 builtin="xyz3">-5.1420 4.7990 3.1620</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="ASN" id="57">
  <string title="name">ASN</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-5.6950 0.6410 1.5140</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-4.7490 -0.4210 1.9270</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-3.5410 0.4390 2.3360</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-2.9470 1.0700 1.4530</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-4.5170 -1.4670 0.8720</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-3.5920 -2.5940 1.2770</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">OD1</string>
    <coordinate3 builtin="xyz3">-2.5680 -2.3690 1.9240</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">ND2</string>
    <coordinate3 builtin="xyz3">-3.9110 -3.8330 0.9280</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="ASN" id="58">
  <string title="name">ASN</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-3.3020 0.4640 3.6430</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-2.1980 1.2770 4.1730</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-0.9220 0.4560 4.3710</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">0.0420 1.0880 4.7960</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-2.5840 2.0070 5.4540</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-2.9710 1.0380 6.5540</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">OD1</string>
    <coordinate3 builtin="xyz3">-2.4200 -0.0670 6.6510</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">ND2</string>
    <coordinate3 builtin="xyz3">-3.9350 1.5020 7.3230</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="GLY" id="59">
  <string title="name">GLY</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-0.9630 -0.8270 4.0780</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">0.2130 -1.6890 4.1970</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">0.3030 -2.4730 5.4890</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">1.1800 -3.3540 5.6440</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="HIS" id="60">
  <string title="name">HIS</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-0.6070 -2.1690 6.4000</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-0.5800 -2.1310 6.4100</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-0.6590 -2.8800 7.7040</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-0.6050 -2.7850 7.7350</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-2.1030 -3.3790 7.9000</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-1.9690 -3.4220 7.9970</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-2.3550 -4.2700 8.7410</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-2.0550 -4.3330 8.8590</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-0.1620 -2.1080 8.9200</coordinate3>
   </atom>
   <atom title="atom" id="10">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-0.2640 -1.7990 8.8800</coordinate3>
   </atom>
   <atom title="atom" id="11">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-0.9640 -0.9010 9.2930</coordinate3>
   </atom>
   <atom title="atom" id="12">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">0.6330 -0.6930 8.3970</coordinate3>
   </atom>
   <atom title="atom" id="13">
    <string title="name">ND1</string>
    <coordinate3 builtin="xyz3">-0.6110 0.3870 9.0020</coordinate3>
   </atom>
   <atom title="atom" id="14">
    <string title="name">ND1</string>
    <coordinate3 builtin="xyz3">1.9560 -0.8430 8.0690</coordinate3>
   </atom>
   <atom title="atom" id="15">
    <string title="name">CD2</string>
    <coordinate3 builtin="xyz3">-2.1270 -0.8260 9.9770</coordinate3>
   </atom>
   <atom title="atom" id="16">
    <string title="name">CD2</string>
    <coordinate3 builtin="xyz3">0.3440 0.6150 8.1850</coordinate3>
   </atom>
   <atom title="atom" id="17">
    <string title="name">CE1</string>
    <coordinate3 builtin="xyz3">-1.5330 1.2090 9.4770</coordinate3>
   </atom>
   <atom title="atom" id="18">
    <string title="name">CE1</string>
    <coordinate3 builtin="xyz3">2.4340 0.3080 7.6640</coordinate3>
   </atom>
   <atom title="atom" id="19">
    <string title="name">NE2</string>
    <coordinate3 builtin="xyz3">-2.4670 0.5070 10.0690</coordinate3>
   </atom>
   <atom title="atom" id="20">
    <string title="name">NE2</string>
    <coordinate3 builtin="xyz3">1.4840 1.1980 7.7300</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="ALA" id="61">
  <string title="name">ALA</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-2.9980 -2.8190 7.1130</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-4.4130 -3.2020 7.1320</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-5.1730 -2.2820 6.1640</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-4.5390 -1.4390 5.5090</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-4.9910 -3.1700 8.5350</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="PHE" id="62">
  <string title="name">PHE</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-6.4630 -2.4820 6.1200</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-7.3400 -1.6740 5.2460</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-8.2570 -0.8940 6.2000</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-8.7810 -1.4740 7.1570</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-8.1040 -2.4600 4.1970</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-9.1750 -3.3640 4.7320</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD1</string>
    <coordinate3 builtin="xyz3">-10.4230 -2.8370 5.0790</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CD2</string>
    <coordinate3 builtin="xyz3">-8.9390 -4.7280 4.8950</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">CE1</string>
    <coordinate3 builtin="xyz3">-11.4300 -3.6380 5.5840</coordinate3>
   </atom>
   <atom title="atom" id="10">
    <string title="name">CE2</string>
    <coordinate3 builtin="xyz3">-9.9380 -5.5660 5.4110</coordinate3>
   </atom>
   <atom title="atom" id="11">
    <string title="name">CZ</string>
    <coordinate3 builtin="xyz3">-11.1830 -4.9970 5.7430</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="ASN" id="63">
  <string title="name">ASN</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-8.4030 0.3610 5.9140</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-9.1860 1.3530 6.5960</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-10.3270 1.9040 5.7060</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-10.1440 2.2150 4.5280</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-8.3120 2.5370 7.0110</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-7.4280 2.3480 8.2120</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">OD1</string>
    <coordinate3 builtin="xyz3">-7.0860 3.3330 8.9000</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">ND2</string>
    <coordinate3 builtin="xyz3">-7.0270 1.1190 8.4910</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="VAL" id="64">
  <string title="name">VAL</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-11.4580 2.0400 6.3240</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-12.6950 2.5940 5.7970</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-12.7880 3.9910 6.4480</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-12.9090 4.0800 7.6880</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-13.9050 1.7010 6.0560</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG1</string>
    <coordinate3 builtin="xyz3">-15.2070 2.3270 5.5620</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CG2</string>
    <coordinate3 builtin="xyz3">-13.7320 0.2940 5.4840</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="GLU" id="65">
  <string title="name">GLU</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-12.6840 5.0010 5.6300</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-12.7180 6.3930 6.0650</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-14.0940 7.0200 5.9610</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-14.8510 6.8330 4.9880</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-11.7220 7.2200 5.2350</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-10.2860 6.6590 5.2460</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD</string>
    <coordinate3 builtin="xyz3">-9.3930 7.3840 4.2720</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">OE1</string>
    <coordinate3 builtin="xyz3">-9.9240 8.2050 3.5280</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">OE2</string>
    <coordinate3 builtin="xyz3">-8.1860 7.1000 4.3210</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="PHE" id="66">
  <string title="name">PHE</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-14.4110 7.7910 6.9820</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-15.6840 8.5110 7.1390</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-15.3640 10.0080 7.2670</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-14.2490 10.3740 7.6730</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-16.4750 8.0280 8.3430</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-16.9800 6.6250 8.3730</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD1</string>
    <coordinate3 builtin="xyz3">-16.0810 5.5510 8.4090</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CD2</string>
    <coordinate3 builtin="xyz3">-18.3400 6.3600 8.4030</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">CE1</string>
    <coordinate3 builtin="xyz3">-16.5200 4.2380 8.4500</coordinate3>
   </atom>
   <atom title="atom" id="10">
    <string title="name">CE2</string>
    <coordinate3 builtin="xyz3">-18.8240 5.0470 8.4350</coordinate3>
   </atom>
   <atom title="atom" id="11">
    <string title="name">CZ</string>
    <coordinate3 builtin="xyz3">-17.9000 3.9920 8.4560</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="ASP" id="67">
  <string title="name">ASP</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-16.3600 10.8110 6.9410</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-16.2630 12.2710 7.0130</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-16.5760 12.7110 8.4510</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-17.7450 12.5820 8.8590</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-17.2030 12.8860 5.9910</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-17.4650 14.3590 6.2410</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">OD1</string>
    <coordinate3 builtin="xyz3">-16.6020 15.0660 6.7450</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">OD2</string>
    <coordinate3 builtin="xyz3">-18.5930 14.7740 5.9180</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="ASP" id="68">
  <string title="name">ASP</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-15.5550 13.2140 9.1280</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-15.6760 13.6780 10.5110</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-15.5660 15.1990 10.5910</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-14.8670 15.7300 11.4770</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-14.6320 12.9620 11.4090</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-13.2200 13.3790 11.0850</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">OD1</string>
    <coordinate3 builtin="xyz3">-12.9920 13.8500 9.9440</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">OD2</string>
    <coordinate3 builtin="xyz3">-12.2780 13.2960 11.8660</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="SER" id="69">
  <string title="name">SER</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-16.2490 15.8730 9.6740</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-16.2450 17.3530 9.6530</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-17.4920 17.8420 10.4000</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-17.6440 19.0560 10.6250</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-16.1660 17.9510 8.2720</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">OG</string>
    <coordinate3 builtin="xyz3">-17.2800 17.6750 7.4440</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="GLN" id="70">
  <string title="name">GLN</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-18.3290 16.8820 10.7480</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-19.5920 17.1700 11.4620</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-19.9890 15.9580 12.3000</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-19.5330 14.8490 12.0000</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-20.7140 17.5500 10.5050</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-20.5370 18.8910 9.8130</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD</string>
    <coordinate3 builtin="xyz3">-21.7480 19.2330 8.9790</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">OE1</string>
    <coordinate3 builtin="xyz3">-22.6270 20.0110 9.3500</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">NE2</string>
    <coordinate3 builtin="xyz3">-21.8000 18.5930 7.8000</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="ASP" id="71">
  <string title="name">ASP</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-20.8120 16.2210 13.3000</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-21.2830 15.1420 14.2070</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-22.2710 14.2560 13.4570</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-23.4820 14.3590 13.7390</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-21.8420 15.7430 15.4920</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-20.8040 16.2900 16.4440</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">OD1</string>
    <coordinate3 builtin="xyz3">-19.6450 16.5240 16.0780</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">OD2</string>
    <coordinate3 builtin="xyz3">-21.1620 16.4820 17.6270</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="LYS" id="72">
  <string title="name">LYS</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-21.7670 13.4530 12.5450</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-22.5950 12.5500 11.7430</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-22.6810 11.1590 12.3540</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-23.8040 10.6080 12.4440</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-22.1060 12.4350 10.2840</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-22.3010 13.7240 9.4870</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD</string>
    <coordinate3 builtin="xyz3">-21.6720 13.6530 8.0970</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CE</string>
    <coordinate3 builtin="xyz3">-21.9880 14.9140 7.3060</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">NZ</string>
    <coordinate3 builtin="xyz3">-21.0890 15.0720 6.1440</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="ALA" id="73">
  <string title="name">ALA</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-21.5380 10.6160 12.7160</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-21.4490 9.2720 13.3270</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-20.7070 9.4300 14.6580</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-19.4720 9.6200 14.6820</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-20.7860 8.3080 12.3740</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="VAL" id="74">
  <string title="name">VAL</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-21.4930 9.3800 15.7320</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-20.8900 9.5830 17.0640</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-21.1930 8.4960 18.0760</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-22.1260 7.6920 18.0240</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-21.2500 11.0150 17.5380</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG1</string>
    <coordinate3 builtin="xyz3">-20.7080 12.0800 16.5830</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CG2</string>
    <coordinate3 builtin="xyz3">-22.7340 11.1980 17.7770</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="LEU" id="75">
  <string title="name">LEU</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-20.2940 8.5100 19.0530</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-20.2590 7.6280 20.2160</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-20.1340 8.5490 21.4440</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-19.2860 9.4500 21.4510</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-19.1110 6.6560 20.0790</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-18.9960 5.3910 20.8860</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD1</string>
    <coordinate3 builtin="xyz3">-17.5380 5.1970 21.3550</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CD2</string>
    <coordinate3 builtin="xyz3">-19.9130 5.4130 22.0970</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="LYS" id="76">
  <string title="name">LYS</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-20.9920 8.2950 22.3990</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-21.0050 9.0610 23.6630</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-21.5650 8.1060 24.7160</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-21.8500 6.9520 24.3630</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-21.7620 10.3580 23.6410</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-23.0580 10.3700 22.8560</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD</string>
    <coordinate3 builtin="xyz3">-23.6990 11.7540 22.8380</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CE</string>
    <coordinate3 builtin="xyz3">-24.7090 11.8490 21.7060</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">NZ</string>
    <coordinate3 builtin="xyz3">-25.7470 10.7720 21.8360</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="GLY" id="77">
  <string title="name">GLY</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-21.6570 8.6350 25.9290</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-22.1800 7.7900 27.0340</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-21.0610 6.7930 27.3440</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-19.9340 6.9460 26.8440</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="GLY" id="78">
  <string title="name">GLY</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-21.4250 5.8210 28.1480</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-20.5020 4.7590 28.6050</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-19.5760 5.4550 29.6210</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-20.0320 6.3070 30.4000</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="PRO" id="79">
  <string title="name">PRO</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-18.3120 5.0800 29.5450</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-17.2760 5.6340 30.4100</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-16.8320 7.0160 29.9710</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-16.1400 7.7570 30.6890</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-16.1740 4.5850 30.3230</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-16.2930 4.0040 28.9520</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD</string>
    <coordinate3 builtin="xyz3">-17.7690 4.0650 28.6070</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="LEU" id="80">
  <string title="name">LEU</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-17.2560 7.3850 28.7680</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-16.9230 8.6460 28.1330</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-17.6370 9.8770 28.7030</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-18.7530 9.8120 29.2360</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-17.2890 8.5660 26.6370</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-16.9360 7.3060 25.8900</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD1</string>
    <coordinate3 builtin="xyz3">-17.4760 7.3930 24.4640</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CD2</string>
    <coordinate3 builtin="xyz3">-15.4230 7.1570 25.9180</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="ASP" id="81">
  <string title="name">ASP</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-16.9320 10.9680 28.4940</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-17.3740 12.3230 28.8590</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-17.1590 13.1450 27.5660</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-16.0100 13.4160 27.1760</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-16.6950 12.8820 30.0920</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-17.0520 12.1120 31.3450</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">OD1</string>
    <coordinate3 builtin="xyz3">-18.2750 11.9350 31.5650</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">OD2</string>
    <coordinate3 builtin="xyz3">-16.1960 11.6640 32.1120</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="GLY" id="82">
  <string title="name">GLY</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-18.2720 13.4700 26.9380</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-18.2440 14.2470 25.6980</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-18.5240 13.3190 24.5080</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-18.7250 12.0980 24.6260</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="THR" id="83">
  <string title="name">THR</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-18.5240 13.9740 23.3710</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-18.8130 13.3550 22.0760</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-17.5780 12.9600 21.3050</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-16.6380 13.7530 21.1430</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-19.7240 14.3700 21.2680</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">OG1</string>
    <coordinate3 builtin="xyz3">-20.6660 14.8260 22.3150</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CG2</string>
    <coordinate3 builtin="xyz3">-20.3950 13.7900 20.0330</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="TYR" id="84">
  <string title="name">TYR</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-17.6350 11.7410 20.8200</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-16.5140 11.1560 20.0250</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-17.0000 10.8490 18.6190</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-18.0410 10.1750 18.4020</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-15.9730 9.9590 20.7620</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-15.1640 10.1910 22.0030</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD1</string>
    <coordinate3 builtin="xyz3">-15.7310 10.6070 23.1980</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CD2</string>
    <coordinate3 builtin="xyz3">-13.7780 9.9650 21.9830</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">CE1</string>
    <coordinate3 builtin="xyz3">-14.9550 10.8030 24.3460</coordinate3>
   </atom>
   <atom title="atom" id="10">
    <string title="name">CE2</string>
    <coordinate3 builtin="xyz3">-12.9880 10.1550 23.1160</coordinate3>
   </atom>
   <atom title="atom" id="11">
    <string title="name">CZ</string>
    <coordinate3 builtin="xyz3">-13.5930 10.5670 24.2970</coordinate3>
   </atom>
   <atom title="atom" id="12">
    <string title="name">OH</string>
    <coordinate3 builtin="xyz3">-12.8550 10.7670 25.4260</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="ARG" id="85">
  <string title="name">ARG</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-16.2560 11.3620 17.6530</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-16.5410 11.2070 16.2390</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-15.8010 10.0740 15.5270</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-14.5840 9.9690 15.6790</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-16.1590 12.5020 15.4910</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-17.1450 13.6160 15.4830</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD</string>
    <coordinate3 builtin="xyz3">-16.7680 14.7160 14.5400</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">NE</string>
    <coordinate3 builtin="xyz3">-17.6360 15.8680 14.8320</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">CZ</string>
    <coordinate3 builtin="xyz3">-17.2340 17.1070 14.5200</coordinate3>
   </atom>
   <atom title="atom" id="10">
    <string title="name">NH1</string>
    <coordinate3 builtin="xyz3">-16.0440 17.3530 13.9800</coordinate3>
   </atom>
   <atom title="atom" id="11">
    <string title="name">NH2</string>
    <coordinate3 builtin="xyz3">-18.0510 18.1220 14.7650</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="LEU" id="86">
  <string title="name">LEU</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-16.5290 9.3050 14.7350</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-15.9690 8.2140 13.9410</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-15.1350 8.8370 12.8050</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-15.5800 9.7840 12.1360</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-17.0940 7.3130 13.4270</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-16.7910 6.3030 12.3330</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD1</string>
    <coordinate3 builtin="xyz3">-15.8580 5.1970 12.8150</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CD2</string>
    <coordinate3 builtin="xyz3">-18.0950 5.6710 11.8660</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="ILE" id="87">
  <string title="name">ILE</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-13.9530 8.3040 12.6250</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-13.0040 8.7180 11.6100</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-12.6590 7.5120 10.7000</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-12.5510 7.7530 9.4770</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-11.7000 9.3520 12.1420</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG1</string>
    <coordinate3 builtin="xyz3">-10.9710 10.0690 10.9750</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CG2</string>
    <coordinate3 builtin="xyz3">-10.7570 8.3400 12.8520</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CD1</string>
    <coordinate3 builtin="xyz3">-9.5890 10.6960 11.3730</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="GLN" id="88">
  <string title="name">GLN</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-12.5420 6.3640 11.3280</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-12.1850 5.1490 10.5720</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-12.4040 3.8670 11.3570</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-12.5320 3.8740 12.5920</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-10.7380 5.2400 10.0890</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-9.6340 5.4780 11.1010</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD</string>
    <coordinate3 builtin="xyz3">-8.9090 4.2500 11.5570</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">OE1</string>
    <coordinate3 builtin="xyz3">-9.3620 3.1030 11.4490</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">NE2</string>
    <coordinate3 builtin="xyz3">-7.7140 4.4460 12.1050</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="PHE" id="89">
  <string title="name">PHE</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-12.4330 2.7700 10.6390</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-12.5760 1.4120 11.2010</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-11.5670 0.5690 10.3840</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-11.2580 0.9330 9.2300</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-13.9360 0.7980 11.2510</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-14.7240 0.3220 10.0830</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD1</string>
    <coordinate3 builtin="xyz3">-14.3180 -0.7990 9.3510</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CD2</string>
    <coordinate3 builtin="xyz3">-15.9260 0.9450 9.7210</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">CE1</string>
    <coordinate3 builtin="xyz3">-15.0560 -1.2820 8.2810</coordinate3>
   </atom>
   <atom title="atom" id="10">
    <string title="name">CE2</string>
    <coordinate3 builtin="xyz3">-16.6810 0.4750 8.6460</coordinate3>
   </atom>
   <atom title="atom" id="11">
    <string title="name">CZ</string>
    <coordinate3 builtin="xyz3">-16.2340 -0.6630 7.9230</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="HIS" id="90">
  <string title="name">HIS</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-11.0920 -0.4650 11.0180</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-10.1300 -1.4090 10.4160</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-10.2510 -2.7290 11.1620</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-11.0020 -2.8370 12.1340</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-8.6520 -0.9770 10.3960</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-8.2510 -0.3270 11.6760</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">ND1</string>
    <coordinate3 builtin="xyz3">-8.4140 1.0250 11.9400</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CD2</string>
    <coordinate3 builtin="xyz3">-7.6840 -0.8730 12.7790</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">CE1</string>
    <coordinate3 builtin="xyz3">-7.9680 1.2780 13.1530</coordinate3>
   </atom>
   <atom title="atom" id="10">
    <string title="name">NE2</string>
    <coordinate3 builtin="xyz3">-7.5190 0.1680 13.6870</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="PHE" id="91">
  <string title="name">PHE</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-9.4790 -3.6980 10.7030</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-9.5050 -5.0340 11.3280</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-8.0680 -5.4930 11.5360</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-7.1160 -4.9120 10.9960</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-10.3150 -5.9910 10.4800</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-11.7510 -5.7390 10.1640</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD1</string>
    <coordinate3 builtin="xyz3">-12.1210 -4.9080 9.0990</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CD2</string>
    <coordinate3 builtin="xyz3">-12.7570 -6.3390 10.9210</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">CE1</string>
    <coordinate3 builtin="xyz3">-13.4500 -4.6760 8.7890</coordinate3>
   </atom>
   <atom title="atom" id="10">
    <string title="name">CE2</string>
    <coordinate3 builtin="xyz3">-14.1110 -6.1320 10.6200</coordinate3>
   </atom>
   <atom title="atom" id="11">
    <string title="name">CZ</string>
    <coordinate3 builtin="xyz3">-14.4480 -5.2940 9.5370</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="HIS" id="92">
  <string title="name">HIS</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-7.9740 -6.5310 12.3300</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-6.8210 -7.2970 12.7310</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-7.3200 -8.7480 12.5790</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-8.3300 -9.0370 13.2410</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-6.2840 -7.1700 14.1790</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-5.9210 -5.7340 14.3970</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">ND1</string>
    <coordinate3 builtin="xyz3">-4.6780 -5.2150 14.1450</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CD2</string>
    <coordinate3 builtin="xyz3">-6.6910 -4.7090 14.8130</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">CE1</string>
    <coordinate3 builtin="xyz3">-4.7050 -3.9190 14.4050</coordinate3>
   </atom>
   <atom title="atom" id="10">
    <string title="name">NE2</string>
    <coordinate3 builtin="xyz3">-5.9070 -3.6030 14.8110</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="TRP" id="93">
  <string title="name">TRP</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-6.6580 -9.4940 11.7510</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-7.1170 -10.9030 11.5250</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-5.9200 -11.8090 11.5990</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-4.7850 -11.2890 11.6070</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-7.9080 -10.9340 10.2090</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">CG</string>
    <coordinate3 builtin="xyz3">-7.2150 -10.4030 9.0130</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">CD1</string>
    <coordinate3 builtin="xyz3">-6.4650 -11.1170 8.1010</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">CD2</string>
    <coordinate3 builtin="xyz3">-7.1640 -9.0430 8.5700</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">NE1</string>
    <coordinate3 builtin="xyz3">-5.9580 -10.2660 7.1330</coordinate3>
   </atom>
   <atom title="atom" id="10">
    <string title="name">CE2</string>
    <coordinate3 builtin="xyz3">-6.3730 -9.0020 7.4000</coordinate3>
   </atom>
   <atom title="atom" id="11">
    <string title="name">CE3</string>
    <coordinate3 builtin="xyz3">-7.7360 -7.8600 9.0510</coordinate3>
   </atom>
   <atom title="atom" id="12">
    <string title="name">CZ2</string>
    <coordinate3 builtin="xyz3">-6.1520 -7.8250 6.7080</coordinate3>
   </atom>
   <atom title="atom" id="13">
    <string title="name">CZ3</string>
    <coordinate3 builtin="xyz3">-7.4920 -6.6900 8.3540</coordinate3>
   </atom>
   <atom title="atom" id="14">
    <string title="name">CH2</string>
    <coordinate3 builtin="xyz3">-6.7190 -6.6640 7.2150</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="GLY" id="94">
  <string title="name">GLY</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-6.1280 -13.0980 11.6530</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-5.0500 -14.0970 11.7300</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-4.8750 -14.8860 10.4440</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-5.6500 -14.7020 9.4970</coordinate3>
   </atom>
  </list>
 </molecule>
 <molecule title="SER" id="95">
  <string title="name">SER</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">-3.8820 -15.7530 10.4210</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">CA</string>
    <coordinate3 builtin="xyz3">-3.6020 -16.5980 9.2540</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">-4.5600 -17.7880 9.3050</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">-4.9460 -18.2990 8.2480</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">CB</string>
    <coordinate3 builtin="xyz3">-2.1780 -17.0670 9.1450</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">OG</string>
    <coordinate3 builtin="xyz3">-1.6470 -17.4660 10.3720</coordinate3>
   </atom>
  </list>
 </molecule>
</list>
</molecule>
<?php
        $expected = ob_get_clean();

        $this->assertSame($expected, $result);

        $this->markTestIncomplete("We should probably make a less fragile test here");
    }

}

