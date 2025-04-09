<?php
namespace UPJV;

class MesDates {
    public function demain() {
        $tomorrow = new \DateTime('tomorrow');
        $formattedDate = $tomorrow->format('d-m-Y');
        return json_encode(['demain' => $formattedDate]);
    }
}