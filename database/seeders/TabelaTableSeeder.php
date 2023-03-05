<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Resource;
use Illuminate\Support\Facades\DB;
class TabelaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tabelas')->insert(
            [
                [
                    //Role
                    'name'             =>   'USUÁRIO',
                    'description'      =>   'Tabela que contem os cadastros dos usuários em geral.',
                    'table'           =>    'users'
                ],
                [
                    'name'             =>   'FUNÇÕES',
                    'description'      =>   'Tabela com os tipos de usuários, responsavel pelo ACL do sistema.',
                    'table'           =>    'roles'
                ],
                [
                    'name'      =>   'PERMISSÕES',
                    'description'      =>   'Tabela com as permissões de cada tipo de usuário,  responsavel pelo ACL do sistema junto com a tabela roles.',
                    'table'           =>    'resources'
                ],
                [
                    'name'      =>   'TABELAS',
                    'description'      =>   'Tabela para registrar todas as tabelas do sistema..',
                    'table'           =>    'tabelas'
                ],
                //usuario
                
            ]

        );
    }
}
