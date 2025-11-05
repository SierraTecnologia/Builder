<?php

class BootstrapTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->artisan('sierratecnologia:starter')
            ->expectsQuestion('Are you sure you want to overwrite any files of the same name?', true)
            ->expectsQuestion('Would you like to run the migration?', false)
            ->assertExitCode(0);
    }

    public function testBootstrapCommand()
    {
        $this->artisan('sierratecnologia:bootstrap')
            ->expectsQuestion('Are you sure you want to overwrite any files of the same name?', true)
            ->assertExitCode(0);
    }

    public function testFilesExist()
    {
        $contents = file_get_contents(base_path('resources/views/dashboard/panel.blade.php'));
        $this->assertTrue(str_contains($contents, '<a class="nav-link"'));
        $this->assertTrue(file_exists(base_path('resources/sass/_base.scss')));
    }
}
