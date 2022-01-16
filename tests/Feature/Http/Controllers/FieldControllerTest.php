<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Field;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\FieldController
 */
class FieldControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $fields = Field::factory()->count(3)->create();

        $response = $this->get(route('field.index'));

        $response->assertOk();
        $response->assertViewIs('field.index');
        $response->assertViewHas('fields');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('field.create'));

        $response->assertOk();
        $response->assertViewIs('field.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\FieldController::class,
            'store',
            \App\Http\Requests\FieldStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $heading = $this->faker->word;
        $description = $this->faker->text;
        $field_type = $this->faker->numberBetween(-8, 8);

        $response = $this->post(route('field.store'), [
            'heading' => $heading,
            'description' => $description,
            'field_type' => $field_type,
        ]);

        $fields = Field::query()
            ->where('heading', $heading)
            ->where('description', $description)
            ->where('field_type', $field_type)
            ->get();
        $this->assertCount(1, $fields);
        $field = $fields->first();

        $response->assertRedirect(route('field.index'));
        $response->assertSessionHas('field.id', $field->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $field = Field::factory()->create();

        $response = $this->get(route('field.show', $field));

        $response->assertOk();
        $response->assertViewIs('field.show');
        $response->assertViewHas('field');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $field = Field::factory()->create();

        $response = $this->get(route('field.edit', $field));

        $response->assertOk();
        $response->assertViewIs('field.edit');
        $response->assertViewHas('field');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\FieldController::class,
            'update',
            \App\Http\Requests\FieldUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $field = Field::factory()->create();
        $heading = $this->faker->word;
        $description = $this->faker->text;
        $field_type = $this->faker->numberBetween(-8, 8);

        $response = $this->put(route('field.update', $field), [
            'heading' => $heading,
            'description' => $description,
            'field_type' => $field_type,
        ]);

        $field->refresh();

        $response->assertRedirect(route('field.index'));
        $response->assertSessionHas('field.id', $field->id);

        $this->assertEquals($heading, $field->heading);
        $this->assertEquals($description, $field->description);
        $this->assertEquals($field_type, $field->field_type);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $field = Field::factory()->create();

        $response = $this->delete(route('field.destroy', $field));

        $response->assertRedirect(route('field.index'));

        $this->assertDeleted($field);
    }
}
