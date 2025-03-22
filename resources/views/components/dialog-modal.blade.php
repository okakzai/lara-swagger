@props(['id' => null, 'maxWidth' => null])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="my-3 px-0">
        <div class="text-lg font-medium text-gray-900">
            {{ $title }}
        </div>

        <div class="mt-4 text-sm text-gray-600">
            {{ $content }}
        </div>
    </div>

    <div class="flex flex-row justify-end text-end">
        {{ $footer }}
    </div>
</x-modal>
