@php
    $id = $getId();
    $statePath = $getStatePath();
    $extraInputAttributeBag = $getExtraInputAttributeBag()->class(['opacity-0 absolute pointer-events-none']);
@endphp

<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
    class="fi-fo-toggle-buttons-wrp"
>
    <div class="grid grid-cols-6 gap-4">
        @foreach ($getIcons() as $icon)
            @php
                $inputId = "{$id}-{$icon->getLabel()}";
            @endphp

            <div class="fi-fo-toggle-buttons-btn-ctn w-full">
                <input
                    id="{{ $inputId }}"
                    name="{{ $id }}"
                    type="radio"
                    value="{{ $icon->getLabel() }}"
                    wire:model="{{ $statePath }}"
                    wire:loading.attr="disabled"
                    {{ $extraInputAttributeBag }}
                >
                <x-filament::button
                    :for="$inputId"
                    tag="label"
                    class="w-full justify-start"
                >
                    @svg($icon->getLabel(), ['class' => 'size-10'])
                    <span>{{ $icon->value }}</span>
                </x-filament::button>
            </div>
        @endforeach
    </div>
</x-dynamic-component>
