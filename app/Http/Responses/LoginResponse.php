<?php

declare(strict_types=1);

namespace App\Http\Responses;

use Filament\Auth\Http\Responses\Contracts\LoginResponse as VendorLoginResponse;
use Filament\Facades\Filament;

class LoginResponse implements VendorLoginResponse
{
    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse($request)
    {
        /** @var \App\Models\User $user */
        $user = $request->user();

        if (! $user->canAccessPanel(Filament::getCurrentPanel())) {
            return redirect()->to('/');
        }

        return redirect()->intended(Filament::getDefaultPanel()->getUrl());
    }
}
