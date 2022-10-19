{{-- about us page --}}
<x-layouts.layout>

    <section class="bg-white dark:bg-gray-900">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                    Qui sommes-nous?
                </h2>
                <p class="mb-4">
                    Ayant vu le jour sous l'initiative de l'opérateur économique Burundais, Ingénieur BIKORIMANA Innocent, la société Coopérative Gira Umutahe, CGU en sigle, est une société coopérative de type multifonctionnel tel que défini dans l'article 2 de la Loi n°1/12 du 28 juin 2017 régissant les Sociétés Coopératives au Burundi.
                </p>
                <p>
                    Le siège de la CGU est situé au chef-lieu de la commune et province Bubanza et sa gestion quotidienne se conforme aux principes coopératifs universellement reconnus tel que l'adhésion volontaire et ouverte à tous ; le pouvoir démocratique exercé par les coopérateurs ; la participation économique des coopérateurs ; l'autonomie et l'indépendance de la société coopérative ; l'éducation, la formation et l'information ; l'inter coopération ou coopération entre les coopératives ; le dévouement à la communauté.
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="rounded-lg" src="{{ asset('images/burundi-flag-on-flagpole.jpg') }}" title="Photo par aboodi vesakaran: https://www.pexels.com/photo/burundi-national-flag-13913360/" alt="Burundi flag on flag pole">
                <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{ asset('images/bikorimana-innocent.jpg') }}" alt="Bikorimana Innocent" title="Bikorimana Innocent" >
            </div>
        </div>
    </section>


    <section class="bg-white dark:bg-gray-900">
    <div class="2xl:container 2xl:mx-auto lg:py-16 lg:px-20 md:py-12 md:px-6 py-9 px-4">
        <div class="flex flex-col lg:flex-row justify-between gap-8">
            <div class="w-full lg:w-5/12 flex flex-col justify-center">
                <h1 class="text-3xl lg:text-4xl font-bold leading-9 text-gray-800 dark:text-white pb-4">Mission</h1>
                <p class="font-normal text-base leading-6 text-gray-600 dark:text-white">
                    La mission de la CGU est de « rendre l’accès facile à ses services financiers et non financiers pour toutes les personnes physiques ou des associations à faibles revenus mais économiquement actives issues des milieux ruraux et urbains afin de promouvoir leurs conditions de vie ».
                </p>
            </div>
            <div class="w-full lg:w-8/12">
                <img class="w-full h-full" src="{{ asset('images/meeting.jpeg') }}" alt="A group of People" />
            </div>
        </div>

        <div class="flex lg:flex-row flex-col justify-between gap-8 pt-12">
            <div class="w-full lg:w-8/12">
                <img class="w-full h-full" src="{{ asset('images/greeting.jpeg') }}" alt="A group of People" />
            </div>
            <div class="w-full lg:w-5/12 flex flex-col justify-center">
                <h1 class="text-3xl lg:text-4xl font-bold leading-9 text-gray-800 dark:text-white pb-4">Vision</h1>
                <p class="font-normal text-base leading-6 text-gray-600 dark:text-white">
                    Assurer un développement communautaire intégré de la personne humaine dans notre pays par l’offre des services financiers et non financiers de qualité répondant à ses besoins et ce, d’une façon abordable, rapide et fiable.
                </p>
            </div>
        </div>
    </div>
    </section>


</x-layouts.layout>
