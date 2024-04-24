<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CDN link --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <title>My contacts</title>
</head>
<body class="w-full h-screen flex justify-center items-center">
    <div class="w-[50rem] border-2 p-2">
        <header class="w-full flex items-center gap-4 divide-x mb-4">
            <div class="pl-4 flex-1">id</div>
            <div class="pl-4 flex-1">Fullname</div>
            <div class="pl-4 flex-1">Email</div>
            <div class="pl-4 flex-1">Message</div>
        </header>

        {{-- {{$contacts}} --}}

        {{-- rows --}}
        @foreach ($contacts as $contact)
        <div class="w-full flex items-center gap-4 divide-x even:border-t pt-2">
            <div class="pl-4 flex-1">{{$contact->id}}</div>
            <div class="pl-4 flex-1">{{$contact->fullname}}</div>
            <div class="pl-4 flex-1">{{$contact->email}}</div>
            <div class="pl-4 flex-1">{{$contact->message}}</div>
        </div>
        @endforeach
    </div>
</body>
</html>
