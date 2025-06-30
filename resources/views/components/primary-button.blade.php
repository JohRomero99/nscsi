<button {{ $attributes->merge(['type' => 'submit', 'class' => 'rounded-lg bg-gray-500 hover:bg-gray-400 text-white font-bold py-3 px-4 border-b-4 border-gray-700 hover:border-gray-500 inline-block']) }}>
    {{ $slot }}
</button>
