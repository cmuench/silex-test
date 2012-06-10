<?php

use Silex\WebTestCase;

class FooTest extends WebTestCase
{
    /**
     * Creates the application.
     *
     * @return Symfony\Component\HttpKernel\HttpKernel
     */
    public function createApplication()
    {
        return require  __DIR__ . '/../src/app.php';
    }


    public function testFoo()
    {
        $crawler = $client->request('GET', '/index/foo/1');
        $this->assertTrue($client->getResponse()->isOk());
        $this->assertTrue($crawler->filter('h1:contains("Foo 1")')->count() > 0);
    }
}