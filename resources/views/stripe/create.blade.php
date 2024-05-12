@extends('partials.base')

@section('title', $service->nom)

@section('content')
    <main>
        <div class="w-full max-w-3xl mx-auto p-8">
            <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-md border dark:border-gray-700">
                <h1 class="text-2xl font-bold text-gray-800 dark:text-white mb-4">Paiement</h1>

                <div>
                    <h2 class="text-xl font-semibold text-gray-700 dark:text-white mb-2">Informations de Paiement</h2>
                    <form action="{{ route('stripe.post') }}" method="POST" id="payment-form">
                        @csrf
                        <div class="mt-4">
                            <label for="card_number" class="block text-gray-700 dark:text-white mb-1">Numéro de Carte</label>
                            <input type="text" id="card_number"
                                class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                        </div>

                        <div class="grid grid-cols-2 gap-4 mt-4">
                            <div>
                                <label for="exp_date" class="block text-gray-700 dark:text-white mb-1">Date
                                    d'Expiration</label>
                                <input type="text" id="exp_date"
                                    class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                            </div>
                            <div>
                                <label for="cvv" class="block text-gray-700 dark:text-white mb-1">CVV</label>
                                <input type="text" id="cvv"
                                    class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none">
                            </div>
                        </div>

                        <input type="hidden" name="stripeToken" id="stripeToken">

                        <div class="mt-8 flex justify-end">
                            <button type="button" id="submit-btn"
                                class="bg-teal-500 text-white px-4 py-2 rounded-lg hover:bg-teal-700 dark:bg-teal-600 dark:text-white dark:hover:bg-teal-900">Passer
                                la Commande</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
