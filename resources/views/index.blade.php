<x-test-layout xmlns:x="http://www.w3.org/1999/xlink">


    <!-- Hero section -->
    <x-sections.hero >
        <x:slot:titolo>
            Centro di eccellenza Shopify italiano
        </x:slot:titolo>
        <x:slot:sottotitolo>
            Colibrì è un gruppo di agenzie italiane ed opera come <i>centro di eccellenza</i> per Shopify su progetti enterprise e mid-market.
        </x:slot:sottotitolo>
    </x-sections.hero>

    <!-- Logo cloud -->
    <x-sections.logo-cloud />

    <!-- Feature section -->


    <!-- Testimonial section -->

    <x-sections.testimonial-overlapping-image
        image-url="{{asset('storage/img/EAL_square_mezzo-busto_1200.jpg')}}"
        name="Emilio Lodigiani" role="CEO @ Tunca, membro di Colibrì" :reverse="true"
        class="pb-16 pt-24 sm:pb-24 sm:pt-32 xl:pb-32">
        Colibrì è per Tunca la condivisione di una progetto comune: trasformare le sfide dell'eCommerce in successi tangibili per i nostri clienti.
        La nostra <em>expertise</em> in Shopify è il cuore del nostro contributo al gruppo,
        permettendoci di offrire soluzioni su misura che anticipano le esigenze del mercato.
        Insieme, stiamo scrivendo il futuro dell'eCommerce in Italia.
    </x-sections.testimonial-overlapping-image>

    <x-sections.gruppo id="chi-siamo"/>
    <x-sections.sedi class="bg-gradient-to-tr from-gray-200 pb-32 sm:pb-32 pt-24"/>

    <x-sections.testimonial-overlapping-image
        image-url="{{asset('storage/img/fracasso-linkedin.jpeg')}}"
        name="Giovanni Fracasso" role="CTO @ ICT Sviluppo, membro di Colibrì" :reverse="false"
        class="pb-16 pt-24_ sm:pb-24 sm:pt-32_ xl:pb-32">
        L'eccellenza tecnica e la nostra profonda conoscenza di Shopify sono il cuore del nostro lavoro in ICT Sviluppo.
        Questa expertise ci permette di superare le aspettative dei clienti, definendo il successo nel panorama eCommerce.
    </x-sections.testimonial-overlapping-image>


    <!-- CTA section -->
    <x-sections.cta />

    <x-sections.testimonial-overlapping-image
        image-url="{{asset('storage/img/ricotti-linkedin.jpeg')}}"
        name="Marcello Ricotti" role="CTO @ Ariadne Group, membro di Colibrì" :reverse="true"
        class="pb-16 pt-24 sm:pb-24 sm:pt-32 xl:pb-32">
        Nei progetti complessi, la chiave del successo risiede nella capacità di ascolto, nell'assistenza precisa e in un team esteso che lavora all'unisono.
        Colibrì, con Ariadne Group, porta questa filosofia in ogni sfida, trasformando la complessità in risultati concreti.
    </x-sections.testimonial-overlapping-image>



</x-test-layout>
