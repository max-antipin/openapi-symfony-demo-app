<?php

declare(strict_types=1);

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomeControllerTest extends WebTestCase
{
    public function testResponse(): void
    {
        $client = static::createClient();
        $client->request('GET', '/');
        $this->assertResponseIsSuccessful();
        $response = $client->getResponse();
        $this->assertSame('application/json', $response->headers->get('Content-Type'));
        $this->assertSame('[]', $response->getContent());
    }
}
