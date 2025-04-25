<x-base-layout>
    <div class="min-h-screen py-12 px-4 sm:px-6">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white shadow-md rounded-lg p-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">
                    Alle Koningsdag Voorspellingen
                </h2>

                <div class="bg-orange-50 rounded-lg p-6 mb-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="text-center">
                            <h3 class="text-lg font-semibold text-gray-700">Aantal voorspellingen</h3>
                            <p class="text-3xl font-bold text-orange-600">{{ $totalPredictions }}</p>
                        </div>
                        <div class="text-center">
                            <h3 class="text-lg font-semibold text-gray-700">Totaal opgehaald</h3>
                            <p class="text-3xl font-bold text-orange-600">
                                €{{ number_format($totalAmount, 2, ',', '.') }}</p>
                        </div>
                        <div class="text-center">
                            <h3 class="text-lg font-semibold text-gray-700">Naar goed doel</h3>
                            <p class="text-3xl font-bold text-orange-600">
                                €{{ number_format($charityAmount, 2, ',', '.') }}</p>
                        </div>
                    </div>
                </div>

                <div class="bg-orange-50 rounded-lg p-6 mb-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="text-center">
                            <h3 class="text-lg font-semibold text-gray-700">Gemiddelde voorspelling</h3>
                            <p class="text-3xl font-bold text-orange-600">
                                {{ number_format($averagePrediction, 0, ',', '.') }} gram</p>
                        </div>
                        <div class="text-center">
                            <h3 class="text-lg font-semibold text-gray-700">Laagste voorspelling</h3>
                            <p class="text-3xl font-bold text-orange-600">
                                {{ number_format($lowestPrediction, 0, ',', '.') }} gram</p>
                        </div>
                        <div class="text-center">
                            <h3 class="text-lg font-semibold text-gray-700">Hoogste voorspelling</h3>
                            <p class="text-3xl font-bold text-orange-600">
                                {{ number_format($highestPrediction, 0, ',', '.') }} gram</p>
                        </div>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Voorspelling (gram)
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Naam
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($predictions as $prediction)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ $prediction->prediction }} gram
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $prediction->user->name }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-8 text-center">
                    <a href="{{ route('home') }}"
                        class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-orange-600 hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                        Terug naar voorspelling maken
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-base-layout>
