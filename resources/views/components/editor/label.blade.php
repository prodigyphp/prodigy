<label {{$attributes->merge(['class' => 'pro-text-sm pro-text-gray-500 pro-block pro-mb-1'])}}>
    {{ str($label ?? '')->replace('_', ' ')->title() }}
</label>