<x-applayout>
   <form method="POST" action="{{route('report.create')}}">
    @csrf

        <div>
            <x-input-label for="address" :value="__('Адрес')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
            <x-input-label for="contact" :value="__('Контактная информация')" />
            <x-text-input id="contact" class="block mt-1 w-full" type="text" name="contact" :value="old('contact')" required autofocus autocomplete="contact" />
            <x-input-error :messages="$errors->get('contact')" class="mt-2" />
            <x-input-label for="date" :value="__('Дата')" />
            <x-text-input id="date" class="block mt-1 w-full" type="date" name="date" :value="old('date')" required autofocus autocomplete="date" />
            <x-input-error :messages="$errors->get('date')" class="mt-2" />
            <x-input-label for="time" :value="__('Время')" />
            <x-text-input id="time" class="block mt-1 w-full" type="time" name="time" :value="old('time')" required autofocus autocomplete="time" />
            <x-input-error :messages="$errors->get('time')" class="mt-2" />

            <!-- Радио -->

            <x-input-label for="payment" :value="__('Способ оплаты')" />
            <!-- <x-text-input id="payment" class="block mt-1 w-full" type="radio" name="payment" :value="old('По карте')" required autofocus autocomplete="payment" /> <p>По карте</p>
            <x-text-input id="payment" class="block mt-1 w-full" type="radio" name="payment" :value="old('Наличными')" required autofocus autocomplete="payment" /> <p>Наличными</p> -->

            <p>По карте</p>
            <input type="radio" name="payment" value="По карте">
            <p>Наличными</p>
            <input type="radio" name="payment" value="наличными">
            <x-input-error :messages="$errors->get('payment')" class="mt-2" />

            <br>

            <x-primary-button class="ms-3">
                {{ __('Заказать') }}
            </x-primary-button>
        </div>
    </form> 
</x-applayout>