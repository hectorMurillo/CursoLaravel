<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProductoTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        //Verifica la estructura que se va a regresar (misma cantidad de parametros)
        $this->get('/api/productos')->seeJsonStructure(
            //el * indica que recibirá un arreglo con esta estructura
            ['*' => [
                'id', 
                'codigo', 
                'descripcion', 
                'existencia', 
                'precio']
                ]            
            );
    }
    public function testShow()
    {
        $this-> get('/api/productos/1')
            -> seeJsonStructure([                
                'id',
                'codigo',
                'descripcion',
                'existencia',
                'precio'
            ]);
    }
    public function testCreateProduct()
    {    
            $datos =[        
                'codigo'=>'MACKBOOK',
                'descripcion'=>'MACKBOOK PRO RETINA DISPLAY',
                'existencia'=>10,
                'precio'=>38000.00
            ];
            $this->post('/api/productos', $datos)->seeJsonStructure([
                'id',
                'codigo',
                'descripcion',
                'existencia',
                'precio'
            ]);
    }
}
