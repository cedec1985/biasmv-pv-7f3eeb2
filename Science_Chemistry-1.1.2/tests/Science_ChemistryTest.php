<?php
require_once "PHPUnit/Framework/TestCase.php";
require_once "Science/Chemistry.php";
require_once "Science/Chemistry/Molecule_XYZ.php";
require_once "Science/Chemistry/Macromolecule.php";

class Science_ChemistryTest extends PHPUnit_Framework_TestCase {

    public function test() {
ob_start();
?>
Creating and printing an atom
 N     2.3000     4.5000    -2.1000
Creating a second atom and calculating distance to first one
 C     1.2000     3.4000    -1.6000

Distance N to C: 1.6340 Angstroms

=====
Reading a molecule:
$m is a molecule: 1
10
his.xyz	     -20.000000
 N    11.6200    -9.7070    11.6430
 C    12.6170    -8.7040    12.0260
 C    12.1040    -7.3050    12.2730
 O    12.9290    -6.4050    12.5540
 C    13.7340    -8.5610    10.9240
 C    14.5460    -9.8200    10.8390
 N    14.2870   -10.8480     9.9840
 C    15.6250   -10.1840    11.5690
 C    15.1760   -11.8080    10.1800
 N    16.0140   -11.4260    11.1350
# Number of molecules: 2
# Molecule 1
10
his.xyz	     -20.000000
 N    11.6200    -9.7070    11.6430
 C    12.6170    -8.7040    12.0260
 C    12.1040    -7.3050    12.2730
 O    12.9290    -6.4050    12.5540
 C    13.7340    -8.5610    10.9240
 C    14.5460    -9.8200    10.8390
 N    14.2870   -10.8480     9.9840
 C    15.6250   -10.1840    11.5690
 C    15.1760   -11.8080    10.1800
 N    16.0140   -11.4260    11.1350

# Molecule 2
8
lys.xyz	       0.000000
 C    10.2020   -11.6530    11.9550
 C    11.1880   -10.6400    12.4740
 O    11.5620   -10.7470    13.6630
 C    10.9750   -12.7980    11.2490
 C    11.9300   -13.5300    12.2100
 C    11.1470   -14.0260    13.4150
 C    11.9850   -14.8510    14.3760
 N    11.1060   -15.3590    15.4740

<molecule title="biggie" id="big">
<list title="molecules">
 <molecule title="his.xyz" id="1">
  <string title="name">his.xyz</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">11.6200 -9.7070 11.6430</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">C</string>
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
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">13.7340 -8.5610 10.9240</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">14.5460 -9.8200 10.8390</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">14.2870 -10.8480 9.9840</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">15.6250 -10.1840 11.5690</coordinate3>
   </atom>
   <atom title="atom" id="9">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">15.1760 -11.8080 10.1800</coordinate3>
   </atom>
   <atom title="atom" id="10">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">16.0140 -11.4260 11.1350</coordinate3>
   </atom>
  </list>
  <list title="connections">
   <list title="connect" id="1">2</list>
   <list title="connect" id="2">3 5</list>
   <list title="connect" id="3">4</list>
   <list title="connect" id="5">6</list>
   <list title="connect" id="6">7 8</list>
   <list title="connect" id="7">9</list>
   <list title="connect" id="8">10</list>
   <list title="connect" id="9">10</list>
  </list>
 </molecule>
 <molecule title="lys.xyz" id="2">
  <string title="name">lys.xyz</string>
  <list title="atoms">
   <atom title="atom" id="1">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">10.2020 -11.6530 11.9550</coordinate3>
   </atom>
   <atom title="atom" id="2">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">11.1880 -10.6400 12.4740</coordinate3>
   </atom>
   <atom title="atom" id="3">
    <string title="name">O</string>
    <coordinate3 builtin="xyz3">11.5620 -10.7470 13.6630</coordinate3>
   </atom>
   <atom title="atom" id="4">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">10.9750 -12.7980 11.2490</coordinate3>
   </atom>
   <atom title="atom" id="5">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">11.9300 -13.5300 12.2100</coordinate3>
   </atom>
   <atom title="atom" id="6">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">11.1470 -14.0260 13.4150</coordinate3>
   </atom>
   <atom title="atom" id="7">
    <string title="name">C</string>
    <coordinate3 builtin="xyz3">11.9850 -14.8510 14.3760</coordinate3>
   </atom>
   <atom title="atom" id="8">
    <string title="name">N</string>
    <coordinate3 builtin="xyz3">11.1060 -15.3590 15.4740</coordinate3>
   </atom>
  </list>
  <list title="connections">
   <list title="connect" id="1">2 4</list>
   <list title="connect" id="2">3</list>
   <list title="connect" id="4">5</list>
   <list title="connect" id="5">6</list>
   <list title="connect" id="6">7</list>
   <list title="connect" id="7">8</list>
  </list>
 </molecule>
</list>
</molecule>
<?php
        $expected = ob_get_clean();

        ob_start();
        echo "Creating and printing an atom\n";
        $a = new Science_Chemistry_Atom("N", array(2.3,4.5,-2.1));
        echo $a->toString()."\n";
        echo "Creating a second atom and calculating distance to first one\n";
        $b = new Science_Chemistry_Atom("C", array(1.2,3.4,-1.6));
        echo $b->toString()."\n";
        echo "\nDistance N to C: ".sprintf("%.4f", $a->distance($b))." Angstroms\n";

        echo "\n=====\nReading a molecule:\n";
        $m = new Science_Chemistry_Molecule_XYZ(dirname(__FILE__) . "/his.xyz");
        echo "\$m is a molecule: ".(int)Science_Chemistry_Molecule::isMolecule($m)."\n";
        echo $m->toString();

        $n = new Science_Chemistry_Molecule_XYZ(dirname(__FILE__) . "/lys.xyz");

        $mols = array($m, $n);

        $big = new Science_Chemistry_Macromolecule("big one", $mols);

        echo $big->toString();
        echo $big->toCML("biggie", "big", true);
        $result = ob_get_clean();

        $this->assertSame($expected, $result);
    }
}

