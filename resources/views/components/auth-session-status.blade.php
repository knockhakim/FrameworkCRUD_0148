@props(['status'])

@if ($status)
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 4000)" x-show="show"
        {{ $attributes->merge(['class' => 'mx-auto mb-4 font-medium text-center text-xl text-white bg-gray-700 transform shadow-md max-w-sm px-8 py-4']) }}>
        <span>
            {{ $status }}
        </span>
    </div>
@endif
