<div class="hidden space-x-6  sm:-my-px sm:ml-4 sm:flex">
    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
    </x-jet-nav-link>
</div>
@if (auth()->user()->hasPermission('browse_users'))
<div class="hidden space-x-6  sm:-my-px sm:ml-4 sm:flex">
    <x-jet-nav-link href="{{ route('admin.user.index') }}" :active="request()->routeIs('admin.user.index')">
        {{ __('Users') }}
    </x-jet-nav-link>
</div>
@endif
@if (auth()->user()->hasPermission('browse_categories'))
<div class="hidden space-x-6  sm:-my-px sm:ml-4 sm:flex">
    <x-jet-nav-link href="{{ route('admin.category.index') }}" :active="request()->routeIs('admin.category.index')">
        {{ __('Categories') }}
    </x-jet-nav-link>
</div>
@endif
@if (auth()->user()->hasPermission('browse_roles'))
<div class="hidden space-x-6  sm:-my-px sm:ml-4 sm:flex">
    <x-jet-nav-link href="{{ route('admin.role.index') }}" :active="request()->routeIs('admin.role.index')">
        {{ __('Roles') }}
    </x-jet-nav-link>
</div>
@endif
@if (auth()->user()->hasPermission('browse_inscrits'))
<div class="hidden space-x-6  sm:-my-px sm:ml-4 sm:flex">
    <x-jet-nav-link href="{{ route('admin.inscrit.index') }}" :active="request()->routeIs('admin.inscrit.index')">
        {{ __('Inscrits') }}
    </x-jet-nav-link>
</div>
@endif

<div class="hidden space-x-6  sm:-my-px sm:ml-4 sm:flex">
    <x-jet-nav-link href="{{ route('admin.menu.index') }}" :active="request()->routeIs('admin.menu.index')">
        {{ __('Media') }}
    </x-jet-nav-link>
    
</div>

@if (auth()->user()->hasPermission('browse_posts'))
<div class="hidden space-x-6  sm:-my-px sm:ml-4 sm:flex">
    <x-jet-nav-link href="{{ route('admin.post.index') }}" :active="request()->routeIs('admin.post.index')">
        {{ __('Articles') }}
    </x-jet-nav-link>
    
</div>
@endif

