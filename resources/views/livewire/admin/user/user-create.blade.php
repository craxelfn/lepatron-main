<div>
    <x-jet-dialog-modal wire:model="showCreateModel">
        <x-slot name="title">
            {{ __('Créer un nouveau utilisateur') }} 
        </x-slot>

        <form wire:submit.prevent="create" autocomplete="off">

            <x-slot name="content">
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">

                    <div class="col-span-1 md:col-span-2 lg:col-span-4">
                        <x-jet-label for="name" value="{{ __('Name') }}"/>
                        <x-jet-input wire:model.defer="name" id="name" type="text" class="mt-1 block w-full" />
                        <x-jet-input-error for="name" class="mt-2"/>
                    </div>

                    <div class="col-span-2 md:col-span-4 lg:col-span-2 lg:row-span-2 order-last lg:order-none">
                        <div class="flex flex-row items-center justify-center">
                        <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                            <!-- Profile Photo File Input -->
                            <input type="file" class="hidden"
                                        wire:model="avatar"
                                        x-ref="avatar"
                                        x-on:change="
                                                photoName = $refs.avatar.files[0].name;
                                                const reader = new FileReader();
                                                reader.onload = (e) => {
                                                    photoPreview = e.target.result;
                                                };
                                                reader.readAsDataURL($refs.avatar.files[0]);
                                        " />
                            <div class="w-24 h-24 bg-gray-200 rounded-full" x-show="! photoPreview">
                                @if(!empty($avatar))
                                <img src="{{ $avatar }}" alt="{{ $avatar }}" class="h-full w-full object-cover">
                            @endif
                            </div>
                            <div class="w-24 h-24 bg-gray-200 rounded-full" x-show="photoPreview" style="display: none;">
                                <span class="block w-full h-full bg-cover bg-no-repeat bg-center rounded-full"
                                      x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                                </span>
                            </div>
                            <button class="-mt-10 mr-2 p-3 rounded-full bg-indigo-500" type="button" x-on:click.prevent="$refs.avatar.click()">
                                <svg wire:target="avatar" wire:loading.class="animate-bounce" class="w-4 h-4 text-white " xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                    <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                                </svg>
                            </button>
            
                            <x-jet-input-error for="avatar" class="mt-2" />
                        </div>
                        </div>
                    </div>

                    <div class="col-span-1 md:col-span-2">
                        <x-jet-label for="email" value="{{ __('Email') }}"/>
                        <x-jet-input wire:model.defer="email" type="text" class="mt-1 block w-full"/>
                        <x-jet-input-error for="email" class="mt-2"/>
                    </div>

                    <div class="col-span-1 md:col-span-2">
                        <x-jet-label class="text-xs" for="roleId" value="{{ __('role') }}"/>
                        <x-select wire:model="roleId" wire:key="roleCreate" class="mt-1">
                            <option value="" readonly="true" hidden="true"
                                    selected>{{ __('Selectionner un role') }}</option>
                            @forelse($roles as $key => $value)
                            @if(Auth::user()->role_id != 1 && $key == 1)
                            @continue
                            @endif
                            <option value="{{ $key }}">{{ $value }}</option>
                            @empty
                            @endforelse
                        </x-select>
                        <x-jet-input-error for="roleId" class="mt-2"/>
                    </div>



                    {{-- <div class="col-span-1 md:col-span-2">
                        <x-jet-label class="text-xs" for="select" value="{{ __('country.country') }}"/>
                        <x-select wire:model="countryId" wire:key="countryCreate" class="mt-1">
                            <option value="" readonly="true" hidden="true"
                                    selected>{{ __('country.select country') }}</option>
                            @forelse($countries as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @empty
                            @endforelse
                        </x-select>
                        <x-jet-input-error for="countryId" class="mt-2"/>
                    </div> --}}

                    {{-- <div class="col-span-1 md:col-span-2">
                        <x-jet-label class="text-xs" for="select" value="{{ __('city.city') }}"/>
                        <x-select wire:model="cityId" wire:key="cityCreate" class="mt-1">
                            <option value="" readonly="true" hidden="true"
                                    selected>{{ __('city.select city') }}</option>
                            @forelse($cities as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @empty
                            @endforelse
                        </x-select>
                        <x-jet-input-error for="cityId" class="mt-2"/>
                    </div> --}}

                    <div class="col-span-1 md:col-span-2">
                        <x-jet-label for="password" value="{{ __('Mot de passe') }}"/>
                        <x-jet-input wire:model.defer="password" type="password" class="mt-1 block w-full"/>
                        <x-jet-input-error for="password" class="mt-2"/>
                    </div>

                    <div class="col-span-1 md:col-span-2">
                        <x-jet-label for="password_confirmation" value="{{ __('Confirm Mot de passe') }}"/>
                        <x-jet-input wire:model.defer="password_confirmation"
                                    class="block mt-1 w-full" type="password"
                                    required autocomplete="new-password"/>
                    </div>

                </div>
            </x-slot>
            <x-slot name="footer">
                <x-jet-secondary-button wire:click="closeCreateModel" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-jet-secondary-button>
                <x-jet-button type="submit" wire:click="create" wire:loading.attr="disabled" class="ml-3 bg-gray-600 hover:bg-gray-800">
                    {{ __('Save') }}
                </x-jet-button>
            </x-slot>
        </form>

    </x-jet-dialog-modal>
</div>