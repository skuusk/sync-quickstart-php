<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Preview\Sync\Service\SyncList;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class SyncListItemTest extends HolodeckTestCase {
    public function testFetchRequest() {
        $this->holodeck->mock(new Response(500, ''));
        
        try {
            $this->twilio->preview->sync->services("ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                        ->syncLists("sid")
                                        ->syncListItems(1)->fetch();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}
        
        $this->assertTrue($this->holodeck->hasRequest(new Request(
            'get',
            'https://preview.twilio.com/Sync/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Lists/listSid/Items/1'
        )));
    }

    public function testDeleteRequest() {
        $this->holodeck->mock(new Response(500, ''));
        
        try {
            $this->twilio->preview->sync->services("ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                        ->syncLists("sid")
                                        ->syncListItems(1)->delete();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}
        
        $this->assertTrue($this->holodeck->hasRequest(new Request(
            'delete',
            'https://preview.twilio.com/Sync/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Lists/listSid/Items/1'
        )));
    }

    public function testCreateRequest() {
        $this->holodeck->mock(new Response(500, ''));
        
        try {
            $this->twilio->preview->sync->services("ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                        ->syncLists("sid")
                                        ->syncListItems->create("{}");
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}
        
        $values = array(
            'Data' => "{}",
        );
        
        $this->assertTrue($this->holodeck->hasRequest(new Request(
            'post',
            'https://preview.twilio.com/Sync/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Lists/listSid/Items',
            null,
            $values
        )));
    }

    public function testReadRequest() {
        $this->holodeck->mock(new Response(500, ''));
        
        try {
            $this->twilio->preview->sync->services("ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                        ->syncLists("sid")
                                        ->syncListItems->read();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}
        
        $this->assertTrue($this->holodeck->hasRequest(new Request(
            'get',
            'https://preview.twilio.com/Sync/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Lists/listSid/Items'
        )));
    }

    public function testUpdateRequest() {
        $this->holodeck->mock(new Response(500, ''));
        
        try {
            $this->twilio->preview->sync->services("ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                        ->syncLists("sid")
                                        ->syncListItems(1)->update("{}");
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}
        
        $values = array(
            'Data' => "{}",
        );
        
        $this->assertTrue($this->holodeck->hasRequest(new Request(
            'post',
            'https://preview.twilio.com/Sync/Services/ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Lists/listSid/Items/1',
            null,
            $values
        )));
    }
}