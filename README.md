# ROConnect - WebRTC Video Call

A Laravel application featuring real-time WebRTC video calling using Livewire and Pusher (via Reverb).

## Features
- Peer-to-peer Video & Audio calling
- Real-time signaling via Laravel Reverb/Pusher
- Secure TURN relay for restrictive networks
- One-click Hang Up for both participants

## Installation
1. `composer install`
2. `npm install`
3. `cp .env.example .env` (and fill in credentials)
4. `php artisan key:generate`
5. `php artisan migrate`
6. `npm run build`
