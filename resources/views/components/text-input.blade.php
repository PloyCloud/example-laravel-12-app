@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 dark:border-[#3E3E3A] bg-white dark:bg-[#1a1a1a] text-[#1b1b18] dark:text-[#EDEDEC] focus:border-[#00D4FF] dark:focus:border-[#9333EA] focus:ring-[#00D4FF] dark:focus:ring-[#9333EA] rounded-md shadow-sm']) }}>
