<?php

namespace Tests\Feature;

use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaskTest extends TestCase
{
    // // use RefreshDatabase;
    // /**
    //  * @test
    //  */
    // public function 一覧を取得できる()
    // {
    //     $tasks = Task::factory()->count(10)->create();

    //     $response = $this->getJson('api/tasks');
        
    //     $response
    //         ->assertOK()
    //         ->assertJsonCount($tasks->count());
    // }


    // /**
    //  * @test
    //  */
    // public function 登録することができる()
    // {
    //     $data = [
    //         'title' => 'テスト投稿',
    //         'user_id' => 1
    //     ];

    //     $response = $this->postJson('api/tasks', $data);

    //     $response
    //         ->assertCreated()
    //         ->assertJsonFragment($data);
    // }

    /**
     * @test
     */
    // public function 更新することができる()
    // {
    //     $task = Task::find(1);

    //     $task->title = '書き換え';

    //     $response = $this->patchJson("api/tasks/{$task->id}", $task->toArray());

    //     $response
    //         ->assertOK()
    //         ->assertJsonFragment($task->toArray());
    // }

    // /**
    //  * @test
    //  */
    // public function 削除することができる()
    // {
    //     $response = $this->deleteJson("api/tasks/1");

    //     $response->assertOK();
    // }

    /**
     * @test
     */
    public function タイトルが空の場合は登録できない()
    {
        $data = [
            'title' => '',
            'user_id' => 1
        ];

        $response = $this->postJson('api/tasks', $data);
         
        $response
            ->assertStatus(422)
            ->assertJsonValidationErrors([
                'title' => 'validation.required'
            ]);
    }

}
