<?php

require_once '../classes/GuestBook.php';

/**
 * Created by PhpStorm.
 * User: jackson
 * Date: 29/12/2015
 * Time: 21:24
 */
class GuestBookTest extends PHPUnit_Framework_TestCase
{
    public function testViewGuestBookWithEntries()
    {
        $GuestBook = new GuestBook();
        $GuestBook->add('Bob', 'Hi, I\'m Bob.');
        $GuestBook->add('Tom', 'Hi, I\'m Tom.');
        $entries = $GuestBook->viewAll();

        $this->assertGreaterThan(0, count($entries));
        $this->assertTrue(is_array($entries));
        foreach ($entries as $entry) {
            $this->assertTrue(is_array($entry));
            $this->assertArrayHasKey('name', $entry);
            $this->assertArrayHasKey('message', $entry);
        }
    }

    public function testViewGuestBookWithNoEntries()
    {
        $GuestBook = new GuestBook();
        $GuestBook->deleteAll();
        $entries = $GuestBook->viewAll();
        $this->assertEmpty($entries);
    }
}
