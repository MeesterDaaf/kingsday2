<x-base-layout>
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6">
        <div class="max-w-md w-full space-y-8 bg-white shadow-md rounded-lg p-8">
            <div>
                <h2 class="mt-6 text-center text-4xl font-extrabold text-gray-900">
                    Maak je Koningsdag voorspelling
                </h2>
                <p class="mt-4 text-center text-lg text-gray-600">
                    Betaal €0,50 voor een voorspelling
                </p>
            </div>
            <form class="mt-8 space-y-6" action="{{ route('predictions.store') }}" method="POST">
                @csrf
                <div class="rounded-md shadow-sm -space-y-px">
                    <div class="mt-4">
                        <label for="name" class="sr-only">Naam</label>
                        <input id="name" name="name" type="text" required
                            class="appearance-none rounded-none relative block w-full px-4 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-orange-500 focus:border-orange-500 focus:z-10 text-lg"
                            placeholder="Naam">
                    </div>
                    <div class="mt-4">
                        <label for="email" class="sr-only">Emailadres</label>
                        <input id="email" name="email" type="email" required
                            class="appearance-none rounded-none relative block w-full px-4 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-orange-500 focus:border-orange-500 focus:z-10 text-lg"
                            placeholder="Emailadres">
                    </div>
                    <div class="mt-4">
                        <label for="prediction" class="sr-only">Voorspelling</label>
                        <input id="prediction" name="prediction" type="number" required
                            class="appearance-none rounded-none relative block w-full px-4 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-orange-500 focus:border-orange-500 focus:z-10 text-lg"
                            placeholder="Je voorspelling (in grammen)">
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-lg font-medium rounded-md text-white bg-orange-600 hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                        Voorspelling indienen
                    </button>
                </div>
                <div class="mt-22 ">
                    <img src="{{ asset('storage/NCFS.jpg') }}" alt="NCFS Logo" class="mx-auto h-12 w-auto mb-4">
                    <p class="text-center text-gray-600 mb-4 italic">
                        De helft van de opbrengst gaat naar het Nederlandse Cystic Fibrosis Stichting (NCFS).
                        <a href="{{ route('predictions.customer') }}"
                            class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-lg font-medium rounded-md text-white bg-orange-400 hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                            Bekijk alle voorspellingen
                        </a>
                </div>
        </div>
        </form>
    </div>
    </div>
</x-base-layout>
