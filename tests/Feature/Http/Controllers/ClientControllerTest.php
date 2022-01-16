<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Client;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ClientController
 */
class ClientControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $clients = Client::factory()->count(3)->create();

        $response = $this->get(route('client.index'));

        $response->assertOk();
        $response->assertViewIs('client.index');
        $response->assertViewHas('clients');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('client.create'));

        $response->assertOk();
        $response->assertViewIs('client.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ClientController::class,
            'store',
            \App\Http\Requests\ClientStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $name = $this->faker->name;
        $organization = $this->faker->word;
        $address = $this->faker->word;
        $country = $this->faker->country;
        $state = $this->faker->word;
        $city = $this->faker->city;
        $zipcode = $this->faker->word;
        $lat = $this->faker->latitude;
        $lng = $this->faker->longitude;

        $response = $this->post(route('client.store'), [
            'name' => $name,
            'organization' => $organization,
            'address' => $address,
            'country' => $country,
            'state' => $state,
            'city' => $city,
            'zipcode' => $zipcode,
            'lat' => $lat,
            'lng' => $lng,
        ]);

        $clients = Client::query()
            ->where('name', $name)
            ->where('organization', $organization)
            ->where('address', $address)
            ->where('country', $country)
            ->where('state', $state)
            ->where('city', $city)
            ->where('zipcode', $zipcode)
            ->where('lat', $lat)
            ->where('lng', $lng)
            ->get();
        $this->assertCount(1, $clients);
        $client = $clients->first();

        $response->assertRedirect(route('client.index'));
        $response->assertSessionHas('client.id', $client->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $client = Client::factory()->create();

        $response = $this->get(route('client.show', $client));

        $response->assertOk();
        $response->assertViewIs('client.show');
        $response->assertViewHas('client');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $client = Client::factory()->create();

        $response = $this->get(route('client.edit', $client));

        $response->assertOk();
        $response->assertViewIs('client.edit');
        $response->assertViewHas('client');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ClientController::class,
            'update',
            \App\Http\Requests\ClientUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $client = Client::factory()->create();
        $name = $this->faker->name;
        $organization = $this->faker->word;
        $address = $this->faker->word;
        $country = $this->faker->country;
        $state = $this->faker->word;
        $city = $this->faker->city;
        $zipcode = $this->faker->word;
        $lat = $this->faker->latitude;
        $lng = $this->faker->longitude;

        $response = $this->put(route('client.update', $client), [
            'name' => $name,
            'organization' => $organization,
            'address' => $address,
            'country' => $country,
            'state' => $state,
            'city' => $city,
            'zipcode' => $zipcode,
            'lat' => $lat,
            'lng' => $lng,
        ]);

        $client->refresh();

        $response->assertRedirect(route('client.index'));
        $response->assertSessionHas('client.id', $client->id);

        $this->assertEquals($name, $client->name);
        $this->assertEquals($organization, $client->organization);
        $this->assertEquals($address, $client->address);
        $this->assertEquals($country, $client->country);
        $this->assertEquals($state, $client->state);
        $this->assertEquals($city, $client->city);
        $this->assertEquals($zipcode, $client->zipcode);
        $this->assertEquals($lat, $client->lat);
        $this->assertEquals($lng, $client->lng);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $client = Client::factory()->create();

        $response = $this->delete(route('client.destroy', $client));

        $response->assertRedirect(route('client.index'));

        $this->assertDeleted($client);
    }
}
