@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-red-600">{{ __('Oups ! Il y a eu un problème.') }}</div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
               {{ $error }}
            @endforeach
        </ul>
    </div>
@endif
