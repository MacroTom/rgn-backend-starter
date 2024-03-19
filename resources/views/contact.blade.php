<!DOCTYPE html>
<html>
<head>
    <title>Contact Page</title>
    {{-- CDN link --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="w-full h-screen flex items-center justify-center">
    <form method="POST" action="/save-contact" class="w-80 flex flex-col items-start gap-3">
        {{-- CRSF token --}}
        @csrf
        <input
            class="border-2 p-2 w-full rounded-lg text-sm"
            type="text"
            placeholder="Fullname"
            name="fullname"
        />

        <input
            class="border-2 p-2 w-full rounded-lg text-sm"
            type="email"
            placeholder="Email address"
            name="email"
            required
        />

        <textarea class="border-2 p-2 w-full resize-none rounded-lg text-sm" name="message" rows="8" placeholder="Message"></textarea>

        <button class="px-4 py-2 bg-sky-400 text-white rounded-lg" type="submit">Submit</button>

    </form>
</body>
</html>
