<?php

namespace Tests\Unit\Model;

use App\Chapter;
use App\ReadChapter;
use App\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function testChapter(): void
    {
        $user = factory(User::class)->create();

        $chapter = factory(Chapter::class)->create();

        factory(ReadChapter::class)->create([
            'user_id' => $user->id,
            'chapter_id' => $chapter->id,
        ]);

        $this->assertCount(1, $user->chapters);
    }
}
