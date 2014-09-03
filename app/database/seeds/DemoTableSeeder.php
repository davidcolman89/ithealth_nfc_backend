<?php

class DemoTableSeeder extends Seeder {

	public function run()
	{

        Eloquent::unguard();

        //Tags con informacion especial
        $demo_with_info = [
            '340da24a500104e0',
            'e7000625000104e0',
            'e5e90525000104e0',
            'a0d80525000104e0',
            '05oca24a500104e0',
            'a8d80525000104e0',
        ];

        $data = [
            [
                "id_chip"=>"340da24a500104e0",
                "nombre"=>"Carlos",
                "apellido"=>"Gutierrez",
                "nro_afiliado"=>"20140819",
                "nro_protesis"=>"111111",
                "descripcion"=>"",
                "fecha"=>"2014-08-19",
            ],
            [
                "id_chip"=>"e7000625000104e0",
                "nombre"=>"Jorge",
                "apellido"=>"Tester",
                "nro_afiliado"=>"20140820",
                "nro_protesis"=>"222222",
                "descripcion"=>"",
                "fecha"=>"2014-08-20",
            ],
            [
                "id_chip"=>"a0d80525000104e0",
                "nombre"=>"Mirta",
                "apellido"=>"Iñaqui",
                "nro_afiliado"=>"20140821",
                "nro_protesis"=>"333444",
                "descripcion"=>"Lorem ipsum dolor sit amet, ad nam legere eirmod tibique, an vis ancillae laboramus reformidans, natum dicat qui te. Eam dicta ancillae fastidii ex, quis facer pri ex. Qui nominavi explicari sadipscing in. Vix perfecto deserunt et, ut nobis postea eam, pro ei dicit quodsi. Usu ponderum adipiscing in.",
                "fecha"=>"2014-08-21",
            ],
            [
                "id_chip"=>"a8d80525000104e0",
                "nombre"=>"Juan",
                "apellido"=>"Silio",
                "nro_afiliado"=>"20140822",
                "nro_protesis"=>"555222",
                "descripcion"=>"Lorem ipsum dolor sit amet, ad nam legere eirmod tibique, an vis ancillae laboramus reformidans, natum dicat qui te. Eam dicta ancillae fastidii ex, quis facer pri ex. Qui nominavi explicari sadipscing in. Vix perfecto deserunt et, ut nobis postea eam, pro ei dicit quodsi. Usu ponderum adipiscing in.",
                "fecha"=>"2014-08-22",
            ],
            [
                "id_chip"=>"e5e90525000104e0",
                "nombre"=>"Jorge",
                "apellido"=>"Tester",
                "nro_afiliado"=>"20140820",
                "nro_protesis"=>"222222",
                "descripcion"=>"Lorem ipsum dolor sit amet, ad nam legere eirmod tibique, an vis ancillae laboramus reformidans, natum dicat qui te. Eam dicta ancillae fastidii ex, quis facer pri ex. Qui nominavi explicari sadipscing in. Vix perfecto deserunt et, ut nobis postea eam, pro ei dicit quodsi. Usu ponderum adipiscing in.",
                "fecha"=>"2014-08-20",
            ],
            [
                "id_chip"=>"cd3206250001004e0",
                "nombre"=>"Nestor",
                "apellido"=>"Sanchez",
                "nro_afiliado"=>"20140821",
                "nro_protesis"=>"444444",
                "descripcion"=>"Lorem ipsum dolor sit amet, ad nam legere eirmod tibique, an vis ancillae laboramus reformidans, natum dicat qui te. Eam dicta ancillae fastidii ex, quis facer pri ex. Qui nominavi explicari sadipscing in. Vix perfecto deserunt et, ut nobis postea eam, pro ei dicit quodsi. Usu ponderum adipiscing in.",
                "fecha"=>"2014-08-21",
            ],
            [
                "id_chip"=>"79eea14a500104e0",
                "nombre"=>"David",
                "apellido"=>"Martin",
                "nro_afiliado"=>"20140822",
                "nro_protesis"=>"555555",
                "descripcion"=>"Lorem ipsum dolor sit amet, ad nam legere eirmod tibique, an vis ancillae laboramus reformidans, natum dicat qui te. Eam dicta ancillae fastidii ex, quis facer pri ex. Qui nominavi explicari sadipscing in. Vix perfecto deserunt et, ut nobis postea eam, pro ei dicit quodsi. Usu ponderum adipiscing in.",
                "fecha"=>"2014-08-22",
            ]
        ];

        foreach($data as $demo)
        {

            $id = $demo['id_chip'];

            if(in_array($id,$demo_with_info))
            {
                //nombre del paciente en mayuscula
                $paciente = strtoupper($demo['apellido'] . " " . $demo['nombre']);

                $demo['descripcion'] = <<<STRING
[REF] 2999-006
Autorizado por ANMAT [fecha]2014-05
PM-2022-02
[LOT] 1079/01 [NO ESTERIL] 1 UNIDAD
FECHA DE CIRUGIA: 02/08/2014
INSTITUCIÓN: SANATORIO GUEMES
MÉDICO: ALI OCTAVIO
PACIENTE: {$paciente} / N° TRAMITE 500-D28
STRING;
            }

            Demo::create($demo);

        }
        
	}

}