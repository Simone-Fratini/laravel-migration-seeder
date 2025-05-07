<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-8 text-center">Treni in Partenza</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($trains as $train)
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all transform hover:-translate-y-1">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800">{{ $train->company }}</h2>
                            <p class="text-sm text-gray-500">Codice: {{ $train->train_code }}</p>
                        </div>
                        <div class="flex flex-col items-end">
                            <span class="px-4 py-1.5 rounded-full text-sm font-medium
                                {{ $train->cancelled ? 'bg-red-200 text-red-800' : 
                                   ($train->on_time ? 'bg-emerald-200 text-emerald-800' : 'bg-amber-200 text-amber-800') }}">
                                {{ $train->cancelled ? 'Cancellato' : ($train->on_time ? 'In Orario' : 'In Ritardo') }}
                            </span>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="flex justify-between items-center">
                            <div class="text-gray-700">
                                <p class="font-semibold text-lg">{{ $train->departure_station }}</p>
                                <p class="text-sm text-gray-500">{{ $train->departure_time }}</p>
                            </div>
                            <div class="text-gray-700 text-right">
                                <p class="font-semibold text-lg">{{ $train->arrival_station }}</p>
                                <p class="text-sm text-gray-500">{{ $train->arrival_time }}</p>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-gray-100">
                            <p class="text-sm text-gray-600 font-medium">
                                Carrozze: {{ $train->carriages_number }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>