<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gradient-to-r from-[#f53003] to-[#FF4433] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:from-[#FF4433] hover:to-[#FF750F] focus:outline-none focus:ring-2 focus:ring-[#00D4FF] dark:focus:ring-[#9333EA] focus:ring-offset-2 active:from-[#d42902] active:to-[#f53003] transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
