<x-filament-panels::page>

    <x-filament::avatar
        src="https://musicart.xboxlive.com/7/4d4d6500-0000-0000-0000-000000000002/504/image.jpg?w=1920&h=1080"
        alt="Dan Harrin"
        size="lg"
        :circular="true"
    />

    <x-filament::badge size="xs" icon="heroicon-m-sparkles">
        New
    </x-filament::badge>

    <x-filament::breadcrumbs :breadcrumbs="[
    '/' => 'Home',
    '/dashboard' => 'Dashboard',
    '/dashboard/users' => 'Users',
    '/dashboard/users/create' => 'Create User',
]" />

    <x-filament::button wire:click="openNewUserModal" icon="heroicon-m-sparkles" tooltip="Register a user">
        New user
    </x-filament::button>

    <x-filament::button
        href="https://filamentphp.com"
        tag="a"
        target="_blank"
    >
        Filament
    </x-filament::button>

    <x-filament::button>
        Mark notifications as read

        <x-slot name="badge">
            3
        </x-slot>
    </x-filament::button>

    <label>
        <x-filament::input.checkbox
            wire:model="isAdmin"
            :valid="! $errors->has('isAdmin')"
        />

        <span>
        Is Admin
    </span>
    </label>

    <x-filament::dropdown>
        <x-slot name="trigger">
            <x-filament::button>
                More actions
            </x-filament::button>
        </x-slot>

        <x-filament::dropdown.list>
            <x-filament::dropdown.list.item wire:click="openViewModal"
                href="https://filamentphp.com"
                tag="a"
                >
                Filament
            </x-filament::dropdown.list.item>

            <x-filament::dropdown.list.item wire:click="openEditModal">
                Edit
            </x-filament::dropdown.list.item>

            <x-filament::dropdown.list.item wire:click="openDeleteModal">
                Delete
            </x-filament::dropdown.list.item>
        </x-filament::dropdown.list>
    </x-filament::dropdown>

    <x-filament::icon-button
        icon="heroicon-m-plus"
        wire:click="openNewUserModal"
        label="New label"
    />

    <x-filament::input.wrapper>
        <x-filament::input
            type="text"
            wire:model="name"
        />
    </x-filament::input.wrapper>

    <x-filament::input.wrapper>
        <x-filament::input.select wire:model="status">
            <option value="draft">Draft</option>
            <option value="reviewing">Reviewing</option>
            <option value="published">Published</option>
        </x-filament::input.select>
    </x-filament::input.wrapper>

    <x-filament::input.wrapper>
        <x-slot name="prefix">
            https://
        </x-slot>

        <x-filament::input
            type="text"
            wire:model="domain"
        />

        <x-slot name="suffix">
            .com
        </x-slot>
    </x-filament::input.wrapper>

    <x-filament::modal slide-over>
        <x-slot name="heading">
            Modal heading
        </x-slot>

        <x-slot name="trigger">
            <x-filament::button>
                Open modal
            </x-filament::button>
        </x-slot>

        {{-- Modal content --}}
    </x-filament::modal>

    <x-filament::section>
        <x-slot name="heading">
            User details
        </x-slot>

        {{-- Content --}}
    </x-filament::section>

    <x-filament::tabs label="Content tabs">
        <x-filament::tabs.item>
            Tab 1
        </x-filament::tabs.item>

        <x-filament::tabs.item>
            Tab 2
        </x-filament::tabs.item>

        <x-filament::tabs.item>
            Tab 2
        </x-filament::tabs.item>
    </x-filament::tabs>

</x-filament-panels::page>
