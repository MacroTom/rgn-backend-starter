<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    {{-- CDN link --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="w-full h-screen flex flex-col items-center justify-center bg-slate-200">

    {{-- show error messages if any --}}
    <div class="w-full flex gap-1 justify-center">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p class="max-w-md text-sm text-red-400 p-2 border-2 border-red-400 bg-red-100 rounded-lg mb-2">{{ $error }}</p>
            @endforeach
        @endif
    </div>

    <form class="w-full max-w-lg min-h-80 bg-white rounded-lg p-8 shadow" method="post" action="{{route('register')}}">
        {{-- csrf token --}}
        @csrf

        <h1 class="text-xl text-center font-medium mb-10">Registration</h1>

        <section class="w-full grid grid-cols-2 gap-x-6 gap-y-4 mb-8">
            <div class="w-full flex flex-col items-start">
                <label class="text-sm mb-2">First name</label>
                <input
                    class="bg-transparent border rounded-lg outline-none p-1 focus:outline-2 focus:outline-slate-600 w-full"
                    type="text"
                    name="first_name"
                    value="{{old('first_name')}}"
                />
            </div>
            <div class="w-full flex flex-col items-start">
                <label class="text-sm mb-2">Last name</label>
                <input
                    class="bg-transparent border rounded-lg outline-none p-1 focus:outline-2 focus:outline-slate-600 w-full"
                    type="text"
                    name="last_name"
                    value="{{old('last_name')}}"
                />
            </div>
            <div class="w-full flex flex-col items-start">
                <label class="text-sm mb-2">Email</label>
                <input
                    class="bg-transparent border rounded-lg outline-none p-1 focus:outline-2 focus:outline-slate-600 w-full"
                    type="text"
                    name="email"
                    value="{{old('email')}}"
                />
            </div>
            <div class="w-full flex flex-col items-start">
                <label class="text-sm mb-2">Company</label>
                <input
                    class="bg-transparent border rounded-lg outline-none p-1 focus:outline-2 focus:outline-slate-600 w-full"
                    type="text"
                    name="company"
                    value="{{old('company')}}"
                />
            </div>
            <div class="w-full flex flex-col items-start">
                <label class="text-sm mb-2">Address</label>
                <input
                    class="bg-transparent border rounded-lg outline-none p-1 focus:outline-2 focus:outline-slate-600 w-full"
                    type="text"
                    name="address"
                    value="{{old('address')}}"
                />
            </div>
            <div class="w-full flex flex-col items-start">
                <label class="text-sm mb-2">Password</label>
                <input
                    class="bg-transparent border rounded-lg outline-none p-1 focus:outline-2 focus:outline-slate-600 w-full"
                    type="password"
                    name="password"
                    value="{{old('password')}}"
                />
            </div>
        </section>

        <button type="submit" class="w-full outline-none px-4 py-2 rounded-lg bg-sky-400 text-white text-sm hover:bg-sky-600">Register</button>
    </form>
</body>
</html>
