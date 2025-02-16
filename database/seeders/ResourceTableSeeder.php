<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Resource;

class ResourceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('resources')->insert([
            //role
            [
                'name'          => 'Listar as  Funções.',
                'resource'      =>'roles.index',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 2
            ],
            [
                'name'      =>'Formulário Criar uma nova função.',
                'resource'      =>'roles.create',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 2
            ],
            [
                'name'      =>'Gravar uma nova função no banco de dados.',
                'resource'      =>'roles.store',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 2
            ],
            [
                'name'      =>'Visualizar uma função.',
                'resource'      =>'roles.show',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 2
            ],
            [
                'name'      =>'Formulário edição de uma função',
                'resource'      =>'roles.edit',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 2
            ],
            [
                'name'      =>'Atualizar uma função no banco de dados.',
                'resource'      =>'roles.update',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 2
            ],
            [
                'name'      =>'Excluir um função',
                'resource'      =>'roles.destroy',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 2
            ],

            //users
            [
                'name'          => 'Listar os Usuários.',
                'resource'      =>'users.index',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 1
            ],
            [
                'name'      =>'Formulário Criar um novo Usuário.',
                'resource'      =>'users.create',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 1
            ],
            [
                'name'      =>'Gravar um novo Usuário no banco de dados.',
                'resource'      =>'users.store',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 1
            ],
            [
                'name'      =>'Visualizar um Usuário.',
                'resource'      =>'users.show',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 1
            ],
            [
                'name'      =>'Formulário edição de um Usuário',
                'resource'      =>'users.edit',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 1
            ],
            [
                'name'      =>'Atualizar um Usuário no banco de dados.',
                'resource'      =>'users.update',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 1
            ],
            [
                'name'      =>'Excluir um Usuário',
                'resource'      =>'users.destroy',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 1
            ],
            //resources
            [
                'name'          => 'Listar os funções.',
                'resource'      =>'permissoes.index',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 3
            ],
            [
                'name'      =>'Formulário Criar uma nova função.',
                'resource'      =>'permissoes.create',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 3
            ],
            [
                'name'      =>'Gravar uma nova função no banco de dados.',
                'resource'      =>'permissoes.store',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 3
            ],
            [
                'name'      =>'Visualizar uma função.',
                'resource'      =>'permissoes.show',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 3
            ],
            [
                'name'      =>'Formulário edição de uma função',
                'resource'      =>'permissoes.edit',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 3
            ],
            [
                'name'      =>'Atualizar uma função no banco de dados.',
                'resource'      =>'permissoes.update',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 3
            ],
            [
                'name'      =>'Excluir uma função',
                'resource'      =>'permissoes.destroy',
                 'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
                'tabela_id'     => 3
            ],
        ]);
    }
}
