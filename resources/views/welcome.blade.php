<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WebRTC Video Call</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="bg-slate-50 min-h-screen">
        <main class="max-w-7xl mx-auto px-4 py-8 md:py-12">
            <section class="mb-8 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm md:p-8">
                <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                    <div>
                        <p class="text-xs uppercase tracking-widest text-teal-700 font-semibold">ROConnect MVP</p>
                        <h1 class="mt-2 text-3xl md:text-4xl font-bold text-slate-900">Cross-Cultural Conversation Hub</h1>
                        <p class="mt-3 text-slate-600 max-w-2xl">
                            This is the default landing area for upcoming video conversation features. Translation can be tested today in the standalone engine playground.
                        </p>
                    </div>
                    <a
                        href="{{ route('translator.index') }}"
                        class="inline-flex items-center justify-center rounded-xl bg-teal-700 px-6 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-teal-800"
                    >
                        Translation Engine
                    </a>
                </div>
            </section>

            <section class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm md:p-6">
                <div class="mb-4 flex items-center justify-between">
                    <h2 class="text-xl font-semibold text-slate-900">Video Conversation Landing (Placeholder)</h2>
                    <span class="rounded-full bg-slate-100 px-3 py-1 text-xs font-medium text-slate-600">Preview Area</span>
                </div>
                <livewire:voice-call />
            </section>
        </main>
        @livewireScripts
    </body>
</html>
