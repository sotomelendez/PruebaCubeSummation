<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Routing\Controller;

class CubeController extends Controller
{
    //
    public function home()
    {
        return view('cube.index');
    }
    
    public function result(Request $request)
    {
        $entrada = $request->input('entrada');
        
        $output = "\n";
        try{
            $instructions = explode(PHP_EOL,$entrada);
            
            $actualLine = 0;
            
            $line = $instructions[$actualLine];
            $actualLine++;
            $iterations = intval($line);
            for($i = 0; $i < $iterations; $i++)
            {
                $line = $instructions[$actualLine];
            	$actualLine++;
                $parts = explode(" ",$line);
                $matrixSize = intval($parts[0]);
                //Inicializo la matriz
                $matrix = array_fill(1,$matrixSize,array_fill(1,$matrixSize,array_fill(1,$matrixSize,0)));
                //Ejecuto las operaciones
                $ops = intval($parts[1]);
                
                for($j = 0; $j < $ops; $j++)
                {
                    $line = $instructions[$actualLine];
            		$actualLine++;
                    $operation = explode(" ",$line);
                    $x1 = intval($operation[1]);
                    $y1 = intval($operation[2]);
                    $z1 = intval($operation[3]);
                    if($operation[0] == "UPDATE")
                    {
                        $newValue = intval($operation[4]);
                        $matrix[$x1][$y1][$z1] = intval($newValue);
                    }
                    else if($operation[0] == "QUERY")
                    {
                        $sum = 0;
                        $x2 = intval($operation[4]);
                        $y2 = intval($operation[5]);
                        $z2 = intval($operation[6]);
                        for($a = $x1; $a <= $x2; $a++)
                        {
                            for($b = $y1; $b <= $y2; $b++)
                            {
                                for($c = $z1; $c <= $z2; $c++)
                                {
                                    $sum = $sum + $matrix[$a][$b][$c];
                                }
                            }
                        }
            			$output = $output . strval($sum) . "\n";
                    }
                }
            }
            if($output == "\n")
            {
                $output = "\n" . "Se produjo un error. Puede que los datos de entrada no tengan el formato correcto.";
                return view('cube.error', ['output' => $output]);
            }
            else
            {
                return view('cube.result', ['output' => $output]);
            }
        }
        catch(\Exception $ex)
        {
            $output = "\n" . "Se produjo un error. Puede que los datos de entrada no tengan el formato correcto.";
            return view('cube.error', ['output' => $output]);
        }
    }
    
    public function resulttest()
    {
        return view('cube.result');
    }
}
