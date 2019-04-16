<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testCreateUser()
    {
        $user = factory(User::class)->create();
        $this->json('POST', '/users', [$user]);
        $this->assertDatabaseHas('users', [
            'name' => 'Joshua'
        ]);
    }

    public function testUpdateUser()
    {
        $data = DB::table('users')->orderBy('id', 'DESC')->first();

        $update = $this->json('PATCH', '/users/'.$data->id,['last_name' => 'Unit Test']);
        $update->assertStatus(200);
        $this->assertDatabaseHas('users', [
            'last_name' => 'Unit Test'
        ]);
    }

    public function testDeleteUser()
    {
        $data = DB::table('users')->orderBy('id', 'DESC')->first();

        $delete = $this->json('DELETE', '/users/'.$data->id);
        $delete->assertStatus(200);
        $this->assertDatabaseMissing('users', [
            'id' => $data->id
        ]);
    }
}
