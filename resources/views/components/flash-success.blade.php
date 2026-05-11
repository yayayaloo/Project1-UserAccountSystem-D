@props([
    'message' => null,
])

@php($text = $message ?? session('success'))
@if ($text)
    <div class="alert alert-success" role="alert">{{ $text }}</div>
@endif
