<?php

namespace Idez\DockOne;

use Idez\DockOne\Data\AuthenticationToken;
use Idez\DockOne\Data\Card;
use Idez\DockOne\Exceptions\AuthenticationException;
use Illuminate\Support\Facades\Http;

class DockOne
{
    private AuthenticationToken $token;

    /**
     * @throws AuthenticationException
     */
    private function authenticate($username, $password): AuthenticationToken
    {
        $authenticate = Http::withBasicAuth($username, $password)
            ->baseUrl('auth.'.$this->baseURL)
            ->withQueryParameters([
                'grant_type' => 'client_credentials',
            ])
            ->post('/oauth2/token');

        if($authenticate->failed()){
            throw new AuthenticationException('Failed to authenticate with DockOne');
        }

        return AuthenticationToken::fromArray($authenticate->json());
    }

    /**
     * @param  string  $clientID
     * @param  string  $clientSecret
     * @param  string  $baseURL
     */
    public function __construct(string $clientID, string $clientSecret, private readonly string $baseURL)
    {
        $this->token = cache()->remember(
            key: 'dock-token',
            ttl: 3500,
            callback: fn() => $this->authenticate($clientID, $clientSecret)
        );
    }

    private function client($prefix = 'global')
    {
        return Http::withToken($this->token->access_token)
            ->baseUrl($prefix.$this->baseURL);
    }

    public function createCard(Card $card): Card
    {
        $request = $this->client()->post('/cards', $card->toArray());
        return Card::fromArray($request->json());
    }
}
