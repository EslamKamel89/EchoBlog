<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * 
 *
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\PostFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post query()
 * @mixin \Eloquent
 */
class Post extends Model {
	/** @use HasFactory<\Database\Factories\PostFactory> */
	use HasFactory;
	protected $fillable = [ 
		'user_id',
		'body',
		'likes',
	];
	public function user(): BelongsTo {
		return $this->belongsTo( User::class);
	}
}
