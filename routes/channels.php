<?php

use App\Models\User;
use Illuminate\Support\Facades\Broadcast;
Broadcast::channel( 'presence-posts', function (?User $user) {
	return true;
} );
Broadcast::channel( 'posts', function (?User $user) {
	return true;
} );
