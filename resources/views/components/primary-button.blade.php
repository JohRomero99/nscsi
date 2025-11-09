<button {{ $attributes->merge(['type' => 'submit', 'class' => 'rounded-lg bg-[#89462a] text-white font-bold py-3 px-4 inline-block']) }}>
    {{ $slot }}
</button>
