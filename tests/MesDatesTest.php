<?php
namespace UPJV;

use PHPUnit\Framework\TestCase;

class MesDatesTest extends TestCase {
    public function testDemainReturnsJson() {
        $mesDates = new MesDates();
        $result = $mesDates->demain();
        $this->assertJson($result, "La méthode demain() doit retourner une chaîne JSON valide.");
    }

    public function testDemainReturnsTomorrowDate() {
        $mesDates = new MesDates();
        $tomorrow = (new \DateTime('tomorrow'))->format('d-m-Y');
        $result = $mesDates->demain();
        $decodedResult = json_decode($result, true);
        $this->assertArrayHasKey('demain', $decodedResult, "Le JSON doit contenir la clé 'demain'.");
        $this->assertEquals($tomorrow, $decodedResult['demain'], "La date retournée doit être celle de demain.");
    }
}