<button
    {{ $attributes->merge(['type' => 'submit','class' =>'tracking-wide px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-400 hover:text-gray-900 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring focus:ring-blue-300 focus:text-white disabled:opacity-25 transition my-4']) }}>
    {{ $slot }}
</button>
