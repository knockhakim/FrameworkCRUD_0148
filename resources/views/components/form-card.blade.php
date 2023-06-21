<div class="p-3 text-gray-900">
    @if(isset($form_header))
        <div class="px-4">
            {{ $form_header }}
        </div>
    @endif
    {{ $slot }}
</div>
