<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 py-8">

<div class="max-w-2xl mx-auto bg-white shadow-md rounded px-8 py-6 mb-6">
    <h1 class="text-2xl font-bold mb-4">Send a Message</h1>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('messages.store') }}">
        @csrf

        <div class="mb-4">
            <label class="block">Name</label>
            <input type="text" name="name" value="{{ old('name') }}" class="w-full border rounded p-2">
            @error('name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <div class="mb-4">
            <label class="block">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" class="w-full border rounded p-2">
            @error('email') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <div class="mb-4">
            <label class="block">Message</label>
            <textarea name="message" class="w-full border rounded p-2">{{ old('message') }}</textarea>
            @error('message') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <button class="bg-blue-500 text-white px-4 py-2 rounded" type="submit">Send</button>
    </form>
</div>

<div class="max-w-2xl mx-auto bg-white shadow-md rounded px-8 py-6">
    <h2 class="text-xl font-bold mb-4">All Messages</h2>

    @forelse($messages as $msg)
        <div class="border-b py-3">
            <p><strong>Name:</strong> {{ $msg->name }}</p>
            <p><strong>Email:</strong> {{ $msg->email }}</p>
            <p class="break-words"><strong>Message:</strong> {{ $msg->message }}</p>
            <p><strong>Created at:</strong> {{ $msg->created_at->format('d M Y, H:i') }}</p>
        </div>
    @empty
        <p class="text-gray-500">No messages yet.</p>
    @endforelse
</div>

</body>
</html>
