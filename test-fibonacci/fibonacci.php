<?php

class Fibonacci {

	public function __construct() {

        $number = $this->validateRequest();
        if ( is_array($number) && isset($number['success']) && !$number['success'] ) {
            header('Content-type:application/json;charset=utf-8');
            echo json_encode($number);
            return;
        }

        $this->runFibonacci($number);

	}

    public function validateRequest() {
        
        $inputs = json_decode(file_get_contents('php://input'), true);
    
        if ( !isset($inputs['number']) || $inputs['number'] == '' ) {
            return ['success' => false, 'data' => ["O número inserido é invalido"] , 'code' => 400];
        }
    
        if ( !is_numeric($inputs['number']) ) {
            return ['success' => false, 'data' => ["Deve ser só números"] , 'code' => 400];
        }

        $number = (int) trim($inputs['number']);
    
        if ( $number < 0 ) {
            return ['success' => false, 'data' => ["Tem que ser um número maior que zero"] , 'code' => 400];
        }

        return $number;
       
    }
    
    public function runFibonacci($intInitNumber) {
        header('Content-type:application/json;charset=utf-8');
    
        $arrFibonacci = [];
        $arrFibonacci[] = $intInitNumber;
        $arrFibonacci[] = (int) ($intInitNumber + 1);
        
        do {
    
            $prevLastKey = (int) ( array_key_last($arrFibonacci) - 1);
            
            if ( is_float( $arrFibonacci[$prevLastKey] + end($arrFibonacci) ) ) {
                break;
            }
    
            $arrFibonacci[] = (int) ( $arrFibonacci[$prevLastKey] + end($arrFibonacci) );
    
            $index++;
    
        } while ( count($arrFibonacci) );
        
        echo json_encode(['success' => true, 'data' => $arrFibonacci , 'code' => 200]);
        return;
    }
}

$run = new Fibonacci();


    