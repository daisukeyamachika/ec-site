@props([
    'title',
    'message' => 'メッセージ初期値です。',
    'content' => '本文初期値です。'
])

<div {{ $attributes->merge([
    'class' => 'border shadow w-1/4 p-2',
]) }}>
    <div>{{ $title }}</div>
    <div>画像</div>
    <div>{{ $content }}</div>
    <div>{{ $message }}</div>
</div>
