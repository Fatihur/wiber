<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\Himpunan;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HimpunanControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $this->actingAs(
            User::factory()->create(['email' => 'admin@admin.com'])
        );

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_displays_index_view_with_himpunans(): void
    {
        $himpunans = Himpunan::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('himpunans.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.himpunans.index')
            ->assertViewHas('himpunans');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_himpunan(): void
    {
        $response = $this->get(route('himpunans.create'));

        $response->assertOk()->assertViewIs('app.himpunans.create');
    }

    /**
     * @test
     */
    public function it_stores_the_himpunan(): void
    {
        $data = Himpunan::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('himpunans.store'), $data);

        $this->assertDatabaseHas('himpunans', $data);

        $himpunan = Himpunan::latest('id')->first();

        $response->assertRedirect(route('himpunans.edit', $himpunan));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_himpunan(): void
    {
        $himpunan = Himpunan::factory()->create();

        $response = $this->get(route('himpunans.show', $himpunan));

        $response
            ->assertOk()
            ->assertViewIs('app.himpunans.show')
            ->assertViewHas('himpunan');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_himpunan(): void
    {
        $himpunan = Himpunan::factory()->create();

        $response = $this->get(route('himpunans.edit', $himpunan));

        $response
            ->assertOk()
            ->assertViewIs('app.himpunans.edit')
            ->assertViewHas('himpunan');
    }

    /**
     * @test
     */
    public function it_updates_the_himpunan(): void
    {
        $himpunan = Himpunan::factory()->create();

        $data = [
            'himpunan' => $this->faker->text(255),
            'wa' => $this->faker->text(255),
        ];

        $response = $this->put(route('himpunans.update', $himpunan), $data);

        $data['id'] = $himpunan->id;

        $this->assertDatabaseHas('himpunans', $data);

        $response->assertRedirect(route('himpunans.edit', $himpunan));
    }

    /**
     * @test
     */
    public function it_deletes_the_himpunan(): void
    {
        $himpunan = Himpunan::factory()->create();

        $response = $this->delete(route('himpunans.destroy', $himpunan));

        $response->assertRedirect(route('himpunans.index'));

        $this->assertModelMissing($himpunan);
    }
}
