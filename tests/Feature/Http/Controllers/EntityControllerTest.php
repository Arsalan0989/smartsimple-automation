<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Entity;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\EntityController
 */
class EntityControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $entities = Entity::factory()->count(3)->create();

        $response = $this->get(route('entity.index'));

        $response->assertOk();
        $response->assertViewIs('entity.index');
        $response->assertViewHas('entities');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('entity.create'));

        $response->assertOk();
        $response->assertViewIs('entity.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\EntityController::class,
            'store',
            \App\Http\Requests\EntityStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $heading = $this->faker->word;
        $parent_id = $this->faker->numberBetween(-100000, 100000);
        $involve_client = $this->faker->numberBetween(-8, 8);
        $has_childs = $this->faker->numberBetween(-8, 8);
        $slug = $this->faker->slug;
        $icon = $this->faker->word;
        $menu_title = $this->faker->word;
        $show_in_menu = $this->faker->numberBetween(-8, 8);
        $published = $this->faker->numberBetween(-8, 8);
        $company_id = $this->faker->numberBetween(-100000, 100000);
        $description = $this->faker->text;

        $response = $this->post(route('entity.store'), [
            'heading' => $heading,
            'parent_id' => $parent_id,
            'involve_client' => $involve_client,
            'has_childs' => $has_childs,
            'slug' => $slug,
            'icon' => $icon,
            'menu_title' => $menu_title,
            'show_in_menu' => $show_in_menu,
            'published' => $published,
            'company_id' => $company_id,
            'description' => $description,
        ]);

        $entities = Entity::query()
            ->where('heading', $heading)
            ->where('parent_id', $parent_id)
            ->where('involve_client', $involve_client)
            ->where('has_childs', $has_childs)
            ->where('slug', $slug)
            ->where('icon', $icon)
            ->where('menu_title', $menu_title)
            ->where('show_in_menu', $show_in_menu)
            ->where('published', $published)
            ->where('company_id', $company_id)
            ->where('description', $description)
            ->get();
        $this->assertCount(1, $entities);
        $entity = $entities->first();

        $response->assertRedirect(route('entity.index'));
        $response->assertSessionHas('entity.id', $entity->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $entity = Entity::factory()->create();

        $response = $this->get(route('entity.show', $entity));

        $response->assertOk();
        $response->assertViewIs('entity.show');
        $response->assertViewHas('entity');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $entity = Entity::factory()->create();

        $response = $this->get(route('entity.edit', $entity));

        $response->assertOk();
        $response->assertViewIs('entity.edit');
        $response->assertViewHas('entity');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\EntityController::class,
            'update',
            \App\Http\Requests\EntityUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $entity = Entity::factory()->create();
        $heading = $this->faker->word;
        $parent_id = $this->faker->numberBetween(-100000, 100000);
        $involve_client = $this->faker->numberBetween(-8, 8);
        $has_childs = $this->faker->numberBetween(-8, 8);
        $slug = $this->faker->slug;
        $icon = $this->faker->word;
        $menu_title = $this->faker->word;
        $show_in_menu = $this->faker->numberBetween(-8, 8);
        $published = $this->faker->numberBetween(-8, 8);
        $company_id = $this->faker->numberBetween(-100000, 100000);
        $description = $this->faker->text;

        $response = $this->put(route('entity.update', $entity), [
            'heading' => $heading,
            'parent_id' => $parent_id,
            'involve_client' => $involve_client,
            'has_childs' => $has_childs,
            'slug' => $slug,
            'icon' => $icon,
            'menu_title' => $menu_title,
            'show_in_menu' => $show_in_menu,
            'published' => $published,
            'company_id' => $company_id,
            'description' => $description,
        ]);

        $entity->refresh();

        $response->assertRedirect(route('entity.index'));
        $response->assertSessionHas('entity.id', $entity->id);

        $this->assertEquals($heading, $entity->heading);
        $this->assertEquals($parent_id, $entity->parent_id);
        $this->assertEquals($involve_client, $entity->involve_client);
        $this->assertEquals($has_childs, $entity->has_childs);
        $this->assertEquals($slug, $entity->slug);
        $this->assertEquals($icon, $entity->icon);
        $this->assertEquals($menu_title, $entity->menu_title);
        $this->assertEquals($show_in_menu, $entity->show_in_menu);
        $this->assertEquals($published, $entity->published);
        $this->assertEquals($company_id, $entity->company_id);
        $this->assertEquals($description, $entity->description);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $entity = Entity::factory()->create();

        $response = $this->delete(route('entity.destroy', $entity));

        $response->assertRedirect(route('entity.index'));

        $this->assertDeleted($entity);
    }
}
