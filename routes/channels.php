<?php

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('activities', function ($user) {
    return !is_null($user);
});

Broadcast::channel('conversation-phases-{id}', function ($user, $id) {
    return $user->id == $id;
});