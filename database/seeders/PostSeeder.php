<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 */
	public function run(): void {
		Post::factory()
			->count( 500 )
			->state( [ 'user_id' => 1 ] )
			->sequence( function (Sequence $sequence) {
				$dateTime = now()->subYear()->addHours( $sequence->index );
				return [ 
					'created_at' => $dateTime,
					'updated_at' => $dateTime,
				];
			} )
			->create();
	}
}
