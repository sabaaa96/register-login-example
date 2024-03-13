<div class="p-4 sm:p-6 md:p-8 lg:p-10 xl:p-12 2xl:p-14 bg-gray-50 min-h-screen flex justify-center items-center">
    <form wire:submit="save" class="space-y-8 max-w-4xl mx-auto p-8 border-2 border-gray-200 rounded-lg shadow-lg bg-white">
        <div class="border-b border-gray-200 pb-8">
            <h2 class="text-xl font-semibold leading-7 text-gray-900">Registrieren</h2>
        </div>


        <div class="border-b border-gray-900/10 pb-12">
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6"> 

                <div class="sm:col-span-3">
                    <label for="salutation" class="block text-sm font-medium leading-6 text-gray-900">Anrede</label>
                    <div class="mt-2">
                    <select id="salutation" wire:model="salutation" name="salutation" autocomplete="salutation" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option>Frau</option>
                        <option>Herr</option>
                        <option>Divers</option>
                    </select>
                    </div>
                    <div>@error('salutation') {{ $message }} @enderror</div>
                </div>
                

                    <div class="sm:col-span-3">
                        <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Vorname</label>
                        <div class="mt-2">
                            <input type="text" name="first-name" id="first-name" wire:model="firstname" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                        <div>@error('firstname') {{ $message }} @enderror</div>
                    </div>
                

                <div class="sm:col-span-3">
                    <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Nachname</label>
                    <div class="mt-2">
                        <input type="text" name="last-name" id="last-name" wire:model="lastname" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    <div>@error('lastname') {{ $message }} @enderror</div>
                </div>

                <div class="sm:col-span-2 sm:col-start-1">
                    <label for="birthdate" class="block text-sm font-medium leading-6 text-gray-900">Geburtsdatum</label>
                    <div class="mt-2">
                        <input type="date" id="birthdate" name="birthdate" wire:model="birthdate" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div>@error('birthdate') {{ $message }} @enderror</div>
                </div>

            
                <div class="sm:col-span-2 sm:col-start-1">
                    <label for="street" class="block text-sm font-medium leading-6 text-gray-900">Straße, Hausnummer</label>
                    <div class="mt-2">
                        <input type="text" name="street" id="street" wire:model="street" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    <div>@error('street') {{ $message }} @enderror</div>
                </div>

                <div class="sm:col-span-2">
                    <label for="postalcode" class="block text-sm font-medium leading-6 text-gray-900">PLZ</label>
                    <div class="mt-2">
                        <input type="text" name="postalcode" id="postalcode" wire:model="postalcode" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    <div>@error('postalcode') {{ $message }} @enderror</div>
                </div>

                <div class="sm:col-span-2">
                    <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Ort</label>
                    <div class="mt-2">
                        <input type="text" name="city" id="city" wire:model="city" autocomplete="city" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    <div>@error('city') {{ $message }} @enderror</div>
                </div>

                <div class="sm:col-span-3">
                    <label for="phone-number" class="block text-sm font-medium leading-6 text-gray-900">Telefonnummer</label>
                    <div class="mt-2">
                        <input type="number" name="phone-number" id="phone-number" wire:model="phonenumber" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    <div>@error('phonenumber') {{ $message }} @enderror</div>
                </div>

                <div class="sm:col-span-3">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email-Adresse</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" wire:model="email" autocomplete="email" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    <div>@error('email') {{ $message }} @enderror</div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                    </div>
                    <div class="mt-2">
                    <input id="password" name="password" type="password" wire:model="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    <div>@error('password') {{ $message }} @enderror</div>
                </div>

                <div class="sm:col-span-3">
                    <label for="citizenship" class="block text-sm font-medium leading-6 text-gray-900">Staatsbürgerschaft</label>
                    <div class="mt-2">
                    <select id="citizenship" name="citizenship" wire:model="citizenship" autocomplete="citizenship" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option>Deutschland</option>
                        <option>Italien</option>
                        <option>Spanien</option>
                        <option>Niederland</option>
                        <option>Sonstige</option>
                    </select>
                    </div>
                    <div>@error('citizenship') {{ $message }} @enderror</div>
                </div>
            </div>
        </div>
            <div class="mt-4 flex items-center justify-end gap-x-6">
                <button type="button" class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Abbrechen</button>
                <button type="submit" class="rounded-md bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Registrieren</button>
            </div>
    </form>
</div>
