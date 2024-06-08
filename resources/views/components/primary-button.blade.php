<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-rose-800  border border-transparent rounded-full font-semibold text-xs text-white font-abril uppercase tracking-widest hover:bg-rose-300  focus:bg-rose-700  active:bg-rose-900  focus:outline-none focus:ring-2 focus:ring-rose-500 focus:ring-offset-2  transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
