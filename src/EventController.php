<?php

namespace App;

use Assert\Assertion;

class EventController
{
    /**
     * @param UserInterface|User $user
     */
    public function __invoke(UserInterface $user)
    {
        Assertion::isInstanceOf($user, User::class);
        $user->getTeams();
    }
}
