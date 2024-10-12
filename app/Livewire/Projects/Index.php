<?php

namespace App\Livewire\Projects;

use Livewire\Attributes\Computed;
use Livewire\Component;
use App\Models\Project;

class Index extends Component
{
    public Project $project;

    public function render()
    {
        return view('livewire.projects.index');
    }

    #[Computed()]
    public function projects()
    {
        return Project::query()->inRandomOrder()->get();
    }
}
