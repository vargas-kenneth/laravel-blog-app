
@props(['disabled' => false])

<input type="submit" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'submit-button']) !!}>
