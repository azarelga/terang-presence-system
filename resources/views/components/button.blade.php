<button {{ $attributes->class([
    'inline-flex items-center px-4 py-2 rounded-md font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150',
    'bg-gray-800 text-white border border-transparent hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50' => !$attributes->has('secondary'),
    'bg-white text-gray-800 border border-gray-400 hover:bg-gray-300 focus:bg-gray-300 active:bg-gray-400 focus:ring-gray-500' => $attributes->has('secondary'),
])->merge(['type' => 'submit']) }}>
    {{ $slot }}
</button>
