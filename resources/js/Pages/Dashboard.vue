<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Cryptonauts
            </h2>
        </template>

        <div class="py-12 px-5 md:px-10 max-w-7xl mx-auto">
            <inertia-link :href="route('articles.show', 1)">
                <div class="grid grid-cols-2 gap-10 px-5 md:px-20 bg-white p-10 rounded-lg shadow-lg">
                    <div class="col-span-2 lg:col-span-1">
                        <img src="images/bitcoin_01.jpg" class="w-full rounded-md max-h-96">
                    </div>
                    <div class="col-span-2 lg:col-span-1 flex flex-col justify-center">
                        <h2 class="text-gray-800 text-2xl font-semibold">The future looks bright for bitcoin</h2>
                        <p class="mt-5 text-gray-500">It was an honor to take part in this year’s Bitcoin 2022 Conference in Miami. The inspiring conversations that took place at the convention center are what fuels the work we do...</p>
                    </div>
                </div>
            </inertia-link>
            <div class="grid grid-cols-6 my-12 gap-10">
                <div class="col-span-6 md:col-span-3 lg:col-span-2 bg-white p-10 rounded-lg shadow-lg">
                    <inertia-link :href="route('articles.show', 2)">
                        <img src="images/bitcoin_02.jpg" class="w-full rounded-md max-h-96">
                        <h3 class="mt-5 text-gray-600 font-semibold">
                            Bitcoin is halfway to the next halving
                        </h3>
                        <p class="mt-3 text-gray-400">Bitcoin is now in-between the prior halving and the next, blockchain data showed Thursday morning...</p>
                    </inertia-link>
                </div>
                <div class="col-span-6 md:col-span-3 lg:col-span-2 bg-white p-10 rounded-lg shadow-lg">
                    <inertia-link :href="route('articles.show', 3)">
                        <img src="images/bitcoin_03.jpg" class="w-full rounded-md max-h-96">
                        <h3 class="mt-5 text-gray-600 font-semibold">
                            Bitcoin miner marathon digital eyes 199,000 miners, holds over 9,000 BTC
                        </h3>
                        <p class="mt-3 text-gray-400">Marathon Digital Holdings Inc (Nasdaq: MARA), one of the largest North American bitcoin-miners...</p>
                    </inertia-link>
                </div>
                <div class="col-span-6 md:col-span-3 lg:col-span-2 bg-white p-10 rounded-lg shadow-lg">
                    <inertia-link :href="route('articles.show', 4)">
                        <img src="images/tesla.jpg" class="w-full rounded-md max-h-96">
                        <h3 class="mt-5 text-gray-600 font-semibold">
                            Bitcoin is "a liquid alternative to cash" says Elon Musk
                        </h3>
                        <p class="mt-3 text-gray-400">In a recent U.S. Securities and Exchange Commission (SEC) filing, Tesla Inc. reiterated its pro-Bitcoin position stating that bitcoin has “long-term potential” and is “a liquid alternative to cash”...</p>
                    </inertia-link>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'

    export default {
        components: {
            AppLayout,
        },
    }
</script>
