<?php

use Livewire\Component;

new class extends Component
{
    public function render()
    {
        return $this->view()->title('Dashboard');
    }
};