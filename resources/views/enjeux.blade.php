<x-app-layout>
    <h1>Les enjeux des métiers</h1>
    <div x-data="{ openQSE: false, openRIL: false, openRPI: false, openRRH: false, openRISR: false }">
        <div class="flex flex-col md:flex-row justify-center md:justify-around items-center my-4">
            <button class="bg-rqse" @click="openQSE = ! openQSE; openRIL = false; openRPI = false; openRRH = false; openRISR = false;">Qualité Sécurité Environnement</button>
            <button class="bg-ril" @click="openQSE = false; openRIL = ! openRIL; openRPI = false; openRRH = false; openRISR = false;">Ingénierie Logicielle</button>
            <button class="bg-rpi" @click="openQSE = false; openRIL = false; openRPI = ! openRPI; openRRH = false; openRISR = false;">Performance Industrielle</button>
            <button class="bg-rrh" @click="openQSE = false; openRIL = false; openRPI = false; openRRH = ! openRRH; openRISR = false;">Ressources Humaines</button>
            <button class="bg-risr" @click="openQSE = false; openRIL = false; openRPI = false; openRRH = false; openRISR = ! openRISR;">Infrastructure des Systèmes et Réseaux</button>
        </div>
        <div x-show="openQSE">
            <h2>Qualité Sécurité Environnement</h2>
        </div>
        <div x-show="openRIL">
            <h2>Ingénierie Logicielle</h2>
        </div>
        <div x-show="openRPI">
            <h2>Performance Industrielle</h2>
        </div>
        <div x-show="openRRH">
            <h2>Ressources Humaines</h2>
            <div class="grid grid-cols-2 md:grid-cols-3">
                <x-carton-enjeu class="bg-rrh" :img="'https://msquared.com/wp-content/uploads/2017/01/LO_Communication_icon.png'" :title="'Communication RH'" :desc="'Information, interraction et réputation'">
                    <ul><li>RSE</li><li>Marque employeur</li><li>Social Media & Community Management</li></ul>
                </x-carton-enjeu>
                <x-carton-enjeu class="bg-rrh" :img="'https://msquared.com/wp-content/uploads/2017/01/LO_Communication_icon.png'" :title="'Communication RH'" :desc="'Information, interraction et réputation'">
                    <ul><li>RSE</li><li>Marque employeur</li><li>Social Media & Community Management</li></ul>
                </x-carton-enjeu>
                <x-carton-enjeu class="bg-rrh" :img="'https://msquared.com/wp-content/uploads/2017/01/LO_Communication_icon.png'" :title="'Communication RH'" :desc="'Information, interraction et réputation'">
                    <ul><li>RSE</li><li>Marque employeur</li><li>Social Media & Community Management</li></ul>
                </x-carton-enjeu>
            </div>
        </div>
        <div x-show="openRISR">
            <h2>Infrastructure des Systèmes et Réseaux</h2>
        </div>
    </div>
</x-app-layout>