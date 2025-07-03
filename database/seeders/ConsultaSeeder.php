<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Consulta; // Correcto, singular


class ConsultaSeeder extends Seeder
{
    public function run(): void
    {
        Consulta::insert([
            [
                'nombre' => 'Carlos Ramírez',
                'email' => 'carlos@example.com',
                'telefono' => '987654321',
                'especialidad' => 'Asesoría legal',
                'mensaje' => 'Necesito asesoría sobre un contrato.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Ana Torres',
                'email' => 'ana@example.com',
                'telefono' => '912345678',
                'especialidad' => 'Conciliación',
                'mensaje' => 'Quiero saber sobre procesos de conciliación.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Luis Mendoza',
                'email' => 'luis@example.com',
                'telefono' => '986123456',
                'especialidad' => 'Divorcio',
                'mensaje' => 'Tengo dudas sobre el proceso de divorcio.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'María Paredes',
                'email' => 'maria@example.com',
                'telefono' => '984567123',
                'especialidad' => 'Conciliación',
                'mensaje' => 'Deseo realizar una conciliación extrajudicial.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Jorge Salazar',
                'email' => 'jorge@example.com',
                'telefono' => '983452167',
                'especialidad' => 'Asesoría legal',
                'mensaje' => 'Necesito orientación sobre un juicio.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Lucía Navarro',
                'email' => 'lucia@example.com',
                'telefono' => '981234567',
                'especialidad' => 'Familia',
                'mensaje' => 'Requiero ayuda para la custodia de mis hijos.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Pedro Quispe',
                'email' => 'pedro@example.com',
                'telefono' => '980987654',
                'especialidad' => 'Conciliación',
                'mensaje' => 'Estoy interesado en iniciar una conciliación.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Sandra León',
                'email' => 'sandra@example.com',
                'telefono' => '987321654',
                'especialidad' => 'Asesoría legal',
                'mensaje' => '¿Pueden revisar un contrato de alquiler?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Sam rodri',
                'email' => 'sam@example.com',
                'telefono' => '987321654',
                'especialidad' => 'Reparticiones',
                'mensaje' => '¿Pueden revisar un contrato de alquiler?',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        Consulta::create([
            'nombre' => 'Juan',
            'ciudad' => 'Madrid',
            'edad' => '30',
            'telefono' => '123456789',
            'consulta' => 'Ejemplo de consulta',
        ]);
    }
}
