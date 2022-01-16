<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Fieldset;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\FieldsetController
 */
class FieldsetControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $fieldsets = Fieldset::factory()->count(3)->create();

        $response = $this->get(route('fieldset.index'));

        $response->assertOk();
        $response->assertViewIs('fieldset.index');
        $response->assertViewHas('fieldsets');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('fieldset.create'));

        $response->assertOk();
        $response->assertViewIs('fieldset.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\FieldsetController::class,
            'store',
            \App\Http\Requests\FieldsetStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $heading = $this->faker->word;
        $description = $this->faker->text;

        $response = $this->post(route('fieldset.store'), [
            'heading' => $heading,
            'description' => $description,
        ]);

        $fieldsets = Fieldset::query()
            ->where('heading', $heading)
            ->where('description', $description)
            ->get();
        $this->assertCount(1, $fieldsets);
        $fieldset = $fieldsets->first();

        $response->assertRedirect(route('fieldset.index'));
        $response->assertSessionHas('fieldset.id', $fieldset->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $fieldset = Fieldset::factory()->create();

        $response = $this->get(route('fieldset.show', $fieldset));

        $response->assertOk();
        $response->assertViewIs('fieldset.show');
        $response->assertViewHas('fieldset');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $fieldset = Fieldset::factory()->create();

        $response = $this->get(route('fieldset.edit', $fieldset));

        $response->assertOk();
        $response->assertViewIs('fieldset.edit');
        $response->assertViewHas('fieldset');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\FieldsetController::class,
            'update',
            \App\Http\Requests\FieldsetUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $fieldset = Fieldset::factory()->create();
        $heading = $this->faker->word;
        $description = $this->faker->text;

        $response = $this->put(route('fieldset.update', $fieldset), [
            'heading' => $heading,
            'description' => $description,
        ]);

        $fieldset->refresh();

        $response->assertRedirect(route('fieldset.index'));
        $response->assertSessionHas('fieldset.id', $fieldset->id);

        $this->assertEquals($heading, $fieldset->heading);
        $this->assertEquals($description, $fieldset->description);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $fieldset = Fieldset::factory()->create();

        $response = $this->delete(route('fieldset.destroy', $fieldset));

        $response->assertRedirect(route('fieldset.index'));

        $this->assertDeleted($fieldset);
    }
}
