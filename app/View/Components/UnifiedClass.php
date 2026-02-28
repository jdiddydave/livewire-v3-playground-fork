<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UnifiedClass extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $color = 'gray',
    ) {
    }

    public function inverted()
    {
        $bg_colors = [
            'blue' => 'bg-blue-200',
            'gray' => 'bg-gray-200',
        ];

        $text_colors = [
            'blue' => 'text-gray-800',
            'gray' => 'text-blue-800',
        ];

        $bg_color = $bg_colors[$this->color] ?? $bg_colors['gray'];
        $text_color = $text_colors[$this->color] ?? $text_colors['gray'];

        return $bg_color . ' ' . $text_color;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.unified-class');
    }
}
