<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use App\Traits\ToastAlert;
use Illuminate\Validation\Rule;
use Laravel\Jetstream\InteractsWithBanner;
use Livewire\Component;
use Illuminate\Support\Str;

class CategoryCreate extends Component
{

    use InteractsWithBanner;
    use ToastAlert;

    public $categories;

    public $name, $color, $slug, $order
    ,$parentId;

    protected $listeners = ['showCreateModel'];


    public bool $showCreateModel = false;

    public function showCreateModel(){
        $this->showCreateModel = true;
    }


    public function closeCreateModel(){
        $this->showCreateModel = false;
        $this->resetExcept('categories');
        $this->resetValidation();
        $this->resetErrorBag();
    }

    protected function rules()
    {
    return [
        'name'          => ['required', 'string', 'max:50', 'min:3', Rule::unique(Category::class)],
    ];
    }

    public function create(){
        $this->validate();

        $data = [
            'name'      =>  $this->name,
            'slug'      =>  Str::slug($this->name),
            'parent_id' =>  $this->parentId,
        ];

        Category::create($data);
        $this->closeCreateModel();
        $this->banner('Category Created');
        $this->emit('refreshParent');

    }

    public function mount($categories){
        $this->categories = Category::where('parent_id',null)->pluck('name','id');
    }

    public function render()
    {
        return view('livewire.admin.category.category-create');
    }
}
