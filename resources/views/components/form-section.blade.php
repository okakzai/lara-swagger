@props(['submit'])


<div {{ $attributes->merge(['class' => '']) }}>
    <x-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="description">{{ $description }}</x-slot>
    </x-section-title>
    <x-section-border />
    <div class="md:mt-0 md:col-span-2">
        <form wire:submit="{{ $submit }}" data-parsley-validate>
            <!-- <div class="px-4 py-5 bg-white sm:p-6 {{ isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md' }}"> -->
                <!-- <div class="grid grid-cols-6 gap-6"> -->
                    {{ $form }}
                <!-- </div> -->
            <!-- </div> -->

            @if (isset($actions))
                <div class="">
                    {{ $actions }}
                </div>
            @endif
        </form>
    </div>
</div>
