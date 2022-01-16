<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Form;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\FormController
 */
class FormControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $forms = Form::factory()->count(3)->create();

        $response = $this->get(route('form.index'));

        $response->assertOk();
        $response->assertViewIs('form.index');
        $response->assertViewHas('forms');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('form.create'));

        $response->assertOk();
        $response->assertViewIs('form.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\FormController::class,
            'store',
            \App\Http\Requests\FormStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $heading = $this->faker->word;
        $description = $this->faker->text;
        $form_scope = $this->faker->numberBetween(-8, 8);
        $form_start_date = $this->faker->date();
        $form_ip_access = $this->faker->text;
        $published = $this->faker->numberBetween(-8, 8);

        $response = $this->post(route('form.store'), [
            'heading' => $heading,
            'description' => $description,
            'form_scope' => $form_scope,
            'form_start_date' => $form_start_date,
            'form_ip_access' => $form_ip_access,
            'published' => $published,
        ]);

        $forms = Form::query()
            ->where('heading', $heading)
            ->where('description', $description)
            ->where('form_scope', $form_scope)
            ->where('form_start_date', $form_start_date)
            ->where('form_ip_access', $form_ip_access)
            ->where('published', $published)
            ->get();
        $this->assertCount(1, $forms);
        $form = $forms->first();

        $response->assertRedirect(route('form.index'));
        $response->assertSessionHas('form.id', $form->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $form = Form::factory()->create();

        $response = $this->get(route('form.show', $form));

        $response->assertOk();
        $response->assertViewIs('form.show');
        $response->assertViewHas('form');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $form = Form::factory()->create();

        $response = $this->get(route('form.edit', $form));

        $response->assertOk();
        $response->assertViewIs('form.edit');
        $response->assertViewHas('form');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\FormController::class,
            'update',
            \App\Http\Requests\FormUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $form = Form::factory()->create();
        $heading = $this->faker->word;
        $description = $this->faker->text;
        $form_scope = $this->faker->numberBetween(-8, 8);
        $form_start_date = $this->faker->date();
        $form_ip_access = $this->faker->text;
        $published = $this->faker->numberBetween(-8, 8);

        $response = $this->put(route('form.update', $form), [
            'heading' => $heading,
            'description' => $description,
            'form_scope' => $form_scope,
            'form_start_date' => $form_start_date,
            'form_ip_access' => $form_ip_access,
            'published' => $published,
        ]);

        $form->refresh();

        $response->assertRedirect(route('form.index'));
        $response->assertSessionHas('form.id', $form->id);

        $this->assertEquals($heading, $form->heading);
        $this->assertEquals($description, $form->description);
        $this->assertEquals($form_scope, $form->form_scope);
        $this->assertEquals(Carbon::parse($form_start_date), $form->form_start_date);
        $this->assertEquals($form_ip_access, $form->form_ip_access);
        $this->assertEquals($published, $form->published);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $form = Form::factory()->create();

        $response = $this->delete(route('form.destroy', $form));

        $response->assertRedirect(route('form.index'));

        $this->assertDeleted($form);
    }
}
