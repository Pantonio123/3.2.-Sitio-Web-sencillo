<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            [
                'title' => 'Crepúsculo',
                'synopsis' => 'Una joven se enamora de un misterioso vampiro en un romance peligroso.',
                'year' => 2008,
                'cover' => 'crepusculo.jpg',
            ],
            [
                'title' => 'Cars',
                'synopsis' => 'Un auto de carreras aprende el verdadero significado de la amistad.',
                'year' => 2006,
                'cover' => 'cars.jpg',
            ],
            [
                'title' => 'Una película de huevos',
                'synopsis' => 'Un huevo busca cumplir su sueño de convertirse en gallo.',
                'year' => 2006,
                'cover' => 'huevos.jpg',
            ],
            [
                'title' => 'Juegos del Hambre',
                'synopsis' => 'Una joven lucha por sobrevivir en un mortal torneo televisado.',
                'year' => 2012,
                'cover' => 'juegos_hambre.jpg',
            ],
            [
                'title' => 'Tarzán',
                'synopsis' => 'Un niño criado por gorilas descubre su verdadera identidad.',
                'year' => 1999,
                'cover' => 'tarzan.jpg',
            ],
            [
                'title' => 'Star Wars Ep3',
                'synopsis' => 'Anakin Skywalker cae al lado oscuro y se convierte en Darth Vader.',
                'year' => 2005,
                'cover' => 'star_wars_ep3.jpg',
            ],
            [
                'title' => 'Son como niños',
                'synopsis' => 'Un grupo de amigos revive su infancia en un reencuentro lleno de locuras.',
                'year' => 2010,
                'cover' => 'son_como_ninos.jpg',
            ],
            [
                'title' => 'Chucky',
                'synopsis' => 'Un muñeco poseído aterroriza a una familia.',
                'year' => 1988,
                'cover' => 'chucky.jpg',
            ],
            [
                'title' => 'Harry Potter y la Cámara de los Secretos',
                'synopsis' => 'Harry descubre un misterio oscuro en Hogwarts.',
                'year' => 2002,
                'cover' => 'harry_potter2.jpg',
            ],
            [
                'title' => '¿Quién engañó a Roger Rabbit?',
                'synopsis' => 'Un detective investiga un crimen en un mundo donde conviven humanos y dibujos animados.',
                'year' => 1988,
                'cover' => 'roger_rabbit.jpg',
            ],
        ]);
    }
}
