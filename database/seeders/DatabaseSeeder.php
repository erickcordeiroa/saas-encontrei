<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Service;
use App\Models\Category;
use App\Models\Review;
use App\Models\Photo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Cria 10 usuários com status aleatórios
        $users = User::factory(10)->create();

        // Itera sobre cada usuário criado
        $users->each(function ($user) {
            // Cria uma categoria para cada usuário
            $category = Category::factory()->create();

            // Atualiza o usuário com a categoria criada
            if($user->role === "provider") {
                $user->category_id = $category->id;
                $user->save();
            }

            // Cria 2 serviços para cada usuário
            $services = Service::factory(2)->create([
                'user_id' => $user->id,
            ]);

            // Para cada serviço, cria 5 reviews e 3 fotos
            $services->each(function ($service) use ($user) {
                Review::factory(5)->create(['service_id' => $service->id, 'user_id' => $user->id]);
                Photo::factory(3)->create(['service_id' => $service->id]);
            });
        });
    }
}