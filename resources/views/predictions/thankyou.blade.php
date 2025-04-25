<x-base-layout>
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6">
        <div class="max-w-lg w-full space-y-8 bg-white shadow-md rounded-lg p-8">
            <div class="text-center">
                <div class="mb-6">
                    <svg class="mx-auto h-16 w-16 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                        </path>
                    </svg>
                </div>
                <h2 class="mt-6 text-center text-4xl font-extrabold text-gray-900">
                    Bedankt voor je voorspelling!
                </h2>
                <p class="mt-4 text-center text-lg text-gray-600 mb-12">
                    Je voorspelling is succesvol opgeslagen. We wensen je veel geluk op Koningsdag!
                </p>
                <div class="mt-12 mb-8">
                    <img src="{{ asset('storage/NCFS.jpg') }}" alt="NCFS Logo" class="mx-auto h-12 w-auto mb-4">
                    <p class="text-center text-gray-600 mb-4 italic">
                        De helft van de opbrengst gaat naar het Nederlandse Cystic Fibrosis Stichting (NCFS).
                        <a href="{{ route('predictions.customer') }}"
                            class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-lg font-medium rounded-md text-white bg-orange-600 hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                            Bekijk alle voorspellingen
                        </a>
                </div>
            </div>
        </div>
    </div>
</x-base-layout>
