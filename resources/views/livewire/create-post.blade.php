<div class="max-w-3xl mx-auto mt-10">
    <form wire:submit="create">
        {{ $this->form }}
    </form>

    <x-filament-actions::modals />
</div>
